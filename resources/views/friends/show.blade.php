@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>NAMA TEMAN : {{ $friend['nama'] }}</h3>
            <h3>NO TLP TEMAN : {{ $friend['no_tlp'] }}</h3>
            <h3>ALAMAT TEMAN : {{ $friend['alamat'] }}</h3>
        </div>
    </div>
@endsection
