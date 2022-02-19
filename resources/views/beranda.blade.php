@extends('layouts.index')

@section('content')
    
  <form class="d-flex mx-2" action="/">
    <input class="form-control me-2" type="search" placeholder="Cari.." name="search" value="{{ request('search') }}">
    <button class="btn btn-outline-dark" type="submit">Cari</button>
  </form>
  
  <br>

  <center>
    @if ($jobs->count())
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
    @else
        <p class="text-center fs-4">Info lowongan tidak ditemukan.</p>
    @endif

    <div class="d-flex justify-content-center">
      {{ $jobs->links() }}
    </div>
  </center>
    
@endsection