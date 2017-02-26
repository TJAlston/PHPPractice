<?php
  define("TITLE", "Contact | Franklin's Fine Dining");

  include("includes/header.php");
?>

<div id="contact">

  <hr>
  <h1> Get in touch with us!</h1>

  <form method="post" action="" id="contact-form">
    <label for="name">Your name</label>
    <input type="text" id="name" name="name"></input>

    <label for="email">Your email</label>
    <input type="email" id="email" name="email"></input>

    <label for="message">Send us a message</label>
    <textarea id="message" name="message"></textarea>

    <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe"></input>
    <label for="subscribe">Subscribe to newsletter</label>

    <input type="submit" class="button next" name="contact_submit" value="Send Message">

  </form>

</div>


<?php
  include("includes/footer.php");
?>
