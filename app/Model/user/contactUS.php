<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class contactUS extends Model
{
    public $table = 'contact_us';
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];
}
