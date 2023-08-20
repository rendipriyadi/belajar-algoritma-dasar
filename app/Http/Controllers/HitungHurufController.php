<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungHurufController extends Controller
{
    public function index()
    {
        return view('hitung_huruf.index');
    }

    public function countLetters(Request $request)
    {
        $input = $request->input('text');
        $letterCounts = [];

        foreach (str_split($input) as $char) {
            if (ctype_alpha($char)) {
                if (!isset($letterCounts[$char])) {
                    $letterCounts[$char] = 0;
                }
                $letterCounts[$char]++;
            }
        }

        // Mengurutkan hasil akhir sesuai abjad
        ksort($letterCounts);

        return view('hitung_huruf.index', ['letterCounts' => $letterCounts]);
    }
}
