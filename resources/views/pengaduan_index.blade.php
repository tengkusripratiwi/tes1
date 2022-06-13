<!DOCTYPE html>
<html>
<head>
	<title>Data Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<h2 style="text-align: center;">Data Pengaduan</h2>
	<button class="btn btn-success">Tambah</button>

	<table class="table table-bordered">
		<thead class="thead thead-dark">
			<tr>
				<th>Tanggal</th>
				<th>Nama Masyarakat</th>
				<th>Isi Laporan</th>
				<th>Foto</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach($data_pengaduan as $data)
			<tr>
				<th>{{$loop->iteration}}</th>
				<th>{{$data->masyarakat->nama}}</th>
				<th>{{$data->isi_laporan}}</th>
				<th>{{$data->foto}}</th>
				<th>{{$data->status}}</th>
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