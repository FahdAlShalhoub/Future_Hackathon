@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($members as $groupID => $groupMembers)
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="inTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Group ID</th>
                                <th>Name</th>
                                <th>Email</th> 
                                <th>Status</th>
                                <th>Confirmed</th>
                                <th>Attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groupMembers as $member)
                                <tr>
                                    <td>{{$member->id}}</td>
                                    <td>{{$member->groupID}}</td>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->email}}</td>
                                    <td class="@if($member->status === 'rejected') text-danger  @elseif($member->status === 'accepted') text-success @endif">{{$member->status}}</td>
                                    <td class="@if($member->confirmed == 'yes') text-success @else text-danger @endif">{{$member->confirmed}}</td>
                                    <td class="@if($member->attended === 'yes') text-success @endif">{{$member->attended}}</td>
                                    <td><a class="btn btn-success" href="{{route('attendedSingle',$member->id)}}">Attend</a></td>
                                    <td><a class="btn btn-danger" href="{{route('absentSingle',$member->id)}}">Left</a></td>
                                    <td>
                                        <form method="POST" action="{{route('rejectSingle', $member->id)}}">
                                            @csrf @method('patch')
                                            <button class="btn btn-danger" type="submit">Reject</button>
                                         </form>
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection