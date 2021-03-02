<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="contactus"  style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Contact Us</h3>



		<div class="main_content">
			<div class="col-md-6" style="border-right: 2px solid black;">
				<article>
					<h2>dr. rajesh kumar <h2><h4>  M.D </h4>
							<h5>Saraswati Medical University, kormangala-5200.</h5>
						<p> https://portfolio.developerazad.com <br>
							https://developerazad.wordpress.com <br>
							https://linkedin.com/in/developerazad <br>
							https://facebook/developerazad <br>
							cell: +88 01764761919</p><br>
				</article>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Your Message</h2>
				<form action="" method="post" class="text-center">
						<label>
								First Name: <input type="text" name="firstname" value="" placeholder="firstname" required>
						</label><br><br>

						<label>
								Last Name: <input type="text" name="lastname" value="" placeholder="lastname" required>
						</label><br><br>

						<label>
								Email: <input type="email" name="email"  value="" placeholder="Your email" required>
						</label><br><br>
						<label>
								Your Comment: <textarea name="comment" id="" cols="30" rows="4" required></textarea>
						</label><br><br>

						<input type="submit" value="Send Us" name="submit" style="margin-top: 75px;border-radius: 2px;"/>
						<!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 -->
					</form><br><br><br>
			</div>


 		</div>

	</div>




 <?php include('footer.php'); ?>



	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>



<!-- contact information inserting -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){


							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?>




</body>
</html>
