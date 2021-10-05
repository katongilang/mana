<!DOCTYPE html>
<html lang="en">
<head>
	<?=$this->include('layout/header')?>
	<?=$this->renderSection('addstyle')?>
</head>
<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
	<!-- Begin page -->
	<div class="wrapper">

		<?=$this->include('layout/sidebar')?>
		<div class="content-page">
			<div class="content">
				<?=$this->include('layout/navbar')?>
				<!-- Start Content-->
				<?=$this->renderSection('content')?>
				<!-- container -->

			</div>
			<!-- content -->

			<?=$this->include('layout/footer')?>

		</div>
	</div>
	<!-- END wrapper -->

	<?=$this->include('layout/js')?>
	<?=$this->renderSection('addjs')?>
</body>

</html>