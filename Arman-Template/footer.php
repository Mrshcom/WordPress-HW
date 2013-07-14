	<div class="container-footer">
		<footer class="cover">
			<section class="right">
				<h3 class="title">
					لینک های مفید
					<span class="greenbar"></span>
				</h3>
				<nav>
					<?php
						wp_nav_menu(array(
							'theme_location'  => 'UsefulLinks',
							'container'       => false, 
							'container_class' => '', 
							'menu_class'      => '', 
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
						));
					?>
				</nav>
			</section>
			<section class="right">
				<section class="newsletter">
					<h3 class="title">
						عضویت در خبرنامه
						<span class="greenbar"></span>
					</h3>
					<div class="send-mail cover">
						<p>برای عضویت درخبرنامه لطفا” ایمیل خود را وارد نمائید</p>
						<span>
							<input id="btnsend" type="button" value="ارسال">
							<input id="txtmail" type="text" title="ایمیل">
						</span>
					</div>
				</section>
				<section class="socialnetworks">
					<h3 class="title">
						شبکه های اجتماعی
						<span class="greenbar"></span>
					</h3>
					<nav>
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'SocialNetworks',
								'container'       => false, 
								'container_class' => '', 
								'menu_class'      => '', 
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>'
							));
						?>
					</nav>
				</section>
			</section>
			<section class="mra last contactus">
				<h3 class="title">
					تماس با ما
					<span class="greenbar"></span>
				</h3>
				<p>
					آدرس: مشهد، بلوار سجاد بین شقایق و نیلوفر ساختمان 209، واحد<br>
					تلفن: 7648400 511 98+<br>
					فکس: 7636421 511 98+ <br>
				</p>
				<div class="gmap"></div>
			</section>
		</footer>
	</div>
	<?php get_template_part('copyright'); ?>
</body>
</html>