<div class="header-container">
    <header class="clearfix">
        <h1>
        	<img src="sites/all/themes/lisablunt/img/logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo" />
        	<span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
        </h1>
        <nav class="social">
            <?php print render($page['social_navigation']); ?>
        </nav>
        <nav class="main">
            <?php print render($page['navigation']); ?>
        </nav>
    </header>
</div>

<div class="main-container">
    <div class="main clearfix">
        <section class="hero" style="background-image: url('img/landscape.jpg');">
        	<div class="content">
                <h1><?php print $title; ?></h1>
            </div>
        </section>
        <section class="sub-container">
        	<div class="content">
            	<article>
                	<?php print render($page['content']); ?>
        		</article>
            	<aside>
                	<?php // print render($page['sidebar_first']); ?>
                	<div class="twitter">
                		<h2>Twitter</h2>
                		<a href="http://twitter.com/LisaBRochester" class="handle">@LisaBRochester</a>
                		<div class="tweet">
	                		<p>The News Journal just posted this article announcing my campaign for US Congress! <a href="http://delonline.us/1N3jEVG">http://delonline.us/1N3jEVG</a></p>
	                		<span class="date">6 hours ago</span>
                		</div>
                	</div>
                	<?php // print render($page['sidebar_second']); ?>
                	<div class="support">
                		<h2>Show Your Support</h2>
                		<p>Add your name to Lisa’s list of Facebook supporters!</p>
                		<ul>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                		</ul>
                		<a href="#" class="btn">Add Your Name &rsaquo;</a>
                	</div>
                </aside>
               </div>
        </section>
        <section class="donate">
        	<?php print render($page['donate']); ?>
        </section>
    </div>
</div>

<div class="footer-container">
    <footer class="content">
        <div class="details">
            <h3>
            	<img src="img/footer-logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo"/>
                <span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
            </h3>
            <?php print render($page['footer']); ?>
        </div>
        <nav class="main">
            <?php print render($page['footer_navigation']); ?>
        </nav>
        <nav class="social">
        	<?php print render($page['social_navigation']); ?>
        </nav>
    </footer>
</div>