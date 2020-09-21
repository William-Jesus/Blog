<?php
require_once "functions/db_connect.php";
require_once "./templates/header.php";


?>
  <section class="site-hero">
    <h1><span>The Blog Project </span>is a learning experience</h1>
    <h2>Check out our latests posts to find some good work done in the web development world</h2>
  </section>
  <main>
    <section class="post-list">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="post-item item-highlight">
              <div class="post-item-content">
                <h3> Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi pariatur, aliquid at numquam aperiam
                  velit laboriosam, esse vero, maxime facilis explicabo voluptate dolores? Libero animi itaque porro
                  quia cupiditate? Enim?</p>
                <p>Aperiam voluptate obcaecati eum blanditiis voluptates ipsam voluptatum repellendus. Molestiae
                  deleniti, totam sed, saepe magni eos, reiciendis temporibus pariatur porro ipsam mollitia assumenda
                  suscipit praesentium adipisci officiis illo odio natus? Ipsum totam a ratione earum et sit provident
                  saepe veniam eveniet porro beatae vitae in error commodi vel amet fuga, consequatur similique nemo!
                  Dignissimos quisquam quaerat itaque molestias, reiciendis magni!</p>
              </div>
              <hr>
              <div class="post-item-meta">
                <h4 class="post-author"><em>John Doe</em></h4>
                <a href="post.php" class="post-link btn btn-pink" title="Continue reading">Continue reading</a>
                <p class="post-date">
                <i class="fa fa-calendar"></i>
                Jan 1, 2020
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="post-item">
              <div class="post-item-content">
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi pariatur, aliquid at numquam aperiam
                  velit laboriosam, esse vero, maxime facilis explicabo voluptate dolores? Libero animi itaque porro
                  quia cupiditate? Enim?</p>
                <p>Aperiam voluptate obcaecati eum blanditiis voluptates ipsam voluptatum repellendus. Molestiae
                  deleniti, totam sed, saepe magni eos, reiciendis temporibus pariatur porro ipsam mollitia assumenda
                  suscipit praesentium adipisci officiis illo odio natus? Ipsum totam a ratione earum et sit provident
                  saepe veniam eveniet porro beatae vitae in error commodi vel amet fuga, consequatur similique nemo!
                  Dignissimos quisquam quaerat itaque molestias, reiciendis magni!</p>
              </div>
              <hr>
              <div class="post-item-meta">
                <h4 class="post-author"><em>John Doe</em></h4>
                <a href="post.php" class="post-link btn btn-pink" title="Continue reading">Continue reading</a>
                <p class="post-date">
                <i class="fa fa-calendar"></i>
                Jan 1, 2020
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="post-item">
              <div class="post-item-content">
                <h3> Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi pariatur, aliquid at numquam aperiam
                velit laboriosam, esse vero, maxime facilis explicabo voluptate dolores? Libero animi itaque porro
                quia cupiditate? Enim?</p>
                <p>Aperiam voluptate obcaecati eum blanditiis voluptates ipsam voluptatum repellendus. Molestiae
                deleniti, totam sed, saepe magni eos, reiciendis temporibus pariatur porro ipsam mollitia assumenda
                suscipit praesentium adipisci officiis illo odio natus? Ipsum totam a ratione earum et sit provident
                saepe veniam eveniet porro beatae vitae in error commodi vel amet fuga, consequatur similique nemo!
                Dignissimos quisquam quaerat itaque molestias, reiciendis magni!</p>
              </div>
              <hr>
              <div class="post-item-meta">
                <h4 class="post-author"><em>John Doe</em></h4>
                <a href="post.php" class="post-link btn btn-pink" title="Continue reading">Continue reading</a>
                <p class="post-date">
                  <i class="fa fa-calendar"></i>
                  Jan 1, 2020
                </p>
              </div>
            ​</div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  require_once "./templates/footer.php";
  require_once "functions/db_disconnect.php";
  ?>

