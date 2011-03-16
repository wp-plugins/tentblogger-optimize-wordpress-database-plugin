<![CDATA[ TentBlogger Optimize WordPress Database 1.0 ]]>
<div class="wrap">
	<h2>
		<?php _e("TentBlogger's Optimize WordPress Database Plugin", "tentblogger-optimize-wordpress-database"); ?>
	</h2>
	<div class="tentblogger-postbox postbox">
		<h3 class="tentblogger-hndle hndle">
			<span>
				<?php _e("Database Optimization", "tentblogger-optimize-wordpress-database"); ?>
			</span>
		</h3>
		<div class="tentblogger-inside inside">
			<p>
				<?php _e("The goal of this plugin is to be the easiest and most intuitive optimization process for your blog. It simply optimizes your WordPress MySQL database with a click of a button and then lets you get back to writing!", 'tentblogger-optimize-wordpress-database'); ?>
			</p>
		</div>
		<?php if($this->size_to_free() > 1) { ?>
			<div id="tentblogger-go-optimize" class="tentblogger-inside inside">
				<p>
					<?php _e('You can free up', 'tentblogger-optimize-wordpress-database'); ?> 
					<strong><?php echo $this->format_size($this->size_to_free()); ?></strong> 
					<?php _e('from your database.', 'tentblogger-optimize-wordpress-database'); ?>
				</p>
				<p>
					<input id="tentblogger-view-database" type="button" class="button" value="<?php _e("View Your Database","tentblogger-optimize-wordpress-database"); ?>" />
					<input id="tentblogger-trigger-optimization" type="button" class="button" value="<?php _e("Optimize Your Database","tentblogger-optimize-wordpress-database"); ?>" />
				</p>
				<div id="tentblogger-database-table" style="display:none;">
					<?php $this->get_database_table_view(); ?>
				</div>
			</div>
			<div id="tentblogger-optimization-container" class="tentblogger-inside inside" style="display:none;">
				<?php _e('Your database has been successfully optimized!', 'tentblogger-optimize-wordpress-database'); ?>
			</div>
		<?php } else { ?>
			<div id="tentblogger-no-optimize" class="tentblogger-inside inside">
				<p>
					<?php _e('Your database is currently running in optimal condition. There is no need to optimize!', 'tentblogger-optimize-wordpress-database'); ?>
				</p>
			</div>
		<?php } // end if ?>
		<div class="tentblogger-inside inside">
			<p>
				<?php _e('Feel free to <a href="http://twitter.com/tentblogger" target="_blank">follow me</a> on Twitter!', 'tentblogger-optimize-wordpress-database'); ?>
			</p>
		</div>
	</div>
</div>