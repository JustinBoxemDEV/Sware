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
                                    <div class="card">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><br>Pakketten<hr></h1>
                                        <div class="card-block">
                                            <h2 class="card-title">
                                                <a href="/pakketten/solo"><button class="btn btn-primary">[ : : Solo : : ]</button></a>
                                                <br>
                                                <a href="/pakketten/multi"><button class="btn btn-primary">[ : : Multi : : ]</button></a>
                                                <br>
                                                <a href="/sware-plus"><button class="btn btn-primary">[ : : &LT;S/ Ware&GT; Plus : : ]</button></a>
                                            </h2>
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
                                    <div class="card">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><br>Services<hr></h1>
                                        <div class="card-block">
                                            <h2 class="card-title">
                                                <a href="/webdevelopment"><button class="btn btn-primary">&LT;/Webdevelopment&GT;</button></a>
                                                <br>
                                                <a href="/e-maintenance"><button class="btn btn-primary">&LT;/E-Maintenance&GT;</button></a>
                                                <br>
                                                <a href="/e-services"><button class="btn btn-primary">&LT;/E-Cleaning&GT;</button></a>
                                            </h2>
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
                                    <div class="card">
                                        <h1 class="card-button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><br>Bestelpagina<hr></h1>
                                        <div class="card-block">
                                            <h2 class="card-title"><a href="{{ url('/shop') }}"><button class="btn btn-primary">[ : : Go2Shop : : ]</button></a></h2>
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