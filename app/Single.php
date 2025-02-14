<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Single extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'major',
        'status',
        'uniID',
        'email',
        'groupID',
        'status'
    ];

    public function group () {
        return $this->belongsTo('App\GroupsOfSingles','groupID');
    }

    public function showGroup(){
        $members = Single::where('groupID','=',$this->groupID)->where('id','<>',$this->id)->get();
        $members->prepend($this);
        return $members; 
    }

}
