<!DOCTYPE html>
<html lang="ar">

<head>
    <title>تسجيل المجموعات</title>

    @include('layouts.masterHead')
    <link href="./css/singularForm.css" rel="stylesheet" type="text/css">
    <link href="./css/checklist.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">
   @include('layouts.navbar')

    <div class="container p22">
        <form role="form" method="post" action="/group">
        @csrf
            <div class="row container">
                <h2>تسجيل المجموعات</h2>
                <p class="lead">المرحلة أولى: ادخل المعلومات الأتية</p>
                <hr />
                <div class="row container">
                    <div class="col-sm-8">
                        <h4 class="page-header">معلومات المجموعة</h4>

                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="name" class="form-control" name="leadName" placeholder="اسم قائد المجموعة" required>
                        </div>
                            <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="name" class="form-control" name="leadUniID" placeholder="الرقم الجامعي لقائد المجموعة (اختياري)">
                        </div>
                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="email" class="form-control" name="leadEmail" placeholder="البريد الإلكتروني لقائد المجموعة" required>
                        </div>
                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="name" class="form-control" name="groupName" placeholder="اسم المجموعة" required>
                        </div>

                        <h3 class="page-header">معلومات أعضاء المجموعة</h3>
                        <div id="members">
                            <h4 class="page-header">عضو 2 <small>(عضو 1 هو قائد المجموعة)</small></h4>

                            <div class="form-group float-label-control">
                                <label for=""></label>
                                <input type="name" name="memberName[]" class="form-control" placeholder="الاسم" required>

                            </div>
                            <div class="form-group float-label-control">
                                <label for=""></label>
                                <input type="name" name="memberID[]" class="form-control" placeholder="الرقم الجامعي (اختياري)">
                            </div>

                            <h4 class="page-header">عضو 3</h4>

                            <div class="form-group float-label-control">
                                <label for=""></label>
                                <input type="name" class="form-control"  name="memberName[]" placeholder="الاسم" required>

                            </div>
                            <div class="form-group float-label-control">
                                <label for=""></label>
                                <input type="name" class="form-control"  name="memberID[]" placeholder="الرقم الجامعي (اختياري)">
                            </div>

                        </div>

                    <div class="form-group">
                        <input type="button" id="add" class="btn btn-lg btn-success  mb-2"
                            value="إضافة عضو">
                    </div>
                        <br>



                        <label class="customcheck">الموافقة على الشروط والأحكام
                            <input type="checkbox" required>
                            <span class="checkmark"></span>
                        </label>
                        <br>


                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    الشروط و الأحكام
                                </h3>
                            </div>
                            <div class="panel-body">
                                <ol>
                                    <li>الشرط الأول</li>
                                    <li>الشرط الثاني</li>
                                    <li>الشرط الثالث</li>
                                    <li>الشرط الرابع</li>
                                </ol>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row container">
                    <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-primary pull-left mb-2"
                            value="إتمام التسجيل">
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.masterJS')
    <script src="./js/singularForm.js"></script>
    <script>
    var number = 4;
    $( "#add" ).click(function() {
        if(number>5){
            alert('عدد أعضاء المجموعة مع قائدهم لا يُمكن أن يزيد عن 5');
        }else{
    var newElement = '<div id="member'+number+'"><button type="button" onClick="a('+number+')" class="close" aria-label="Close"><span aria-hidden="true" style="color:red;">إزالة</span></button><h4 class="page-header">عضو '+number+'</h4><div class="form-group float-label-control"><label for="">الاسم</label><input type="name"  name="memberName[]" class="form-control" placeholder="الاسم" required></div><div class="form-group float-label-control"><label for="">الرقم الجامعي (اختياري)</label><input type="name"  name="memberID[]" class="form-control" placeholder="الرقم الجامعي (اختياري)"></div></div>';
    $( "#members" ).append( $(newElement) );
    number++;
        }

    });
    
    function a(a){
        if(number<4){
                        alert('عدد أعضاء المجموعة لا يُمكن أن يقل عن 3');
        }else{

        $('#member'+a).remove();
        number--;
        }
    }
    </script>
</body>


</html>