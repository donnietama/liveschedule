@extends('layouts.app')
@section('content')
    <div class="container" id="editable">
        <form action="/edit/{{ $data->id }}" method="post" class="p-5 bg-white">
            @csrf
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="month">Bulan</label>
                    <select name="month" id="month" class="form-control">
                        <option value="{{ $data->month }}" selected hidden>{{ $data->month }}</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="opening_estimation">Estimasi Opening</label>
                    <input type="text" name="opening_estimation" id="opening_estimation" class="form-control" value="{{ $data->opening_estimation }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="store_location">Lokasi Store</label>
                    <input type="text" name="store_location" id="store_location" class="form-control" value="{{ $data->store_location }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="store_owner">Pemilik Store</label>
                    <input type="text" name="store_owner" id="store_owner" class="form-control" value="{{ $data->store_owner }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-1 offset-2">
                    <label for="h_44">H-44</label>
                    <input type="text" name="h_44" id="h_32" class="form-control" value="{{ $data->h_44 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_32">H-32</label>
                    <input type="text" name="h_32" id="h_32" class="form-control" value="{{ $data->h_32 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_22">H-22</label>
                    <input type="text" name="h_22" id="h_22" class="form-control" value="{{ $data->h_22 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_21">H-21</label>
                    <input type="text" name="h_21" id="h_21" class="form-control" value="{{ $data->h_21 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_8">H-8</label>
                    <input type="text" name="h_8" id="h_8" class="form-control" value="{{ $data->h_8 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_3">H-3</label>
                    <input type="text" name="h_3" id="h_3" class="form-control" value="{{ $data->h_3 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h_2">H-2</label>
                    <input type="text" name="h_2" id="h_2" class="form-control" value="{{ $data->h_2 }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="h">H</label>
                    <input type="text" name="h" id="h" class="form-control" value="{{ $data->h }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="additional_info">Informasi tambahan (jika ada perubahan)</label>
                    <textarea name="additional_info" id="additional_info" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection