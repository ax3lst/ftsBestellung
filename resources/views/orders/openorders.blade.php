@extends('app')

@section('content')
    <div class="container">
        <h1>Offene Bestellungen</h1>

        @if($orders != null)
            @foreach ($orders as $order)
                <h4>Code: <b>{{ $order->code }}</b></h4>
                <h4>Essen:</h4>
                <ul>
                    @foreach (explode("|%", $order->order) as $stringOrder)
                        <li>{{ \App\Order::where('slug', $stringOrder)->first()->name }}</li>
                    @endforeach
                </ul>
                <h4>Preis: {{ $order->calculatePrice() }}€</h4>
                <a class="btn btn-danger btn-sm" href="/order/delete/{{ $order->code }}">Löschen</a>
            @endforeach
            <hr>
        @else
            <h3>Keine offenen Bestellungen</h3>
        @endif
    </div>
@endsection