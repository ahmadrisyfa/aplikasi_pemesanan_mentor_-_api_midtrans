<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranTrainer;
use App\Models\Mentor;
class PembayaranTrainerController extends Controller
{
    public function index()
    {
        $mentor = Mentor::all();
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
        $pembayaran_trainer->save();    
        return response()->json(['message' => 'Data updated successfully']);

    }

    public function pembayaran_trainer_delete($id)
    {
        $PembayaranTrainer = PembayaranTrainer::find($id);        
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
