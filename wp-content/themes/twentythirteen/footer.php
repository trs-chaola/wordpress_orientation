<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<div class="teacher_footer">
			<div class="footer_left">
				<img alt="DBE LOGO" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/DBE_logo_footer.png" />
				<p><br/>
					no47A VISAYAS ST MARTIN VILLAGE <br/>A.S.FORTUNA ST MANDAUE CITY CEBU 6014
					<h2>
						Tel +63 32 254 1657
					</h2>
					受付時間 08:00~22:00 （月～金曜日）<br/>
					※土日、祝日は休み
				</p>
				<div class="links_footer">
					<ul>
						<li>当校の特徴</li>
						<li>カリキュラム</li>
						<li>カレンダー</li>
						<li>講師紹介</li>
						<li>宿泊施設</li>
						<li>Ｑ＆Ａ</li>
						<li>生徒の生活環境</li>
						<li>応募方法</li>
						<li>お問い合わせ</li>
					</ul>
				</div>
			</div>
			<div class="footer_right">
				<img alt="DBE LOGO" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/dbe_map.png" />
			</div>
		</div>
		<footer id="colophon" class="teacher_footer_wrap site-footer" role="contentinfo">
			<?php// get_sidebar( 'main' ); ?>
			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<!-- a href="<?//php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?//php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php// printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a-->
				Copyright &copy; Dream Big English. All rights reserved
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>