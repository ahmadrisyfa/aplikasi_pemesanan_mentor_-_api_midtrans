<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranTrainer extends Model
{
    use HasFactory;
    protected $table ='pembayaran_trainer';
    protected $guarded = ['id'];

    public function mentor() {
        return $this->belongsTo(Mentor::class, 'jenis_trainer', 'id');
    }
}
