<html lang="ar">
<head>
    @include("layouts.masterHead")
    <link href="./css/group.css" rel="stylesheet" type="text/css">
    <meta name="description" content="إختيار مجموعة للإنضمام إليها">
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>تسجيل الأفراد</h2>
            <p class="lead">المرحلة الثانية: إختيار مجموعة للإنضمام إليها</p>
            <hr/>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="widget-box">
                    <div class="widget-body">
                        <div class="widget-main">
                            <div class="tickets-container">
                                <ul class="tickets-list">
                                    <li class="ticket-item">
                                        <div class="row">
                                            <div class="ticket-user col-lg-6 col-md-6 col-sm-6">
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" class="user-avatar">
                                                <span class="user-name">أدم</span>
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" class="user-avatar">
                                                <span class="user-name">سمير</span>
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" class="user-avatar">
                                                <span class="user-name">مديحة</span>
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" class="user-avatar">
                                                <span class="user-name">نزيم</span>
                                                {{-- <img src="https://bootdey.com/img/Content/user_2.jpg" class="user-avatar">
                                                <span class="user-name">خلد</span> --}}
                                            </div>
                                            <div class="ticket-time  col-md-4 col-sm-4">
                                                <div class="divider hidden-xs"></div>
                                                <span class="time">4/5</span>
                                            </div>
                                            <div class="ticket-type  col-md-2 col-sm-2">
                                                <span class="divider hidden-xs"></span>
                                                <a href="#" class="btn btn-primary"> إنضم </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    @include('layouts.masterJS')
    
</body>
</html>