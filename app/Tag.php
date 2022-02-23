<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Tag extends Pivot
{
    public function posts(){
        return $this->belongsToMany('App\Post','post_tag','tag_id','post_id');
    }

    protected $table = 'tags';
}
