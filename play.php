<html>

	<head>
		
		<title>
			Craps
		</title>
		
		<style>
			div.result
			{
				float: left;
				background-color: #00ffff;
				padding: 10px;
				font-size: 15px;
				color: #000000;
			}
			div.leftdiv
			{
				float: left;
				width: 40%;
				background: #0663cc;
				padding: 10px;
				text-align: left;
			}
			div.rightdiv
			{
				float: right;
				width: 40%;
				background: #0663cc;
				padding: 10px;
				text-align: right;
			}
			.img-container
			{
				float: left;
				width: 20%;
				padding: 5px;
				text-align: center;
			}
			
			.clearfix::after
			{
				content: "";
				clear: both;
				display: table;
			}
			.clearfix
			{
				position: relative;
				width: 100%;
				left: 30%;
			}
			.playarea
			{
				text-align: center;
			}
			*
			{
				box-sizing: border-box;
			}
		</style>
		
	</head>

	<body>
		
		<form name="index" method="POST" action="play.php">
			<div style="width: 100%;" class="result">
				<div class="leftdiv">
					<p id="point">
					Point
					</p>
				</div>
				<div class="rightdiv">
					<p id="status">
					Status
					</p>
				</div>
			</div>
			
			<br/>
			<br/>
			<br/>
			
			<div class="playarea">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				
				<div>
					<button type="button" onclick="play()" style="width: 20%; padding: 30px; font-size: 28px;">
					Roll
					</button>
				</div>
				<div class="clearfix">
					<br/>
					<br/>
					<br/>
					<br/>
					
					<div class="img-container">
						<img src="src/1.png" id="dice1" style="width:100%">
					</div>
					<div class="img-container">
						<img src="src/2.png" id="dice2" style="width:100%">
					</div>
				</div>
			</div>
			
		</form>
		
	</body>

</html>

<script type="text/javascript">
	function rollDice()
	{
        var dice1 = 0, dice2 = 0;
        
        dice1 = Math.floor( 1 + Math.random() * 6 );
        switch (dice1)
        {
	        case 1:
	            document.getElementById("dice1").src = "src/1.png";
	            break;
	        case 2:
                document.getElementById("dice1").src = "src/2.png";
                break;
            case 3:
                document.getElementById("dice1").src = "src/3.png";
                break;
            case 4:
                document.getElementById("dice1").src = "src/4.png";
                break;
            case 5:
                document.getElementById("dice1").src = "src/5.png";
                break;
            case 6:
                document.getElementById("dice1").src = "src/6.png";
                break;
        }
        
		dice2 = Math.floor( 1 + Math.random() * 6 );
        switch (dice2)
        {
            case 1:
                document.getElementById("dice2").src = "src/1.png";
                break;
            case 2:
                document.getElementById("dice2").src = "src/2.png";
                break;
            case 3:
                document.getElementById("dice2").src = "src/3.png";
                break;
            case 4:
                document.getElementById("dice2").src = "src/4.png";
                break;
            case 5:
                document.getElementById("dice2").src = "src/5.png";
                break;
            case 6:
                document.getElementById("dice2").src = "src/6.png";
                break;
        }
		
		return dice1 + dice2;
    }

    // variables used to test the state of the game
    var WON = 0, LOST = 1, CONTINUE_ROLLING = 2;
    // other variables used in program
    var firstRoll = true,    // true if first roll
        sumOfDice = 0,        // sum of the dice
        myPoint = 0,           // point if no win/loss on first roll
        gameStatus = CONTINUE_ROLLING;  // game not over yet
	

    // process one roll of the dice
    function play()
    {
        if ( firstRoll ) {
            // first roll of the dice
            sumOfDice = rollDice();
            switch ( sumOfDice )
            {
                case 7: case 11:
	                // win on first roll
	                gameStatus = WON;
	                document.getElementById("point").value = ""; // clear point field
                    location.reload(true);
	                break;
                
                case 2: case 3: case 12:
	                // lose on first roll
	                gameStatus = LOST;
	                document.getElementById("point").value = ""; // clear point field
                    location.reload(true);
	                break;
                
	            default:
                    // remember point
                    gameStatus = CONTINUE_ROLLING;
                    myPoint = sumOfDice;
                    document.getElementById("point").innerHTML = "Point: "+myPoint;
                    firstRoll = false;
            }
        }
        else
        {
            sumOfDice = rollDice();
            
            if ( sumOfDice == myPoint )
            {
                gameStatus = WON;
            }
            else if ( sumOfDice == 7 || sumOfDice == 11 )
            {
                gameStatus = LOST;
            }
            else
            {
                myPoint = sumOfDice;
                document.getElementById("point").innerHTML = "Point: "+myPoint;
            }
        }
        
        if ( gameStatus == CONTINUE_ROLLING )
        {
            //window.alert ("Roll again");
            document.getElementById("status").innerHTML = "Roll Again";
        }
        else
        {
            if ( gameStatus == WON )
            {
                setTimeout(function ()
                {
                    window.alert ("Player wins. " + "Click Roll Dice to play again.");
                }, 100)
                document.getElementById("status").innerHTML = "Player wins.";
                document.getElementById("point").value = "";
                location.reload(true);
            }
            else
            {
                setTimeout(function ()
                {
                    window.alert ("Player loses. " + "Click Roll Dice to play again.");
                }, 100)
                document.getElementById("status").innerHTML = "Player loses.";
                document.getElementById("point").value = "";
                location.reload(true);
            }
            firstRoll = true;
        }
    }
</script>