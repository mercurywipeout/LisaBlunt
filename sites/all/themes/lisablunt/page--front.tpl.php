<div class="header-container">
    <header class="clearfix">
        <a href="/">
            <h1>
            	<img src="/sites/all/themes/lisablunt/img/logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo" />
            	<span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
            </h1>
        </a>
        <nav class="social">
            <?php // print render($page['social_navigation']); ?>
            <ul>
                <li class="twitter"><a href="#"><img src="/sites/all/themes/lisablunt/img/twitter-icon.png" alt="Twitter" /></a></li>
                <li class="facebook"><a href="#"><img src="/sites/all/themes/lisablunt/img/facebook-icon.png" alt="Facebook" /></a></li>
            </ul>
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
        <section class="contact">
        	<div class="content">
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
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=05 "><li>$5</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=10"><li>$10</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=25"><li>$25</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=50"><li>$50</li></a>
                </ol>
            </div>
        </section>
        <section class="about clearfix">
        	<article class="content">
        		<?php print render($page['content']); ?>
            </article>
        </section>
        <section class="feeds">
        	<div class="content">
            	<div class="news">
                	<?php print render($page['sidebar_first']); ?>
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
            	<img src="/sites/all/themes/lisablunt/img/footer-logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo"/>
                <span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
            </h3>
            <?php print render($page['footer']); ?>
        </div>
        <nav class="main">
            <?php print render($page['footer_navigation']); ?>
        </nav>
        <nav class="social">
        	<?php // print render($page['social_navigation']); ?>
        	<ul>
        	    <li class="twitter"><a href="#"><img src="/sites/all/themes/lisablunt/img/twitter-icon.png" alt="Twitter" /></a></li>
        	    <li class="facebook"><a href="#"><img src="/sites/all/themes/lisablunt/img/facebook-icon.png" alt="Facebook" /></a></li>
        	</ul>
        </nav>
    </footer>
</div>