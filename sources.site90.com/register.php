 
<html>
<head>
	<title>
		Register
	</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../www.w3schools.com/w3css/4/w3.css">
 <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport'>
<link href="../fonts.googleapis.com/css_BED2A7B3" rel="stylesheet">
	<style>
		.container{
  background-color:#77b1b5;
}
.container{
background-image: linear-gradient(to right, #eea2a2 0%, #bbc1bf 19%, #57c6e1 42%, #b49fda 79%, #7ac5d8 100%);

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
  margin-top: 10%;
  padding-top: 10px;
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
  .paper{
	padding-top: 75px;
	padding-left: 500px;


}
a:hover{
   color:#F62459;
  border: 1px solid #9A12B3;
  padding: 2px;
}
  form{

  	display: inline-grid;
  	width: 300px;
		padding: 10px;
  	align-items: center;
  	background-color: #c1cac7;
  	box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  	border-radius: 4px;
		padding-right: 10px;
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
	width:290px;
	height: 20px;
	align-self: center;
	box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
	margin-left: 3px;
	padding-right: 10px;
font-family: 'Raleway', sans-serif;
  } 
	form>input:hover{
		border-color: #68d635;
	}
   button:hover{
	    background-color:#4c1fdb;
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
	<form method="post" action="register.php" >
				<div class="error">
					<p> Username is required</p>
		
					<p> Email is required</p>
		
					<p> Password is required</p>
		
				</div>
		<label>Username</label>
		<input type="text" name="username" placeholder="username">
		<label>Email</label>
		<input type="email" name="email" placeholder="email@example.com">
		<label>Password</label>
		<input type="password" name="password" placeholder="password">
		<label>Confirm Password</label>
		<input type="password" name="confirm" placeholder="Re-Enter Password" >
		<button type="submit">Register</button>
		<p style="padding-left: 5px;">
		Already a user? <a href="login.php">login</a>
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