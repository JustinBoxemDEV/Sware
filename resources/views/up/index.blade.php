@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row up-panel-main">
        <div class="col-md-8 up-panel">
            <div class="panel panel-default">
                <div class="jumbotron"><h1>{{ $welcomeMsg }}</h1></div>

                <div class="panel-body up-panel-body">
                    <div class="row">
                        <div class="col-md-4 up-panel-box up-panel-box1">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="card" style="width: 20rem;">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></h1>
                                        <div class="card-block">
                                            <h2 class="card-title">Card title</h2>
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                        <div class="col-md-4 up-panel-box up-panel-box1">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="card" style="width: 20rem;">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h1>
                                        <div class="card-block">
                                            <h2 class="card-title">Card title</h2>
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                        <div class="col-md-4 up-panel-box up-panel-box1">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <div class="card" style="width: 20rem;">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1>
                                        <div class="card-block">
                                            <h2 class="card-title">Go2Shop</h2>
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection