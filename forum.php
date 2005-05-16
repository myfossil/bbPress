<?php

require_once('bb-config.php');

$forum_id = $page = 0;

$forum_id = (int) $_GET['id'];
if ( !$forum_id )
	$forum_id = intval( get_path() );

if ( isset( $_GET['page'] ) )
	$page = (int) abs( $_GET['page'] );

$forum = get_forum( $forum_id );

if ( !$forum )
	die('Forum not found.');

$topics   = get_latest_topics( $forum_id, $page );
$stickies = get_sticky_topics( $forum_id );

include('bb-templates/forum.php');

?>