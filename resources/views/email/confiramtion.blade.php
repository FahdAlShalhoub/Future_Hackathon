<!DOCTYPE html>
<html lang="ar">

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>
    <div>
        <div style="text-align: center;">
            <img style="max-width:100%; max-height:400px" src="http://www.futurehackathon.net/img/FHnoBg.png">
        </div>
        @if($type == 'group')
        <div style="text-align: center;">
            <h1 style="color:darkslateblue;"> {{$info->leadName}}</h1>
            <h1 style="margin-bottom: 0px">يسعدنا ابلاغكم بأنه تم قبول فريقكم</h1>
            <h1 style="color:darkslateblue; margin:0px;">{{$info->groupName}}</h1>
            <h1 style="margin-top: 0px">لدخول هاكاثون المستقبل</h1>
            <h2> : نرجوا تأكيد حضوركم بالضغط على الرابط </h2>
            <a href="{{$url}}">{{$url}}</a> 
        </div>
        @else
        <div style="text-align:center;">
            <h1 style="color:darkslateblue"> {{$info[0]->name}}</h1>
            <h1>   
                يسعدنا ابلاغك/ي بأنه تم قبولكم لدخول هاكاثون المستقبل   
                <br>     
                و انه سيتم ادراجكم ضمن فريق الآتي
            </h1>
            <table style="align-content: center;">
                <thead>
                    <td> الأسم </td>
                    <td> البريد الألكتروني </td>
                </thead>
                @foreach($info as $member)
                <tr>
                    <td>
                        {{$member->name}}
                    </td>
                    <td>
                        {{$member->email}}
                    </td>
                </tr>
                @endforeach
            </table>
            <h2>: نرجوا تأكيد حضورك/ي بالضغط على الرابط </h2>
            <a href="{{$url}}">{{$url}}</a>
        </div>
        @endif 
    </div>
</body>



</html>