@extends('site.app')
@section('title', 'Confirmar págo')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Confirmar págo</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <h3></h3>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Detalles de envío, favor de llenar todos los campos</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>Nombre(s)</label>
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                    @error ('first_name')
                                    <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                          <strong>Falta el nombre(s)</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                    @enderror
                                    <div class="col form-group">
                                        <label>Apellido(s)</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                    @error ('last_name')
                                    <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                          <strong>Falta el apellido(s)</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                @error ('address')
                                <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                      <strong>Falta la dirección</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                @enderror
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ciudad</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    @error ('city')
                                    <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                          <strong>Falta la ciudad</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                    @enderror
                                    <div class="form-group col-md-6">
                                        <label>País</label>
                                        <input type="text" class="form-control" name="country">
                                    </div>
                                </div>
                                @error ('country')
                                <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                      <strong>Falta el país</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                @enderror
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Código postal</label>
                                        <input type="text" class="form-control" name="post_code">
                                    </div>
                                    @error ('post_code')
                                    <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                          <strong>Falta el código postal</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                    @enderror
                                    <div class="form-group  col-md-6">
                                        <label>Número de télefono</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                    @error ('phone_number')
                                    <div class="alert bg-danger shadow alert-dismissible fade show text-center" role="alert">
                                          <strong>Falta el número de télefono</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                    <small class="form-text text-muted">nunca compartiremos su correo electrónico con nadie más.</small>
                                </div>
                                <div class="form-group">
                                    <label>Notas de la órden</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Tu orden</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Total a págar: </dt>
                                            <dd class="text-right h5 b"> {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Confirmar págo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@stop
