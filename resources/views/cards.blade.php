@extends('layouts.app')

@section('content')
    <h2 class="text-center">Cards</h2>
    <div class="container py-5">
        <div class="row ">
            <div class="col d-flex justify-content-around gap-4 flex-wrap">
                @foreach ($cards as $curCard)
                    <div class="card" style="width:20rem;">
                        <img src="{{ Vite::asset('resources/img/' . $curCard['frontImage']) }}" alt="">
                        <div class="card-body">
                            {{ $curCard['name'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
