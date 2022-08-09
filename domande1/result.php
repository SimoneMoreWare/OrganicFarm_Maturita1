<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<title>PHP Quiz</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<body id="page">

		<!-- wrapper -->
		<div class="rapidxwpr floatholder">

		  <!-- main body -->
		  <div id="middle">

		    <!-- left column -->
		    <div id="left" class="clearingfix">

		      <!-- logo -->
		      <a href="../organic-farm/home.php"><img id="logo" class="correct-png" src="images/logo.png" alt="Home" title="Home"></a>
		      <!-- / logo -->

		      <!-- menu -->
		      <div class="menu">
		        <ul>
		          <li><a href="../organic-farm/home.php" class="home">Home</a></li>
		          <li></li>
		          <li></li>
		          <li></li>
		          <li></li>
		        </ul>
		      </div>
		      <!-- / menu -->

		    </div>
		    <!-- / left column -->

		    <!-- content column -->
		    <div id="main">
		      <div id="main_container" class="clearingfix">
		        <div id="mainmiddle" class="floatbox withright">

		          <!-- welcome -->
		          <div class="welcome">
		            <h2>Welcome</h2>


									<h1 style="font-size:24px"><strong>Il risultato ottenuto è</strong></h1>




							        <?php
	session_start();



							            $answer1 = $_POST['question-1-answers'];
							            $answer2 = $_POST['question-2-answers'];
							            $answer3 = $_POST['question-3-answers'];
							            $answer4 = $_POST['question-4-answers'];
							            $answer5 = $_POST['question-5-answers'];

							            $totalCorrect = 0; //somma punteggio

							            if ($answer1 == "C") { $totalCorrect++; }
							            if ($answer2 == "D") { $totalCorrect++; }
							            if ($answer3 == "A") { $totalCorrect++; }
							            if ($answer4 == "B") { $totalCorrect++; }
							            if ($answer5 == "D") { $totalCorrect++; }
										
												$_SESSION["score"]=$totalCorrect;


													if($totalCorrect>=3){
														echo "<p style='font-size:24px'><strong>Ottimo Lavoro!<span style='color:red' > Promosso</span></strong></p>";
														echo "<div  style='font-size:24px'><strong>$totalCorrect / 5 corrette </strong></div>";
														echo "<br>";
														echo "<div style='font-size:24px'>Per scaricare l'attestato clicca<a href='https://www.canva.com/design/DAEeuoc6XTo/5KU3VOgzW1pFOh6myEbmOg/view?utm_content=DAEeuoc6XTo&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink' style='color:red'> qui</a> </div>";
												} else {
													echo "<p style='font-size:24px'><strong>Pessimo Lavoro!<span style='color:red' > Bocciato</span></strong></p>";
												echo "<div  style='font-size:24px'><strong>$totalCorrect / 5 corrette </strong></div><br><br><br>";
												}
							        ?>








		          </div>
		          <!-- why organic -->

		        </div>
		      </div>
		    </div>
		    <!-- / content column -->

		  </div>
		  <!-- / main body -->

		  <!-- footer -->

		  <!-- / footer -->

		</div>



</body>

</html>
