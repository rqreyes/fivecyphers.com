<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>The Book of Five Cyphers | Contact</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body class="book">

		<?php require_once('nav.php'); ?>

    <header class="int">
      <section class="row column">
          <h1 class="title"><span class="book-of">the book of</span><br><span class="five-cyphers">FIVE CYPHERS</span><br></h1>
          <h2 class="author">cory howell</h2>
      </section>
    </header>

		<section>
      <div class="row">
        <div class="medium-6 medium-centered columns">
          <h3 class="text-center">Contact Us</h3>
          <p>Questions, comments, want to contribute, or interested in discussing bboying/bgirling in general? We're open to it all and we'd love to hear from you!</p>
        </div>
      </div>
      <div class="row">
        <form class="medium-6 medium-centered columns" action="thank-you.php" method="post">
          <div class="row">
            <div class="medium-6 columns">
              <label>First Name *
                <input type="text" name="userFirstName" maxlength="50" required/>
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Last Name *
                <input type="text" name="userLastName" maxlength="50" required/>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="medium-6 columns">
              <label>Email Address *
                <input type="email" name="userEmail" maxlength="50" required/>
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Phone Number
                <input type="tel" name="userPhone" maxlength="50"/>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <label>Questions / Comments *
                <textarea name="userMessage" maxlength="500" required></textarea>
              </label>
              <label>
                <input type="checkbox" name="userCopy" value="copy">Send a copy to yourself
              </label>
              <input class="button hollow expanded submit" type="submit" name="userSubmit" value="Submit">
            </div>
          </div>
        </form>
      </div>
		</section>

		<?php require_once('footer.php'); ?>

	</body>
</html>