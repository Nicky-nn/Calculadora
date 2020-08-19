<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularoraController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }

    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $c = (float)$request->input('c');
        $e = (float)$request->input('e');
        $val = (bool)$request->input('customControlAutosizing');
        $s = $a + $b;
        $r = $a - $b;
        $m = $a * $b;
        $d = $a / $b;
        $p = 0;
        if($val == true){
            if($e == " "){
                $e = 2;
                $p = pow($c, $e);
            }
            else{
                $p = pow($c, $e);
            }
        }
        return view('solucion', [            
            'a' => $a,
            'b' => $b,
            'c' => $c,
            's' => $s,
            'r' => $r,
            'm' => $m,
            'd' => $d,
            'p' => $p,
            'e' => $e,
        ]);
    }
}
