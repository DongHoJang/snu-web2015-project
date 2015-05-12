/** =============================================
Return : String (YYYYMMDD)
Comment: 현재년도를 구한다 (문자:YYYYMMDD)
Usage  :
---------------------------------------------- */
function fn_getDateNowYear()
{
    var dNow = new Date();
    var yyyy = "";
   
    yyyy = dNow.getYear();
    
    yyyy = fn_setFillzeroByVal( yyyy, 4 );
    return yyyy ;
}

/** =============================================
Return : String
Comment: sVal의 길이를 iLen으로 "0"으로 채워 맞춘 값을 리턴
Usage  :
---------------------------------------------- */
function fn_setFillzeroByVal( sVal, iVal )
{
    sStr = sVal + "";

    for (ii = sStr.length; ii < iVal; ii++) {
        sStr =  "0" + sStr;
    }

    return sStr;
}
//===============================================

//===============================================

// event.shiftKey : 키코드값
// event.shiftKey, event.altKey, event.ctrlKey : boolean
// event.srcElement : 이벤트가 발생된 객체
// 8: BackSpace, 46: Del
// ","=44, "-"=45, "."=46, "/"=47
// "0"=48, "9"=57
//"." = 190
// "@"=64, "A"=65, "Z"=90, "a"=97, "z"=122
// 37:LeftArrow, 38:UpArrow, 39:RightArrow, 40:DownArrow **
/** =============================================
Return : event.returnValue = boolean
Comment: 키입력시 숫자만 입력 받게 한다.
Usage  : onKeyDown="fn_onKeyOnlyNumber();"
---------------------------------------------- */
function fn_onKeyOnlyNumber()
{
    var sValid = "0123456789";

    var sValue = event.srcElement.value;
          sValue = sValue.replace(/,/gi,"");
    var iKey = event.keyCode;
    var isShift = event.shiftKey;
    var isMove = false;
    var isCut  = false
    var isTrue = true;

    event.srcElement.style.imeMode = "inactive"; //style.imeMode(active:한글, inactive:영문) 그러나, 동적으로는 반영 안된다. (html tag의 style="IME-MODE:inactive;" 로 지정하여야만..)

    var sReturnValue = "";
    for (var ii=0; ii < sValue.length; ii++) {
        if (sValid.indexOf(sValue.substring(ii, ii+1)) >= 0) {
            sReturnValue = sReturnValue + sValue.substring(ii, ii+1);
        }
    }
    if ( (iKey == 37 || iKey == 38 || iKey == 39 || iKey == 40) ||
         (iKey == 13 || iKey == 8  || iKey == 46 || iKey == 9  || iKey == 16  || isShift) || (iKey >= 48 && iKey <= 57) || (iKey >= 95 && iKey <= 105)) {
        for (var ii=0; ii < sValue.length; ii++) {
            if (sValid.indexOf(sValue.substring(ii, ii+1)) < 0) {
                event.returnValue = false;
                isCut  = true;
                isTrue = false;
                break;
            }
        }
    } else {
        event.returnValue = false;
        isTrue = false;
    }

    if (isCut || isTrue == false)
        event.srcElement.value = sReturnValue;

    if (iKey == 13) {
        event.keyCode = 0;
        return sReturnValue;
    } else {
        return sReturnValue;
    }
}
//===============================================

/** =============================================
Return : boolean
Comment: 날짜 유효성 체크(분리된 yyyy, mm, dd 값)
Usage  :
---------------------------------------------- */
function fn_isYearMonthDay(yyyy, mm, dd)
{
    var revalue  = 1;

    var iMaxDay = fn_MaxdayYearMonth(yyyy, mm);    

    if ( yyyy == "" && mm == "" && dd == "" ) {
        isTrue = true;
    } else {
        if(yyyy < 1901 || yyyy > 9999) revalue=1;
		else if(mm <0 || mm >12 ) revalue=2;
		else if(dd <0 || dd > iMaxDay) revalue =3;
		else revalue =0;
    }

    return revalue;
}

/** =============================================
Return : int (해당 년,월의 날수)
Comment: 입력받은 년,월의 최대 일을 구한다.
Usage  :
---------------------------------------------- */
function fn_MaxdayYearMonth(yyyy, mm)
{
    var monthDD = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

    var iMaxDay = 0;

    if ( fn_isLeafYear(yyyy) ) {
        monthDD[1] = 29;
    }
    iMaxDay = monthDD[mm - 1];

    return iMaxDay;
}

/** =============================================
Return : boolean
Comment: 입력받은 년도가 윤년이면 true
Usage  :
---------------------------------------------- */
function fn_isLeafYear(YYYY)
{
    if ( ( (YYYY%4 == 0) && (YYYY%100 != 0) ) || (YYYY%400 == 0) ) {
        return true;
    }
    return false;
}
//===============================================

														//keydown
function checkThousand(inputVal, type, keydown) {		// inputVal은 천단위에 , 표시를 위해 가져오는 값
		main = document.form1;			// 여기서 type 은 해당하는 값을 넣기 위한 위치지정 index
		var chk		= 0;				// chk 는 천단위로 나눌 길이를 check
		var share	= 0;				// share 200,000 와 같이 3의 배수일 때를 구분하기 위한 변수
		var start	= 0;
		var triple	= 0;				// triple 3, 6, 9 등 3의 배수 
		var end		= 0;				// start, end substring 범위를 위한 변수  
		var total	= "";			
		var input	= "";				// total 임의로 string 들을 규합하기 위한 변수
		if (inputVal.length > 3){
			input = delCom(inputVal, inputVal.length);
/*			for(i=0; i<inputVal.length; i++){
				if(inputVal.substring(i,i+1)!=','){		// 먼저 substring을 위해
					input += inputVal.substring(i,i+1);	// 값의 모든 , 를 제거
				}
			}*/
			chk = (input.length)/3;					// input 값을 3의로 나눈 값 계산
			chk = Math.floor(chk);					// 그 값보다 작거나 같은 값 중 최대의 정수 계산
			share = (input.length)%3;				// 200,000 와 같은 3의 배수인 수를 걸러내기 위해 나머지 계산
			if (share == 0 ) {						
				chk = chk - 1;					// 길이가 3의 배수인 수를 위해 chk 값을 하나 뺀다.
			}
			for(i=chk; i>0; i--){
				triple = i * 3;					// 3의 배수 계산 9,6,3 등과 같은 순으로
				end = Number(input.length)-Number(triple);	// 이 때의 end 값은 점차 늘어 나게 된다.
				total += input.substring(start,end)+",";	// total은 앞에서 부터 차례로 붙인다.
				start = end;					// end 값은 다음번의 start 값으로 들어간다.
			}
			total +=input.substring(start,input.length);		// 최종적으로 마지막 3자리 수를 뒤에 붙힌다.
		} else {
			total = inputVal;					// 3의 배수가 되기 이전에는 값이 그대로 유지된다.
		}


		if(keydown =='Y'){
			if ( type =='1' ) {
				main.basic1.value=total;					// type 에 따라 최종값을 넣어 준다.
			}
			if ( type =='2' ) {
				main.bonus1.value=total;					
			}
			if ( type =='3' ) {
				main.basic2.value=total;					
			}
			if ( type =='4' ) {
				main.bonus2.value=total;					
			}
			if ( type =='5' ) {
				main.basic3.value=total;					
			}
			if ( type =='6' ) {
				main.bonus3.value=total;					
			}
			if ( type =='7' ) {
				main.basic4.value=total;					
			}
			if ( type =='8' ) {
				main.bonus4.value=total;					
			}			
			if ( type =='9' ) {
				main.annualBonus.value=total;					
			}
			if ( type =='10' ) {
				main.vacaBunus.value=total;				
			}
			if ( type =='11' ) {
				main.avrPay.value=total;				
			}
			if ( type =='12' ) {
				main.comPay.value=total;				
			}
		}else if(keydown =='N'){
			return total
		}

		return total
	}



function delCom(inputVal, count){
		var tmp = "";
		for(i=0; i<count; i++){
			if(inputVal.substring(i,i+1)!=','){		// 먼저 substring을 위해
				tmp += inputVal.substring(i,i+1);	// 값의 모든 , 를 제거
			}
		}
		return tmp;
	}


function roundGo(gap) { 
   if (gap.indexOf(".") == -1) { // 양수(정수)
     return gap;
   } else { // 실수
     var lastSu;
    var suArr = gap.split(".");
    var tmp   = suArr[1].substr(0,3);
  
      if (parseInt(tmp.length) >= 3) {
         if (parseInt(suArr[1].charAt(2)) >= 5) {
            //lastSu = suArr[0] + "." + suArr[1].substr(0,1) + (parseInt(suArr[1].charAt(1)) +1);
			lastSu = eval(eval(suArr[0] + "." + suArr[1].substr(0,2)) + 0.01);
         } else {
           lastSu = suArr[0] + "." + suArr[1].substr(0,2);
         }
      } else {
          lastSu = suArr[0] + "." + suArr[1];
      }
   }
         return lastSu;
  }


function myRound(num, pos) 
{ 
	var posV = Math.pow(10, (pos ? pos : 2));
	return Math.round(num*posV)/posV;
}