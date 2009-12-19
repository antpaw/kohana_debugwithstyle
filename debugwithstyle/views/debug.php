<?php
$font_str = $font.',Monaco,Consolas,"Andale Mono WT","Andale Mono","Lucida Console","Courier New",Courier,monospace';
?>
<style type="text/css" media="screen">
	body {
		margin: 0;
		padding: 0;
	}
	.debug {
		margin: 0;
		padding: 10px 20px;
		font-family: <?php echo $font_str ?>;
		font-size: <?php echo $font_size ?>;
		line-height: 1.4em;
	}
	.debug code {
		font-family: <?php echo $font_str ?>;
	}
	<?php include 'themes/'.$theme.'.css' ?>
</style>
<pre class="debug"><?php echo implode("\n", $output) ?></pre>