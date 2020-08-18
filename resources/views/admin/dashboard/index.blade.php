@extends('admin.app')
@section('title') Usuarios @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <p>
                        Usuarios
                        <?php use App\Models\User; $users_count = User::all()->count(); ?>
                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                    </p>
                </div>
            </div>
@endsection
