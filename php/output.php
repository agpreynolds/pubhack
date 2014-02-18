<div class="entry" id="<?php echo $_REQUEST['id']; ?>">
	<article class="twitterFeed">
		<p><?php echo $_REQUEST['author']; ?></p>
		<p><?php echo $_REQUEST['text']; ?></p>
		<p><?php echo $_REQUEST['date']; ?></p>		
	</article>
	<article class="news">
		<h2><?php echo $_REQUEST['article']['title']; ?></h2>
		<p><?php echo $_REQUEST['article']['contentSnippet']; ?></p>
		<a href="<?php echo $_REQUEST['article']['link']; ?>" target="_blank">View Article</a>
		<p><?php echo $_REQUEST['article']['publishedDate']; ?></p>
	</article>
</div>