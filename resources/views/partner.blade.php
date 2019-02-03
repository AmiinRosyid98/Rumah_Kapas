@extends('welcome')

@section('title','Partner')
@section('judul_halaman','Ini Halaman Partner')

@section('isi')

<style type="text/css">
	.pagination li{
		float: left;
		list-style-type: none;
		margin:5px;
	}
</style>

<p>Cari Data Pegawai :</p>
	<form action="/partner/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai .." >
		<input type="submit" value="CARI">
	</form>
		
	<br/>
<center>
	<a href="/daftar" class="btn btn-primary">+ Tambah Partner</a>
	<table class="table">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($partner as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/partner/edit/{{ $p->id_partner }}">Edit</a> | 
				<a href="/partner/hapus/{{ $p->id_partner }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $partner->currentPage() }} <br/>
	Jumlah Data : {{ $partner->total() }} <br/>
	Data Per Halaman : {{ $partner->perPage() }} <br/>
 
 
	<center>{{ $partner->links() }}</center>
</center>



@endsection