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
                <h3>هاكاثون يتنافس فيه المشاركون من مبتكرين ومطورين ومصممين من أصحاب المهارات المتميزة لمدة 72ساعة لتطوير حلول تساهم في تحسين البيئة الجامعية وحلا للمشاكل التي تواجه الطلاب والمنسوبين والمستفيدين من الخدمات للوصول إلى بيئة جامعية نموذجية.</h3>

                <ul class="text-right list-unstyled listP">
                    <h3 class="text-600">سوف تقام السابقة في ثلاث ايام بالشكل الأتي:</h3>
                    <h4 class="tahoma">
                        • 3 أكتوبر 
                        - جلسة تعريفية للمشاركين في الهاكاثون وبداية المسابقة
                        - تستمر المسابقة لمدة يومان و تنتهي الساعة السابعة يوم السبت الموافق 5 أكتوبر.
                    </h4>
                    <h4>
                        • 5 أكتوبر 
                        - تنتهي المسابقة الساعة السابعة.
                        - من الساعة السابعة وحتى الثامنة والنصف ستقام جلسة تحكيمية للفرز الأولي، وسيجرى التحكيم حسب هذه المعايير: 
                        .فكرة المشروع
                        .جودة المشروع
                        .آلية تنفيذ المشروع
                    </h4>
                    <h4>
                        - بعد الفرز الأولي يرشح ١٠ من أصل ٦٠ مشارك يتوجهون لغرفة التحكيم النهائي بتواجدكم و تواجد باقي الحكام، وستتوفر لديكم المعايير والنقاط الممنوحة من قبل لجنة التحكيم الأولية للمتسابقين العشرة.
                    </h4>
                    <h4>
                        - يقوم المتسابقون بعروض سريعة عن برامجهم.
                        <br>
                        - يتم اختيار ٣ فائزين حسب نقاط لجنة التحكيم والعروض، ويقام بعدها تكريم لهم لاختتام الهاكاثون
                    </h4>
                    <br>
                    <span class="text-500 text-danger">حضور اليوم الثاني (4 أوكتوبر ) إختياري لمن يريد العمل في مساحة العمل </span>
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
