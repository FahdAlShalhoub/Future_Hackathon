<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupsOfSingles extends Model
{
    protected $fillable = [
        'leadId',
        'newMemberID',
    ];


    public function singles () {
        return $this->hasMany('App\single', 'groupID');
    }

}
