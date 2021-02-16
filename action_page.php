<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rock, paper, scissors</title>
		<meta charset="utf-8"> 
		<meta name="description" content="play vs computer rock, paper, scissors">
		<link rel="stylesheet" href="http://localhost:8080/gruppe18/ue3/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com"> 
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
	</head>

	<?php
		if (isset($_GET['user_choice'])) {
			$_SESSION['user'] = $_GET['user_choice'];
			$randomInt = rand(1, 3);

			if ($randomInt == 1) {
				$ai = "Rock";
			} elseif ($randomInt == 2) {
				$ai = "Paper";
			} else {
				$ai = "Scissors";
			}
			$_SESSION['ai'] = $ai;
			$tie = "It's a tie";
			$win = "You win";
			$lose = "You lose";

			if ($_GET['user_choice'] == $ai) {
				$_SESSION['user_score']= (int)$_SESSION['user_score'];
				$_SESSION['ai_score']= (int)$_SESSION['ai_score'];
				$product = $tie;
				$_SESSION['product'] = $product;
			} elseif (($_GET['user_choice'] == 'Rock' && $ai == 'Scissors') || ($_GET['user_choice'] == 'Scissors' && $ai == 'Paper') || ($_GET['user_choice'] == 'Paper' && $ai == 'Rock')) {
				$_SESSION['user_score']= (int)$_SESSION['user_score'] + 1;
				$_SESSION['ai_score']= (int)$_SESSION['ai_score'];	
				$product = $win;
				$_SESSION['product'] = $product;		
			} else {
				$_SESSION['user_score']= (int)$_SESSION['user_score'];
				$_SESSION['ai_score']= (int)$_SESSION['ai_score'] + 1;	
				$product = $lose;
				$_SESSION['product'] = $product;
			}

			$_SESSION['counter'] = (int)$_SESSION['counter'] + 1;
			$counter = $_SESSION['counter'];

			if (isset ($_SESSION['counter']) && ($_SESSION['counter'] == 1) && isset($_SESSION['user']) && isset($_SESSION['ai'])) {
    			$userLap1 = $_SESSION['user'];
				$aiLap1 = $_SESSION['ai'];
    			$_SESSION['userLap1'] = $userLap1;
    			$_SESSION['aiLap1'] = $aiLap1;
    		 	}
    		if (isset ($_SESSION['counter']) && ($_SESSION['counter'] == 2) && isset($_SESSION['user']) && isset($_SESSION['ai'])) {
    			$userLap2 = $_SESSION['user'];
				$aiLap2 = $_SESSION['ai'];
      			$_SESSION['userLap2'] = $userLap2;
      			$_SESSION['aiLap2'] = $aiLap2;
      			}
			if (isset ($_SESSION['counter']) && ($_SESSION['counter'] == 3) && isset($_SESSION['user']) && isset($_SESSION['ai'])) {
				$userLap3 = $_SESSION['user'];
				$aiLap3 = $_SESSION['ai'];
      			$_SESSION['userLap3'] = $userLap3;
      			$_SESSION['aiLap3'] = $aiLap3;
      			}
    		if (isset ($_SESSION['counter']) && ($_SESSION['counter'] == 4) && isset($_SESSION['user']) && isset($_SESSION['ai'])) {
    			$userLap4 = $_SESSION['user'];
				$aiLap4 = $_SESSION['ai'];
    			$_SESSION['userLap4'] = $userLap4;
     			$_SESSION['aiLap4'] = $aiLap4;
      			}
			if (isset ($_SESSION['counter']) && ($_SESSION['counter'] == 5) && isset($_SESSION['user']) && isset($_SESSION['ai'])) {
    			$userLap5 = $_SESSION['user'];
				$aiLap5 = $_SESSION['ai'];
      			$_SESSION['userLap5'] = $userLap5;
      			$_SESSION['aiLap5'] = $aiLap5;
      			}
    	
    		if ($counter == 5) {
				header("Location: result.php");
				exit;
    		} else {
				header("Location: game_page.php? ai=" . $ai . "&user_choice=" . $_GET['user_choice'] . "&product=" . $product); 
			}
		}	
	?>
</html>