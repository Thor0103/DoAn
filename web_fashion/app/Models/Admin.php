<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
    protected $fillable = [
         'UserName', 'Password','FullName','Email', 'Phone','Address','City','Status'
    ];

    protected $primaryKey = '';
    protected $table = 'admin';
}
