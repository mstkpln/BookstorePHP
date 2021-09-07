<html lang="en">
  <head>
  <?php $conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect..."); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />
<link rel="stylesheet" href="./css/index.css">

  </head>
  <body>
  <ul>
  <h1 class="title">Welcome to
							<?php
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'GoodFellas BookStore';
								}
							?> </h1>
			<li class="current_page_item" id="buttons"><a href="index.php">Home</a></li>
			<li id="search"><a></a>
									<form method="GET" action="search_result.php">
										<fieldset>
										<input type="text" id="s" name="s" value="" />
										<input type="submit" id="x" value="Search" />
										</fieldset>
									</form>
								</li>
			<li><a href="viewcart.php">View Cart</a></li>
			<li>
									<h2>Categories</h2>
									<ul>
													<?php
															
								
															$query="select * from category ";
								
															$res=mysqli_query($conn,$query);
																
															while($row=mysqli_fetch_assoc($res))
																{
																	echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
																	
																}
								
																mysqli_close($conn);
													?>
									</ul>
								</li>
								
							</ul>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
			
</ul>
					<div id="Page" style = float:right; >
					<header id="banner">
      <img src="pictures/logo.jpg">
	  <marquee scrollamount="4" height="200" width="60%" direction="down">

<center><h1>Welcome to GoodFellas BookStore</h1></center>

</marquee>
				<div id="socialmedia">
      <img src="pictures/socialmedia2.png">
    </div> </div>
				<div id="sidebar">
								<ul>
								<li id="login">
											<?php
												if(isset($_SESSION['status']))
												{
													echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
												}
												else
												{
													echo '<form action="process_login.php" method="POST">
															<h2>LogIn</h2>
																<b>Username:</b>
																<br><input type="text" name="usernm"><br>
																<br>
																
																
																<b>Password:</b>
																<br><input type="password" name="pwd">
																<input type="submit" id="x" value="Login" />
															</form>';
												}
											?>
								</li>
								<p> </p>
				<div id="footer" style = "text-align-last: center;">
				<p id="legal">(c) 2021 This WebSite Brought To You By <a href="index.php"> GoodFellas Bookstore</a>.</p>
				</div>
  </body>
</html>
