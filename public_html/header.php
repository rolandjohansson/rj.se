<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>rolandjohansson.se</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/master.css">
  <script src="js/navbar.js" defer></script>
</head>

<body>
  <nav id="navbar">
    <div class="wrapper">
      <ul class="nav-header">
        <li>
          <a href="/rj.se/public_html/">rolandjohansson.se</a>
        </li>
        <li>
          <a href="" id="nav-toggle-button" onclick="event.preventDefault()">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <div class="relative-container">
      <ul class="nav-links hidden">
        <li>
          <ul>
            <li class="nav-link-category">
              <a href=""><span class="align-middle"></span> Tutorials<i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
              <ul class="nav-link-list">
                <li class="nav-link"><a href="tutorials-html-css.php" onclick="event.stopPropagation();">HTML & CSS</a></li>
                <li class="nav-link"><a href="#" onclick="event.stopPropagation();">JavaScript</a></li>
              </ul>
            </li>
            <li class="nav-link-category">
              <a href=""><span class="align-middle"></span> Portfolio<i class="fa fa-fw fa-caret-down" aria-hidden="true"></i></a>
              <ul class="nav-link-list">
                <li class="nav-link"><a href="portfolio.php" onclick="event.stopPropagation();">Graphic Design</a></li>
                <li class="nav-link"><a href="portfolio.php" onclick="event.stopPropagation();">Other projects</a></li>
              </ul>
              <a href="contact.php" onclick="event.stopPropagation();"><span class="align-middle"></span> Contact</a>
            </li>
          </ul>
        </li>
        <!-- target="_blank" rel="noopener noreferrer" -->
      </ul>
      </div> <!-- /.relative-container -->
    </div> <!-- /.wrapper -->
  </nav>
