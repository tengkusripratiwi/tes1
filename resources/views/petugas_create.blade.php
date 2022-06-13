<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Petugas</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
	<meta name="csrf-token" content="{{'csrf_token'}}">
</head>
<body>
	<div class="containner-fluid">
		<h2>Tambah Data Petugas</h2>
		<form action="{{url('/petugas/create')}}" method="post">
			{{csrf_field()}}
			{{method_field('POST')}}

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
			</div>
		</form>
	</div>

</body>
</html>