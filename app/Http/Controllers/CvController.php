<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function downloadCv(Request $request){
        return response()->download(public_path('assets/Faruk_Resume.pdf'));
    }
}
