@extends('layouts.app')

@section('content')
<h2>cards</h2>
<div class="container">
    <div class="row">
        <div class="col">
            @foreach ($cards as $curCard )
                {{ $curCard['name'] }}
            @endforeach
        </div>
    </div>
</div>
@endsection