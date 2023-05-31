@extends('layouts.main')

@section('container')
    @if (isset($biodata))
        <p>Name : {{ $biodata['name'] }}</p>
        <p>Nim : {{ $biodata['nim'] }}</p>
        <p>Address : {{ $biodata['address'] }}</p>
        @foreach ($biodata['hobby'] as $hobbi)
            <p>Hobby : {{ $hobbi['name'] }}</p>
        @endforeach
    @endif
@endsection
