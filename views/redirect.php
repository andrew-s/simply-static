<!DOCTYPE html>
<html>
	<head>
		<title><?php _e( 'Redirecting...', 'simply-static' ); ?></title>
		<noscript>
			<meta http-equiv="refresh" content="0;url=<?php echo $this->redirect_url; ?>">
		</noscript>

		<script type="text/javascript">
			window.location = "<?php echo $this->redirect_url; ?>";
		</script>
	</head>
	<body>
		<p><?php echo sprintf( __( "You are being redirected to %s", 'simply-static' ), '<a href="' . $this->redirect_url . '">' . $this->redirect_url . '</a>' ); ?></p>
	</body>
</html>
