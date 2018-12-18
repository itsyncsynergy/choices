<?php $this->load->view('header') ?>
        <div class="pjax-content" data-pjax-container="true" id="pjax-container">
            <!-- Corners -->
<div class="corner-wrapper">
	<div class="corners-top-wrapper">
		<div class="corners corner--t-l">
							<a class="js-back" style="display:none;">&larr; Previous Question</a>
						<a class="js-startover" style="display:none;" href="/">&larr; Start Again</a>
		</div>
		<div class="corners corner--t-m hidden-xs">
					</div>
		<div class="corners corner--t-r js-fade-this fadeIn">
											<div class="social-buttons hidden-xs">
					<!-- Facebook Share Button -->
					<div class="fb-share-button" data-href="" data-layout="button"></div>
					<!-- Twitter Tweet Button -->
					<a href="https://twitter.com/share" class="twitter-share-button" data-text="" data-count="none"></a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
					</div>
	</div>
	<div class="corners-bottom-wrapper">
		<div class="corners corner--b-r js-fade-this fadeIn">
							<span class="corner js-pagenumber">
								</span>
					</div>
		<div class="corners corner--b-m">
			<span class="corner">
			</span>
		</div>
		<div class="corners corner--b-l">
			<span class="corner">
				<a data-toggle="modal" data-target="#aboutmodal">About</a> / <a href="http://busybeeappdesign.com/" target="_blank">Busy Bee</a> <span class="hidden-sm hidden-xs">Developing Movile Apps For Small Business.</span>
			</span>
		</div>
	</div>
</div>
<!-- Content -->
<div class="content js-fade-this fadeIn">
	<div class="container">
		<h2>Not Found</h2>
<p class="error">
    <strong>Error: </strong>
    The requested address <strong>'/estimates'</strong> was not found on this server.</p>
	</div>
</div>
        </div>
<?php $this->load->view('footer') ?>
