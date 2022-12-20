@extends('layouts.app')

@section('content')
<div class="main_content_wrap y-3">
    <div class="main_content_elements">
        <div class="jumbotron">
            <h1 class="display-4">TrainCheck 24</h1>
            <p class="lead">Il portale di ogni Viaggiatore</p>
            <hr class="my-4">
            <p>Controlla in maniera costante ed aggiornata l'andamento dei treni in tutt'Italia.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{route('trains')}}" role="button">Scopri ora</a>
            </p>
        </div>
    </div>
</div>
@endsection