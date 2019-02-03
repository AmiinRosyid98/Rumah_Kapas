@extends('welcome')

@section('title','Daftar')
@section('judul_halaman','Ini Halaman Daftar')

@section('isi')

	
	<h3>Data Partner</h3>

	<a href="/daftar"> Kembali</a>
	
	<br/>
	<br/>

	 

	<form action="/daftar/tambah_data" method="post">
		{{ csrf_field() }}
		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required="required" value="{{ old('nama') }}"><br>
					<span class="error">{{ $errors->first('nama') }}</span></td>

			</tr><br>
			
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan" required="required" value="{{ old('jabatan') }}"></td>
			</tr>
			<span class="error">{{ $errors->first('jabatan') }}</span>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" required="required" value="{{ old('umur') }}"></td>
			</tr>
			<span class="error">{{ $errors->first('umur') }}</span>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required="required" value="{{ old('alamat') }}"></td>
			</tr>
			<span class="error">{{ $errors->first('alamat') }}</span>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" required="required" value=""></td>
			</tr>
			<span class="error">{{ $errors->first('password') }}</span>
			<tr>
				<td>Konfirmasi Password</td>
				<td>:</td>
				<td><input type="password" name="konfirmasi_password" required="required" value=""></td>
			</tr>
			<span class="error">{{ $errors->first('konfirmasi_password') }}</span>
		</table>
		
		<input type="submit" value="Simpan Data">
	</form>

@endsection