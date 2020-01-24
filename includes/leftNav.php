<!-- Active Page -->
<?php
  function pageName() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  }
  $currentPage = pageName();
  //echo $currentPage;

  function folderName() {
    $url = ($_SERVER["SCRIPT_NAME"]);
    $items = explode('/', $url);
    return $items[sizeof($items) - 2];
  }
  $folderName = folderName();

?>

<!-- Header -->
<div id="header">

  <div class="top">

    <!-- Logo -->
    <div id="logo">
      <span class="image avatar48"><img src="<?php echo $root ?>images/checkerboard-pink.png" alt="" /></span>
      <h1 id="title">Hugo Massarri</h1>
      <p>UIX Designer + Developer</p>
    </div>

    <!-- Nav -->
    <nav id="nav">
      <ul>
        <li><a href="<?php echo $root . 'index.php' ?>" id="top-link" class="<?php echo $currentPage == 'index.php' ? 'active':NULL ?>"><span class="icon solid fa-home">Intro</span></a></li>
        <li><a href="<?php echo $root . 'portfolio.php' ?>" id="portfolio-link" class="<?php echo $folderName == 'portfolio' || $currentPage == 'portfolio.php' ? 'active':NULL ?>"><span class="icon solid fa-th">Portfolio</span></a></li>
        <li><a href="<?php echo $root . 'process.html' ?>" id="process-link" class="<?php echo $currentPage == 'process.html' ? 'active':NULL ?>"><span class="icon solid fa-cogs">Process</span></a></li>
        <li><a href="<?php echo $root . 'aboutme.html' ?>" id="about-link" class="<?php echo $currentPage == 'aboutme.html' ? 'active':NULL ?>"><span class="icon solid fa-user">About Me</span></a></li>
        <li><a href="<?php echo $root . 'contact.html' ?>" id="contact-link" class="<?php echo $currentPage == 'contact.html' ? 'active':NULL ?>"><span class="icon solid fa-envelope">Contact</span></a></li>
      </ul>
    </nav>

  </div>

  <div class="bottom">

    <!-- Social Icons -->
    <ul class="icons">
      <li><a href="#" class="icon brands fa-instagram"><span class="label">Twitter</span></a></li>
      <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
      <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
    </ul>

  </div>

</div>
