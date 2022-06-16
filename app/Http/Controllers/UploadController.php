<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload.index');
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required'
        ]);

        $filename = $request->file('file')->store('');
        return view('upload.store');
    }
}
