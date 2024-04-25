<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false; 
    protected $primaryKey = 'matp';
    protected $fillable = ['name_city'];
    protected $table ='tbl_tinhthanhpho';

    // use HasFactory;
}
