<!DOCTYPE html>
<html>
<head>
	<title>Edit Partner</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Partner</h3>

	<a href="/daftar"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/partner/update_data" method="post">
		@foreach($partner as $p)
		{{ csrf_field() }}
		<input type="hidden" name="id_partner"  value="{{ $p->id_partner }}"> <br/>
		Nama <input type="text" name="nama" required="required" value="{{ $p->nama }}"> <br/>
		Jabatan <input type="text" name="jabatan" required="required" value="{{ $p->jabatan }}" > <br/>
		Umur <input type="number" name="umur" required="required" value="{{ $p->umur }}"> <br/>
		Alamat <textarea name="alamat" required="required">{{ $p->alamat }}</textarea> <br/>
		
		@endforeach
		<input type="submit" value="Update Data">
	</form>

</body>
</html>