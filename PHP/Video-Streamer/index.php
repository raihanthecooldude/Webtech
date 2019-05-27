<!DOCTYPE html>
<html>
<head>
	<title>Video-Stream</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body >
	<video id="myVideo" width="500px" controls autoplay>
    	<source src="video1.mp4" id="mp4Source" type="video/mp4">
   	</video>
</body>
<script type='text/javascript'>
   var count=1;
   var player=document.getElementById('myVideo');
   var mp4Vid = document.getElementById('mp4Source');
   player.addEventListener('ended',myHandler,false);

   function myHandler(e)
   {

      if(!e) 
      {
         e = window.event; 
      }
      count++;
      if(count > 6)
      {
         count = 1;
      }
      // document.getElementById("mp4Source").attr("src","video".count.".mp4");
      // console.log(count);
      // console.log(mp4Vid);
      $(mp4Vid).attr('src', "video"+count+".mp4");
      //console.log();
      // mp4Vid.src="video".count.".mp4";
      player.load();
      player.play();
   }

</script>
</html>