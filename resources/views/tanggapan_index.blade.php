<!DOCTYPE html>
<html>
<head>
	<title>Data Tanggapan</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<h2 style="text-align: center;">Data Tanggapan</h2>
	<button class="btn btn-success">Tambah</button>

	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Isi Laporan</th>
				<th>Nama Petugas</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			@foreach($data_tanggapan as $data)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$data->tanggal}}</td>
				<td>{{$data->pengaduan->isi_laporan}}</td>
				<td>{{$data->petugas->nama}}</td>
				<td>
					<button class="btn btn-primary">Tambah</button>
					<button class="btn btn-danger">Edit</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>