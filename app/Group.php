<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'leadName',
        'leadEmail',
        'leadUniID',
        'groupName',
        'track',
        'groupMembersJson',
        'status'
    ];

    
    public function members () {
        return  json_decode($this->groupMembersJson);
    }


}
