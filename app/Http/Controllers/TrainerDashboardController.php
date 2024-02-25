<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMentor;
use App\Models\Pemesanan;
use App\Models\PembayaranTrainer;
use Illuminate\Support\Facades\Storage;
class TrainerDashboardController extends Controller
{
    public function daftar_pendaftaran()
    {
        $data = PendaftaranMentor::where('user_id',auth()->user()->id)->first();
        return view('trainer.pendaftaran',compact('data'));
    }
    public function daftar_pendaftaran_detail()
    {
        $data = PendaftaranMentor::where('user_id',auth()->user()->id)->first();

        return response()->json($data);
    }
    public function daftar_pendaftaran_update(Request $request,$id)
{
    $data = PendaftaranMentor::find($id);

    if (!$data) {
        return response()->json(['message' => 'Data not found'], 404);
    }

    $data->nama_lengkap = $request->detail_pendaftaran_nama_lengkap;
    $data->ttl = $request->detail_pendaftaran_ttl;
    $data->nik = $request->detail_pendaftaran_nik;
    $data->alamat = $request->detail_pendaftaran_alamat;
    $data->pendidikan = $request->detail_pendaftaran_pendidikan;
    $data->pendidikan_non_akademik = $request->detail_pendaftaran_pendidikan_non_akademik;
    $data->keahlian = $request->detail_pendaftaran_keahlian;
    $data->portofolio_kegiatan = $request->detail_pendaftaran_portofolio_kegiatan;
    $data->email = $request->detail_pendaftaran_email;

    if ($request->hasFile('detail_pendaftaran_sertifikat_keahlian')) {
        // Menghapus gambar atau file sebelumnya
        if ($data->sertifikat_keahlian) {
            foreach ($data->sertifikat_keahlian as $sertifikatPath) {
                $path = str_replace(asset('storage/'), 'public/', $sertifikatPath);
                Storage::delete($path);
            }
        }
    
        // Mengunggah dan menyimpan gambar atau file yang baru
        $sertifikat_keahlianPaths = [];
        foreach ($request->file('detail_pendaftaran_sertifikat_keahlian') as $file) {
            $pathFoto = $file->store('public/foto_sertifikat');
            $sertifikat_keahlianPaths[] =  $pathFoto;
        }
        $data->sertifikat_keahlian = $sertifikat_keahlianPaths;
    }
    
    // Menghapus foto sebelumnya
    if ($request->hasFile('detail_pendaftaran_upload_foto') && $data->upload_foto) {
        $path = str_replace(asset('storage/'), 'public/', $data->upload_foto);
        Storage::delete($path);
    }
    
    // Mengunggah dan menyimpan foto yang baru
    if ($request->hasFile('detail_pendaftaran_upload_foto')) {
        $foto = $request->file('detail_pendaftaran_upload_foto');
        $pathFoto = $foto->store('public/foto');
        $data->upload_foto =  $pathFoto;
    }
    
    // Menghapus video sebelumnya
    if ($request->hasFile('detail_pendaftaran_cuplikan_vidio_profile') && $data->cuplikan_vidio_profile) {
        $path = str_replace(asset('storage/'), 'public/', $data->cuplikan_vidio_profile);
        Storage::delete($path);
    }
    
    // Mengunggah dan menyimpan video yang baru
    if ($request->hasFile('detail_pendaftaran_cuplikan_vidio_profile')) {
        $video = $request->file('detail_pendaftaran_cuplikan_vidio_profile');
        $pathVideo = $video->store('public/video');
        $data->cuplikan_vidio_profile =  $pathVideo;
    }
    
    // $data->jenis_mentor = $request->detail_pendaftaran_jenis_mentor;
    $data->tarif = $request->detail_pendaftaran_tarif;
    $data->save();

    return response()->json(['message' => 'Data updated successfully']);
}

    public function daftar_pemesan()
    {
        $pemesanan = Pemesanan::join('pendaftaran_mentor', 'pemesanan.mentor_id', '=', 'pendaftaran_mentor.id')
                ->select('pemesanan.*') // Pilih semua field dari pemesanan
                ->where('pendaftaran_mentor.user_id', auth()->user()->id)
                ->get();
        // dd($pemesanan);
        return view('trainer.pemesanan',compact('pemesanan'));
    }

    public function daftar_pemesan_detail($id)
    {
        $pemesanan = Pemesanan::find($id);
        return response()->json($pemesanan);
    }

    public function daftar_pembayaran()
    {
        $pembayaran = PembayaranTrainer::join('pendaftaran_mentor', 'pembayaran_trainer.jenis_trainer', '=', 'pendaftaran_mentor.id') 
                ->select('pembayaran_trainer.*') 
                ->where('pendaftaran_mentor.user_id', auth()->user()->id)
                ->get();

        // dd($pembayaran);
        return view('trainer.pembayaran',compact('pembayaran'));
    }

    public function daftar_pembayaran_detail($id)
    {
        $pembayaran = PembayaranTrainer::with('mentor')->find($id);
        return response()->json($pembayaran);
    }
}
