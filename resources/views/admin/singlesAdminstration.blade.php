@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Status</th>
                               <th>Confirmed</th>
                               <th>Attended</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                                <td class="@if($single->confirmed == 'yes') text-success @else text-danger @endif">{{$single->confirmed}}</td>
                                <td class="@if($single->attended === 'yes') text-success @endif">{{$single->attended}}</td>
                                <td><a class="btn btn-success" href="{{route('attendedSingle',$single->id)}}">Attend</a></td>
                                <td><a class="btn btn-danger" href="{{route('absentSingle',$single->id)}}">Left</a></td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-4" href={{route('makeSinglesGroup')}}>Make a Group Manualy</a>
                    <form method="POST" action={{route('makeRandomSinglesGroups')}}>
                        @method('patch') @csrf
                        <button type="submit" class="btn btn-warning col-4">Make Groups Automatically</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection