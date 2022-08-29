<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelInfo extends Model
{
    use HasFactory;
    protected $fillable=['kdinfo','info','deskripsi','tanggal','file'];
}
