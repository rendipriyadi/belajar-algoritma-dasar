@extends('layout.app')

@section('title', 'Urutkan Array')

@section('content')
    <div class="nt-1">
        @foreach ($sortedArray as $item)
            {{ $item }},
        @endforeach
    </div>
@endsection
