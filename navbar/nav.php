  <head>
    <link href="../support/favicon.ico" rel="icon" type="image/x-icon">
   <link href="support/favicon.ico" rel="icon" type="image/x-icon">
   
    <link rel="apple-touch-icon" type="image/x-icon" href = "support/favicon.ico"/>
    <meta name="robots" content="index,follow">
  </head>
  <style type="text/css">
    nav{
      font-size: 15px;
      border-bottom: 1px solid lightgrey;
      background-color: white;
    }
    .navbar-brand{
      width: 40px;
    }
  </style>
	
  <nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="logo.jpg" width="30" /></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-size: 20px; font-weight: bolder;">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">EON<span style="font-size: 20px"><i class="fa fa-dot"></i></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#grant">Grant</a>
      </li>
      <li class="nav-item">
        <span class="nav-item dropdown">
        <span class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px; font-weight: bolder;">
          Scholarship
        </span>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="min-width: 400px !important;">
          <a class="dropdown-item" href="#">Your matches</a><hr>
          <a class="dropdown-item" href="#">Sponsored Scholarship</a><hr>
          <a class="dropdown-item" href="#">Easy to Apply</a><hr>
          <a class="dropdown-item" href="#">Popular</a><hr>
          <a class="dropdown-item" href="#">States</a>
        </span>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">

    <?php 

    if (isset($_SESSION['id'])) {
      echo "<div class='notification'><i class='fa fa-bell'></i></div>";
    }

     ?>

      
     
    </div>
  </div>
</nav>


