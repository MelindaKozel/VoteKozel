<?php get_header(); ?>	

<div class="districtSection" id="District">
		<div class="wrapper">
		<a name="district"><div class="chunk"><h2>What does the Learning Community Council do?</h2></div></a>
		<p>The <a href="http://www.learningcommunityds.org/">Learning Community Council</a> works together with school districts and community organizations as partners to demonstrate, share and implement more effective practices to measurably improve educational outcomes for children and families in poverty. <br><br>
		Working across all 11 school districts in Omaha, the Learning Community Council focuses to close gaps in student proficiency by implementing Early Childhood Education as part of the <a href="http://learningcommunityds.org/programs-results/superintendents-plan/">Superintendents' Early Childhood Plan</a>, strengthening parent engagement and improving outcomes for students through high school to be college-ready through the <a href="http://www.learningcommunityds.org/about/cap/">Community Achievement Plan</a>.

		As a candidate for <a href="http://votekozel.com/voting/">Subcouncil District 3</a>, my district represents students at Omaha Public Schools, Westside Community Schools, and Ralston Public Schools.

		
		</p>
		</div>
	</div>	
	

	<div class="prioritiesSection" id="priorities">
		<div class="wrapper">
		<a name="goals"></a><div class="chunk"><h2>My Priorities   </h2></div><br>
			<?php 
		$posts = get_posts(array(
			'posts_per_page'	=> 20,
			'post_type'			=> 'priority_list',

		));

		if( $posts ): ?>
	
		<ul> 
		
		<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>
			<h3 class="drop"><?php the_title(); ?>&nbsp;<span class="fa fa-chevron-down"></span></h3>
			<p class="explain"><?php the_field('priority_description'); ?></p>
		</li>
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>
			
		</div>
	</div>

	<div class="aboutSection" id="About">
		<div class="wrapper">
		<a name="about"></a><div class="chunk"><h2>About Me   </h2></div>
		<div class="quilt">
	<div class="quiltRow">
		<div class="leftPhoto"><img src="http://votekozel.com/wp-content/uploads/2017/10/IMG_20171017_104824-e1508256996913.jpg"></div>
		<div class="rightText"><p class="white">I grew up in Norfolk, Nebraska. I was involved in band, theatre, speech and debate all through school. I spent some time in Memphis, Tennessee then New York City. I moved back to Nebraska in 2004 and made my home in Omaha. I earned my Bachelor of Arts at the University of Nebraska at Lincoln in Art History in 2008.<p></div>
	</div>
	<div class="quiltReverse">
		
		<div class="leftText"><p class="white">That same year, I started an art history program at Morning Star Preschool. I discovered right away that early visual literacy education had a tremendous impact on the kids' communication and critical thinking skills. I decided to get my Masters in Arts Education from the University of Nebraska at Kearney to learn more. My thesis focused on reforming curriculum to utilize more concepts of arts education and visual literacy.<p></div> 
		<div class="rightPhoto"><img src="http://votekozel.com/wp-content/uploads/2017/10/20110222102427-e1508588299949.jpg"></div>
	</div>
	<div class="quiltRow">
		<div class="leftPhoto"><img src="http://votekozel.com/wp-content/uploads/2017/10/943074_10151602717136211_895698255_n-e1508027185627.jpg"></div>
		<div class="rightText"><p class="white">I spent time as a program coordinator for an arts nonprofit and a university arts library. Now I work as a web developer and write art reviews for The Reader.<br>
		When I'm not working, I serve on the Joslyn Young Art Patrons council, The Shakespeare Collective and as the Visual Arts Chair of the Omaha Entertainment & Arts Awards. I enjoy being part of projects and initiatives that grow communities through the arts.<p></div> 
	</div>
	<div class="quiltReverse">
		
		<div class="leftText"><p class="white">I also volunteer as a dog walker at the Nebraska Humane Society. I spend my free time with my husband, Emil, and our dog, Odessa. We love meeting local artists and growing our art collection, going to movies, watching TV and enjoying local restaurants.<p></div> 
		<div class="rightPhoto"><img src="http://melindakozel.com/votekozel/wp-content/uploads/2017/10/Melinda-117-e1507407571688.jpg"></div>
	</div>

</div>
		</div>
	</div>	
	
	<div class="eventsSection" id="Events">
		<div class="wrapper">
			<a name="events"></a><div class="chunk"><h2>Events and Important Dates   </h2></div><br>
				<br>
			
				<div id="eventMenu">   
				            <ul class="eventList">
				
				
				<?php 
				            $args = array(
				                'post_type'              => array( 'events' ),
				            );
				
				
				            $events = new WP_Query( $args );
				
				    // The Loop
				            if ( $events->have_posts() ) {
				            while ( $events->have_posts() ) {
				                     $events->the_post();
				 ?>                    
				                <li class="eventItem">
				                        <p style="margin-bottom: 10px; font-size: 20px; font-weight: 600; letter-spacing: 1px;" ><?php the_field('event_date'); ?></p>
				                        <hr>
				                        <a href="<?php the_field('event_link');?>"><?php echo get_the_title(); ?></a>
				                          <p><?php the_field('event_time'); ?></p>
				                          <p class="red" style="margin-bottom: 0; font-weight: bold; letter-spacing: 1px;"><?php the_field('event_location'); ?></p>
				                          <p style="margin-top: 5px;"><?php the_field('event_address'); ?></p>
				                </li>
				              
				              
				<?php    }
				} else {
				    // no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata(); 
				?>
				</ul>
				</div>
				<div align="center">
				<p style="font-size: 24px;">Want to organize an event or invite me to join yours? </p>
				<button><a href="#contact">CONTACT ME</a></button><br>
 				<p>I'm interested in speaking or participating at your event and <br>
 				having conversations with students, teachers, and members of the community.</p>
			</div>
				
				





		</div>
	</div>


<div class="contactSection" id="Contact">
	<div class="wrapper">
		<a name="contact"></a><div class="chunk"><h2>Contact Me & Get Involved   </h2></div>
		<div align="center"><p>Donations can be mailed to: <br>
		<b>Melinda Kozel for Learning Community Council</b><br>
			8010 Valley Street<br>
			Omaha, NE 68124<br><br>
			or <a href="https://secure.actblue.com/donate/votekozel">donate online</a></p>
		</div>
		
		<?php echo do_shortcode( '[wpforms id="145" title="false" description="false"]' ); ?>
		
		<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://votekozel.us17.list-manage.com/subscribe/post?u=247c8a6c77df26f95d1414d05&amp;id=aa42596316" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<p for="mce-EMAIL">or sign up for our newsletter</p>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_247c8a6c77df26f95d1414d05_aa42596316" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
	</div>
</div>
<?php get_footer(); ?>