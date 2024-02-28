@extends('home.parent')

@section('content')

<div class="container">
    <h1 class="row card">
        welcome {{ Auth::user()->name }}
    </h1>
</div>

@endsection
