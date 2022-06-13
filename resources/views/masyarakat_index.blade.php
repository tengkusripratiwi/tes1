<!DOCTYPE html>
<html>
<head>
	<title>Data Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<h2 style="text-align: center;">Data Masyarakat</h2>

	<a href="{{url('/masyarakat/create' )}}"><button class="btn btn-success">Tambah</button></a>

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>No HP</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach($data_masyarakat as $data)
			<tr>
				<th>{{$loop->iteration}}</th>
				<th>{{$data->nik}}</th>
				<th>{{$data->nama}}</th>
				<th>{{$data->j_kelamin}}</th>
				<th>{{$data->alamat}}</th>
				<th>{{$data->email}}</th>
				<th>{{$data->no_telepon}}</th>
				<th>
					<button class="btn btn-primary">Edit</button>
					<button class="btn btn-danger">Hapus</button>
				</th>
			</tr>
			@endforeach
		</tbody>
	</table>


</body>
</html>