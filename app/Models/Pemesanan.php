<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pemesanan';

    public function mentor()
    {
        return $this->belongsTo(PendaftaranMentor::class);
    }
}
