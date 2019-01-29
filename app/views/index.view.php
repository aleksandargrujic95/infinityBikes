<?php require('partials/head.php'); ?>
<div id="main">
	<div class="wrapper">
		<?php require('partials/sidebar.php'); ?>
		<div id="products">
				<div id="cover">
					<img src="public/images/bike1.jpg" alt="cover">
				</div>
			<?php foreach($bikes as $row){ ?>					

			<div class="product">
				<p><strong>Model: </strong> <?php echo $row->name ?></p>
				<img src="public/images/<?php echo  $row->image; ?>"  alt="bike">
				<p>Price: <?php echo $row->price ?>$</p>
				<a class="button" href="/product?brend=<?php echo $row->id?>"><p>View Details</p>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php require('partials/footer.php'); ?>