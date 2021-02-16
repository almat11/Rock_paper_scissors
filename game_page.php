<?php
	session_start();
	/*No needed anymore. I used it at the beginning.
	session_unset();*/	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rock, paper, scissors</title>
		<meta charset="utf-8"> 
		<meta name="description" content="rock, paper, scissors game vs computer">
		<link rel="stylesheet" href="http://localhost:8080/gruppe18/ue3/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com"> 
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
	</head>
	<body>
<!--*** old version of how to play button 
		<div class="button">
			<button class="font_size_30px" type="button" onclick="alert('(EN) The game lasts 5 rounds. At the beginning of each round, the player must make his choice. Rock beats scissors, scissors beats paper, and paper beats rock. after the fifth round, the score and history of the game will be shown. But you already knew everything without a hint :) (DE) Das Spiel dauert 5 Runden. Zu Beginn jeder Runde muss der Spieler seine Wahl treffen. Rock schlägt Schere, Schere schlägt Papier und Papier schlägt Rock. Nach der fünften Runde werden die Punktzahl und die Geschichte des Spiels angezeigt. Aber du wusstest schon alles ohne Hinweis :)')">how to play</button>
		</div>
***-->
		<div class="human_score">
      		<?php
        		if (isset($_SESSION['user_score']) && isset($_SESSION['ai_score'])) {
          			echo $_SESSION['user_score'];
        		}
        		else {
        			echo 0;
        		}
      		?> 	
    	</div>
    	<div class="com_score">
      		<?php
        		if (isset($_SESSION['user_score']) && isset($_SESSION['ai_score'])) {
        			echo $_SESSION['ai_score'];
        		}
        		else {
        			echo 0;
        		}
      		?>
    	</div>
		<form method="get" action="action_page.php">
			<div>
			<input type="radio" id="Rock" name="user_choice" value="Rock">
			<label class="text_center" for="rock">rock</label><br><br>
			<input type="radio" id="Scissors" name="user_choice" value="Scissors">
			<label class="text_center" for="Scissors">Scissors</label><br><br>
			<input type="radio" id="Paper" name="user_choice" value="Paper">
			<label class="text_center" for="Paper">Paper</label><br><br>
			<input type="submit" name="submit" value="Submit">
			</div>
		</form> 
<!--*** Do not display it, this is (old)image form version
		<form method="get" action="action_page.php">
			<input class="image1" type="image" src="http://localhost:8080/gruppe18/ue3/pics/rock.png" alt="Rock" name="user_choice" value="Rock" title="Rock"><br><br>
			<input class="image2" type="image" src="http://localhost:8080/gruppe18/ue3/pics/paper.png" alt="Paper" name="user_choice" value="Paper" title="Paper"><br><br>
			<input class="image3" type="image" src="http://localhost:8080/gruppe18/ue3/pics/scissors.png" alt="Scissors" name="user_choice" value="Scissors" title="Scissors"> <br><br>
		</form> 

		<img class="image1" src="http://localhost:8080/gruppe18/ue3/pics/rock.png" alt="Rock"><br><br>
		<img class="image2" src="http://localhost:8080/gruppe18/ue3/pics/paper.png" alt="Paper"><br><br>
		<img class="image3" src="http://localhost:8080/gruppe18/ue3/pics/scissors.png" alt="Scissors"> <br><br>
***-->
    	<br>
		<div class="text_center">
			<div class="font_size_30px">
			<?php
				if (isset($_GET['user_choice'])) {
					echo "Your choice is " . $_GET['user_choice'] . ".<br>"; 
					echo "The computer chooses " . $_GET['ai'] . ".<br>";
				}
			?>
			</div>
		</div>
		<div class="round_result">
			<div class="font_size_30px">
				<?php
					if (isset($_GET['user_choice'])) {
						echo $_GET['product'];
					}
				?>
			</div>
		</div>
	</body>
</html>