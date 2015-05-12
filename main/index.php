<!DOCTYPE html>
<head>
    
    <?php include $_SERVER["DOCUMENT_ROOT"]."/components/header.php" ?>
    <!-- additional header below -->
    
    <link rel="stylesheet" href="/css/homemenu.css">

</head>

<body>

<?php include $_SERVER["DOCUMENT_ROOT"].'/components/navbar.php' ?>


    <div class="section">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            
            <div class="row">
                <div class="col-md-2"></div>
                <a href="/rights">
                <div class="col-md-4">
                    <img src="resources/test.jpg" class="img-responsive">
                    <h3>알바권리장전</h3>
                </div>
                </a>
                <a href="/attendance">
                <div class="col-md-4">
                    <img src="resources/test.jpg" class="img-responsive">
                    <h3>출근부</h3>
                </div>
                </a>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <a href="/qna">
                <div class="col-md-4">
                    <img src="resources/test.jpg" class="img-responsive">
                    <h3>상담 게시판</h3>
                </div>
                </a>
                <a href="/faq">
                <div class="col-md-4">
                    <img src="resources/test.jpg" class="img-responsive">
                    <h3>FAQ</h3>
                </div>
                </a>
            </div>
        </div>
    </div>


<?php include $_SERVER["DOCUMENT_ROOT"].'/components/footer.php' ?>
    
</body>
</html>