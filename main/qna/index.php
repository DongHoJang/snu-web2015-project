<!DOCTYPE html>
<html>
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/components/header.php" ?>
    <!-- additional header below -->
</head>

<body>

<?php include $_SERVER["DOCUMENT_ROOT"].'/components/navbar.php' ?>
          

  
       <div class="col-md-12">
    <script type="text/javascript" src="http://codeigniter-kr.org/include/js/jquery.post.js"></script>
    <script>
        $(document).ready(function() {
            $("#search_btn").click(function() {
                var sfl_val = $("select[name='sfl'] option:selected").val();
                if ($("#q").val() == '') {
                    alert('검색어를 입력하세요');
                    return false;
                } else {
                    var act = '/news/lists/q/' + $("#q").val() + '/sfl/' + sfl_val;
                    $("#bd_search").attr('action', act);
                    $("#bd_search").submit();
                }
            });
        });

        function board_search_enter() {
            $("input[name='q']").keyup(function(e) {
                if (e.keyCode == 13) $("#search_btn").click();
            });
        }
    </script>
</div>

<!-- 검색 -->
<div class="col-md-6 col-md-offset-3">
    <form id="bd_search" method="post">
        <div class="col-xs-4">
            <select name="sfl" class="form-control">
                <option value="subject">제목</option>
                <option value="contents">내용</option>
                <option value="all">제목+내용</option>
                <option value="user_id">회원아이디</option>
                <option value="user_name">닉네임</option>
            </select>
        </div>
        <div class="col-xs-6">
            <input class="form-control" name="q" id="q" value="" onkeypress="board_search_enter();">
        </div>
        <div class="col-xs-2">
            <button type="button" id="search_btn" class="btn btn-primary">검색</button>
        </div>
    </form>
</div>
</div>

<!-- 검색 -->

<div class="col-md-8 col-md-offset-2">
    <table class="table">
        <colgroup>
            <col width="50" />
            <col />
            <col width="150" />
            <col width="110" />
            <col width="50" />
            <col width="50" />
        </colgroup>
        <thead>
            <tr>
                <th class="text-center">번호</th>
                <th class="text-center">제목</th>
                <th class="text-center hidden-sm">글쓴이</th>
                <th class="text-center">날짜</th>
                <th class="text-center">조회</th>
                <th class="text-center">추천</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">38</td>
                <td><a href="/news/view/38/page/1/" title="바보 바보 아 웹프개 하기 싫다.">
상담글1</a> [5] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/kkh0114','m_send',400,500)">열정페이1</a></td>
                <td class="text-center">2015-01-27</td>
                <td class="text-center">3933</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">20</td>
                <td><a href="/news/view/20/page/1/" title="목은 안 마르지만 우물은 팠습니다.

html을 docx으로 변환한 것입니다. 기본 마진으로 출력하면 215매 나옵니다.
마진 넓히고 출력하시면 될겁니다.

이미지 파일까지 같이 압축했습니다.">상담글2</a> [15] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">열정페이2</a></td>
                <td class="text-center">2011-12-16</td>
                <td class="text-center">21943</td>
                <td class="text-center">4</td>
            </tr>
            <tr>
                <td class="text-center">18</td>
                <td><a href="/news/view/18/page/1/" title="&nbsp;">상담글3</a> [3] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">이건희</a></td>
                <td class="text-center">2011-11-15</td>
                <td class="text-center">25455</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">13</td>
                <td><a href="/news/view/13/page/1/" title="8월 20일자..아래는 바뀐 내용과 버그픽스 내용입니다.">알바가 하고 싶어요.</a> [4] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">스티브 잡스</a></td>
                <td class="text-center">2011-08-22</td>
                <td class="text-center">13324</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">11</td>
                <td><a href="/news/view/11/page/1/" title="일본포럼에서 일본어로 번역한 매뉴얼을 구글번역기로 돌렸습니다.(영어-&gt;한글의 번역률보다 일어-&gt;한글의 번역률이 월등히 뛰어납니다)포럼에서 내용검수(수정후) 2.0.1 한글매뉴얼을 배포할 예정입니다.그전까지는 참고해서 작업하시기 바랍니다.감사합니다...">스타트업</a> [1] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">마크 주커버그</a></td>
                <td class="text-center">2011-04-04</td>
                <td class="text-center">11573</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">10</td>
                <td><a href="/news/view/10/page/1/" title="아래 링크에 포럼 회원님께서 각각 올려주신 1.7.3 -&gt; 2.0.1로 바뀐 점을 탱크님이 수집해주셨습니다.

http://codeigniter-kr.org/source/view/512/page/1">네이버 별로에요</a> [0] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">박재석</a></td>
                <td class="text-center">2011-04-04</td>
                <td class="text-center">12683</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">8</td>
                <td><a href="/news/view/8/page/1/" title="드디어 2.0.0이 정식 릴리즈 되었네요...어이쿠야.. 지난 금요일에 릴리즈되었는데 너무 늦게 알았네요.벨리님의 포스팅으로 알게되었습니다. 캄사합니다.CI 뉴스에 좀더 심혈을 귀울여야겠습니다.상단왼쪽 불타오름을 누르셔도 되고용.. ">상담글4</a> [1] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/kangmin2z','m_send',400,500)">한재흥</a></td>
                <td class="text-center">2011-01-31</td>
                <td class="text-center">14284</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td><a href="/news/view/6/page/1/" title="CodeIgniter 1.7.2 Security PatchA fix has been implemented for a security flaw in CodeIgniter 1.7.2.&nbsp; You may obtain the fix either by ..">기말과제...</a> [1] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">언제하지</a></td>
                <td class="text-center">2010-07-14</td>
                <td class="text-center">13799</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td><a href="/news/view/3/page/1/" title="codeigniter 1.7.2 버전입니다.">노무상담</a> [2] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">황해</a></td>
                <td class="text-center">2010-05-28</td>
                <td class="text-center">8620</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td><a href="/news/view/2/page/1/" title="v1.7.2가 릴리즈되었네요다운로드 :&nbsp;http://codeigniter.com/download.php변경사항 :&nbsp;http://codeigniter.com/user_guide/changelog.htm..">과외도 알바인가요</a> [0] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/jois','m_send',400,500)">과외노예</a></td>
                <td class="text-center">2009-09-12</td>
                <td class="text-center">8374</td>
                <td class="text-center">0</td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td><a href="/news/view/1/page/1/" title="CodeIgniter의 최신 버전은 1.7.1입니다.기존 버전과 바뀐 점은 이곳을 참고하시기 바랍니다.">무료 노무 상담</a> [0] </td>
                <td class="text-center hidden-sm"><a href="javascript:openWindowFrameless('/message/send/blumine','m_send',400,500)">김앤장</a></td>
                <td class="text-center">2009-07-19</td>
                <td class="text-center">7661</td>
                <td class="text-center">0</td>
            </tr>
        </tbody>
    </table>
</div>


<div class="col-md-8 col-md-offset-2 text-right">
    <a href="/news/write/0">
        <button class="btn-u btn-u-sea">글쓰기</button>
    </a>
</div>
<div class="col-md-12 text-center">
    <ul class="pagination">
        <li><a href="http://codeigniter-kr.org/news/lists/page/1" title="Go to the first page" class="first_page">First</a></li>
        <li>
            <a href="http://codeigniter-kr.org/news/lists/page/1" title="Go to the previous page" class="prev_page">
                <</a>
        </li>
        <li class="active"><a href="http://codeigniter-kr.org/news/lists/page/1" title="Go to page 1" class="page class=" active "">1</a></li>
        <li><a href="http://codeigniter-kr.org/news/lists/page/1" title="Go to the next page" class="next_page">></a></li>
        <li><a href="http://codeigniter-kr.org/news/lists/page/1" title="Go to the last page" class="last_page">Last</a></li>
</div>
</div>
<!--/col-md-9 md-margin-bottom-60 -->


<?php include $_SERVER["DOCUMENT_ROOT"].'/components/footer.php' ?>
    
</body>
</html>