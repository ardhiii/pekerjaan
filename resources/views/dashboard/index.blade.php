@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat datang, {{ auth()->user()->name }}!</h1>
  </div>
  
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/create" class="btn btn-primary mb-3">Buat info lowongan baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Jenis Pekerjaan</th>
          <th scope="col">Perusahaan / Organisasi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($jobs as $job)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $job->title }}</td>
          <td>{{ $job->job_type}}</td>
          <td>{{ $job->name }}</td>
          <td>
              <a href="/dashboard/detail/{{ $job->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/{{ $job->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/{{ $job->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus info lowongan?')"><span data-feather="x-circle"></button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection