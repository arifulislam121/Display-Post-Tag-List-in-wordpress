<!----Display Post Tag List in wordpress----->

<?php $tags = get_tags(); ?>
									
										
<?php foreach ( $tags as $tag ) { ?>
   <?php if( has_tag($tag) ) : ?>
		<li><h6><?php //echo get_tag_link( $tag->term_id ); ?><?php echo $tag->name; ?></h6></li>
	<?php endif; ?>
<?php } ?>
