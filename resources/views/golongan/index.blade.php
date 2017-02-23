@extends('layouts.app')
@section('golongan')
	active
@endsection
@section('content')
<h1>D-GOLONGAN</h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
					<a href="{{route('golongan.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="col-md-6 col-md-offset-4">
	<a  href="{{url('golongan/create')}}" class="btn btn-primary form-control"S>Tambah</a>
</div>
@endsection