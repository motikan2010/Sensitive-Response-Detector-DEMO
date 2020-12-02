<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {

        return view('index.index')->with([
            'sensitive_detect_msg' => $request->get('sensitive_detect_msg')
        ]);
    }

    public function output(Request $request) {

        return view('index.output')->with([
            'sensitive_detect_msg' => $request->get('sensitive_detect_msg')
        ]);
    }
}
