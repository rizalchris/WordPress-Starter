<?php
/**
 * Footer template
 *
 * @package Gaia
 */
?>

</main>
<!-- Site Content -->
<footer class="text-bg-dark">
	<div class="container py-5">

		<div class="row">
			<!-- Section 1 -->
			<div class="col-6 col-md-2 mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column ps-0">
					<li class="nav-item mb-2">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link p-0">Home</a>
					</li>
					<li class="nav-item mb-2">
						<a href="#" class="nav-link p-0">Features</a>
					</li>
					<li class="nav-item mb-2">
						<a href="#" class="nav-link p-0">Pricing</a>
					</li>
					<li class="nav-item mb-2">
						<a href="#" class="nav-link p-0">FAQs</a>
					</li>
					<li class="nav-item mb-2">
						<a href="#" class="nav-link p-0">About</a>
					</li>
				</ul>
			</div>

			<!-- Section 2 -->
			<div class="col-6 col-md-2 mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column ps-0">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
				</ul>
			</div>

			<!-- Section 3 -->
			<div class="col-6 col-md-2 mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column ps-0">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0">About</a></li>
				</ul>
			</div>

			<!-- Newsletter -->
			<div class="col-md-5 offset-md-1 mb-3">
				<form action="#" method="post">
					<h5>Subscribe to our newsletter</h5>
					<p>Monthly digest of what's new and exciting from us.</p>

					<div class="d-flex flex-column flex-sm-row w-100 gap-2">
						<label for="newsletter-email" class="visually-hidden">Email address</label>
						<input id="newsletter-email" type="email" class="form-control" placeholder="Email address"
							required>
						<button class="btn btn-primary" type="submit">Subscribe</button>
					</div>
				</form>
			</div>
		</div>

		<!-- Bottom -->
		<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
			<p class="mb-0">
				© <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
			</p>

			<ul class="list-unstyled d-flex">
				<li class="ms-3">
					<a class="link-body-emphasis" href="#" aria-label="Instagram">
						<svg class="bi" width="24" height="24">
							<use xlink:href="#instagram"></use>
						</svg>
					</a>
				</li>
				<li class="ms-3">
					<a class="link-body-emphasis" href="#" aria-label="Facebook">
						<svg class="bi" width="24" height="24">
							<use xlink:href="#facebook"></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>