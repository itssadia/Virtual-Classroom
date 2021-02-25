<?php
	session_start();
	require_once('dbconfig/config2.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
	
<title>Home Page</title>
<style>
body{
 background:url(imgs/board.png);
 background-repeat:  no-repeat;
 height:170%;
 width: 100%;
 background-size:cover;
}

.menudropdown1{
width:100%;
height:100px;
margin-top: 200px;
margin-left: 30px;

}

.menudropdown1 ul{
 padding:0px;
 
}
.menudropdown1 ul a{
	text-decoration: none;
	color: white;
}

.menudropdown1 ul li{
 float:left;
 background-color:black;
 color:white;
 width:200px;
 height:50px;
 line-height:50px;
 font-size:30px;
 text-align:center;
 list-style:none;
 opacity:0.8;
}

.menudropdown1 ul li ul{
 display:none;
}

.menudropdown1 ul li:hover > ul{
 display:block;

}

.menudropdown1 ul li:hover{
 background-color:#32CD32;
 opacity:0.9;
}
.menudropdown1 ul li ul li{
 position:relative;
 font-size:15px;
 margin: 0px;
 padding:0px;
}

</style>

</head>
<body>
<div class="menudropdown1">
<ul>
 <li>
 <a href="cse.html"> CSE </a>
 </li>
 <li> <a href="eee.html"> EEE </a> 
   </li>
 <li> <a href="mechanical.html"> ME </a> </li>
 <li> <a href="civil.html"> CE </a> </li>
 <li> <a href="gce.html"> GCE </a> </li>

 <li>ACCOUNT
 <ul><li><a href="index.html">LOG OUT</a></li></ul> </li>
 
</ul>
</div>


	
</body>
</html>