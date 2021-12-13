<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data PKL</h4>
		<h6><a target="_blank" href="https://www.badungkab.go.id">Website Resmi Kabupaten Badung</a></h5>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>No HP</th>
					<th>Instansi</th>
					<th>Jurusan/Prodi</th>
					<th>Bidang Dipilih</th>
					<th>Tanggal Upload</th>
					<th>Awal Pkl</th>
					<th>Akhir Pkl</th>
			</tr>
			@php
				$i=1;
			@endphp
	 </thead>
			@foreach($siswas as $f)
			<tbody>
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $f->nim }}</td>
					<td>{{ $f->nama }}</td>
					<td>{{ $f->hp }}</td>
					<td>{{ $f->asal_sekolah }}</td>
					<td>{{ $f->prodi }}</td>
					<td>{{ $f->bidang }}</td>
					<td>{{ $f->created_at }}</td>
					<td>{{ $f->awalpkl }}</td>
					<td>{{ $f->akhirpkl }}</td>
					</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
