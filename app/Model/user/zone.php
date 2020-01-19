<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{

    public function categories()
    {
        return $this->BelongsToMany('App\Model\user\category', 'zone_categories')->withTimestamps();
    }
}
