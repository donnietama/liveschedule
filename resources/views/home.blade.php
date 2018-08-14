@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row p-0">
        @include('layouts.sidebar')
        <div class="col-md-11 p-4">
            <display-for-admin></display-for-admin>
        </div>
    </div>
</div>
@endsection
