<html lang="en">
  <head>
  <?php $conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect..."); 
 $id=$_GET['id'];
	
 $q="select * from book where b_id=$id";
 
 $res=mysqli_query($conn,$q) or die("Can't Execute Query..");
 $row=mysqli_fetch_assoc($res);?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />
<link rel="stylesheet" href="./css/index.css">
<script src="./js/page1.js" defer></script>

  </head>
  <body>
  <ul>
			<li class="current_page_item" id="buttons"><a href="index.php">Home</a></li>
			<li id="search"><a>Search</a>
									<form method="GET" action="search_result.php">
										<fieldset>
										<input type="text" id="s" name="s" value="" />
										<input type="submit" id="x" value="Search" />
										</fieldset>
									</form>
								</li>
			<li><a href="viewcart.php">View Cart</a></li>
			
</ul>
	 <div id="content"style="color:black;">
								<div class="post">
									<h1 class="title"><?php echo $row['b_nm'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row['b_isbn'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['b_publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['b_edition'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">  PAGES</td>
																<td>: </td>
																<td align="left">'.$row['b_page'].'</td>
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['b_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												<tr valign="bottom" >
												
														<a href="'.$row['b_img'].'" rel="lightbox"><img src="images/zoom.gif" ></a>
													
												</tr>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['b_desc'].'
																				

											 
											 <tr><td colspan=2><hr color="purple"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row['b_price'].'">
														<img src="images/addcart.jpg">
													</a></td>';
												}
												
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

				<div id="footer">
				<p id="legal">(c) 2021 This WebSite Brought To You By <a href="page1.php"> GoodFellas Bookstore</a>.</p>
				</div>
  </body>
</html>
