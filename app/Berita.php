<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    // Table Name
    protected $table = 'beritas';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true; 
}
