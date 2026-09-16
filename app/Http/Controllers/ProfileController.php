<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'nama'  => 'Faqih Lakaisha Putra',
            'kelas' => 'A',
            'npm'   => '2417051037',
        ];

        return view('profile', $data);
    }
}