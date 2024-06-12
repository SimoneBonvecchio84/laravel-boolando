@extends('layouts.app')

@section('content')
    <h2 class="text-center">Cards</h2>
    <div class="container py-5">
        <div class="row ">
            <div class="col d-flex justify-content-around gap-4 flex-wrap">
                @foreach ($cards as $curCard)
                    <div class="card position-relative" style="width:20rem;">
                        <img class="img-fluid backImage "  src="{{ Vite::asset('resources/img/' .$curCard['backImage']) }}" alt="">
                        <img class="frontImage img-fluid position-absolute top-0 start-0" src="{{ Vite::asset('resources/img/' . $curCard['frontImage']) }}" alt="">
                        <div class="card-body">
                            <p>
                                {{ $curCard['brand'] }}
                            </p>
                            <h5>
                                {{ $curCard['name'] }}
                            </h5>
                            <span> {{ $curCard['price'] }} </span>
                            @foreach ($curCard['badges'] as $curBadge )
                                <span>
                                    {{ $curBadge['value'] }} 
                                    @if ($curBadge['type'] === "discount")
                                                                 
                                    @endif
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
