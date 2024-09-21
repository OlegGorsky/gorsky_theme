<section class="section">
	<div class="container">
		<div class="columns is-8 is-variable">
			<main class="column is-three-quarters content">
				<h1 class="am-block title">
					@{ title }
				</h1>
				<p class="am-block is-size-5">
					Building a portfolio or blog page is a very common task. Check out the source of this 
					template to understand how <b>pagelist</b> objects work and how filters can be easily implemented 
					using Automad's template language.
				</p>
				<@ newPagelist {  
					filter: @{ ?filter }, 
					match: '{":level": "/(1|2)/"}',
					search: @{ ?search },
					sort: @{ ?sort | def ('date desc') }
				} @>
				<div class="am-block mb-5 field is-grouped is-grouped-multiline">
					<div class="control">
						<div class="field has-addons">
							<div class="dropdown is-hoverable">
								<div class="dropdown-trigger">
									<button class="button is-dark" aria-haspopup="true" aria-controls="dropdown-menu">
										<span>
											<span class="icon is-small">
												<i class="fas fa-filter" aria-hidden="true"></i>
											</span>&nbsp;
											Filters
										</span>
										<span class="icon is-small">
											<i class="fas fa-angle-down" aria-hidden="true"></i>
										</span>
									</button>
								</div>
								<div class="dropdown-menu" id="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a 
										href="?<@ queryStringMerge { filter: false } @>"
										class="dropdown-item<@ if not @{ ?filter } @> is-active<@ end @>"
										>
											All
										</a>
										<@ foreach in filters @>
											<a 
											href="?<@ queryStringMerge { filter: @{ :filter } } @>" 
											class="dropdown-item<@ if @{ ?filter } = @{ :filter } @> is-active<@ end @>"
											>
												@{ :filter }
											</a>
										<@ end @>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="control">
						<div class="field has-addons">
							<p class="control">
								<a 
								href="?<@ queryStringMerge { sort: 'date desc' } @>" 
								class="button is-dark<@ if not @{ ?sort } or @{ ?sort } = 'date desc' @> is-active<@ end @>">
									<span class="icon is-small">
										<i class="fas fa-sort-numeric-down" aria-hidden="true"></i>
									</span>&nbsp;
									Date
								</a>
							</p>
							<p class="control">
								<a 
								href="?<@ queryStringMerge { sort: 'title asc' } @>" 
								class="button is-dark<@ if @{ ?sort } = 'title asc' @> is-active<@ end @>"
								>
									<span class="icon is-small">
										<i class="fas fa-sort-alpha-up" aria-hidden="true"></i>
									</span>&nbsp;
									Title
								</a>
							</p>
						</div>
					</div>
					<div class="control">
						<form action="" method="get">
							<input 
							class="input" 
							type="text" 
							name="search" 
							placeholder="Keyword" 
							value="@{ ?search }"
							/>
						</form>
					</div>
				</div>
				<div class="columns is-multiline is-variable">
					<@ foreach in pagelist @>
						<div class="column is-one-third is-flex">
							<div class="card is-flex-grow-1">
								<div class="card-content">
									<div class="content">
										<h3>@{ title }</h3>
										<span class="is-size-7">
											@{ date | dateFormat ('F Y') }
										</span>
										<p class="mt-3 mb-5">
											@{ +main | findFirstParagraph | 150 }
										</p>
										<a href="@{ url }" class="button">More ...</a>
									</div>
								</div>
							</div>
						</div>
					<@ end @>
				</div>
			</main>
			<nav class="column is-one-quater">
				<@ elements/menu.php @>
			</nav>
		</div>
	</div>
</section>
