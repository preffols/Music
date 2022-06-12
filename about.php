<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About</title>
	<style type="text/css">
body{
	background: url(images/3.jpg);
	background-repeat: no-repeat;
	background-size: contain;
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'poppins' sans-serif;
}


.header{
	width: 100%;
	height: 100px;
	background-image: url(images/3.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}

nav{
	width: 100%;
	padding: 20px 0;
	text-align: center;
	font-size: 16px;
}
nav ul{
	list-style: none;
}

nav ul li a{
	text-decoration: none;
	color: #fff;
	font-size: 20px;
}
nav ul li a:hover{
	color: blue;
	transition: all 0.5s ease;
}



nav ul li ul{
	display: none;
}

nav ul{
	background-color: #000;
	width: 100%;
	margin-top: 10px;
}

nav ul li{
    display: inline-block;
    list-style: none;
    margin: 20px 30px;
    color: #fff;

}

img{
	width: 100%;
	height: 100vh;
	margin-top: 0;
	object-position: center;
}

.text{
    padding: 20px 8%;

}
.sticky{
	position: fixed;
	top: 0;
	left: 0;
	padding: 10px 8%;
	background-color: #000;
	display: flex;
	align-items: center;
	justify-content: space-between;
	transition: padding 1s;

}
nav.sticky ul{
	width: auto;
}

hr{
	border: 5px solid blue;
}
 
 
	</style>

</head>
<body>
<div class="header">
	<nav id="navbar">
		<ul id="menu">
			<li><a href="home.php">Home</a></li>
			<li><a href="#">Our services</a>
				<ul>
					<li><a href="#">Graphic designing</a></li>
					<li><a href="#">Modelling</a></li>
				</ul>
			</li>
			<li><a href="#">Contact us</a></li>
		</ul>
	</nav>
</div>
<img src="images/about.jpg">

	

<hr>

 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");

function myFunction() {
  if (window.pageYOffset >= menu.offsetTop) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>








	<p class="taito">2.BraveBeaTs-ft-Tsaka107-Too-Late.mp3</p>
	<audio src="audio/BraveBeaTs-ft-Tsaka107-Too-Late-.mp3" controls="play" controls="download" ></audio>
	<div class="butt">
		<a href="audio/BraveBeaTs-ft-Tsaka107-Too-Late-.mp3"><button style="font-family: arial"   style="font-size: 20px" >Play</button>   <button>Download</button></a>
	</div>
	<br>
	<hr class="new">
</div>

<div class="sound">
	<p class="taito">3.Bee Jay - Madoo.mp3</p>
	<audio src="audio/BraveBeaTs-ft-Tsaka107-Too-Late-.mp3" controls="play" controls="download" ></audio>
	<div class="butt">
		<a href="audio/Bee Jay - Madoo.mp3"><button style="font-family: arial"   style="font-size: 20px" >Play</button>   <button>Download</button></a>
	</div>
	<br>
	<hr class="new">
</div>

<div class="sound">
	<p class="taito">4.ZONKE-Kamodzi..mp3</p>
	<audio src="audio/BraveBeaTs-ft-Tsaka107-Too-Late-.mp3" controls="play" controls="download" ></audio>
	<div class="butt">
		<a href="audio/ZONKE-Kamodzi..mp3"><button style="font-family: arial"   style="font-size: 20px" >Play</button>   <button>Download</button></a>
	</div>
	<br>
	<hr class="new">
</div>