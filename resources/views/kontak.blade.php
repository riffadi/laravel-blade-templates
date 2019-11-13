@extends('layout.base')

@section('title', 'Kontak - Blade Templatas Laravel')

@section('konten')
	<section class="content">
	    <div class="card">
	        <div class="card-header">
				<p class="card-title">Ini adalah halaman kontak</p>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
				 	<tr>
				 		<td>Email</td>
				 		<td>mail@example.com</td>
				 	</tr>
				 	<tr>
				 		<td>Hp</td>
				 		<td>089-0676-7404</td>
				 	</tr>
				</table>
			</div>
		</div>
	</section>
@endsection