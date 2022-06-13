	<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Masyarakat</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
	<div class="container-fluid">
		<h2>Tambah Data Masyarakat</h2>
		<form method="post" action="{{url('/masyarakat/create')}}">
			{{csrf_field()}}
			{{method_field('POST')}}

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="text" name="nik" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<input type="text" name="j_kelamin" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input type="text" name="email" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No Telepon</label>
					<div class="col-sm-10">
						<input type="text" name="no_telepon" class="form-control" required>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10 offset-2">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
		</form>
	</div>

</body>
</html>