<html>
<head>
	<title>
		Login
	</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport'>
    <link rel="stylesheet" href="../www.w3schools.com/w3css/4/w3.css">
<link href="../fonts.googleapis.com/css_BED2A7B3" rel="stylesheet">
	<style>
	.container{
background: #16BFFD;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CB3066, #16BFFD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
	.menu{
  list-style-type: none;
  text-decoration:none;
  width:100%;
  background-color:#001f3f;
  height: 50px;
  font-size: 2em;
  font-weight: bold;
  color:white;
  float: left;
  margin-top:0px;
  position:fixed;
  scroll-behavior: smooth;
  flex-flow: column;
   top: 0px;
   box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
font-family: 'Raleway', sans-serif;
}
.menu>a{
  padding-left: 8px;
  text-decoration: none;
font-family: 'Raleway', sans-serif;
}  button:hover{
    background-color:#4c1fdb;
  }
.head{
  display: flex;
  top: 0px;
  position:fixed;
}
	footer{
  text-align:center;
  background-color:#111111;
  color: white;
  font-family: sans-serif;
  width:100%;
  height: 100px;
  font-size: 2em;
  padding: 0px;
  margin: 0px;
  position:fixed;
  scroll-behavior: smooth;
  text-align: center;
  vertical-align: middle;
  min-width: inherit;
  bottom: 0px;
  margin-top:10%;
  padding-top: 10px;
font-family: 'Raleway', sans-serif;
}
.paper{
	padding-top: 170px;
	padding-left: 500px;

}
a:hover{
   color:#F62459;
  border: 1px solid #9A12B3;
  padding: 2px;
}
form{
	display: inline-grid;
  	width: 420px;
	padding: 10px;
  	align-items: center;
  	background-color: #c1cac7;
  	box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
	border-radius: 4px;
	padding-right: 10px;
font-family: 'Raleway', sans-serif;
  }
  form>label{
  	float: left;
  	font-size: 1.5em;
  	text-decoration-style:none;
  	font-family: sans-serif;
	padding-right: 10px;
font-family: 'Raleway', sans-serif;
  }
  form>input{
	float: left;
	width:390px;
	height: 29px;
	align-self: center;
	box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
	margin-left: 3px;
	padding-right: 10px;
        border-radius: 5px;
font-family: 'Raleway', sans-serif;
  }
	button{
  width: 150px;
  height: auto;
  cursor: pointer;
  padding: 13px 15px 13px 15px;
  /*float: left;*/
  margin-left: 15px;
  background:  #1d93c0;
  padding-left: 15px;
  font-weight: bold;
  color: white;
  border:none;
  box-shadow: 0px 0px 3px black;
  border-radius: 5px;
  outline-width: thin;
  align-self: center;
	margin-top: 10px;
font-family: 'Raleway', sans-serif;
  }
button:hover{
padding:17px;
}
.container{
font-family: 'Raleway', sans-serif;
}
	</style>
</head>
<body class="container">
<div class="head">
  <nav class="menu">
    <a href="upload.html"> Home</a>
    <a href="contact.php">Contact</a>
    
    <a href="video-tut.php">Tutorials </a>
    <a href="login.php" class="login"> login</a>
    <a href="fullsize.html"> About </a>  
</nav>
</div>
	<div class="paper">
	<form method="post" action="login.php">

		<label>Email</label>
		<input type="email" name="email" placeholder="example@email.com">
		<label>Password</label>
		<input type="password" name="password" placeholder="password">

		<button type="submit">Login</button>
		<p style="padding-left: 5px;">
		Not a user? <a href="register.php">Register</a>
		</p>
	</form>
	</div>
 <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <footer>
      &copy Stark Solutions 2017.
    </footer>
</body>
</html>