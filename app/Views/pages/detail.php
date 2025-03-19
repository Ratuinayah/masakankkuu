<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>Recipes</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<iframe width="100%" height="450" src="<?= $masakanku['iframe'] ?>" title="Beef Rendang - Spicy &quot;Dry&quot; Curry Beef - Food Wishes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							<hr>
							<h2>Petunjuk</h2>
							<p><?= $masakanku['petunjuk'] ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Bahan Bahan</h4>
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Bahan</th>
										<th>Takaran</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$bahan = json_decode($masakanku['bahan'], true); 
									if (is_array($bahan)):
										foreach ($bahan as $item): 
									?>
										<tr>
											<td><?= esc($item['nama']) ?></td>
											<td><?= esc($item['takaran']) ?></td>
										</tr>
									<?php 
										endforeach; 
									endif; 
									?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->
<?= $this->endsection('content'); ?>