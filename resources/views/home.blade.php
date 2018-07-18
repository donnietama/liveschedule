@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row p-0">
        <div class="col-md-2 bg-dark p-0">
            <ul class="text-capitalize p-0" style="list-style: none; height: 100vh;">
                <a href="#">
                    <li class="bg-success text-white p-4">kembali ke halaman awal</li>
                </a>
                <a href="/create">
                    <li class="text-white p-4">tambah data</li>
                </a>
            </ul>
        </div>
        <div class="col-md-10 p-4">
            <display-for-admin></display-for-admin>
        </div>
    </div>
</div>
@endsection
