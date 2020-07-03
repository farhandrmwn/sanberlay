<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'idjawaban';
    protected $fillable = ['idjawaban','isi','date_created','date_updated'];
}
