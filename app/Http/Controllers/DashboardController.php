<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\PendaftaranMentor;
use App\Models\Pemesanan;


class DashboardController extends Controller
{
    public function index()
    {        
        $total_daftar_mentor = PendaftaranMentor::where('status',0)->count();
        $total_mentor = PendaftaranMentor::where('status',1)->count();
        $total_pemesanan = Pemesanan::count();
        return view('admin.index',compact('total_daftar_mentor','total_mentor','total_pemesanan'));
    }
}
