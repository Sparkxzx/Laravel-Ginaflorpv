@extends('admin.app')
@section('content')
@section('title') Contactos @endsection
<div class="app-title">
    <div>
        <h1><i class="fa fa-tags"></i> Contactos</h1>
        <p>Lista de Contactos</p>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
	<thead class="thead-info">
		<tr>
			<th>#</th>
			<th>Nombre del usuario</th>
			<th class="text-center">Correo</th>
			<th class="text-center">Télefono celular</th>
			<th class="text-center">Asunto</th>
			<th class="text-center">Mensaje</th>
		</tr>
	</thead>
<tbody >
		@foreach($contacto as $contacto)
		<tr>
			<td >{{$contacto->id}}</td>
			<td >{{$contacto->nombre}}</td>
			<td class="text-center">{{$contacto->email}}</td>
			<td class="text-center">{{$contacto->telefono}}</td>
			<td class="text-center">{{$contacto->asunto}}</td>
			<td class="text-center">{{$contacto->mensaje}}</td>
			<td>

				<form method="post" action="{{url('/admin/contacto/'.$contacto->id)}}">
					@csrf

					{{method_field('DELETE')}}
					<button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('¿Eliminar mensaje?');">Eliminar</button>

				</form>

				</td>
				<td><button class="btn btn-sm btn-warning"><a href="https://mail.google.com/">Responder</a></button></td>
		</tr>
		@endforeach
	</tbody>
        </div>
        </div>
    </div>
</div>
</table>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush

