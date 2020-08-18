@extends('site.app')
@section('title', 'Órden completada')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Órden completada</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Tu órden ha sido completada. Tu órden es la número : {{ $order->order_number }}.</p></main>
            </div>
        </div>
    </section>
@stop
