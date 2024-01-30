<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMentor;
use App\Models\User;
class LoginTrainerController extends Controller
{
    public function index()
    {
        // $pendaftaran_trainer = PendaftaranMentor::where('status',1)->get();
        $pendaftaran_trainer = PendaftaranMentor::where('status', 1)
        ->whereNull('user_id')
        ->get();

        $data = User::where('is_admin',0)->get();
        return view('admin.daftar_login_trainer',compact('data','pendaftaran_trainer'));
    }
    public function create(Request $request)
    {

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->is_admin = 0;
        $data->save();    

        PendaftaranMentor::where('email', $data->email)->update(['user_id' => $data->id]);
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $data = User::find($id);        
        $data->delete();
        PendaftaranMentor::where('user_id', $id)->update(['user_id' => null]);
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
