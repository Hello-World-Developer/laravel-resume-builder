<?php

namespace App\Http\Controllers;

use App\Models\Form;
use PDF;

class DownloadController extends Controller
{
    public function downloadCv()
    {
        $cvInfo = Form::with('userDetail', 'skills', 'languages', 'education')
        ->latest()
        ->first();

        return view('download.pdf.cv', compact('cvInfo'));
    }
}
