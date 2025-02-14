<!DOCTYPE html>
<html lang="ar">

<head>
    <title>تسجيل الأفراد</title>
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

        <form role="form" method="post" action="/form">
        @csrf
            <div class="row container">
                <h2>تسجيل الأفراد</h2>
                <p class="lead">ادخل معلوماتك الأتية</p>
                <hr/>
                <div class="row container">
                    <div class="col-sm-8">
                        <h4 class="page-header">المعلومات الشخصية</h4>

                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="name" name="name" class="form-control" placeholder="الإسم الثلاثي" required>
                        </div>
                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="email" class="form-control" name="email"  placeholder="البريد الإلكتروني" required>
                        </div>
                        <div class="form-group float-label-control">
                            <label for=""></label>
                            <input type="name" class="form-control" name="major" placeholder="التخصص" required>
                        </div>
                        <div class="form-group float-label-control">
                            <select class="form-control" name="gender"  required>
                                <option value="" disabled selected>الجنس</option>
                                <option value="male">ذكر</option>
                                <option value="female">أنثى</option>
                            </select>
                        </div>
                
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
                        <input type="submit" class="btn btn-lg btn-primary pull-left mb-2" value="إتمام التسجيل">
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('layouts.masterJS')
    <script src="./js/singularForm.js"></script>
</body>


</html>