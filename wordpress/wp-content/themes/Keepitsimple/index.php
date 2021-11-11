<?php get_header(); ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

		   <?php 
			if(have_posts()):
				while(have_posts()):
					the_post(); ?>
					<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							<a href="<?php the_permalink();?>" title=""><?php the_title(); ?></a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li><?php the_date(); ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag"><?php the_category(" "); ?></a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php the_author(); ?></li>
							</ul>
						</div> 
					 
					</header> 
					
					<div class="entry-content">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>">Read More</a>
					</div> 

				</article> <!-- end entry -->
				<?php
				
				endwhile;
			else: 
				echo"There are no articles";
			endif;
			?>


   		</div> <!-- end main -->

		<?php get_sidebar() ?>
   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   
<?php get_footer(); ?>
