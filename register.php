<?php session_start(); ?>
<head>
<?php $conn=mysqli_connect("localhost","root","","book_store")or die("Can't Connect..."); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> GoodFellas BookStore </title>
<meta name="keywords" content="Bookstore, shopping, online, html" />
<meta name="description" content="GoodFellas BookStore" />

</head>

<body style="background-color:rgb(0, 122, 51);">
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
			<li>

				<div id="page">

							<div id="content">

								<div class="post">
									<h1 class="title">Welcome to Registeration.</h1>

									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}

											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}

										?>

										<table>
											<form action="process_register.php" method="POST">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>


												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">

															<option>Ottawa
															<option>Toronto
															<option>Vancouver
															<option>Montreal
															<option>Calgary
															<option>Saskatchewan


													</select>

												</tr>

												<tr><td>&nbsp;</tr>



												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>

								</div>


							</div>

							<div id="footer">
				<p id="legal">(c) 2021 This WebSite Brought To You By <a href="index.php"> GoodFellas Bookstore</a>.</p>
				</div>
</body>
</html>
