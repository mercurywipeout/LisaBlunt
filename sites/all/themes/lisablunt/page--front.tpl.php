<header>
	<div id="order-now">
    	<a href="http://press.journalism.cuny.edu/book/citizens-rising/">Order Now</a>
	</div>
    <nav>
    	<div class="container">
        	<h1 id="logo"><span>Citizens Rising, Independent Journalism and the Spread of Democracy. By David Hoffman.</span><a href="/"><img src="sites/all/themes/int/images/book-large.png" alt="Citizens Rising, Independent Journalism and the Spread of Democracy. By David Hoffman." /></a></h1>
        	<div class="social">
        		<a href="https://www.facebook.com/citizensrising"><img src="sites/all/themes/int/images/facebook-icon.png" alt="Facebook" /></a>
        		<a href="https://twitter.com/citizensrising"><img src="sites/all/themes/int/images/twitter-icon.png" alt="Twitter" /></a>
        	</div>
        	<?php print render($page['navigation']); ?>
    	</div>
    </nav>
    <div class="container quote-carousel">
        <blockquote class="quote">
			<?php if (isset($node->field_quote_1['und'][0]['value']) && isset($node->field_citation_1['und'][0]['value'])): ?>
				<span class="first"><?php print $node->field_quote_1['und'][0]['value']; ?> <cite>--<?php print $node->field_citation_1['und'][0]['value']; ?></cite></span>
			<?php endif ?>
			<?php if (isset($node->field_quote_2['und'][0]['value']) && isset($node->field_citation_2['und'][0]['value'])): ?>
				<span><?php print $node->field_quote_2['und'][0]['value']; ?> <cite>--<?php print $node->field_citation_2['und'][0]['value']; ?></cite></span>
			<?php endif ?>
			<?php if (isset($node->field_quote_3['und'][0]['value']) && isset($node->field_citation_3['und'][0]['value'])): ?>
				<span><?php print $node->field_quote_3['und'][0]['value']; ?> <cite>--<?php print $node->field_citation_3['und'][0]['value']; ?></cite></span>
			<?php endif ?>
			<?php if (isset($node->field_quote_4['und'][0]['value']) && isset($node->field_citation_4['und'][0]['value'])): ?>
				<span><?php print $node->field_quote_4['und'][0]['value']; ?> <cite>--<?php print $node->field_citation_4['und'][0]['value']; ?></cite></span>
			<?php endif ?>
        </blockquote>
    </div>
</header>
<div class="container">
	<div id="content">
    	<?php print render($page['content']); ?>
	</div>
	<div id="social-col">
		<?php print render($page['sidebar_first']); ?>
		<div class="social">
			<a href="https://www.facebook.com/citizensrising"><img src="sites/all/themes/int/images/facebook-icon.png" alt="Facebook" /></a>
			<a href="https://twitter.com/citizensrising"><img src="sites/all/themes/int/images/twitter-icon.png" alt="Twitter" /></a>
		</div>
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
<script type="text/javascript">
$(document).ready(function() {
    $('.quote').after('<nav id="nav">').cycle({
            fx:     'fade',
            speed:  'fast',
            timeout: 0,
            pager:  '#nav'
	});
});
</script>