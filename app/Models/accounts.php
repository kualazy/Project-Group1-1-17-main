<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = "accounts";
    protected $guarded = [];
}
