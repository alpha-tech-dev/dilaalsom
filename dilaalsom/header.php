<?php session_start();
require 'dbconnect.php';
include 'includes/function.php';
?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script data-ad-client="ca-pub-9687196717745782" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <!-- offline material -->
  <!--link rel="stylesheet" href="css/material/css/materialize.min.css">
  
  <script type="text/javascrip">
    src="css/material/js/materialize.min.js"
  </script-->

  <!-- addition for materialize js and jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144042688-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-144042688-3');
  </script>
  <script data-ad-client="ca-pub-9687196717745782" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168672255-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-168672255-1');
  </script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DilaalSom</title>
  <meta name="title" content=" Dilaal Somali Advertsiment Market" />
  <meta name="description" content="Largest Advertisment platorm in Somali" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">Dilaalsom</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">


            <li class="lighten-2">
              <form>
                <div class="input-field ">
                  <input class="search-input" id="search" type="search" name="q" placeholder="Search..">
                  <label class="label-icon" for="search-input"><i class="material-icons">search</i></label>
                </div>
              </form>
            </li>
            <!--li>
		    	<select name="category">
          		  <option value=""><i class="material-icons"></i></option>
          
				  <?php
          echo displayCategories($cat);
          ?>
				  
				</select>
		    </li-->

            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>
            <li>

              <?php
              if (isset($_SESSION["firstname"])) {
                $buttons = "<li>
                                <a href='adform.php'>Place an advert</a>
                             </li> 
                                   <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'>
                                &nbsp;&nbsp;Hello,<b> " . $_SESSION["firstname"] . "&nbsp;&nbsp;</b></a>
                              </li>
                             <!-- Dropdown Structure -->
                              <ul id='dropdown1' class='dropdown-content'>
                                <li>
                                <a href='profile.php'>Profile</a>
                              </li>
                               <li>
                                <a href='logout.php'>Logout</a>
                              </li>
                              ";
              } else {
                $buttons = "<li>
                                <a href='login.php'>Login</a>
                              </li>
                              <li>
                                <a href='signup.php'>Sign Up</a>
                              </li>";
              }
              echo $buttons;
              ?>

            </li>
            <!--search dropdown->
            <div class="dropdown-content" id="dropdown-1">
            
             <input type="text" placeholder="Search..">
             <button type="submit" value="search">
			
			</div>
			<li>
			  <a class="dropdown-button" href="#" data-activates="dropdown-1"><i class="material-icons">search</i></a>
			</li>
			<!-- end of search-->
          </ul>
        </div>
      </div>
    </nav>

  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
      <a href="#search">Search Items</a>
    </li>
    <li>
      <a href="#popular">Strange & wonderful Products</a>
    </li>
    <li>
      <a href="#gallery">Gallery</a>
    </li>
    <?php
    if (isset($_SESSION["firstname"])) {
      $buttons = "<li>
                                <a href='adform.php'>Place an advert</a>
                             </li> 
                              <li>
                                <a href='profile.php'>Profile</a>
                              </li>
                               <li>
                                <a href='logout.php'>Logout</a>
                              </li>
                              ";
    } else {
      $buttons = "<li>
                                <a href='login.php'>Login</a>
                              </li>
                              <li>
                                <a href='signup.php'>Sign Up</a>
                              </li>";
    }
    echo $buttons;
    ?>
    <li>
      <a href="#contact">Contact Us</a>
    </li>
  </ul>



  <!-- Section: Search -->
  <!--section id = "search"-->
  <!-- id="search" class="section section-search teal darken-1 white-text center scrollspy" -->
  <div class="container dropdown-content" id="dropdown">
    <div class="row">
      <div class="col s12 m12">

        <form action="result.php" method="get" id="search" class="">
          <div class="row">
            <h4>Search specific products</h4>
            <div class="col m4 s4" style="height: 10px">
              <select name="category">
                <option value="">Category...</option>

                <?php
                echo displayCategories($cat);
                ?>

              </select>
            </div>
            <div class="col m4 s7" style="height: 10px">
              <input type="search" name="q" placeholder="Enter your keywords..." value="<?php echo $q; ?>">
            </div>
            <div class="col s1 m1">
              <button class="btn waves-effect waves-light s12 m1" type="submit"><i class="material-icons">search</i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/section-->