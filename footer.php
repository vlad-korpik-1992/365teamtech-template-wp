<footer class="footer">
	<div class="wrapper">
		<div class="footer__box">
			<nav class="footer__menu">
				<ul class="footer__menu__list">
					<li class="footer__menu__list__items">
						<a href="/" class="footer__menu__link">Home</a>
					</li>
					<li class="footer__menu__list__items">
						<a href="<?php echo get_page_link(15)?>" class="footer__menu__link">Our services</a>
					</li>
					<li class="footer__menu__list__items">
						<a href="<?php echo get_page_link(10)?>" class="footer__menu__link">About</a>
					</li>
					<li class="footer__menu__list__items">
						<a href="<?php echo get_page_link(36)?>" class="footer__menu__link">Contact</a>
					</li>
					<li class="footer__menu__list__items">
						<a href="<?php echo get_page_link(42)?>" class="footer__menu__link">Blog</a>
					</li>
				</ul>
			</nav>
			<div class="footer__copy">
				<p>365teamtech &copy; <script>
						var mdate = new Date();
						document.write(mdate.getFullYear());
					</script>
				</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>