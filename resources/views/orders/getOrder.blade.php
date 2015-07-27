@extends('app')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Essen</h4>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Preis</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Grillwurst</td>
                        <td>2€</td>
                        <td><a class="btn btn-success btn-sm" href="/order/type/grillwurst">In den Warenkorb</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <hr>

        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Trinken</h4>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Preis</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mineralwasser</td>
                        <td>1€</td>
                        <td><a class="btn btn-success btn-sm" href="/order/type/wasser">In den Warenkorb</a></td>
                    </tr>
                    <tr>
                        <td>Apfelschorle</td>
                        <td>1,5€</td>
                        <td><a class="btn btn-success btn-sm" href="/order/type/apfelschorle">In den Warenkorb</a></td>
                    </tr>
                    <tr>
                        <td>Fanta</td>
                        <td>1,5€</td>
                        <td><a class="btn btn-success btn-sm" href="/order/type/fanta">In den Warenkorb</a></td>
                    </tr>
                    <tr>
                        <td>Cola</td>
                        <td>1,5€</td>
                        <td><a class="btn btn-success btn-sm" href="/order/type/cola">In den Warenkorb</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
@endsection