@extends('dashboard.layouts.main')

@section('container')
  <a href="/dashboard" class="btn btn-success">
    <span data-feather="arrow-left"></span> Kembali ke daftar info lowongan saya
  </a>
  <a href="/dashboard/{{ $job->id }}/edit" class="btn btn-warning">
    <span data-feather="edit"></span> Ubah
  </a>
  
  <form action="/dashboard/{{ $job->slug }}" method="POST" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus info lowongan?')">
      <span data-feather="x-circle"></span> Hapus
    </button>
  </form>
  <div class="row mb-2"> 
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <center>
        <div class="col-auto d-lg-block" style="padding-top: 10px;">
          <img width="180" src="/{{ $job->logo }}">
        </div>
      </center>
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 {{  ($job->job_type === "Magang") ? 'text-success' : (($job->job_type === "Purnawaktu") ? 'text-primary' : 'text-danger')}}">{{ $job->job_type }}</strong>
        <h3 class="mb-0">{{ $job->title }}</h3>
        <div class="mb-1 text-muted">{{ $job->name }}</div>
        <p class="card-text mb-auto">Waktu Registrasi: {{ $job->registration_time }} | {{ $job->loc }} - {{ $job->method }}</p>
        <p style="text-align: left;"><br><b>Kriteria pelamar:</b><br>
        Pendidikan minimal: {{ $job->education }}<br>
        Jurusan: {{ $job->major }}<br>
        Kriteria lainnya: <br>{{ $job->criteria }}<br>
        <br><b>Deskripsi:</b><br>{{ $job->description }}<br>
        <br><b>Cara Melamar:</b> <br>{{ $job->apply }}<br>
        <br><b>Narahubung:</b> <br>{{ $job->cp }}<br>
        <br><b>Tentang Perusahaan / Organisasi:</b> <br>
        <u>Nama Resmi:</u> <br>
        {{ $job->legal_name }}<br><br>
        <u>Lokasi:</u> <br>
        {{ $job->address }}, Kec. {{ $job->district }}, {{ $job->city }}, {{ $job->province }}<br><br>
        <u>Kategori:</u> <br>
        {{ $job->company_type }}<br><br>
        <u>Jumlah Pekerja:</u> <br>
        {{ $job->employees }} pekerja<br><br>
        <u>Profil:</u> <br>
        {{  $job->profile }}<br>
        <br><b>Sumber Info:</b> <br><a href="{{ $job->source }}">{{ $job->source }}</a><br>
        <br><b>Flyer / Poster:</b> <br><img src="/{{ $job->flyer }}" style="max-width: 100%"/></p>
        <p style="text-align: right;"><br>Last updated: {{\Carbon\Carbon::parse($job['updated_at'])->diffForHumans() }}</p>
      </div>
    </div>
  </div>
@endsection