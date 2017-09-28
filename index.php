<!DOCTYPE html>
	<html>
	<head>
		<title>Lingshan Jiang</title>
		<link rel="stylesheet" type="text/css" href="style.css" />

	</head>
	<body class="text-center">
	    <div class="container">
            <?php
                $teamFGA = 50;
                $teamPF =  17;
                $teamAST = 31;
            ?>
	        <h1>Calculate the player's share of the team's marginal defense.</h1>
            <form action="" method="post">
                <div class="content">
                    <div>
                        <h2>Team's data:</h2>
                        <p>Total Field Goal attempts : <?php echo $teamFGA; ?></p>
                        <p>Total Personal fouls : <?php echo $teamPF; ?> </p>
                        <p>Total Assist : <?php echo $teamAST; ?> </p>
                    </div>
                    <h3>Enter Player's data:</h3>

                    <div>
                        Field Goal Attempts :
                        <input type="text" name="fga">
                    </div>
                    <div>
                        Assist :
                        <input type="text" name="assit">
                    </div>
                    <div>
                        Personal Fouls :
                        <input type="radio" name="fouls" value="0"> 0
                        <input type="radio" name="fouls" value="1"> 1
                        <input type="radio" name="fouls" value="2"> 2
                        <input type="radio" name="fouls" value="3"> 3
                        <input type="radio" name="fouls" value="4"> 4
                        <input type="radio" name="fouls" value="5"> 5
                        <input type="radio" name="fouls" value="6"> 6
                    </div>
                    <div>
                        Game Result :
                        <input type="checkbox" name="win" value="yes"> Win
                    </div>
                    <br>
                    <div>
                        <button type="submit">SUBMIT</button>
                    </div>
                </div>
            </form>
            <div id="output">
                <h3>Please enter valid input and submit to get result: </h3>
                <span>0.25 * ((field goal attempts) / (team field goal attempts)) + 0.5 * ((personal fouls) / (team personal fouls)) + 0.25 * ((assists) / (team assists))</span>
                <h2>
	                <?php
	                 if($_POST){
	                    $fga = (int)$_POST["fga"];
	                    $assit = (int)$_POST["assit"];
	                    $fouls = (int)$_POST["fouls"];
	                    $win = ($_POST["win"] == "yes") ? "won" : "lost";
	                    $result = 0.25*($fga/$teamFGA) + 0.5*($fouls/$teamPF) + 0.25*($assit/$teamAST);
	                    echo "The player's share of the team's marginal defense is ".$result;
	                    echo " and the game is ".$win.".";
	                 }
	                 ?>
                 </h2>
            </div>
        </div>
	</body>
</html>