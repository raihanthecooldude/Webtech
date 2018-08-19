<!DOCTYPE html>
<html>
<head>
	<title>Poker</title>
</head>
<body>

</body>

<SCRIPT TYPE="text/javascript">
	function rand1toN(N)
	{
   		return Math.floor( 1+Math.random()*N );
   	}
	function dealcard(card) 
	{
   		var rank = new Array(0,"A","2","3","4","5","6","7","8","9","T","J","Q","K");
   		var suit = new Array(0, "Spades", "Hearts", "Diamonds", "Clubs");
   		card[0] = rank[rand1toN(13)];
   		card[1] = suit[rand1toN(4)];
	}

	var card = new Array(2);
	var player = new Array(10);
	var dealer = new Array(10);
	
	for (var i=0; i<=4; i++) 
	{
   		dealcard(card);
   		player[i*2] = card[0];
   		player[i*2+1] = card[1];
   		dealcard(card);
   		dealer[i*2] = card[0];
   		dealer[i*2+1] = card[1];
	}

	document.writeln("<H1> PLAYER </H1>");
	document.writeln("<TABLE BORDER='1' >");
	for (var i=0; i<=4; i++)
	{
   		document.writeln("<TR><TD><P>" + player[i*2] + "</TD>" + "<TD><P>" + player[i*2+1] + "</TD></TR>");
	}
	document.writeln("</TABLE> </HTML>");  
</SCRIPT>

</html>