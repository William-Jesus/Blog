<?php
require_once "./templates/header.php";
?>
    <section class="section_min">
      <form class="tip-signin" action="#" method="POST" id="signInForm">
        <h3>Welcome</h3>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-orange">
          Sign in
        </button>
    </section>
    <?php
        require_once "./templates/footer.php"
    ?>

