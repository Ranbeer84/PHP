<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
    // echo '<h3>' . $GET['username'] . '</h3>';
    echo '<h3>' . $_POST['username'] . '</h3>';
  } ?>

  <!-- Pass data through a link -->
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Ranbeer">Link</a>

  <br><br>

  <!-- Pass data through a form -->

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label>NAME: </label>
    <input type="text" name="name">
  </div>
  <br>
  <div>
    <label>PASSWORD: </label>
    <input type="password" name="password">
  </div>
  <br>
  <input type="Submit" name="submit" value="Submit">
</form>
