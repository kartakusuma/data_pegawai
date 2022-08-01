<nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Data Pegawai</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pegawai.index')}}">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('departemen.index')}}">Departemen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>
      </div>
    </div>
</nav>