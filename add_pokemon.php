<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>add pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<div class="container">  
  <form id="contact" action="add.php" method="post">
    <h3>Add pokemon</h3>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="type" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" name="height" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Type your Message Here...." name="weight" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Type your Message Here...." name="level" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Type your Message Here...." name="content" type="text" tabindex="5" required></input>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>
