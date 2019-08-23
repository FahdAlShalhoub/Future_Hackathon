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
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection