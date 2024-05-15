<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <img src="<?= $urlProject ?>/assets/images/images.png" alt="Logo" style="width: 50px; height: 50px; margin-right:5px;">
        <a class="navbar-brand" href="../../index.php">Knowledge Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= $urlProject ?>/users/controllers/controller-home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $urlProject ?>/users/views/view-about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $urlProject ?>/users/controllers/controller-test.php">Tests</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $urlProject ?>/admin/controllers/controller-signin.php">Admin-Hub</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>