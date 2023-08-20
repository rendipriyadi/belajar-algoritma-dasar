<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatternCountController extends Controller
{
    public function index()
    {
        return view('pattern_count.index');
    }

    public function patternCount(Request $request)
    {
        $text = $request->input('text');
        $pattern = $request->input('pattern');

        $textLength = strlen($text);
        $patternLength = strlen($pattern);
        $count = 0;

        if ($patternLength === 0) {
            return view('pattern_count.index', ['count' => 0]);
        }

        for ($i = 0; $i <= $textLength - $patternLength; $i++) {
            $match = true;
            for ($j = 0; $j < $patternLength; $j++) {
                if ($text[$i + $j] !== $pattern[$j]) {
                    $match = false;
                    break;
                }
            }
            if ($match) {
                $count++;
            }
        }

        return view('pattern_count.index', ['count' => $count]);
    }
}
