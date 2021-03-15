<!DOCTYPE html>
<html lang="en">
<?= $this->load->view("layout/dashboard/header", "", true); ?>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
	<!-- Sidebar -->
	<?= $this->load->view("layout/dashboard/sidebar", "", true) ?>
	<!-- End of Sidebar -->
	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">
		<!-- Main Content -->
		<div id="content">
			<!--Topbar-->
			<?= $this->load->view("layout/dashboard/topBar", "", true) ?>
			<!-- End of Topbar -->
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<div class="container-fluid">
					<?php $this->load->view($page); ?>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->
		<!-- Footer -->
		<?= $this->load->view("layout/dashboard/footer", "", true) ?>
		<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<?= $this->load->view("layout/dashboard/script", "", true) ?>
</body>
</html>
