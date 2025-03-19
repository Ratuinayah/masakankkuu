<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>We provide cooking recipes</p>
						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Why <span class="orange-text">Masakanku</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-book-open"></i>
									</div>
									<div class="content">
										<h3>Variety of Recipes</h3>
										<p>Masakku offers a wide range of recipes from various categories, including everyday dishes, special meals, and international cuisine. Users can easily find recipes that suit their tastes and needs.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-play-circle"></i>
									</div>
									<div class="content">
										<h3>Step-by-Step Guidance</h3>
										<p>The app provides clear and easy-to-follow instructions for each recipe. Even beginners can cook with ease as each step is explained in detail.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- testimonail-section -->
	<!-- <div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial">
						<div class="single-testimonial">
							<div class="client-avater">
								<img src="ratu/assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Ratu Inayah khansa<span>Develover of Masakanku</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end testimonail-section -->
<?= $this->endsection('content'); ?>