<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'nama' => 'Suwarda Aulia',
            'nim' => '0110123225',
            'programStudi' => 'Sistem Informasi',
            'tahunAngkatan' => '2023'
        ]);
    }
}