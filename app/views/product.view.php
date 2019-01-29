
<?php require('partials/head.php'); ?>
<div id="main">
	<div class="wrapper">

			<div class="details">
				<p><strong>Model: </strong> <?php echo $bike[0]->name ?></p>
				<img src="public/images/<?php echo  $bike[0]->image; ?>"  alt="bike">
				<p>Price: <?php echo $bike[0]->price ?>$</p>
				<p>Description: <?php echo  $bike[0]->description; ?></p>
				<a href="cart" class="button">Add to cart</a>
			</div>
	</div>
</div>

<?php require('partials/footer.php'); ?>