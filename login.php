
<?php include("_header.php"); ?>

<?php var_dump($_POST); ?>

<?php 
$isAdmin = ($_POST['login'] === "wcs");
$passwordIsGood = ($_POST['password'] === "phprocks");

$isAccepted = $isAdmin && $passwordIsGood;

?>


<div class="container">
	<div class="column is-12">
		<section class="hero is-info is-bold is-small">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Hello <?php if($isAccepted){echo "bienvenue Admin";} ?></h1>	
				</div>
			</div>
		</section>
	</div>
</div>

<?php include("_footer.php") ?>
</body>
</html>