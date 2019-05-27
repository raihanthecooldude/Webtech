<!DOCTYPE html>
<html>
<head>
	<title>Craps</title>

	<style type="text/css">

		.main
		{
			/*border: 5px solid red;*/
		}

		.left
		{
			text-align: center;
			float: left;
			width: 49%;
			/*border: 2px solid black;*/
		}

		.right
		{
			text-align: center;
			float: right;
			width: 49%;
			/*border: 2px solid green;*/
		}

		.top
		{
			text-align: left;
			font-family: Calibri;
			padding-left: 25%;
		}

		.middle
		{
			/*border: 2px solid red;*/
			text-align: center;
			height: 350px;
		}

		.bottom
		{
			/*border: 2px solid blue;*/
			text-align: center;
		}

		#RollBtn
		{
			background-color: white;
			border-radius: 4px;
			border: 1px solid #990099;
			padding: 12px 30px;

			color: black;
			font-family: Calibri;
			font-size: 16px;

			transition-duration: 0.4s;
		}

		#RollBtn:hover
		{
			background-color: #ffe6ff;
			border: 2px solid #990099;

			color: black;
		}

	</style>
</head>

<body>
	<!-- <form name="craps"> -->
		<div class="main">
			<div class="top">
				<br>
				<br>
				<h2 id="point"> Point: 0 </h2>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div class="middle">
				<!-- <div class="left">
					<img id="dice1" src="Photos/One.png">
				
					<br><br><br><br><br><br><br><br><br><br>
				</div>
				<div class="right">
					<img id="dice2" src="Photos/Onee.png">
			
					<br><br><br><br><br><br><br><br><br><br>
				</div> -->

				<img id="dice1" src="Photos/blank1.png"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img id="dice2" src="Photos/blank2.png">
				<br><br><br><br><br><br><br><br><br><br>
			</div>
			<div class="bottom">
				<button id="RollBtn" onclick="play()">Roll</button>
			</div>
		</div>
	<!-- </form> -->
</body>

<SCRIPT TYPE="text/javascript">
	// variables used to test the state of the game 
	var WON = 0, LOST = 1, CONTINUE_ROLLING = 2;

	// other variables used in program
	var firstRoll = true;    // true if first roll
	sumOfDice = 0;        // sum of the dice
	myPoint = 0;           // point if no win/loss on first roll
	gameStatus; 	// process one roll of the dice

	function play()
	{
   		if ( firstRoll )
   		{
      		// first roll of the dice
      		sumOfDice = rollDice();
      		show();
   		}
   		else
   		{
      		sumOfDice = rollDice();
      		if ( sumOfDice == myPoint ) gameStatus = WON;
      		else if ( sumOfDice == 7 || sumOfDice == 11)  gameStatus = LOST;
   		}

   		if ( gameStatus == CONTINUE_ROLLING )
   		{
   			// window.alert ("Roll again");
   			myPoint = sumOfDice;
   			document.getElementById("point").innerHTML = "Point: "+ myPoint;
   		}
   		else
   		{
      		result();
  		}
  	}

  		// roll the dice
		// function rollDice()
		// {
  //  			var die1, die2, workSum;

  //  			die1 = Math.floor( 1 + Math.random() * 6 );
  //  			die2 = Math.floor( 1 + Math.random() * 6 );
  //  			workSum = die1 + die2;
  //  			document.craps.firstDie.value = die1;
  //  			document.craps.secondDie.value = die2;
  //  			document.craps.sum.value = workSum;
  //  			return workSum;
		// }

	function rollDice()
	{
       	// var dice1 = 0, dice2 = 0;
		var die1, die2, workSum;
        
       die1 = Math.floor( 1 + Math.random() * 6 );
       switch (die1)
       {
	      	case 1:
	           	document.getElementById("dice1").src = "Photos/One.png";
	           	break;
	       	case 2:
               	document.getElementById("dice1").src = "Photos/Two.png";
               	break;
           	case 3:
               	document.getElementById("dice1").src = "Photos/Three.png";
               	break;
           	case 4:
               	document.getElementById("dice1").src = "Photos/Four.png";
               	break;
           	case 5:
                document.getElementById("dice1").src = "Photos/Five.png";
                break;
            case 6:
                document.getElementById("dice1").src = "Photos/Six.png";
                break;
        }
        
		die2 = Math.floor( 1 + Math.random() * 6 );
        switch (die2)
        {
            case 1:
                document.getElementById("dice2").src = "Photos/Onee.png";
                break;
            case 2:
                document.getElementById("dice2").src = "Photos/Twoo.png";
                break;
            case 3:
                document.getElementById("dice2").src = "Photos/Threee.png";
                break;
            case 4:
                document.getElementById("dice2").src = "Photos/Fourr.png";
                break;
            case 5:
                document.getElementById("dice2").src = "Photos/Fivee.png";
                break;
            case 6:
                document.getElementById("dice2").src = "Photos/Sixx.png";
                break;
        }
		
		// return dice1 + dice2;

   		// die1 = Math.floor( 1 + Math.random() * 6 );
   		// die2 = Math.floor( 1 + Math.random() * 6 );
   		workSum = die1 + die2;
   		// document.craps.firstDie.value = die1;
   		// document.craps.secondDie.value = die2;
   		// document.craps.sum.value = workSum;
   		return workSum;
    }

    function show()
    {
		switch ( sumOfDice )
      	{
         	case 7: case 11:  
           	// win on first roll
           	gameStatus = WON;
           	// document.craps.point.value = ""; // clear point field 
           	document.getElementById("point").innerHTML = "Point: 0";                                 
           	break;
         	case 2: case 3: case 12:   
           	// lose on first roll
            gameStatus = LOST;
           	// document.craps.point.value = ""; // clear point field
           	document.getElementById("point").innerHTML = "Point: 0";
            break;         
			default:
            // remember point
            gameStatus = CONTINUE_ROLLING;
            myPoint = sumOfDice;
            // document.craps.point.value = myPoint;
            document.getElementById("point").innerHTML = "Point: "+ myPoint;
            firstRoll = false;
         }
    }

    function result()
    {
    	if ( gameStatus == WON )
      	{
         	window.alert ("Player wins. " + "Click Roll Dice to play again."); 
         	// document.craps.point.value = " ";
         	document.getElementById("point").innerHTML = "Point: 0";
         	document.getElementById("dice1").src = "Photos/blank1.png";
         	document.getElementById("dice2").src = "Photos/blank2.png";
      	}
      	else
      	{
         	window.alert ("Player loses. " + "Click Roll Dice to play again.");
         	// document.craps.point.value = " ";
         	document.getElementById("point").innerHTML = "Point: 0";
         	document.getElementById("dice1").src = "Photos/blank1.png";
         	document.getElementById("dice2").src = "Photos/blank2.png";
      	}
      	
  		firstRoll = true;
    }

</SCRIPT>

</html>