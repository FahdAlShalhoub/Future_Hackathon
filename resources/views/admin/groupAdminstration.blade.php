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
                                <th>Member Number</th>
                                <th>Member Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($group->members() as $memberNumber=>$memberName)
                            <tr>
                                <td>{{$memberNumber}}</td>
                                <td>{{$memberName}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        @if($group->status !='accepted')
        <form method="POST" action={{route('acceptGroup', $group->id)}}>
            @method('patch') @csrf
            <button type="submit" class="btn btn-success btn-md mr-1">Accept Group</button>
        </form>
        @endif
        @if($group->status !='rejected')
        <form method="POST" action={{route('rejectGroup', $group->id)}}>
            @method('patch') @csrf
            <button type="submit" class="btn btn-danger btn-md" >Reject Group</button>
        </form>
        @endif
    </div>
</div>

@endsection