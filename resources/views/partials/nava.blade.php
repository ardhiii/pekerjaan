<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand" href="/">
      <img src="/{{ ('job/job-logos/p.svg') }}" alt="" width="30" height="30" class="d-inline-block align-text-top"> PEKERJAAN.ID
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li>
          <a class="nav-link {{  ($active === "beranda") ? 'active' : ''}}" aria-current="page" href="/">Beranda</a>
        </li>
        <li>
          <a class="nav-link {{  ($active === "unggah") ? 'active' : ''}}" href="/dashboard/create">Unggah</a>
        </li>
        <li>
          <a class="nav-link {{  ($active === "lainnya") ? 'active' : ''}}" href="/lainnya">Lainnya</a>
        </li>
      </ul>
    </div>
  </div>
</nav>