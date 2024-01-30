<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.pemesanan',compact('pemesanan'));
    }
    public function pemesanan_delete($id)
    {
        $pemesanan = Pemesanan::find($id);    
        $pemesanan->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
    public function pemesanan_edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        return response()->json($pemesanan);
    }
    public function pemesanan_update(Request $request, $id)
    {
        $data = Pemesanan::find($id);
        $data->nama = $request->nama;
        $data->instansi = $request->instansi;
        $data->alamat_instansi = $request->alamat_instansi;
        $data->lokasi_kegiatan = $request->lokasi_kegiatan;
        $data->tanggal_kegiatan = $request->tanggal_kegiatan;
        $data->jam = $request->jam;
        $data->no_hp = $request->no_hp;
        $data->kendala_yang_di_alami = $request->kendala_yang_di_alami;
        $data->harapan_dari_adanya_kegiatan = $request->harapan_dari_adanya_kegiatan;
        $data->bayar = $request->bayar;
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;

        
        $data->save();
        return response()->json(['message' => 'Data updated successfully']);

    }
    public function cetak()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.cetak_pemesanan',compact('pemesanan'));
    }

    public function pemesanan_cetak_tanggal(Request $request)
    {
        $tanggal_awal = $request->input('tanggal_awal');
        $tanggal_akhir = $request->input('tanggal_akhir');
        
        $pemesanan = Pemesanan::where('tanggal_kegiatan', '>=', $tanggal_awal)
                            ->where('tanggal_kegiatan', '<=', $tanggal_akhir)
                            ->get();
        
    
    
        return view('admin.cetak_pemesanan', compact('pemesanan'));
    }
    public function invoice($id){
        $data = Pemesanan::find($id);
        return view('admin.invoice',compact('data'));
    }

}
