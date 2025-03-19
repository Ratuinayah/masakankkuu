<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Lezat & Mudah</p>
						<h1>Menu</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">

				<?php foreach ($masakanku as $m):?>
					<div class="col-lg-4 col-md-6">
						<div class="single-latest-news">
							<a href="detail">
								<div class="latest-news-bg" style="background-image: url('<?= $m['thumbnail'];?>');"></div>	
							</a>
							<div class="news-text-box">
								<h3><a href="detail"><?= $m['judul'];?></a></h3>
								<a href="<?= $m['id'] ?>" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				
			</div>

		</div>
	</div>
	<!-- end products -->
	<?= $this->endsection('content'); ?>