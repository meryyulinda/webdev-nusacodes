<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function one(){
        // return "Test dari controller";

        $angka_a = 10;
        $angka_b = 20;
        $hasil = $angka_a + $angka_b;
        return view('profile', ['full_name' => 'John Doe', 'age' => '20 years old', 'score'=>$hasil]);
    }
}
