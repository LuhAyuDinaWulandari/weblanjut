<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    //
    protected $table ='pembeli';
    protected $primaryKey='id_pembeli';
    protected $fillabe=['id_pembeli','nama_pembeli','no_hp'];
}