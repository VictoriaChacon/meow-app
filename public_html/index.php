<?php require_once ("php/partials/head-utils.php"); ?>
	<body class="sfooter">
		<div class="sfooter-content">

			<?php require_once ("php/partials/header.php"); ?>

			<!--begin main content -->
			<main>
				<div class="container-fluid">

					<div ng-view></div>

				</div>
			</main>
		</div>

		<?php require_once ("php/partials/footer.php"); ?>
	</body>
</html>