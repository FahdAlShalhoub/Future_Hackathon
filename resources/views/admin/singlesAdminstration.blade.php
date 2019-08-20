@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>هندسي</h3>
                </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Uni ID</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           @if($single->track =='هندسي')
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->uniID}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup','هندسي')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>صحي</h3>
                </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Uni ID</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           @if($single->track =='صحي')
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->uniID}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup','صحي')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>تقني</h3>
                </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Uni ID</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           @if($single->track =='تقني')
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->uniID}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup','تقني')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>بيئي</h3>
                </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Uni ID</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           @if($single->track =='بيئي')
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->uniID}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup','بيئي')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>تمويلي</h3>
                </div>
                <div class="card-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Uni ID</th>
                               <th>Status</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($singles as $single)
                           @if($single->track =='تمويلي')
                           <tr>
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->uniID}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                           </tr>
                           @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary col-6" href={{route('makeSinglesGroup','تمويلي')}}>Make Group</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection