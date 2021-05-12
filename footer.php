<footer>
	<p>Copyright © <?php echo date("Y"); ?> Margaret P. Liu, MD, Inc., all rights reserved</p>
	<p><a href="https://www.silvragency.com/website-design-and-development/" target="_blank" rel="noopener">Design</a> and <a target="_blank" rel="noopener" href="https://www.silvragency.com/digital-marketing/">Marketing</a> by <a target="_blank" rel="noopener" href="https://www.silvragency.com/">SILVR</a> <img width="24" height="22"  loading="lazy" src="<?php bloginfo('template_directory');?>/images/silvr.svg" alt="silvr social icon" /></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<?php
	//BrowserSync
	$browserSyncPort 					= 8080;
	$browserSync 			= 'http://127.0.0.1:'.$browserSyncPort;
	$browserSyncHeaders 		= @get_headers($browserSync);
	if($browserSyncHeaders): ?>
		<script async src="<?php echo $browserSync;?>/browser-sync/browser-sync-client.js?v=2.18.8"></script>
<?php endif; ?>
