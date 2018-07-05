<?php

namespace App\Http\Controllers;

use Auth;
use DB;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Content;

class TableManagementController extends Controller
{
    // Show table preview page.
    public function index()
    {
        return view('management.index');
    }

    // Fetch table content from database as API.
    public function fetchContent()
    {
        $data = Content::all();

        return $data;
    }

    // Show Content form.
    public function showContentForm()
    {
        return view('management.create');
    }

    // Add Table new Table Content.
    public function addNewContent(Request $request)
    {
        // Validate user input.
        $validation = $this->validate($request, [
            'month' => 'string|nullable',
            'opening_estimation' => 'string|nullable',
            'store_location' => 'string|nullable',
            'store_owner' => 'string|nullable',
            'h_44' => 'string|nullable',
            'h_32' => 'string|nullable',
            'h_22' => 'string|nullable',
            'h_21' => 'string|nullable',
            'h_8' => 'string|nullable',
            'h_3' => 'string|nullable',
            'h_2' => 'string|nullable',
            'h' => 'string|nullable',
        ]);

        // If validation does not passed, send error messages.
        $validation ?: redirect()->back()->withErrors($validation);

        // If validation passed, break each values apart into array.
        $contents = [];
        foreach ($request->inputs as $partition) {
            $contents[] = [
                'month' => $partition['month'],
                'opening_estimation' => $partition['opening_estimation'],
                'store_location' => $partition['store_location'],
                'store_owner' => $partition['store_owner'],
                'h_44' => $partition['h_44'],
                'h_32' => $partition['h_32'],
                'h_22' => $partition['h_22'],
                'h_21' => $partition['h_21'],
                'h_8' => $partition['h_8'],
                'h_3' => $partition['h_3'],
                'h_2' => $partition['h_2'],
                'h' => $partition['h'],
                'accountability' => Auth::user()->name,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ];
        }

        // Insert all values in array at once.
        $store_contents = DB::table('contents')->insert($contents);

        // If contents has been stored, send success message. If no, send error message.
        $store_contents ? 'Header telah ditambahkan!' : 'Oops.. Ada yang salah...';
    }
}
