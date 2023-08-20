<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrutkanArrayController extends Controller
{
    public function index()
    {
        $array = [12, 9, 30, "A", "M", 99, 82, "J", "N", "B"];

        // Pisahkan angka dan huruf
        $letters = [];
        $numbers = [];
        foreach ($array as $item) {
            if (is_numeric($item)) {
                $numbers[] = $item;
            } else {
                $letters[] = $item;
            }
        }

        // Urutkan huruf dan angka
        sort($letters);
        sort($numbers);

        // Gabungkan kembali
        $sortedArray = array_merge($letters, $numbers);

        return view('urutkan_array.index')->with('sortedArray', $sortedArray);
    }
}
