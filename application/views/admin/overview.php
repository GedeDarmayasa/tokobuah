<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin menampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
				<?php //$this->load->view("admin/_partials/breadcrumb.php") 
				?>

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-6 col-sm-12 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5"><?php echo $this->Product_model->get_data('products')->num_rows(); ?> Products</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="products">
								<span class="float-left"> View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-6 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-user"></i>
								</div>
								<div class="mr-5"><?php echo $this->Product_model->get_data('users')->num_rows(); ?> Users</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="users">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>

					<!-- Area Chart Example-->
					<div class="card mb-3">
						<div class="card-header">
							<i class="fas fa-chart-area"></i>
							Visitor Stats
						</div>
						<div class="card-body">
							<canvas id="myAreaChart" width="100%" height="30"></canvas>
						</div>
						<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
					</div>

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>
		<?php $this->load->view("admin/_partials/modal.php") ?>
		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>