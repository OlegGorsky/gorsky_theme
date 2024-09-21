<section class="section">
	<div class="container">
		<div class="columns is-8 is-variable">
			<main class="column is-three-quarters content">
				<h1 class="am-block title">
					@{ title }
				</h1>
				<p class="am-block is-size-5">
					<@ if @{ ?lang } @>
						<@ set { %lang: @{ ?lang | 5 } } @>
					<@ end @>
					<@ if @{ %lang } != 'de' @>
						This template illustrates the use of session data to build a multilingual website. 
						Click on a language button below to switch between English and German content or 
						use the language stored in the session data array. Click the "Use Session Setting" button 
						to see that the selected language persists even though there is no "lang" parameter within the URL.
					<@ else @>
						Dieses Template verdeutlicht die Nutzung von Sessions, um eine multilinguale Website zu erstellen. 
						Klicke auf einen der Buttons unten, um zwischen Englisch und Deutsch zu wechseln, oder 
						die Spracheinstellung aus dem Session Array zu laden. Klicke auf den "Use Session Setting" Button,
						um zu sehen, dass die ausgewählte Sprache auch angezeigt wird, wenn die URL keinen "lang" Parameter hat.
					<@ end @>
				</p>
				<section class="am-block">
					<div class="field is-grouped is-grouped-multiline is-marginless">
						<div class="control">
							<div class="field has-addons">
								<p class="control">
									<a
									href="?lang=en" 
									class="button is-dark<@ if @{ %lang | def('en') } = 'en' @> is-active<@ end @>"
									>
									English
									</a>
								</p>
								<p class="control">
									<a
									href="?lang=de" 
									class="button is-dark<@ if @{ %lang } = 'de' @> is-active<@ end @>"
									>
									German
									</a>
								</p>  
							</div>
						</div>
						<div class="control">
							<div class="field">
								<p class="control">
									<a
									href="@{ url }" 
									class="button is-light"
									>
									Use Session Setting
									</a>
								</p>
							</div>
						</div>
					</div>
				</section>
			</main>
			<nav class="column is-one-quater">
				<@ elements/menu.php @>
			</nav>
		</div>
	</div>
</section>
