@extends('layout.app')

@section('title', 'Hitung Huruf')

@section('content')
    <div class="mt-1">
        <form method="POST" action="{{ route('hitung_huruf.proses') }}">
            @csrf
            <label for="text">Input Text:</label><br>
            <textarea name="text" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Hitung Huruf">
        </form>
    </div>
    <div class="mt-1">
        @if (isset($letterCounts))
            <h2>Hasil Hitung Huruf</h2>
            <p>
                @foreach ($letterCounts as $char => $count)
                    “{{ $char }}”: {{ $count }},
                @endforeach
            </p>
        @endif
    </div>
@endsection
