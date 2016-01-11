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

        <section class="hero">
        	<div class="content">
                <h2>A <span>Strong Voice</span> for Delaware</h2>
                <form method="post" action="">
                	<h3>Join Lisa!</h3>
                    <ul>
                        <li>
                        	<label for="email">Email</label>
                        	<input id="email" type="text" name="email" required placeholder="email@domain.com" />
                        </li>
                        <li>
                        	<label for="zip">Zip</label>
                        	<input id="zip" type="text" name="zip" required placeholder="12345" />
                        </li>
                        <button class="btn">Join &rsaquo;</button>
                    </ul>
                </form>
            </div>
        </section>
        <section class="donate">
        	<div class="content">
                <h2>Donate Now!</h2>
                <ol>
                	<a href="#"><li>$5</li></a>
                	<a href="#"><li>$10</li></a>
                	<a href="#"><li>$25</li></a>
                	<a href="#"><li>$50</li></a>
                </ol>
            </div>
        </section>
        <section class="about clearfix">
        	<article class="content">
                <h2>About Lisa</h2>
                <img src="img/hand-on-chin.jpg" alt="Lisa sitting on chair." class="right" />
                <p>Nunc lobortis dignissim neque, eget tempor tortor pharetra sed. Etiam sit amet velit elit. Donec venenatis vitae diam ac tristique. Nunc ac dignissim tortor, eget viverra augue. In vel interdum dolor, in euismod purus. Vestibulum dapibus accumsan cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                
                <p>Donec cursus feugiat ornare. Proin eget ligula erat. Cras suscipit mi non lorem finibus maximus. Vestibulum vitae orci ullamcorper, iaculis neque quis, dictum nulla. Nunc tellus risus, lobortis quis mi sed, porttitor hendrerit mauris.</p>
                <a href="#" class="btn">Read More &rsaquo;</a>
            </article>
        </section>
        <section class="feeds">
        	<div class="content">
            	<div class="news">
            		<h2>Latest News</h2>
                	<ul>
	                	<li>
		                	<article>
		                		<a href="#"><h3>Nunc ac dignissim tortor eget viverra augue</h3></a>
		                		<p>In vel interdum dolor, in euismod purus. Vestibulum dapibus accumsan cursus. Lorem ipsum dolor sit amet, consectetur.</p>
		                		<a href="#" class="read-more">Read More &rsaquo;</a>
	                		</article>
	                	</li>
	                	<li>
	                		<article>
		                		<a href="#"><h3>Nunc tellus risus lobortis quis sed</h3></a>
		                		<p>Donec cursus feugiat ornare. Proin eget ligula erat. Cras suscipit mi non lorem finibus maximus. Vestibulum vitae orci ullamcorper, iaculis neque quis, dictum nulla.</p>
		                		<a href="#" class="read-more">Read More &rsaquo;</a>
		                	</article>
	                	</li>
	                	<li>
		                	<article>
		                		<a href="#"><h3>Interdum dolor cursus ipsum consectetur adipiscing</h3></a>
		                		<p>Quisque vestibulum bibendum arcu vel aliquet. Quisque interdum elit metus, at elementum nulla rhoncus quis. Proin rhoncus euismod rhoncus.</p>
		                		<a href="#" class="read-more">Read More &rsaquo;</a>
		                	</article>
	                	</li>
                	</ul>
                	<a href="#" class="btn">View All News &rsaquo;</a>
            	</div>
            	<aside>
                	<div class="twitter">
                		<h2>Twitter</h2>
                		<a href="http://twitter.com/LisaBRochester" class="handle">@LisaBRochester</a>
                		<div class="tweet">
	                		<p>The News Journal just posted this article announcing my campaign for US Congress! <a href="http://delonline.us/1N3jEVG">http://delonline.us/1N3jEVG</a></p>
	                		<span class="date">6 hours ago</span>
                		</div>
                	</div>
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