<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembatalan;
class PembatalanController extends Controller
{
    public function index()
    {
        return view('website.pembatalan');
    }

    public function pembatalan_store(Request $request)
    {

        $data = new Pembatalan();
        $data->nama = $request->nama;
        $data->instansi = $request->instansi;
        $data->alamat_instansi = $request->alamat_instansi;
        $data->lokasi_kegiatan = $request->lokasi_kegiatan;
        $data->tanggal_kegiatan = $request->tanggal_kegiatan;
        $data->jam = $request->jam;
        $data->no_hp = $request->no_hp;
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;
        $data->alasan_pembatalan = $request->alasan_pembatalan;
        $data->save();
        return redirect('/')->with('pembatalan_message','Pembatalan Telah DiTerima Admin');
    }

    public function index_admin()
    {
        $pembatalan = Pembatalan::all();
        return view('admin.pembatalan',compact('pembatalan'));
    }
    public function pembatalan_delete($id)
    {
        $pembatalan = Pembatalan::find($id);    
        $pembatalan->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
    public function pembatalan_edit($id)
    {
        $pembatalan = Pembatalan::find($id);
        return response()->json($pembatalan);
    }
    public function pembatalan_update(Request $request, $id)
    {
        $data = Pembatalan::find($id);
        $data->nama = $request->nama;
        $data->instansi = $request->instansi;
        $data->alamat_instansi = $request->alamat_instansi;
        $data->lokasi_kegiatan = $request->lokasi_kegiatan;
        $data->tanggal_kegiatan = $request->tanggal_kegiatan;
        $data->jam = $request->jam;
        $data->no_hp = $request->no_hp;
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;
        $data->alasan_pembatalan = $request->alasan_pembatalan;
        $data->save();
        return response()->json(['message' => 'Data updated successfully']);

    }
}
