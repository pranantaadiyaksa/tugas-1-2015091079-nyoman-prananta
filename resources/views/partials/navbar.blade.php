<nav class="navbar navbar-expand-lg bg-body-danger">
    <div class="container">
      <a class="navbar-brand" href="/home">JADWAL BOLA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{($title == "home")? 'active' : ''}}" href="/">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title == "about")? 'active' : ''}}" href="/about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title == "Blog")? 'active' : ''}}" href="/posts">post</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>