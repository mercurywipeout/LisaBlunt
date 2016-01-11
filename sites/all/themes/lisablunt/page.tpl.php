<header>
	<div id="order-now">
    	<a href="http://press.journalism.cuny.edu/book/citizens-rising/">Order Now</a>
	</div>
    <nav>
    	<div class="container">
        	<h2 id="logo"><span>Citizens Rising, Independent Journalism and the Spread of Democracy. By David Hoffman.</span><a href="/"><img src="sites/all/themes/int/images/book-small.png" alt="Citizens Rising, Independent Journalism and the Spread of Democracy. By David Hoffman." /></a></h1>
        	<div class="social">
        		<a href="https://www.facebook.com/citizensrising"><img src="sites/all/themes/int/images/facebook-icon.png" alt="Facebook" /></a>
        		<a href="https://twitter.com/citizensrising"><img src="sites/all/themes/int/images/twitter-icon.png" alt="Twitter" /></a>
        	</div>
        	<?php print render($page['navigation']); ?>
    	</div>
    </nav>
</header>
<div class="container">
	<h1><?php print $title; ?></h1>
	<div id="content">
		<?php print render($page['content']); ?>
	</div>
	<div id="right-col">
		<?php print render($page['sidebar_first']); ?>
	</div>
</div>
<footer>
	<div class="container">
    	<nav>
    		<?php print render($page['footer']); ?>
    		<div class="social">
        		<a href="https://www.facebook.com/citizensrising"><img src="sites/all/themes/int/images/facebook-icon.png" alt="Facebook" /></a>
        		<a href="https://twitter.com/citizensrising"><img src="sites/all/themes/int/images/twitter-icon.png" alt="Twitter" /></a>
        	</div>
    	</nav>
    	<div id="legal">
        	<p>© Copyright 2013 David Hoffman</p>
        	<ul>
        		<li><a href="privacy-policy">Privacy Policy</a></li>
        	</ul>
        </div>
    </div>
</footer>