<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMentor;
use App\Models\Mentor;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptTrainerMail;

class MentorController extends Controller
{

    public function tambah_mentor()
    {
        $pendaftaran_mentor = PendaftaranMentor::where('status',0)->get();
        $mentor = PendaftaranMentor::where('status',1)->get();

        return view('admin.tambah_mentor',compact('pendaftaran_mentor','mentor'));
    }
    public function create(Request $request)
    {
        $data = new PendaftaranMentor();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->ttl = $request->ttl;
        $data->nik = $request->nik;
        $data->alamat = $request->alamat;
        $data->pendidikan = $request->pendidikan;
        $data->pendidikan_non_akademik = $request->pendidikan_non_akademik;
        $data->keahlian = $request->keahlian;
        $data->portofolio_kegiatan = $request->portofolio_kegiatan;
        $data->email = $request->email;


            // $sertifikat_keahlian = $request->file('sertifikat_keahlian');
            // $pathFoto = $sertifikat_keahlian->store('public/foto_sertifikat'); 
            // $data->sertifikat_keahlian = asset('storage/' . str_replace('public/', '', $pathFoto));
            if ($request->hasFile('sertifikat_keahlian')) {
                $sertifikat_keahlianPaths = [];
    
                foreach ($request->file('sertifikat_keahlian') as $file) {
                    $pathFoto = $file->store('public/foto_sertifikat');
                    $sertifikat_keahlianPaths[] = asset('storage/' . str_replace('public/', '', $pathFoto));
                }
    
                $data->sertifikat_keahlian = $sertifikat_keahlianPaths;
            }

            $foto = $request->file('upload_foto');
            $pathFoto = $foto->store('public/foto'); 
            $data->upload_foto = asset('storage/' . str_replace('public/', '', $pathFoto));

            $video = $request->file('cuplikan_vidio_profile');
            $pathVideo = $video->store('public/video'); 
            $data->cuplikan_vidio_profile = asset('storage/' . str_replace('public/', '', $pathVideo));
        
        $data->jenis_mentor = $request->jenis_mentor;
        $data->ratecard = $request->ratecard;
        $data->save();
        

        return response()->json(['message' => 'Data created successfully']);
    }    
    public function pemesanan_mentor($id)
    {   
        $mentor = PendaftaranMentor::find($id);
        // dd($mentor);    
        return view('website.pemesanan_mentor',compact('mentor'));
    }
    public function tambah_mentor_detail($id)
    {
        $data = PendaftaranMentor::find($id);
        return response()->json($data);
    }
    public function tambah_mentor_store(Request $request)
    {
        $data = new PendaftaranMentor();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->ttl = $request->ttl;
        $data->nik = $request->nik;
        $data->alamat = $request->alamat;
        $data->pendidikan = $request->pendidikan;
        $data->pendidikan_non_akademik = $request->pendidikan_non_akademik;
        $data->keahlian = $request->keahlian;
        $data->portofolio_kegiatan = $request->portofolio_kegiatan;
        $data->email = $request->email;
        $data->status = 1;



            // $sertifikat_keahlian = $request->file('sertifikat_keahlian');
            // $pathFoto = $sertifikat_keahlian->store('public/foto_sertifikat'); 
            // $data->sertifikat_keahlian = asset('storage/' . str_replace('public/', '', $pathFoto));
            if ($request->hasFile('sertifikat_keahlian')) {
                $sertifikat_keahlianPaths = [];
    
                foreach ($request->file('sertifikat_keahlian') as $file) {
                    $pathFoto = $file->store('public/foto_sertifikat');
                    $sertifikat_keahlianPaths[] = asset('storage/' . str_replace('public/', '', $pathFoto));
                }
    
                $data->sertifikat_keahlian = $sertifikat_keahlianPaths;
            }

            $foto = $request->file('upload_foto');
            $pathFoto = $foto->store('public/foto'); 
            $data->upload_foto = asset('storage/' . str_replace('public/', '', $pathFoto));

            $video = $request->file('cuplikan_vidio_profile');
            $pathVideo = $video->store('public/video'); 
            $data->cuplikan_vidio_profile = asset('storage/' . str_replace('public/', '', $pathVideo));
        
        $data->jenis_mentor = $request->jenis_mentor;
        $data->ratecard = $request->ratecard;
        $data->save();
        

        return response()->json(['message' => 'Data created successfully']);
    }  
    public function tambah_mentor_edit($id)
    {
        $mentor = PendaftaranMentor::find($id);
        return response()->json($mentor);
    }
    public function tambah_mentor_delete($id)
    {
        $mentor = PendaftaranMentor::find($id);

        if ($mentor->upload_foto) {
            $photoPath = str_replace(asset('storage/'), 'public/', $mentor->upload_foto);
            Storage::delete($photoPath);
        }

        if ($mentor->cuplikan_vidio_profile) {
            $videoPath = str_replace(asset('storage/'), 'public/', $mentor->cuplikan_vidio_profile);
            Storage::delete($videoPath);
        }

        $mentor->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }
    public function delete_pendaftaran_mentor($id)
    {
        $mentor = PendaftaranMentor::find($id);

        if ($mentor->upload_foto) {
            $photoPath = str_replace(asset('storage/'), 'public/', $mentor->upload_foto);
            Storage::delete($photoPath);
        }

        if ($mentor->cuplikan_vidio_profile) {
            $videoPath = str_replace(asset('storage/'), 'public/', $mentor->cuplikan_vidio_profile);
            Storage::delete($videoPath);
        }

        $mentor->delete();

        return response()->json(['message' => 'Data deleted successfully']);
    }    
    public function accept_pendaftaran_mentor($id)
    {
        $mentor = PendaftaranMentor::find($id);

        $mentor->status = 1;    
        $mentor->save();
        
        $nama = $mentor->nama_lengkap;
        $email = $mentor->email;


        Mail::to($mentor->email)->send(new AcceptTrainerMail($nama, $email));

        return response()->json(['message' => 'Data Accept successfully']);
    }
    
    public function tambah_mentor_update(Request $request, $id)
    {
        $data = PendaftaranMentor::find($id);
    
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }
    
        $data->nama_lengkap = $request->edit_pendaftaran_nama_lengkap;
        $data->ttl = $request->edit_pendaftaran_ttl;
        $data->nik = $request->edit_pendaftaran_nik;
        $data->alamat = $request->edit_pendaftaran_alamat;
        $data->pendidikan = $request->edit_pendaftaran_pendidikan;
        $data->pendidikan_non_akademik = $request->edit_pendaftaran_pendidikan_non_akademik;
        $data->keahlian = $request->edit_pendaftaran_keahlian;
        $data->portofolio_kegiatan = $request->edit_pendaftaran_portofolio_kegiatan;
        $data->email = $request->edit_pendaftaran_email;
    
        if ($request->hasFile('edit_pendaftaran_sertifikat_keahlian')) {
            // Menghapus gambar atau file sebelumnya
            if ($data->sertifikat_keahlian) {
                foreach ($data->sertifikat_keahlian as $sertifikatPath) {
                    $path = str_replace(asset('storage/'), 'public/', $sertifikatPath);
                    Storage::delete($path);
                }
            }
        
            // Mengunggah dan menyimpan gambar atau file yang baru
            $sertifikat_keahlianPaths = [];
            foreach ($request->file('edit_pendaftaran_sertifikat_keahlian') as $file) {
                $pathFoto = $file->store('public/foto_sertifikat');
                $sertifikat_keahlianPaths[] = asset('storage/' . str_replace('public/', '', $pathFoto));
            }
            $data->sertifikat_keahlian = $sertifikat_keahlianPaths;
        }
        
        // Menghapus foto sebelumnya
        if ($request->hasFile('edit_pendaftaran_upload_foto') && $data->upload_foto) {
            $path = str_replace(asset('storage/'), 'public/', $data->upload_foto);
            Storage::delete($path);
        }
        
        // Mengunggah dan menyimpan foto yang baru
        if ($request->hasFile('edit_pendaftaran_upload_foto')) {
            $foto = $request->file('edit_pendaftaran_upload_foto');
            $pathFoto = $foto->store('public/foto');
            $data->upload_foto = asset('storage/' . str_replace('public/', '', $pathFoto));
        }
        
        // Menghapus video sebelumnya
        if ($request->hasFile('edit_pendaftaran_cuplikan_vidio_profile') && $data->cuplikan_vidio_profile) {
            $path = str_replace(asset('storage/'), 'public/', $data->cuplikan_vidio_profile);
            Storage::delete($path);
        }
        
        // Mengunggah dan menyimpan video yang baru
        if ($request->hasFile('edit_pendaftaran_cuplikan_vidio_profile')) {
            $video = $request->file('edit_pendaftaran_cuplikan_vidio_profile');
            $pathVideo = $video->store('public/video');
            $data->cuplikan_vidio_profile = asset('storage/' . str_replace('public/', '', $pathVideo));
        }
        
        $data->jenis_mentor = $request->edit_pendaftaran_jenis_mentor;
        $data->ratecard = $request->edit_pendaftaran_ratecard;
        $data->save();
    
        return response()->json(['message' => 'Data updated successfully']);
    }
    public function pemesanan_mentor_detail($id)
    {
        $mentor = PendaftaranMentor::find($id);
        return view('website.pemesanan_mentor_detail',compact('mentor'));
    }
    public function pemesanan_mentor_store(Request $request)
    {

        $data = new Pemesanan();
        $data->nama = $request->nama;
        $data->mentor_id = $request->mentor_id;        
        $data->instansi = $request->instansi;
        $data->alamat_instansi = $request->alamat_instansi;
        $data->lokasi_kegiatan = $request->lokasi_kegiatan;
        $data->tanggal_kegiatan = $request->tanggal_kegiatan;
        $data->jam = $request->jam;
        $data->no_hp = $request->no_hp;
        $data->kendala_yang_di_alami = $request->kendala_yang_di_alami;
        $data->harapan_dari_adanya_kegiatan = $request->harapan_dari_adanya_kegiatan;
        $data->bayar = 0;
        $data->jumlah_pembayaran = $request->jumlah_pembayaran;        
        $data->save();

        // $order = Pemesanan::create($request->all());
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $data->id,
                'gross_amount' => $data->jumlah_pembayaran,
            ),
            'customer_details' => array(
                'first_name' => $data->nama,
                'last_name' => '',
                'phone' => $data->no_hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        // return redirect('pembayaran')->with('message','Pemesanan Telah Berhasil Di Lakukan, Silahkan Selesaikan Pembayaran Anda');
        return view('website.checkout',compact('snapToken','data'));
    }
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512",$request->order_id.$request->status_kode.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $data = Pemesanan::find($request->order_id);
                $data->update(['bayar' => '1']);
            }
        }
    }
    
    
}
