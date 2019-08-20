@extends('layouts.app')

@section('content')
<div class="container">
    @for($i=0;$i<$groupCount;$i++)
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="inTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Traits</th>
                                <th>Email</th>
                                <th>Uni ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->traits}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->uniID}}</td>
                                 <td class="@if($member->status === 'rejected') text-danger  @elseif($member->status === 'accepted') text-success @endif">{{$member->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
@endsection