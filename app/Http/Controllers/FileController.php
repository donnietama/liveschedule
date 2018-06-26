<?php

namespace App\Http\Controllers;

use File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function update(Request $request)
    {
        $update = File::put('newfile.json', json_encode(json_decode($request->getContent(), true)));  
        if ($update) {
            return 'Success!!';
        }
    }
}
