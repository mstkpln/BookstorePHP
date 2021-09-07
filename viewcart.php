<?php session_start();
$conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect...");
?>

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />
<link rel="stylesheet" href="./css/index.css">
<script src="./js/index.js" defer></script>

</head>

<body>
<img src="pictures/logo.jpg">
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
			<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Quantity
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > 
							<a href="checkout.php">CONFIRM & PROCEED<a/>
							</center>
							</form>
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
				<div id="sidebar">
								<ul>
								<li id="login">
											<?php
												// if(isset($_SESSION['status']))
												// {
												// 	echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
												// }
												// else
												// {
													echo '<form action="process_login.php" method="POST">
															<h2>LogIn</h2>
																<b>Username:</b>
																<br><input type="text" name="usernm"><br>
																<br>
																
																
																<b>Password:</b>
																<br><input type="password" name="pwd">
																<input type="submit" id="x" value="Login" />
															</form>';
												//}
											?>
								</li>
						
							</div>
							
						</div>
						
					</div>
					<div id="footer" style = "text-align-last: center;">
				<p id="legal">(c) 2021 This WebSite Brought To You By <a href="index.php"> GoodFellas Bookstore</a>.</p>
				</div>
</body>
</html>
