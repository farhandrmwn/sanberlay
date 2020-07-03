<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $primaryKey = 'idpertanyaan';
    protected $fillable = ['idpertanyaan','judul','isi','date_created','date_updated'];
}
