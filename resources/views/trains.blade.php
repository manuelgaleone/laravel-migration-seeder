@extends('layouts.app')

@section('content')
<div class="main_content_wrap y-3">
    <div class="main_content_elements">
        <div class="container">
            <div class="row">
                @foreach($trains as $train)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://www.thetrainline.com/cmsmedia/cms/9486/man_phone-hero_2x.jpg" alt="Card image.">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            {{$train->azienda}}
                        </h5>
                        <p>
                            <em>
                                {{$train->codice_treno}}
                            </em>
                        </p>
                        <p class="card-text">
                            Da: {{$train->stazione_di_partenza}}
                        </p>
                        <p class="card-text">
                            A: {{$train->stazione_di_arrivo}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection