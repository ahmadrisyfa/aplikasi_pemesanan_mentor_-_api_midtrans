<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMentor;
class WebsiteController extends Controller
{
    public function index(){
        $mentor = PendaftaranMentor::all();
        return view('website.index',compact('mentor'));
    }

    public function jenis_mentor_detail($category)
    {
        $mentor = PendaftaranMentor::where('status',1)->where('jenis_mentor', 'like', "%$category%")->get();
        return view('website.category_detail',compact('mentor','category'));
    }
    public function search_jenis_mentor(Request $request,$category)
    {
        $alamatQuery = $request->input('search');


        if (!empty($alamatQuery)) {
            $mentor = PendaftaranMentor::where('status', 1)
            ->where('jenis_mentor', 'like', '%' . $category . '%')
            ->where('alamat', 'like', "%$alamatQuery%")
                ->get();
        } else {
            $mentor = PendaftaranMentor::where('status', 1)
                ->where('jenis_mentor', 'like', '%' . $category . '%')
                ->get();
        }



        return view('website.category_detail', compact('mentor','category'));
    }
    public function pendaftaran_mentor()
    {
        return view('website.pendaftaran_mentor');
    }
}
