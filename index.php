<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      body{
    background: url('img/background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width:100%;
}
      .home{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 4vh;
    height: 75vh;
    color: black;
}
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.intro{
	background: #EAF0F1;
}
h1{
	color: #4C4B4B;
	font-weight: bold;
	transition: 0.5s;
}
h3{
	color:#2F363F;
}
button{
	border:none;
	border-radius: 8px;
	padding: 10px;
	background:red; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
}
button:hover,h1:hover{
	transform: scale(1.1);
}
button:hover{
	background-color:#4C4B4B;
}

@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
}
      </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
  <section class="home text-center">
        <h1 style="font-family:Roboto; font-size: 78px;">Welcome to <br>KING BANK</h1>
        <a href="transfermoney.php"><button class="button">Transfer Now</button></a>
    </section>
      </div>
      <footer class="page-footer  fixed-bottom font-small unique-color-dark pt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center" style="color: white; background: black;">© 2021 Copyright:
            KUNDAN KUMAR <br>The Spark Foundation Project
        </div>
        <!-- Copyright -->
    </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>