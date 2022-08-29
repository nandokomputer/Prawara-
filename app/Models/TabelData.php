<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelData extends Model
{
    use HasFactory;
    protected $fillable=['kddata','nama','bagian','subbagian','keterangan','file'];
}
