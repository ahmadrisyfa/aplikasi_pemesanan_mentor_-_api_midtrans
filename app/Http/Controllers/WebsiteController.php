<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
class WebsiteController extends Controller
{
    public function index(){
        $mentor = Mentor::all();
        return view('website.index',compact('mentor'));
    }

    public function jenis_mentor_detail($category)
    {
        $mentor = Mentor::where('jenis',$category)->get();
        $jenis_mentor = Mentor::where('jenis',$category)->first();

        return view('website.category_detail',compact('mentor','jenis_mentor'));
    }
    public function search_jenis_mentor(Request $request,$category)
    {
        $alamatQuery = $request->input('search');
    
        if (!empty($alamatQuery)) {
            $mentor = Mentor::where('jenis', $category)
                ->where('alamat', 'like', "%$alamatQuery%")
                ->get();
        } else {
                $mentor = Mentor::where('jenis', $category)->get();
        }

        $jenis_mentor = Mentor::where('jenis', $category)->first();

        return view('website.category_detail', compact('mentor', 'jenis_mentor'));
    }
    public function pendaftaran_mentor()
    {
        return view('website.pendaftaran_mentor');
    }
}
