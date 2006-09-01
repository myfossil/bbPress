<?php
require_once('./bb-load.php');

bb_repermalink();

// Temporary, refactor this!

if ( !$tag && $tag_name )
	die(__('Tag not found'));

if ( $tag_name && $tag ) :

	$topics = get_tagged_topics($tag->tag_id, $page);
	do_action( 'bb_tag-single.php', $tag->tag_id );
	if (file_exists( BBPATH . 'my-templates/tag-single.php' ))
		require( BBPATH . 'my-templates/tag-single.php' );
	else	require( BBPATH . 'bb-templates/tag-single.php' );

else :

	do_action( 'bb_tags.php', '' );
	if (file_exists( BBPATH . 'my-templates/tags.php' ))
		require( BBPATH . 'my-templates/tags.php' );
	else	require( BBPATH . 'bb-templates/tags.php' );

endif;
?>
