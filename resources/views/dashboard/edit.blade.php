@extends('layouts.index')

@section('content')
<div style="padding-left: 5px">
    <a href="/dashboard" class="btn btn-success">
        <span data-feather="arrow-left"></span>< Kembali ke daftar info lowongan saya
    </a>
</div>

    <div class="d-flex justify content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ubah Info Lowongan</h1>
    </div>

    <div class="col-lg-8 mx-2">
        <form method="post" action="/dashboard/{{ $job->id }}" class="mb-5" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <p class="text-danger">*Wajib diisi</p>
            <div class="mb-3">
                <label for="job_type" class="form-label">Jenis Pekerjaan<a class="text-danger">*</a></label>
                <select type="text" class="form-control" id="job_type" name="job_type" value="{{ old('job_type', $job->job_type) }}">
                        <option value="Purnawaktu">Purnawaktu</option>
                        <option value="Magang">Magang</option>
                        <option value="Sukarela">Sukarela</option>
                        <option value="Paruh Waktu">Paruh Waktu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Judul / Peran<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $job->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug<a class="text-danger">*</a></label>
                <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $job->slug) }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Perusahaan / Organisasi<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $job->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="registration_time" class="form-label">Waktu Registrasi<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('registration_time') is-invalid @enderror" id="registration_time" name="registration_time" required value="{{ old('registration_time', $job->registration_time) }}">
                @error('registration_time')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="method" class="form-label">Metode Kerja<a class="text-danger">*</a></label>
                <select type="text" class="form-control" id="method" name="method" value="{{ old('method', $job->method) }}">
                    <option value="Ke Kantor">Ke Kantor</option>
                    <option value="Daring">Daring</option>
                    <option value="Ke Kantor & Daring">Ke Kantor & Daring</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="loc" class="form-label">Lokasi<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('loc') is-invalid @enderror" id="loc" name="loc" required value="{{ old('loc', $job->loc) }}">
                @error('loc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo Perusahaan / Organisasi<a class="text-danger">*</a></label>
                <input type="hidden" name="oldLogo" value="{{ $job->logo }}">
                @if($job->logo)
                <img src="{{ asset('storage/' . $job->logo) }}" class="logo-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="logo-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo" required onchange="previewLogo()">
                @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company_type" class="form-label">Industri Perusahaan / Fokus Isu Organisasi</label>
                <input type="text" class="form-control" id="company_type" name="company_type" value="{{ old('company_type', $job->company_type) }}">
            </div>
            <div class="mb-3">
                <label for="education" class="form-label">Pendidikan Minimal</label>
                <select type="text" class="form-control" id="education" name="education" value="{{ old('education', $job->education) }}">>
                    <option value="PAUD">PAUD</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA / SMK</option>
                    <option value="D-1">D-1</option>
                    <option value="D-2">D-2</option>
                    <option value="D-3">D-3</option>
                    <option value="D-4 / S-1">D-4 / S-1</option>
                    <option value="S-2">S-2</option>
                    <option value="S-3">S-3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="major" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="major" name="major" value="{{ old('major', $job->major) }}">
            </div>
            <div class="mb-3">
                <label for="criteria" class="form-label">Kriteria</label>
                <input type="text" class="form-control" id="criteria" name="criteria" value="{{ old('criteria', $job->criteria) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $job->description) }}">
            </div>
            <div class="mb-3">
                <label for="apply" class="form-label">Cara Melamar<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('apply') is-invalid @enderror" id="apply" name="apply" required value="{{ old('apply', $job->apply) }}">
                @error('apply')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="source" class="form-label">Tautan Sumber Info Lowongan<a class="text-danger">*</a></label>
                <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source" required value="{{ old('source', $job->source) }}">
                @error('source')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cp" class="form-label">Narahubung</label>
                <input type="text" class="form-control" id="cp" name="cp" value="{{ old('cp', $job->cp) }}">
            </div>
            <div class="mb-3">
                <label for="legal_name" class="form-label">Nama Resmi Perusahaan / Organisasi<a class="text-danger">*</a></label>
                <input type="text" class="form-control" id="legal_name" name="legal_name" value="{{ old('legal_name', $job->legal_name) }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat Perusahaan</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $job->address) }}">
            </div>
            <div class="mb-3">
                <label for="district" class="form-label">Kecamatan Perusahaan</label>
                <input type="text" class="form-control" id="district" name="district" value="{{ old('district', $job->district) }}">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Kab / Kota Perusahaan</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $job->city) }}">
            </div>
            <div class="mb-3">
                <label for="province" class="form-label">Provinsi Perusahaan</label>
                <select class="form-select" name="province" value="{{ old('province', $job->province) }}">>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                    <option value="Aceh">Aceh</option>
                    <option value="Bali">Bali</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                    <option value="Banten">Banten</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Lampung">Lampung</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Papua">Papua</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="employees" class="form-label">Jumlah Pekerja Perusahaan</label>
                <input type="text" class="form-control" id="employees" name="employees" value="{{ old('employees', $job->employees) }}">
            </div>
            <div class="mb-3">
                <label for="flyer" class="form-label">Poster / Flyer</label>
                <input type="hidden" name="oldFlyer" value="{{ $job->flyer }}">
                @if($job->flyer)
                <img src="{{ asset('storage/' . $job->flyer) }}" class="flyer-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                <img class="flyer-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('flyer') is-invalid @enderror" type="file" id="flyer" name="flyer" onchange="previewFlyer()">
                @error('flyer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewLogo() {
            const logo = document.querySelector('#logo');
            const logoPreview = document.querySelector('.logo-preview');

            logoPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(logo.files[0]);

            oFReader.onload = function(oFREvent) {
                logoPreview.src = oFREvent.target.result;
            }
        }

        function previewFlyer() {
            const flyer = document.querySelector('#flyer');
            const flyerPreview = document.querySelector('.flyer-preview');

            flyerPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(flyer.files[0]);

            oFReader.onload = function(oFREvent) {
                flyerPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection