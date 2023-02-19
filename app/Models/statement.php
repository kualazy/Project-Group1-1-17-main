<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class statement extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = "statement";
    protected $guarded = [];
}
