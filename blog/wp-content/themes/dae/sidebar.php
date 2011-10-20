		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search widget-first">
        <div class="widget-title-box">
          <div class="line2"></div>
          <h3 class="widget-title">Search</h3>
        </div>
<form role="search" method="get" id="searchform" action="http://localhost/dasoran_net/blog/" >
<div>
<input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
			</li>

			<li id="archives" class="widget-container">
        <div class="widget-title-box">
          <div class="line2"></div>
          <h3 class="widget-title">Archives</h3>
        </div>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="category" class="widget-container">
        <div class="widget-title-box">
          <div class="line2"></div>
          <h3 class="widget-title">Category</h3>
        </div>
				<ul>
          <?php
            $cat_all = get_terms( "category", "fields=all&get=all" );
            foreach($cat_all as $value):
          ?>
          <p><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></p>
          <?php endforeach; ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
