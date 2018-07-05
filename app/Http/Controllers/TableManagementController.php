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

    // Show Update form.
    public function showEditForm($id)
    {
        $data = Content::findOrFail($id);
        return view('management.update', compact('data', 'id'));
    }

    // Post Updated data.
    public function editContent(Request $request, $id)
    {
        $resource = Content::find($id);
        $resource->month = $request->month;
        $resource->opening_estimation = $request->opening_estimation;
        $resource->store_location = $request->store_location;
        $resource->store_owner = $request->store_owner;
        $resource->h_44 = $request->h_44;
        $resource->h_32 = $request->h_32;
        $resource->h_22 = $request->h_22;
        $resource->h_21 = $request->h_21;
        $resource->h_8 = $request->h_8;
        $resource->h_3 = $request->h_3;
        $resource->h_2 = $request->h_2;
        $resource->h = $request->h;
        $resource->additional_info = $request->additional_info;
        $resource->updater = Auth::user()->name;
        if ($resource->save()) {
            return 'Data berhasil di edit!';
        }
        else {
            return 'Edit data gagal!';
        }
    }

    // Delete data permanently.
    public function destroy($id)
    {
        $data = Content::find($id);
        if ($data->delete()) {
            return 'Data berhasil dihapus!';
        }
        else {
            return 'Proses hapus data gagal!';
        }
    }
}
