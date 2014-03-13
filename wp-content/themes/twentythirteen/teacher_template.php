<?php
/*
Template Name: Teacher page
*/

 get_header();?>
 
<div class="teacher_container">
		<div class="t_body_head">
			<div class="teach_head">
				<div style="border:0px solid red; width: 200px;height: 60px;">					
					<img style="float: left" alt="TEACHERS" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/teachers_icon.png" />
					<span style="float:left ;margin-left: 10px; margin-top:-20px;"><h5>TEACHERS<br/>講師紹介</h5></span>
				</div>
				<p style="float:right; margin-top:-65px"><small><a style="color:blue" href="">TOP</a> ></small> 講師紹介</p>	
			</div>
			<div class="teacher_intro">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ドリーム・ビッグ・イングリッシュは全員ネイティブスピーカーの洗練された講師を取り揃えております。<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;生徒のレベルに合わせ多様なクラスで丁寧に指導いたします。
			</div>
			<div class="teachers_statement">
				<div  style="float:left"class="t_mary">
					<img alt="TEACHERS" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/mary_pic.png" height="250px" />
					<div class="ind_stat">
						<p>
							Mary先生
						</p><p style="width:156px">
							講師として、生徒一人一人を理解し、彼らの英語学習を支えるためにもその違いを考慮しなければいけないと考えています。
						</p>
					</div>
				</div>
				<div style="float:right" class="t_jos">
					<img alt="TEACHERS" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/joseph_icon.png" height="250px" />
					<div class="ind_stat">	
						<p>
							Joseph先生
						</p><p style="width:210px">
							講師としての経験は5年になります。文化の違いを理解しなければいけないので、外国からの生徒を教える事は簡単ではありませんが、私の生徒にはレッスンに積極的に参加してほしいです。
						</p>
					</div>
				</div>
				<div  style="float:left"class="t_mary">
					<img alt="TEACHERS" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/honey_pic.png" height="250px" />
					<div class="ind_stat">
						<p>
							Honey先生
						</p><p style="width:156px">
							生徒さんに英語を学んでいただけるよう、ベストを尽くして生徒さんを満足させてあげたいです。生徒さんとは良い関係を築きたいです。
						</p>
					</div>
				</div>
				<div style="float:right" class="t_jos">
					<img alt="TEACHERS" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/mae_pic.png" height="250px" />
					<div class="ind_stat">	
						<p>
							Mae先生
						</p><p style="width:210px">
							講師としての経験は2年になります。私はフィリピン政府が主催する6ヶ月間の健康管理実習プログラムで、トレーナーとして働いていました。
						</p>
					</div>
				</div>
			</div>
		</div>
</div>

<?php get_footer(); ?>