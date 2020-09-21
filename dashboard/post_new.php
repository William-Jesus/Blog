<?php
$pageTitle = 'New Post';
require_once "templates/header.php";
require_once "templates/sidebar.php";
?>
  <div class="container-fluid">
    <div class="row">
    <?php echo sidebar($pageTitle); ?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">New Post</h1>
        </div>
        <section class="dashboard-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-md-8">
              <?php require_once "templates/post_form.php"; ?>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  <?php
  require_once "templates/footer.php";
