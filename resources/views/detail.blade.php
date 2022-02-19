@extends('layouts.index')
@section('content')
  <center>
    <div class="row mb-2" style="width: 100%; padding: 1%;">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <center><div class="col-auto d-lg-block" style="padding-top: 10px;">
          <img width="180" src="/{{ $job->logo }}">
        </div></center>
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 
          {{ ($job->job_type === "Magang") ? 'text-success' : '' }}
          {{ ($job->job_type === "Purnawaktu") ? 'text-primary' : '' }}
          {{ ($job->job_type === "Sukarela") ? 'text-danger' : '' }}
          {{ ($job->job_type === "Paruh Waktu") ? 'text-warning' : '' }}
          ">{{ $job->job_type }}</strong>
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
          <p style="text-align: right;"><br>Last updated: {{ $job->updated_at->diffForHumans() }} by <a href="/pengguna/{{ $job->user->username }}">{{ $job->user->name }}</a></p>
        </div>
      </div>
    </div>
  </center>

  <center>
    <div class="row mb-2" style="width: 100%;" class="pl-1 pr-1">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <h3> Tentang Pengunggah: </h3>
        <a href="/pengguna/{{ $job->user->username }}">
          <div class="col-auto d-lg-block vertical-center">
              <img width="180" src="/{{ $job->user->pp }}">
          </div>
          <h4>{{ $job->user->name }}</h4>
        </a>
        <h5> <a href="{{ $job->user->tautan }}"> {{ $job->user->tautan }} </a></h5>
        <h5><a></a></h5>
      </div>
    </div>
  </center>

  <p style="padding-left: 2%;"><b>Lowongan Lainnya:</b></p>
  <center>
    <div class="row mb-2" style="width: 100%;">
      @foreach ($jobs as $job)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col-auto d-lg-block vertical-center">
                <a href="/loker/{{ $job->slug }}">
                  <img width="180" src="/{{ $job->logo }}">
                </a>
              </div>
              <div class="col p-4 d-flex flex-column position-static">
                <a href="/loker/{{ $job->slug }}">
                  <strong class="d-inline-block mb-2 
                  {{ ($job->job_type === "Magang") ? 'text-success' : '' }}
                  {{ ($job->job_type === "Purnawaktu") ? 'text-primary' : '' }}
                  {{ ($job->job_type === "Sukarela") ? 'text-danger' : '' }}
                  {{ ($job->job_type === "Paruh Waktu") ? 'text-warning' : '' }}
                  ">{{ $job->job_type }}</strong>
                  <h3 class="mb-0">{{ $job->title }}</h3>
                  <div class="mb-1 text-muted">{{ $job->name }}</div>
                  <p class="card-text mb-auto">Waktu Registrasi: {{ $job->registration_time }} | {{ $job->loc }} - {{ $job->method }}</p>
                  <a style="text-align: right;"><br><br>Last updated: {{ $job->updated_at->diffForHumans() }}</a>
                </a>
              </div>  
            </div>
        </div>
      @endforeach
    </div>
  </center>

@endsection