<?php
get_header();
?>


<div class="row">

	<div class="content">
	
		<div class="eight columns post">
		
			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<!-- Display the Title as a link to the Post's permalink. -->
			<h3><?php the_title(); ?></h3>
			
			 
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			
			
		 	<!-- Display a comma separated list of the Post's Categories. -->
		 	<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
		 	
		 	<!-- Show comments -->
		 	<div class="commentlist">
		 		<?php comments_template(); ?>
		 	</div>
		 
			<!-- Show comment form -->
		 	<div class="commentform">
		 		<?php // comment_form(); ?>
		 	</div>
		 
			<!-- Stop The Loop (but note the "else:" - see next line). -->
			<?php endwhile; else: ?>
			
			<!-- The very first "if" tested to see if there were any Posts to -->
			<!-- display.  This "else" part tells what do if there weren't any. -->
			<p>Sorry, no pages matched your criteria.</p>
			
			<!-- REALLY stop The Loop. -->
			<?php endif; ?>
	
		</div> <!-- close .columns -->
		
		<div class="four columns">
			
			<div class="panel">
			
				<?php get_sidebar(); ?>
			
			</div>
			
		</div>
		
	</div><!-- close .content -->

	
</div> <!-- close .row -->

 
 
		<!--

		
				<h3>The Grid</h3>
				
				<!-- Grid Example 
				
				<div class="row">
					<div class="four columns">
						<div class="panel">
							<h2>Design</h2>
							<p>We design pretty websites.</p>
						</div>
					</div>
					<div class="four columns">
						<div class="panel">
							<h2>Build</h2>
							<p>We built functional accessible websites with very nice content management.</p>
						</div>
					</div>
					<div class="four columns">
						<div class="panel">
							<h2>Content</h2>
							<p>And we do copywriting to convert people to be your customers, not visitors</p>
						</div>
					</div>
				</div>
				
				<h3>Tabs</h3>
				<dl class="tabs">
					<dd><a href="#simple1" class="active">Simple Tab 1</a></dd>
					<dd><a href="#simple2">Simple Tab 2</a></dd>
					<dd><a href="#simple3">Simple Tab 3</a></dd>
				</dl>
				
				<ul class="tabs-content">
					<li class="active" id="simple1Tab">This is simple tab 1's content. Pretty neat, huh?</li>
					<li id="simple2Tab">This is simple tab 2's content. Now you see it!</li>
					<li id="simple3Tab">This is simple tab 3's content. It's, you know...okay.</li>
				</ul>
				
				<h3>Buttons</h3>
				
				<p><a href="#" class="small blue button">Small Blue Button</a></p>
				<p><a href="#" class="blue button">Medium Blue Button</a></p>
				<p><a href="#" class="large blue button">Large Blue Button</a></p>
				
				<p><a href="#" class="nice radius small blue button">Nice Blue Button</a></p>
				<p><a href="#" class="nice radius blue button">Nice Blue Button</a></p>
				<p><a href="#" class="nice radius large blue button">Nice Blue Button</a></p>

			</div>

			<div class="four columns">
				<h4>Getting Started</h4>
				<p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
				
				<h4>Other Resources</h4>
				<p>Once you've exhausted the fun in this document, you should check out:</p>
				<ul class="disc">
					<li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
					<li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
					<li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
				</ul>
			</div>
		</div>
-->

<?php
get_footer(); 
?>
	