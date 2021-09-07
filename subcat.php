<html lang="en">
  <head>

  <?php 
  $conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect...");
  session_start();

  $cat=$_GET['catnm'];
	
  $q = "select * from subcat where parent_id = ".$_GET['cat'];
  $res = mysqli_query($conn,$q) or die("Can't Execute Query..");
  
  $row1 = mysqli_fetch_assoc($res);
  
  if($_GET['catnm']==$row1['subcat_nm'])
  {
	  header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
	  
  }?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />
<link rel="stylesheet" href=".css/page2.css">
<script src="./js/page1.js" defer></script>

  </head>
  <body style="background-color:yellow;">
  
  <ul>
			<li class="current_page_item" id="buttons"><a href="index.php" style = "color:black;">Home</a></li>
			<li id="search"><a>Search</a>
									<form method="GET" action="search_result.php">
										<fieldset>
										<input type="text" id="s" name="s" value="" />
										<input type="submit" id="x" value="Search" />
										</fieldset>
									</form>
								</li>
			<li class="last"><a href="contact.php" style = "color:black;">Contact</a></li>
			<li class="last"><a href="aboutus.php" style = "color:black;">About Us</a></li>
			<li><a href="viewcart.php" style = "color:black;">View Cart</a></li>
			
</ul>
	  

<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><?php echo $_GET['catnm'];?></h1>
							<div class="entry">
						
								<?php
									Do
									{
										
										echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
										//&subcatnm='.$row1["subcat_nm"].'
									}while($row1 = mysqli_fetch_assoc($res))
								?>
							
							</div>
							
						</div>
						
					</div>
					
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
								<li>
									<h2>Categories</h2>
									<ul>
													<?php
															
								
															$query="select * from category ";
								
															$res=mysqli_query($conn,$query);
																
															while($row=mysqli_fetch_assoc($res))
																{
																	echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
																	//pass catid not catnm
																}
								
																mysqli_close($conn);
													?>
									</ul>
								</li>
								
							</ul>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
				<p id="legal">(c) 2021 This WebSite Brought To You By <a href="index.php"> GoodFellas Bookstore</a>.</p>
				</div>
  </body>
</html>