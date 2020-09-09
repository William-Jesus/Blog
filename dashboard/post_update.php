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
              <a class="nav-link active" href="posts.php" title="Posts">
                Posts <span class="sr-only">(current)</span>
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
          <h1 class="h2">Post update</h1>
          <a href="posts.php" class="btn btn-danger" title="Delete post">
            Delete
          </a>
        </div>
        <section class="dashboard-section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10 col-md-8">
                <form>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" required>
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" aria-describedby="slug" required>
                    <small id="slug" class="form-text text-muted">Only downcase letter seperate by '-': title-of-post</small>
                  </div>
                  <div class="form-group">
                    <label for="excerpt">Excerpt (optional)</label>
                    <textarea name="excerpt" id="excerpt" rows="2" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="post">Text</label>
                    <textarea name="post" id="post" rows="10" class="form-control" required></textarea>
                  </div>
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
  require_once "tempates/footer.php";
