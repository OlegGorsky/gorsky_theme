<section class="section">
	<div class="container">
		<div class="columns is-8 is-variable">
			<main class="column is-three-quarters content">
				<h1 class="am-block title">
					@{ title }
				</h1>
				<p class="am-block is-size-5">
					This template demonstrates how files can be handled using Automad's template language.
					Check out the source of this file to learn how <b>filelist</b> objects work and 
					how images can be easily resized to be used as thumbnails in cards.
				</p>
				<section class="am-block">
					<div class="columns is-multiline is-variable">
						<@ filelist { 
							glob: @{ images | def('https://source.unsplash.com/8nebi46-k_M/1000x1000, https://source.unsplash.com/GSIzNfR9GLE/1000x1000, https://source.unsplash.com/PxypFiQMkIk/1000x1000') },
							sort: 'asc'
						} @>
						<@ foreach in filelist { width: 400, height: 300, crop: true } @>
							<div class="column is-one-third is-flex">
								<div class="card is-flex-grow-1">
									<div class="card-image">
										<figure class="image is-4by3 is-marginless">
											<img 
											src="@{ :fileResized }" 
											alt="@{ :basename }"
											title="@{ :file }"
											width="@{ :widthResized }"
											height="@{ :heightResized }"
											>
										</figure>
									</div>
									<div class="card-content">
										<div class="content">
											<h4>Image @{ :i }</h4>
											@{ :caption | def ('This file has **no** caption.') | markdown }
											<p>
												<span class="tag is-dark">
													@{ :width } x @{ :height }
												</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						<@ end @>
					</div>
				</section>
			</main>
			<nav class="column is-one-quater">
				<@ elements/menu.php @>
			</nav>
		</div>
	</div>
</section>
