<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white p-3 px-md-5 py-md-3 fixed-top shadow-sm">
  <a class="navbar-brand" href="#">
      <img src="./assets/img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportedContent" aria-controls="#navbarsupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php" onclick="return confirm('Apakah yakin?');">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</header>