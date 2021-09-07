<html lang="en">
  <head>
  <?php $conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect..."); 
  $search=$_GET['s'];
  $query="select *from book where b_nm like '%$search%'";
  
  $res=mysqli_query($conn,$query) or die("Can't Execute Query...");?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />
<link rel="stylesheet" href=".css/page2.css">
<script src="./js/page1.js" defer></script>

  </head>
  <body style="background-color:yellow;">
  <ul>
  <img src="pictures/logo.jpg">
			<li class="current_page_item" id="buttons"><a href="index.php" style = "color:black;">Home</a></li>
			<li id="search"><a>Search</a>
									<form method="GET" action="search_result.php">
										<fieldset>
										<input type="text" id="s" name="s" value="" />
										<input type="submit" id="x" value="Search" />
										</fieldset>
									</form>
								</li>
			<li><a href="viewcart.php" style = "color:black;">View Cart</a></li>
			
</ul>
	  

	  <div id="page">
					
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['b_id'].'">
														<img src="'.$row['b_img'].'" width="80" height="100">
														<br>'.$row['b_nm'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
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
										
										
										<!--
										<li><a href="#">Economics</a></li>
										<li><a href="#">Fiction</a></li>
										<li><a href="#">Forestry & WildLife</a></li>
										<li><a href="#">Health & Physics</a></li>
										<li><a href="#">Historical</a></li>
										<li><a href="#">Social</a></li>
										<li><a href="#">Sports & Physical Education</a></li>
										<li><a href="#">Terrorism</a></li>
										<li><a href="#">Tourism</a></li>
										<li><a href="#">Tracking </a></li>
										<li><a href="#">Yoga</a></li>
										-->
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
