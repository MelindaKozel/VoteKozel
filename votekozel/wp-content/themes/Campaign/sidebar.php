
<?php if ( !is_active_sidebar( 'unique-sidebar-id') ) {
	return;
	}?>
<aside>
<!--widgets will go here-->
	<?php dynamic_sidebar('unique-sidebar-id'); ?>
</aside>