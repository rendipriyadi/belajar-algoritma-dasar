@extends('layout.app')

@section('title', 'Pattern Count')

@section('content')
    <div class="nt-1">
        <form method="post" action="{{ route('pattern_count.proses') }}">
            @csrf
            <label for="text">Text: </label>
            <input type="text" name="text"><br>
            <label for="pattern">Pattern: </label>
            <input type="text" name="pattern"><br>
            <button type="submit">Submit</button>
        </form>

    </div>
    <div class="mt-1">
        @if (isset($count))
            <p>Pattern count: {{ $count }}</p>
        @endif
    </div>
@endsection
