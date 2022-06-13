<!DOCTYPE html>
<html>
<head>
	<title>Data Petugas</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<h2 style="text-align: center;">Data Petugas</h2>
	<a href="{{url('/petugas/create')}}"><button class="btn btn-success">Tambah</button></a>

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>No Hp</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach($data_petugas as $data)
			<tr>
				<th>{{$loop->iteration}}</th>
				<th>{{$data->nama}}</th>
				<th>{{$data->alamat}}</th>
				<th>{{$data->email}}</th>
				<th>{{$data->no_hp}}</th>
				<th>
					<button class="btn btn-primary">Edit</button>
					<button class="btn btn-danger">Delete</button>
				</th>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>