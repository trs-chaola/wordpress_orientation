<?php
//Template Name: Staff Page

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div id="post-4" class="post-4 page type-page status-publish hentry">
				<div class="entry-header">
					<div class="left">
						<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/accommondation_icon.png"/>
					</div>
					<div class="left">
						<h5 class="page-titles">
							ACCOMMODATION<br/>
							<font style="font-size:13px; font-weight:normal;">宿泊施設</font>
						</h5>
					</div>
					<div class="right breadcrumbs">
						<a href="">TOP</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;宿泊施設
					</div>
					<br style="clear:both;"/>
				</div><!-- .entry-header -->
				<div class="entry-content">
					<p>
						ドリーム・ビッグ・イングリッシュは快適で清潔な宿泊施設を提供しています。<br>
						寮はキャンパスから5分ほどのところにあります。<br>
						これは地元の方と英語で会話する機会を生み、先生やクラスメートのみという閉鎖的な環境になるのを防ぐという狙いがあります。
					</p>
					<p>
						寮施設にはランドリーステーションがあり、また、生徒の安全を確実にするために夜間セキュリティを配置しています。<br>
						私たちの寮施設は、主要なショッピングモール、ナイトスポット、レストラン、緊急サービスへの徒歩圏内に位置しています。<br>
						寝室は、個室または共同部屋があります（空き状況による）
					</p>
						<div class="accomodation-image-container">
							<div id="navcontainer">
								<ul>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/bedroom1_pic.png"><br>
										<span class="accomodation-image-label">寝室1</span>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/bedroom2_pic.png"><br>
										<span class="accomodation-image-label">寝室2</span>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/kitchen_pic.png"><br>
										<span class="accomodation-image-label">キッチン</span>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/cr_pic.png"><br>
										<span class="accomodation-image-label">トイレ</span>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>-child/images/accomodation/terrace_pic.png"><br>
										<span class="accomodation-image-label">バルコニー</span>
									</li>
								</ul>
							</div>
						</div>
				</div><!-- .entry-content -->
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>