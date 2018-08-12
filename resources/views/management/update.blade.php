@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row p-0">
        @include('layouts.sidebar')
        <div class="col-md-10 p-4">
            <div class="container" id="editable">
                <form action="/edit/{{ $data->id }}" method="post" class="p-5 bg-white">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="month">Bulan</label>
                            <select name="month" id="month" class="form-control">
                                <option value="{{ $data->month }}" selected hidden>{{ $data->month }}</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
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
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_44">H-44</label>
                                    <input type="date" name="h_44" id="h_32" class="form-control" value="{{ $data->h_44 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_44_finished" value="1" {{ !empty($data->h_44_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_32">H-32</label>
                                    <input type="date" name="h_32" id="h_32" class="form-control" value="{{ $data->h_32 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_32_finished" value="1" {{ !empty($data->h_32_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_22">H-22</label>
                                    <input type="date" name="h_22" id="h_22" class="form-control" value="{{ $data->h_22 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_22_finished" value="1" {{ !empty($data->h_22_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_21">H-21</label>
                                    <input type="date" name="h_21" id="h_21" class="form-control" value="{{ $data->h_21 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_21_finished" value="1" {{ !empty($data->h_21_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_8">H-8</label>
                                    <input type="date" name="h_8" id="h_8" class="form-control" value="{{ $data->h_8 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_8_finished" value="1" {{ !empty($data->h_8_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_3">H-3</label>
                                    <input type="date" name="h_3" id="h_3" class="form-control" value="{{ $data->h_3 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_3_finished" value="1" {{ !empty($data->h_3_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h_2">H-2</label>
                                    <input type="date" name="h_2" id="h_2" class="form-control" value="{{ $data->h_2 }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_2_finished" value="1" {{ !empty($data->h_2_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="h">H</label>
                                    <input type="date" name="h" id="h" class="form-control" value="{{ $data->h }}">
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="form-check pt-4">
                                        <input type="checkbox" class="form-check-input" name="h_finished" value="1" {{ !empty($data->h_finished) ? 'checked' : null }}>
                                        <label class="form-check-label">Sudah selesai dilakukan</label>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </div>
</div>
@endsection
