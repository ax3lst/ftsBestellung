@extends('app')

@section('content')

    <div class="container">
        <h1>Warenkorb</h1>

        @if(session()->has('order'))

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Essen</h4>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Preis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('order') as $order)
                            <tr>
                                <td>{{ \App\Order::where('slug', $order)->first()->name }}</td>
                                <td>{{ \App\Order::where('slug', $order)->first()->price }}€</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-primary" href="/order/finish">Bestellen</a>
        @else
            <h3>Noch keine Waren im Warenkorb <small><a class="btn btn-success" href="/order">zum Menü</a></small></h3>
        @endif

    </div>

@endsection('content')