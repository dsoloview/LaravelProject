<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function russianCV()
    {
        return response()->download(public_path('CV/Russian_CV.pdf'));
    }

    public function englishCV()
    {
        return response()->download(public_path('CV/English_CV.pdf'));
    }
}
