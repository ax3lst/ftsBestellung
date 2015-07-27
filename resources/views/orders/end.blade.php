@extends('app')

@section('content')
    <div class="container">
        <h1>Vielen Dank für deine Bestellung!</h1>

        <h3>Dein Code lautet: <b>{{ $code }}</b></h3>
        <p>Bitte mach einen Screenshot davon, damit du den Code nicht vergisst. <br>
        Geh mit dem Code zu einer Kasse und bezahl deine Bestellung, dann bekommst du dein Essen.</p>
    </div>
@endsection