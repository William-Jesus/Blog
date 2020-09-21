<?php
$pageTitle = "Dashboard";

require_once "templates/header.php";
require_once "templates/sidebar.php";
?>

  <div class="container-fluid">
    <div class="row">

    <?php echo sidebar(); ?>

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
  require_once "templates/footer.php";
