@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="inTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($singles as $single)
                            <tr style="display:none;" id="{{$single->id}}in">
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->email}}</td>
                                <td><span class="text-success">accepted</span></td>
                                <td><button onclick="removeFromGroup('{{$single->id}}')" class="btn btn-danger">Remove From Group</button>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($singles as $single)
                            <tr id="{{$single->id}}out">
                                <td>{{$single->id}}</td>
                                <td>{{$single->name}}</td>
                                <td>{{$single->email}}</td>
                                <td class="@if($single->status === 'rejected') text-danger  @elseif($single->status === 'accepted') text-success @endif">{{$single->status}}</td>
                                <td><button onclick="addToGroup({{$single->id}})" class="btn btn-success">Add To Group</button>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p id='text'></p>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <button onclick="submitGroup()" class="btn btn-primary text-center col-6">Submit</button>
    </div>
</div>

@endsection

@section('specialJS')
<script>
    function addToGroup(id){
        document.getElementById(id+'out').style="display:none;"
        document.getElementById(id+'in').style="";
    }
    function removeFromGroup(id){
        document.getElementById(id+'in').style="display:none;"
        document.getElementById(id+'out').style="";
    }
    function submitGroup(){
        var table=document.getElementById('inTable');
        var acceptedMemberIDs=[];
        var j=0;
        for(var i=1;i<table.rows.length;i++){
            if(table.rows[i].style.getPropertyValue('display')=='')
            acceptedMemberIDs[j++]=table.rows[i].cells[0].innerHTML;
        }

       if(acceptedMemberIDs.length<2){
           alert("Must add 2 members at least");
           return;
       }

       if(acceptedMemberIDs.length>4){
           alert("maximum is 4 members");
           return;
       }

       acceptedMemberIDs=JSON.stringify(acceptedMemberIDs);
       const http=new XMLHttpRequest();
       http.open('GET','/makeGroup/'+acceptedMemberIDs);
       http.send();
       http.onreadystatechange=function(){
           if(this.readyState==4,this.status=200){
               window.location.assign('/pullgroupsOfsingles');
           }
       }
    }
    $(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip();   
    });
</script>
@endsection