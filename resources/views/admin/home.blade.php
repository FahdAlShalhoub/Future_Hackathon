@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active">Status:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('home')}}>All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('pullGroups','new')}}>New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('pullGroups','accepted')}}>Accepted</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{route('pullGroups','rejected')}}>Rejected</a>
                </li>
            </ul> 
            <div class="card">
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>Group ID</th>
                               <th>Group Name</th>
                               <th>Group Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($groups as $group)
                           <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->groupName}}</td>
                                <td class="@if($group->status === 'rejected') text-danger  @elseif($group->status === 'accepted') text-success @endif">{{$group->status}}</td>
                                <td><a class="btn btn-primary" href="{{route('showGroup',$group->id)}}">View Group</a></td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

