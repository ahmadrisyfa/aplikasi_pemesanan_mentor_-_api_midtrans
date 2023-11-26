<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranMentor extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_mentor';
    protected $fillable = ['id'];
}
