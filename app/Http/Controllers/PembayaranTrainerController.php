<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranTrainer;
use App\Models\Mentor;
use App\Models\PendaftaranMentor;
use Illuminate\Support\Facades\Storage;

class PembayaranTrainerController extends Controller
{
    public function index()
    {
        $mentor = PendaftaranMentor::where('status',1)->get();
        $pembayaran_trainer = PembayaranTrainer::all();
        return view('admin.pembayaran_trainer',compact('pembayaran_trainer','mentor'));
    }

    public function tambah_pembayaran_trainer(Request $request)
    {
        $data = new PembayaranTrainer();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->jenis_trainer = $request->jenis_trainer;
        $data->tanggal = $request->tanggal;
        $data->jumlah_potongan = $request->jumlah_potongan;
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;

        $foto = $request->file('foto_pembayaran');
        $pathFoto = $foto->store('public/foto-pembayaran'); 
        $data->foto_pembayaran = asset('storage/' . str_replace('public/', '', $pathFoto));

        $data->save();

        return response()->json(['message' => 'Data created successfully']);
    }

    public function edit_pembayaran_trainer($id)
    {
        $pembayaran_trainer = PembayaranTrainer::find($id);
        return response()->json($pembayaran_trainer);
    }

    public function pembayaran_trainer_update(Request $request, $id)
    {
        $pembayaran_trainer = PembayaranTrainer::find($id);
        $pembayaran_trainer->nik = $request->nik;
        $pembayaran_trainer->nama = $request->nama;
        $pembayaran_trainer->jenis_trainer = $request->jenis_trainer;
        $pembayaran_trainer->tanggal = $request->tanggal;
        $pembayaran_trainer->jumlah_potongan = $request->jumlah_potongan;
        $pembayaran_trainer->jumlah_pembayaran = $request->jumlah_pembayaran;

        if ($request->hasFile('foto_pembayaran')) {
            if ($pembayaran_trainer->foto_pembayaran) {
                $previousPhotoPath = str_replace(asset('storage/'), 'public/', $pembayaran_trainer->foto_pembayaran);
                Storage::delete($previousPhotoPath);
            }

            $foto_update = $request->file('foto_pembayaran');
            $pathFoto = $foto_update->store('public/foto-pembayaran'); 
            $pembayaran_trainer->foto_pembayaran = asset('storage/' . str_replace('public/', '', $pathFoto));
        }
        $pembayaran_trainer->save();    
        return response()->json(['message' => 'Data updated successfully']);

    }

    public function pembayaran_trainer_delete($id)
    {
        $PembayaranTrainer = PembayaranTrainer::find($id);  
        if ($PembayaranTrainer->foto_pembayaran) {
            $photoPath = str_replace(asset('storage/'), 'public/', $PembayaranTrainer->foto_pembayaran);
            Storage::delete($photoPath);
        }      
        $PembayaranTrainer->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }

    public function pembayaran_trainer_cetak_tanggal(Request $request)
    {
        $tanggal_awal = $request->input('tanggal_awal');
        $tanggal_akhir = $request->input('tanggal_akhir');
        
        $PembayaranTrainer = PembayaranTrainer::where('tanggal', '>=', $tanggal_awal)
                            ->where('tanggal', '<=', $tanggal_akhir)
                            ->get();
        
    
    
        return view('admin.pembayaran_trainer_cetak_tanggal', compact('PembayaranTrainer'));
    }
    
}
