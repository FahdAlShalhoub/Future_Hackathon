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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
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
                                    <li>جميع حقوق الملكية الفكرية و مسؤولية أصالة الفكرة تعود للمتسابق و لا تتحمل الجهة المنظمة
                                        خلاف ذلك. </li>
                                    <li>في حال عدم القدرة للحضور للمسابقة يجب إبلاغ الجهة المنظمة بذلك خلال مدة لا تقل عن 48 ساعة من بداية الحدث.</li>
                                    <li>يلتزم المشارك بالمحافظة على الممتلكات العامة ونظافة مساحة العمل.</li>
                                    <li>يلتزم المشارك بأخلاقيات العمل الجماعي و احترام أعضاء الفريق</li>
                                    <li>يلتزم المشارك باتباع إرشادات المنظمين في الفعالية</li>
                                    <li>جميع المشاركات في المسابقة جماعية على أن تكون المجموعات مكونة من ٢-٤ أشخاص كحد أقصى.</li>
                                    <li>يتوجب على فريق العمل التواجد أثناء الحفل الختامي للفعالية</li>
                                    <li>أولوية القبول للمسجلين مبكرا</li>
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
    var number = 2;
    $( "#add" ).click(function() {
        if(number>3){
            alert('عدد أعضاء المجموعة مع قائدهم لا يُمكن أن يزيد عن 4');
        }else{
    var newElement = '<div id="member'+(number+1)+'"><button type="button" onClick="a('+(number+1)+')" class="close" aria-label="Close"><span aria-hidden="true" style="color:red;">إزالة</span></button><h4 class="page-header">عضو '+(number+1)+'</h4><div class="form-group float-label-control"><label for="">الاسم</label><input type="name"  name="memberName[]" class="form-control" placeholder="الاسم" required></div></div>';
    $( "#members" ).append( $(newElement) );
        number++;
        }

    });
    
    function a(a){
        if(number<3){
            alert('عدد أعضاء المجموعة لا يُمكن أن يقل عن 2');
        }else{

        $('#member'+a).remove();
        number--;
        }
    }
    </script>
</body>


</html>