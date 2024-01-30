<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranMentor extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_mentor';
    protected $fillable = ['id'];
    protected $casts = [
        'sertifikat_keahlian' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
