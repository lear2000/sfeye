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
