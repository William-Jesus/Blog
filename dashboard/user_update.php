<?php
$pageTitle = "User Update";
require_once "templates/header.php";
require_once "templates/sidebar.php";
?>
  <div class="container-fluid">
    <div class="row">
    <?php echo sidebar($pageTitle); ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">User update</h1>
          <a href="users.php" class="btn btn-danger" title="Delete user">
            Delete
          </a>
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
                  <button type="submit" class="btn btn-info">Save changes</button>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  <?php
  require_once "templates/footer.php";
