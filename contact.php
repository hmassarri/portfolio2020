<?php include 'includes/env.php'; ?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php include 'includes/head.php'; ?>

<body class="is-preload">
<?php include 'includes/leftNav.php'; ?>

  <!-- Main -->
  <div id="main">

    <!-- Contact -->
    <section id="contact" class="">
      <div class="container">

        <header>
          <h2>Contact</h2>
        </header>

        <p>Some witty line to get you to fill out the form goes here.  Or not.</p>

        <form method="post" action="#">
          <div class="row">
            <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Name" /></div>
            <div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
            <div class="col-12">
              <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-12">
              <input type="submit" value="Send Message" />
            </div>
          </div>
        </form>

      </div>
    </section>

  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/js.php'; ?>

</body>

</html>
