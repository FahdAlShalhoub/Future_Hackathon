@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <span>Group ID: <label class="text-primary">{{$group->id}}</label></span>
            <span class="ml-2">Group Name: <label class="text-primary">{{$group->groupName}}</label></span>
            <span class="ml-2">Status: <label class="@if($group->status === 'rejected') text-danger  @elseif($group->status === 'accepted') text-success @endif">{{$group->status}}</label></span>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-left">Leader: {{$group->leadName}}</span>
                    <span class="float-right">Leader Email: {{$group->leadEmail}}</span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Member Name</th>
                                <th>Member UNI ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($group->members() as $memberName=>$memberID)
                            <tr>
                                <td>{{$memberName}}</td>
                                <td>{{$memberID}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        @if($group->status !='accepted')<a class="btn btn-success col-3 mr-1" href={{route('acceptGroup', $group->id)}}>Accept Group</a>@endif
        @if($group->status !='rejected')<a class="btn btn-danger col-3"  href={{route('rejectGroup', $group->id)}}>Reject Group</a>@endif
    </div>
</div>

    @endsection

    @section('specialJS')
    <script>
    // function rejectGroup()
    // {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.open('GET',''+'?id='+{{$group->id}},false);
    //     xhttp.send(); 
    // }

    // function acceptGroup()
    // {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.open('GET','',id='+{{$group->id}},false);
    //     xhttp.send(); 
    // }
    </script>
    @endsection