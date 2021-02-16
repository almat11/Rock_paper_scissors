<?php
	session_start();
	/*No needed anymore. I used it at the beginning. 
  print_r($_SESSION);
  */
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
  <body>
    <br>
    <br>
    <br>
    <br>
    <div class="text_center">
      <div class="font_size_130px">
      <?php
      if (isset($_SESSION['user_score']) && isset($_SESSION['ai_score']) && ($_SESSION['user_score'] > $_SESSION['ai_score'])) {
        echo "You win";
      }
      elseif (isset($_SESSION['user_score']) && isset($_SESSION['ai_score']) && ($_SESSION['user_score'] < $_SESSION['ai_score'])) {
        echo "You lose";
      }
      else {
        echo "Draw";
      }
    ?>
  </div>
  </div >
  <a class="font_size_30px" href="http://localhost:8080/gruppe18/ue3/game_page.php">NEW GAME</a>
  <div>
  	<table>
      <tr>
     	  <th>YOU</th>
        <th>Round</th>
        <th>COM</th>
 			</tr>
      <tr>
    		<td>
          <?php
            echo $_SESSION['userLap1']; 
          ?>
        </td>
      	<td>1</td>
     		<td>
   				<?php
						echo $_SESSION['aiLap1']; 
					?>
				</td>
    	</tr>
    	<tr>
    		<td>
          <?php
            echo $_SESSION['userLap2']; 
          ?>  
        </td>
      	<td>2</td>
    		<td>
    			<?php
						echo $_SESSION['aiLap2']; 
					?>
				</td>
    	</tr>
      <tr>
        <td>
          <?php
            echo $_SESSION['userLap3']; 
          ?>  
        </td>
        <td>3</td>
        <td>
          <?php
            echo $_SESSION['aiLap3']; 
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php
            echo $_SESSION['userLap4']; 
          ?>  
        </td>
        <td>4</td>
        <td>
          <?php
            echo $_SESSION['aiLap4']; 
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php
            echo $_SESSION['userLap5']; 
          ?>  
        </td>
        <td>5</td>
        <td>
          <?php
            echo $_SESSION['aiLap5'];
          ?>
        </td>
      </tr>
    </table>
  </div>
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
      session_unset(); 
    ?>
    </div>
  </body>
</html>