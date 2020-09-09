<?php
require_once "templates/header.php"
?>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="posts.php" title="Posts">
                Posts <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="users.php" title="Users">
                Users <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">New User</h1>
        </div>
        <section class="dashboard-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-md-8">
                <form>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <br>
                    <button type="button" class="btn btn-warning">Genarete new</button>
                  </div>
                  <hr class="mb-5">
                  <button type="submit" class="btn btn-success">Create</button>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  <?php
  require_once "tempates/footer.php";
