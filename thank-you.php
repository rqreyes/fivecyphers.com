<?php

if (isset($_POST['userCopy']) && $_POST['userCopy'] == 'copy')
{
  $userFirstName = $_POST['userFirstName'];
  $userLastName = $_POST['userLastName'];
  $userEmail = $_POST['userEmail'];
  $userPhone = $_POST['userPhone'];
  $userMessage = $_POST['userMessage'];

  $to = $userEmail;
  $subject = 'fivecyphers.com Contact Form Submission';
  $content =
    'First Name: '.$userFirstName.'<br/>
    Last Name: '.$userLastName.'<br/>
    Email Address: '.$userEmail.'<br/>
    Phone Number: '.$userPhone.'<br/>
    <br/>
    Questions / Comments: '.$userMessage.'<br/>';

  mail($to, $subject,$content, "Content-type:text/html");
}

$submit = $_POST['userSubmit'];

if ($submit == 'Submit'){
  $userFirstName = $_POST['userFirstName'];
  $userLastName = $_POST['userLastName'];
  $userEmail = $_POST['userEmail'];
  $userPhone = $_POST['userPhone'];
  $userMessage = $_POST['userMessage'];

  $to = 'fivecyphers@gmail.com';
  $subject = 'fivecyphers.com Contact Form Submission';
  $content =
    'First Name: '.$userFirstName.'<br/>
    Last Name: '.$userLastName.'<br/>
    Email Address: '.$userEmail.'<br/>
    Phone Number: '.$userPhone.'<br/>
    <br/>
    Questions / Comments: '.$userMessage.'<br/>';

  mail($to, $subject, $content, "Content-type:text/html");
}

?>

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

    <header class="book">
      <section class="row column">
          <h1 class="title"><span class="book-of">the book of</span><br><span class="five-cyphers">FIVE CYPHERS</span><br></h1>
          <h2 class="author">cory howell</h2>
      </section>
    </header>

		<section class="row thank-you">
			<div class="medium-8 medium-centered columns text-center">
				<p>Thank you for contacting us! We'll get in touch with you shortly.</p>
			</div>
		</section>

		<?php require_once('footer.php'); ?>

	</body>
</html>