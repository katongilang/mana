<?php

/**
 * @Author: Gilbaskoro
 * @Date:   2021-02-01 13:41:14
 * @Last Modified by:   Gilbaskoro
 * @Last Modified time: 2021-10-05 08:53:50
 */
?>
<!doctype html>
	<html lang="id">
	<head>
		<?=$this->include('layout/header')?>
	</head>
	<body id="page-top">
		<div id="wrapper">
			<div id="content-wrapper" class="d-flex flex-column">
				<div id="content">
					<div class="container-fluid">
						<!-- 404 Error Text -->
						<div class="text-center mt-5 mb-4">
							<h1>404</h1>
							<p class="lead text-gray-800 mb-5">Page Not Found</p>
							<p class="text-gray-500 mb-0">Oops, The Page you're looking for doesn't exist or an other error occurred. <a href="<?=base_url()?>">&larr; Go back</a>.</p>
						</div>
					</div>				
				</div>
				<!-- Footer -->
				<footer class="sticky-footer bg-white pt-2">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; TimCwan</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->
			</div>
		</div>
		<?=$this->include('layout/js')?>
	</body>
	</html>