<?php include('views/elements/header.php');?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php
		if((!isset($message) || $message == null) && isset($_SESSION['message'])) {
		  $message = $_SESSION['message'];
		  unset($_SESSION['message']);
		}
		?>

		<h1>Welcome To My Final Site.</h1>
	<h3>My blog and MVC</h3>
	<div id="image">


<p>This is my blog! It's run using an MVC. Bacon ipsum dolor amet tri-tip pork chop pork belly, andouille flank rump capicola ham burgdoggen ham hock fatback. Flank pastrami short ribs ribeye. Boudin filet mignon brisket beef salami ball tip. Flank pork belly swine fatback kevin. Sausage prosciutto bresaola, alcatra corned beef brisket tongue landjaeger short loin tenderloin meatball pork belly pork chop.</p>

		<p>Brisket sirloin ham corned beef. Beef ham sirloin jerky bacon hamburger sausage ribeye pork biltong t-bone beef ribs jowl bresaola tri-tip. Alcatra buffalo swine shoulder fatback pork belly tail sirloin brisket chicken drumstick pork loin kielbasa. Burgdoggen pork belly ham biltong tri-tip cupim strip steak, bacon tenderloin tongue chicken frankfurter bresaola jowl ribeye.</p>

<h3> My MVC also can show you the weather! Try it out below.</h3>


</div>
</div>
<div class="container" id="wx">
<div class="page-header">
<h1>Weather</h1>
</div>
<form method="post" class="zip-submit" <?php /* action="<?php echo BASE_URL; ?>ajax/get_weather/" */ ?>>
<label for="zip">Enter Your Zip Code</label>
<input type="text" name="zip" id="zip" required="zip" />
<br />
<button type="submit" class="btn">Load Results</button>
</form>
</div>
	</div>
</div>
<?php include('views/elements/footer.php');?>
