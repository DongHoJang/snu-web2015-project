<!DOCTYPE html>
<html>
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/components/header.php" ?>
    <!-- additional header below -->
    <title>퇴직금 계산</title>
    <script type="text/javascript" language="javascript" src="scripts/retire_util.js"></script>
    <link href="/css/retire_chamgo.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include $_SERVER["DOCUMENT_ROOT"].'/components/navbar.php' ?>


    <form name="form1" action="./퇴직금 계산 페이지_files/퇴직금 계산 페이지.html">
    <input type="hidden" name="control">
    <input type="hidden" name="index_value">

    <div class="popup"         align="center"> <!--style="float:center;"-->
        <h1>퇴직금 계산기</h1>
<div class="section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                <h4>퇴직금 사용자는 주 15시간 이상 일한 노동자가 1년 이상 노동을 제공한 뒤 퇴직할 때 14일 이내에 퇴직금을 지급해야 합니다. <br><br>
    -퇴직금 계산법-<br>
    1. 최종 3개월간의 임금: 퇴직 전일로부터 3개월간 받은 임금 = A <br>
    2. 퇴직 전일로부터 1년간 지급된 상여금 * 3/12 = B<br>
    3. 퇴직 전일로 부터 전년도 연차휴가를 사용하지 못해 지급받은 연차휴가수당 * 3 / 12 = C <br>
    4. (A+B+C)/ 퇴직 전 3개월간의 일수 (89~92일) = D<br>
    D는 평균임금이 되며 예를 들어 재직기간 2년 3개월 8일 약(829일) 이라고 하면 퇴직금 = D * 30일 * 829일 / 365<br><br>
    -작성시 주의사항-<br>
    ※ 퇴직일자는 마지막으로 근무한 날의 다음 날짜를 기재합니다.<br>
    ※ 재직일수 중 제외기간이 있는 경우는 [재직일수]를 수정하세요.
    <br><br><br></h4>
                </div>
            </div>
        </div>


       <!-- <div class="content">-->

            <table width="750" height="100" border="0" bgcolor="#DDDDDD" cellpadding="1" cellspacing="1" align="center">
                <tr height="40">
                <th bgcolor="pink"><label for="syear">입사일자</label></th>
                <th bgcolor="pink"><label for="eyear">퇴직일자</label></th>
                <th bgcolor="#99AACC"><label for="termDays">재직일수</label></th>
                </tr>

                <tr>
                <td bgcolor="#FFFFFF" align="center">
                <select name="syear" id="syear" title="입사 연도">
                    <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>                              
                    <option value="2003">2003</option>                              
                    <option value="2002">2002</option>                              
                    <option value="2001">2001</option>                  
                    <option value="2000">2000</option>                              
                    <option value="1999">1999</option>                              
                    <option value="1998">1998</option>                              
                    <option value="1997">1997</option>                              
                    <option value="1996">1996</option>                              
                    <option value="1995">1995</option>                              
                    <option value="1994">1994</option>                              
                    <option value="1993">1993</option>  
                    <option value="1992">1992</option>                              
                    <option value="1991">1991</option>                              
                    <option value="1990">1990</option>                              
                    <option value="1989">1989</option>                  
                    <option value="1988">1988</option>                              
                    <option value="1987">1987</option>                              
                    <option value="1986">1986</option>                              
                    <option value="1985">1985</option>                              
                    <option value="1984">1984</option>                              
                    <option value="1983">1983</option>                              
                    <option value="1982">1982</option>                              
                    <option value="1981">1981</option>  
                    <option value="1980">1980</option>                              
                    <option value="1979">1979</option>                              
                    <option value="1978">1978</option>                              
                    <option value="1977">1977</option>                  
                    <option value="1976">1976</option>                              
                    <option value="1975">1975</option>                              
                    <option value="1974">1974</option>                              
                    <option value="1973">1973</option>                              
                    <option value="1972">1972</option>                      
                    <option value="1971">1971</option>                              
                    <option value="1970">1970</option>                              
                    <option value="1969">1969</option>                      
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                </select>                       
                년 
                <select name="smon" title="입사 월">                           
                    <option value="1">1</option>                                
                    <option value="2">2</option>                                
                    <option value="3">3</option>                                
                    <option value="4">4</option>                    
                    <option value="5">5</option>                                
                    <option value="6">6</option>                                
                    <option value="7">7</option>                                
                    <option value="8">8</option>                                
                    <option value="9">9</option>                                
                    <option value="10">10</option>                              
                    <option value="11">11</option>                              
                    <option value="12">12</option>
                </select> 월
                <select name="sday" title="입사 일">               
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>                                
                    <option value="6">6</option>                                
                    <option value="7">7</option>                            
                    <option value="8">8</option>                                
                    <option value="9">9</option>                                
                    <option value="10">10</option>                              
                    <option value="11">11</option>                              
                    <option value="12">12</option>                              
                    <option value="13">13</option>                              
                    <option value="14">14</option>                              
                    <option value="15">15</option>                              
                    <option value="16">16</option>                              
                    <option value="17">17</option>                              
                    <option value="18">18</option>                              
                    <option value="19">19</option>                              
                    <option value="20">20</option>                              
                    <option value="21">21</option>                              
                    <option value="22">22</option>                              
                    <option value="23">23</option>                              
                    <option value="24">24</option>                              
                    <option value="25">25</option>                              
                    <option value="26">26</option>                              
                    <option value="27">27</option>                              
                    <option value="28">28</option>                              
                    <option value="29">29</option>                              
                    <option value="30">30</option>                              
                    <option value="31">31</option>                  
                </select> 일
    </td>
    <td bgcolor="#FFFFFF" align="center">
                <select name="eyear" id="eyear" title="퇴직 연도">                           
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>                              
                    <option value="2003">2003</option>                              
                    <option value="2002">2002</option>                              
                    <option value="2001">2001</option>                  
                    <option value="2000">2000</option>                              
                    <option value="1999">1999</option>                              
                    <option value="1998">1998</option>                              
                    <option value="1997">1997</option>                              
                    <option value="1996">1996</option>                              
                    <option value="1995">1995</option>                              
                    <option value="1994">1994</option>                              
                    <option value="1993">1993</option>  
                    <option value="1992">1992</option>                              
                    <option value="1991">1991</option>                              
                    <option value="1990">1990</option>                              
                    <option value="1989">1989</option>                  
                    <option value="1988">1988</option>                              
                    <option value="1987">1987</option>                              
                    <option value="1986">1986</option>                              
                    <option value="1985">1985</option>                              
                    <option value="1984">1984</option>                              
                    <option value="1983">1983</option>                              
                    <option value="1982">1982</option>                              
                    <option value="1981">1981</option>  
                    <option value="1980">1980</option>                              
                    <option value="1979">1979</option>                              
                    <option value="1978">1978</option>                              
                    <option value="1977">1977</option>                  
                    <option value="1976">1976</option>                              
                    <option value="1975">1975</option>                              
                    <option value="1974">1974</option>                              
                    <option value="1973">1973</option>                              
                    <option value="1972">1972</option>                      
                    <option value="1971">1971</option>                              
                    <option value="1970">1970</option>                              
                    <option value="1969">1969</option>                      
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                </select>&nbsp;년 
                <select name="emon" title="퇴직 월">                           
                    <option value="1">1</option>                                
                    <option value="2">2</option>                                
                    <option value="3">3</option>                                
                    <option value="4">4</option>                    
                    <option value="5">5</option>                                
                    <option value="6">6</option>                                
                    <option value="7">7</option>                                
                    <option value="8">8</option>                                
                    <option value="9">9</option>                                
                    <option value="10">10</option>                              
                    <option value="11">11</option>                              
                    <option value="12">12</option>  
                </select> 월  
                <select name="eday" title="퇴직 일">               
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>                                
                    <option value="6">6</option>                                
                    <option value="7">7</option>                            
                    <option value="8">8</option>                                
                    <option value="9">9</option>                                
                    <option value="10">10</option>                              
                    <option value="11">11</option>                              
                    <option value="12">12</option>                              
                    <option value="13">13</option>                              
                    <option value="14">14</option>                              
                    <option value="15">15</option>                              
                    <option value="16">16</option>                              
                    <option value="17">17</option>                              
                    <option value="18">18</option>                              
                    <option value="19">19</option>                              
                    <option value="20">20</option>                              
                    <option value="21">21</option>                              
                    <option value="22">22</option>                              
                    <option value="23">23</option>                              
                    <option value="24">24</option>                              
                    <option value="25">25</option>                              
                    <option value="26">26</option>                              
                    <option value="27">27</option>                              
                    <option value="28">28</option>                              
                    <option value="29">29</option>                              
                    <option value="30">30</option>                              
                    <option value="31">31</option>                  
                </select> 일
        </td>
        <td bgcolor="#FFFFFF" align="center">
                <input type="text" name="termDays" id="termDays" size="7" title="재직일수"> 일

                </td>
                </tr>

                </table>
    <br>
                <span class="btn3"><input type="button" value="기간 계산" onclick="javascript:setDate()" onkeypress="javascript:setDate()" title="클릭하면 평균임금계산 기간을 화면에 보여줍니다"></span>
            <span class="btn2"><input type="button" value="임금초기화" onclick="payreset()" onkeypress="payreset()" title="임금을 0으로 초기화합니다"></span>
        <br></br>
        <br></br>
            <table width="750" border="0" bgcolor="#DDDDDD" cellpadding="1" cellspacing="1" align="center">
            <!--<caption>▣ 퇴직전 3개월 임금 총액 계산</caption>-->               
                <tbody><tr height="40">                     
                    <th bgcolor="#99AACC" scope="col" width="200">기간(퇴직 전 3개월)</th>
                    <th bgcolor="#99AACC" scope="col">기간별 일수</th>
                    <th bgcolor="pink" scope="col">기본급</th>
                    <th bgcolor="pink" scope="col">기타수당</th>
                </tr>   
                <tr bgcolor="white" align="center" height="60">                    
                    <td scope="row">
                    <input type="text" name="fymd1" size="10" class="non2" readonly="readonly" title="시작일"><br> 
                    <input type="text" name="tymd1" size="11" class="non2" readonly="readonly" title="종료일">
                    </td>
                    <td class="right"><input type="text" name="cntday1" size="2" title="기간" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" onblur="if(this.value ==&quot;&quot;){ this.value
     =&quot;0&quot;};javascript:sumPay(this)">일</td>
                    <td><input type="text" name="basic1" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;1&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기본급">원</td>
                    <td><input type="text" name="bonus1" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;2&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기타수당">원</td>

                </tr>

                <tr  bgcolor="white" align="center" height="60">                    
                    <td scope="row">
                    <input type="text" name="fymd2" size="10" class="non2" readonly="readonly" title="시작일"> <br>
                    <input type="text" name="tymd2" size="11" class="non2" readonly="readonly" title="종료일">
                    </td>
                    <td class="right"><input type="text" name="cntday2" size="2" title="기간" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" onblur="if(this.value ==&quot;&quot;){ this.value
     =&quot;0&quot;};javascript:sumPay(this)">일</td>
                    <td><input type="text" name="basic2" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;3&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기본급">원</td>
                    <td><input type="text" name="bonus2" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;4&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기타수당">원</td>

                </tr>

                <tr bgcolor="white" align="center" height="60">                    
                    <td scope="row"><input type="text" name="fymd3" size="10" class="non2" readonly="readonly" title="시작일"> <br>
                    <input type="text" name="tymd3" size="11" class="non2" readonly="readonly" title="종료일">
                    </td>
                    <td class="right"><input type="text" name="cntday3" size="2" title="기간" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" onblur="if(this.value ==&quot;&quot;){ this.value
     =&quot;0&quot;};javascript:sumPay(this)">일</td>
                    <td><input type="text" name="basic3" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;5&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기본급">원</td>
                    <td><input type="text" name="bonus3" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;6&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기타수당">원</td>

                </tr>

                <tr bgcolor="white" align="center" height="60">                    
                    <td scope="row"><input type="text" name="fymd4" size="10" class="non2" readonly="readonly" title="시작일"><br>
                    <input type="text" name="tymd4" size="11" class="non2" readonly="readonly" title="종료일">
                    </td>
                    <td class="right"><input type="text" name="cntday4" size="2" title="기간" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" onblur="if(this.value ==&quot;&quot;){ this.value
     =&quot;0&quot;};javascript:sumPay(this)">일</td>
                    <td><input type="text" name="basic4" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;7&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기본급">원</td>
                    <td><input type="text" name="bonus4" size="8" value="0" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;};javascript:sumPay(this)" onkeyup="checkThousand(this.value, &#39;8&#39;,&#39;Y&#39;)" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="기타수당">원</td>

                </tr>

                <tr class="end" align="center" height="60">                    
                    <th bgcolor="#99AACC" scope="row"><label for="sumday">합계</label></th>
                    <td bgcolor="white" class="right"><input type="text" name="sumday" id="sumday" size="2" class="non2" readonly="readonly">일</td>
                    <td bgcolor="white"><input type="text" name="sumbasic" size="8" class="non2" readonly="readonly" title="기본급합계">원</td>
                    <td bgcolor="white"><input type="text" name="sumbonus" size="8" class="non2" readonly="readonly" title="기타수당합계">원</td>
                </tr>


    <tr height="40"><td colspan="4" align="center">※ 기간별 일수는 제외하여야 할 날이 있을 경우 수정 가능합니다.</td></tr>
            <tr height="60"><th bgcolor="pink">연간상여금 총액 :</th>
                <td bgcolor="white" align="center"><input type="text" name="annualBonus" size="8" value="0" onkeyup="checkThousand(this.value, &#39;9&#39;,&#39;Y&#39;)" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;}" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="연간상여금총액">원</td>

                <th bgcolor="pink">연차수당 : </th>
                <td bgcolor="white" align="center"><input type="text" name="vacaBunus" size="8" value="0" onkeyup="checkThousand(this.value, &#39;10&#39;,&#39;Y&#39;)" onkeydown="fn_onKeyOnlyNumber()" onblur="if(this.value ==&quot;&quot;){ this.value =&quot;0&quot;}" onfocus="if(this.value == &quot;0&quot;){this.value=&quot;&quot;;}" title="연차수당">원</td>
            </tr>
            <tr height="60">
                <th bgcolor="#99AACC">1일 평균임금 : </th>
                <td bgcolor="white" align="center"><input type="text" name="avrPay" size="10" onkeydown="fn_onKeyOnlyNumber()" onkeyup="checkThousand(this.value, &#39;11&#39;,&#39;Y&#39;)" title="1일 평균임금">원
                <span class="btn1"><input type="button" value="평균임금계산" onclick="javascript:avrPayCal()" onkeypress="javascript:avrPayCal()" title="클릭하면 평균임금계산 결과를 보여줍니다"></span></td>                
                <th bgcolor="pink"><span title="
            1일 통상임금이 1일 평균임금보다 클 경우
    1일 통상임금을 기준으로 퇴직금이 계산됩니다.">1일 통상임금※ : </span></th>
                <td bgcolor="white" align="center"><input type="text" name="comPay" size="10" onkeydown="fn_onKeyOnlyNumber()" onkeyup="checkThousand(this.value, &#39;12&#39;,&#39;Y&#39;)" title="1일 통상임금">원</td>
    </tr>
    <tr height="60">            
                <th bgcolor="#99AACC" colspan="2">퇴직금 : </th>
                <td bgcolor="white" align="center" colspan="2">
                <input type="text" name="retirePay" size="15" style="text-align: right" readonly="readonly" title="퇴직금">원
                <span class="btn1">
                <input type="button" value="퇴직금계산" onclick="javascript:calRet()" onkeypress="javascript:calRet()" title="클릭하면 퇴직금계산 결과를 보여줍니다"></span></td>
                </tr>
                </tbody>
                </table>
                <br>
                <span class="btn1"><input type="button" value="엑셀로 결과보기" onclick="javascript:view_excel()" onkeypress="javascript:view_excel()" title="클릭하면 결과를 엑셀 파일로 볼 수 있습니다"></span>    
                <span class="btn1"><a href="./retire_example.html"> <input type="button" value="예시 보기"></a> </span>


    <br>
    <span class="btn1">
               <input type="image" value="" title="" alt="" style="display:none;"></span>
    </form>



<?php include $_SERVER["DOCUMENT_ROOT"].'/components/footer.php' ?>
    
</body>
</html>