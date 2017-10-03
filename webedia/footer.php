	<footer>
		<div class="redes-sociais">
			<ul>
				<li><a href="http://www.facebook.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook.png" class="facebook" alt="icone-facebook"></a></li>
				<li><a href="http://www.pinterest.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/pinterest.png" class="pinterest" alt="icone-pinterest"></a></li>
				<li><a href="http://www.instagram.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram.png" class="instagram" alt="icone-instagram"></a></li>
				<li><a href="http://www.twitter.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/twitter.png" class="twitter" alt="icone-twitter"></a></li>
				<li><a href="http://www.youtube.com"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/youtube.png" class="youtube" alt="icone-youtube"></a></li>
			</ul>
		</div>
		<div class="copyright">COPYRIGHT 2017 WEBEDIA</div>
	</footer>
</main>
<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery-min.js"></script>
		<?php if (is_singular('post')) { ?>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/slick-1.6.0/slick/slick.min.js"></script>
		<?php } ?>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/script.js"></script>
	</body>
</html>