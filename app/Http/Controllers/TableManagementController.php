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
        $from = date('m');
        $to = date('m', strtotime('+2 months'));
        
        $data = Content::whereBetween('month', [$from, $to])
                        ->get();
    
        return $data;
    }

    public function fetchAllContent()
    {
        $from = date('m');
        $to = date('m', strtotime('+2 months'));
        
        $data = Content::whereBetween('month', [$from, $to])
                        ->get();
    
        return $data;
    }

    // Show Content form.
    public function showContentForm()
    {
        return view('management.create');
    }

    // Get specified data by id for deletions
    public function getSpecifiedData($id)
    {
        $data = Content::findOrFail($id);

        return response()->json($data);
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
            'h_44_finished' => 'string|nullable',
            'h_32' => 'string|nullable',
            'h_32_finished' => 'string|nullable',
            'h_22' => 'string|nullable',
            'h_22_finished' => 'string|nullable',
            'h_21' => 'string|nullable',
            'h_21_finished' => 'string|nullable',
            'h_8' => 'string|nullable',
            'h_8_finished' => 'string|nullable',
            'h_3' => 'string|nullable',
            'h_3_finished' => 'string|nullable',
            'h_2' => 'string|nullable',
            'h_finished' => 'string|nullable',
            'h' => 'string|nullable',
            'h_finished' => 'string|nullable',
            'finished' => 'string|nullable',
        ]);

        // If validation does not passed, send error messages.
        $validation ?: 'data tidak valid';

        // If validation passed, break each values apart into array.
        $contents = [];
        foreach ($request->inputs as $partition) {
            $contents[] = [
                'month' => $partition['month'],
                'opening_estimation' => $partition['opening_estimation'],
                'store_location' => $partition['store_location'],
                'store_owner' => $partition['store_owner'],
                'h_44' => !empty($partition['h_44']) ? $partition['h_44'] : null,
                'h_44_finished' => !empty($partition['h_44_finished']) ? $partition['h_44_finished'] : 0,
                'h_32' => !empty($partition['h_32']) ? $partition['h_32'] : null,
                'h_32_finished' => !empty($partition['h_32_finished']) ? $partition['h_32_finished'] : 0,
                'h_22' => !empty($partition['h_22']) ? $partition['h_22'] : null,
                'h_22_finished' => !empty($partition['h_22_finished']) ? $partition['h_22_finished'] : 0,
                'h_21' => !empty($partition['h_21']) ? $partition['h_21'] : null,
                'h_21_finished' => !empty($partition['h_21_finished']) ? $partition['h_21_finished'] : 0,
                'h_8' => !empty($partition['h_8']) ? $partition['h_8'] : null,
                'h_8_finished' => !empty($partition['h_8_finished']) ? $partition['h_8_finished'] : 0,
                'h_3' => !empty($partition['h_3']) ? $partition['h_3'] : null,
                'h_3_finished' => !empty($partition['h_3_finished']) ? $partition['h_3_finished'] : 0,
                'h_2' => !empty($partition['h_2']) ? $partition['h_2'] : null,
                'h_2_finished' => !empty($partition['h_2_finished']) ? $partition['h_2_finished'] : 0,
                'h' => !empty($partition['h']) ? $partition['h'] : null,
                'h_finished' => !empty($partition['h_finished']) ? $partition['h_finished'] : 0,
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
        return view('management.update', compact('data'));
    }

    // Post Updated data.
    public function editContent(Request $request, $id)
    {
        $resource = Content::findOrFail($id);
        $resource->month = $request->month;
        $resource->opening_estimation = $request->opening_estimation;
        $resource->store_location = $request->store_location;
        $resource->store_owner = $request->store_owner;
        $resource->h_44 = $request->h_44;
        $resource->h_44_finished = !empty($request->h_44_finished) ? $request->h_44_finished : 0;
        $resource->h_32 = $request->h_32;
        $resource->h_32_finished = !empty($request->h_32_finished) ? $request->h_32_finished : 0;
        $resource->h_22 = $request->h_22;
        $resource->h_22_finished = !empty($request->h_22_finished) ? $request->h_22_finished : 0;
        $resource->h_21 = $request->h_21;
        $resource->h_21_finished = !empty($request->h_21_finished) ? $request->h_21_finished : 0;
        $resource->h_8 = $request->h_8;
        $resource->h_8_finished = !empty($request->h_8_finished) ? $request->h_8_finished : 0;
        $resource->h_3 = $request->h_3;
        $resource->h_3_finished = !empty($request->h_3_finished) ? $request->h_3_finished : 0;
        $resource->h_2 = $request->h_2;
        $resource->h_2_finished = !empty($request->h_2_finished) ? $request->h_2_finished : 0;
        $resource->h = $request->h;
        $resource->h_finished = !empty($request->h_finished) ? $request->h_finished : 0;
        $resource->additional_info = $request->additional_info;
        $resource->updating = false;
        if ($resource->save()) {
            return redirect('/home');
        }
        else {
            return redirect()->back()->withError('data tidak dapat diproses');
        }
    }

    // Delete data permanently.
    public function destroy($id)
    {
        $data = Content::findOrFail($id);
        if ($data->delete()) {
            return 'Data berhasil dihapus!';
        }
        else {
            return 'Proses hapus data gagal!';
        }
    }
}
