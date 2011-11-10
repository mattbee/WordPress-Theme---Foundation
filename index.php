<?php
get_header();
?>
		
		 <!-- Start the Loop. -->



<div class="row">

	<div class="content">
	
		<div class="eight columns post">
		
		<!-- Display the into to posts if archive or search. -->
			 <?php if ( is_archive() ) : // Only display excerpts for archives and search. ?>
				<div class="intro">
					<h2>Currently viewing articles for 
					<?php if ( is_day() ) : ?>
						<?php printf( __( '<span>%s</span>', 'foundationtheme' ), get_the_date() ); ?>
					<?php elseif ( is_month() ) : ?>
						<?php printf( __( '<span>%s</span>', 'foundationtheme' ), get_the_date( 'F Y' ) ); ?>
					<?php elseif ( is_year() ) : ?>
						<?php printf( __( '<span>%s</span>', 'foundationtheme' ), get_the_date( 'Y' ) ); ?>
					<?php elseif ( is_category() ) : ?>
						<?php printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
					<?php else : ?>
						<?php _e( 'Blog Archives', 'foundationtheme' ); ?>
					<?php endif; ?>
					</h2>
				</div><!-- .entry-summary -->
			<?php endif; ?>
			<?php if ( is_search() ) : // Only display excerpts for archives and search. ?>
				<div class="intro">
					<h2>You searched for: <?php echo get_search_query(); ?></h2>
				</div><!-- .entry-summary -->
			<?php endif; ?>
		
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			
			 <!-- Display the Title as a link to the Post's permalink. -->
			 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			
			 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
			 <p><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></p>
			
			 <!-- Display the Post's Content in a div box. -->
			 <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			<?php else : ?>
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'foundationtheme' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'foundationtheme' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
			<?php endif; ?>
	
		 	<!-- Display a comma separated list of the Post's Categories. -->
		 	<?php
		 	if( has_category() ) :
		 	?>
		 		<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
			<?php 
			endif;
			?>
			
			<!-- Stop The Loop (but note the "else:" - see next line). -->
			<?php endwhile; else: ?>
			
			<!-- The very first "if" tested to see if there were any Posts to -->
			<!-- display.  This "else" part tells what do if there weren't any. -->
			<h4>Sorry, no posts matched your criteria.</h4>
			<div class="searchbox">
				<?php get_search_form(); ?>
			</div>
			
			<!-- REALLY stop The Loop. -->
			<?php endif; ?>
	
		</div> <!-- close .columns -->
		
		<div class="four columns">
		
			<div class="panel">
			
				<?php get_sidebar(); ?>
			
			</div>
			
		</div>
		
	</div> <!-- close .content -->


</div> <!-- close .row -->
 

<?php
get_footer(); 
?>
	