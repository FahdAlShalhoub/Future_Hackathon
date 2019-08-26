<!DOCTYPE html>
<html lang="ar">

<head>
    <title>فعالية Future Hackathon</title>
    @include('layouts.masterHead')
</head>

<body id="page-top">


<header>
    <div class="header-content">
        <div class="header-content-inner text-center">  
            <img class="img-responsive" src="img/FHnoBgWhite.png">
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <h2 class="col-lg-6 " id="eventStartHeader">بدأ الفعالية</h2>
                    <h2 class="col-lg-6" id="eventStartCountDown"></h2> 
                </div>
                <div class="row">
                    <h2 class="col-lg-6" id="registrationDeadlineHeader">نهاية التسجيل</h2>
                    <h2 class="col-lg-6" id="registrationDeadLine"></h2>
                </div>
            </div>
        </div>
        <a href="#about" class="btn btn-default btn-lg page-scroll">تعرف على الفعالية</a>
    </div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h1 class="section-heading" id="about">هاكاثون المستقبل</h1>
                <hr class="primary">
                <h3>    هاكاثون المستقبل هو عبارة عن ملاذ الامة العربية للعودة للحكم العباسي      </h3>

                <ul class="text-right list-unstyled listP">
                        <h3 class="text-600">المسابقة راح تكون كالتالي:</h3>
                    <h4 class="tahoma">
                    <li>كذا </li>
                    <li>ثم كذا</li>
                    <li>الخ الخ</li>
                    </h4>
                </ul>
            </div>
            
        </div>
       
    </div>

    <div class="text-center buttonAnchor">
        <a href="#reg" class="btn btn-primary btn-lg page-scroll">انتقل للتسجيل</a>
    </div>
</section>

<div id="reg">
    
<aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="/group" style="margin-bottom: 10px;" class="btn btn-primary btn-lg col-lg-5 sr-button"><i class="fa fa-users"></i> تـسجيل المجموعات</a>
                <a href="/form" style="margin-bottom: 10px;" class="btn btn-primary btn-lg col-lg-5 col-lg-offset-2 sr-button"> <i class="fa fa-user"></i> تسجيل الأفراد</a>
            </div>
        </div>
</aside>
</div>



@include('layouts.masterJS')

<script src="js/countdown.js"></script>
</body>

</html>
