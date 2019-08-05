@extends('template')
@section('content')
<section class="main-section">
<div class="content">
<h1>Data Kontak</h1>
@if(Session::has('alert_message'))
<div class="alert alert-success">
<strong>{{Session::get('alert_message') }}</strong>
</div>
@endif
<hr>
<table class="table table-bordered">
<thead>
<tr>
<th>No.</th>
<th>Nama</th>
<th>Email</th>
<th>No. HP</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@php $no = 1; @endphp
@foreach($data as $datas)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $datas->nama }}</td>
<td>{{ $datas->email }}</td>
<td>{{ $datas->nohp }}</td>
<td>{{ $datas->alamat }}</td>
<td>
</td> 
</tr>
@endforeach
</tbody>
</table>
</div>
</section>
@endsection