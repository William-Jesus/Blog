<?php
$pageTitle = "Dashboard";

require_once "templates/header.php"
?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="posts.php" title="Posts">
                Posts
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php" title="Users">
                Users
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard Home</h1>
        </div>
        <section class="dashboard-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-4 text-center">
                <h2 class="h3">
                  Written Posts
                  <br>
                  <span class="badge badge-success mt-3">15</span>
                </h2>
              </div>
              <div class="col-12 col-sm-4 text-center">
                <h2 class="h3">
                  Signed up Users
                  <br>
                  <span class="badge badge-success mt-3">3</span>
                </h2>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

  <?php
  require_once "tempates/footer.php";
