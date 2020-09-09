<?php
function pageTitle($title = null) {
    if (is_null($title)){
        return "The Blog Project";
    }
    return $title . " | The Blog Project";
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo pageTitle($pageTitle); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/css/bootstrap.4.5.0.min.css" rel="stylesheet">
  <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow navbar-expand-md">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">The Blog Project</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#mobileMenuExpandButton" aria-controls="mobileMenuExpandButton" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="mobileMenuExpandButton">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php" title="Public Home">Public Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php" title="Sign out">Sign out</a>
        </li>
      </ul>
    </div>
  </nav>
