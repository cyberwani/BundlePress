<?php

/**
* BundlePress
* v1.0 by Stephen Radford
* License: WTFPL
*/

?>
<?php include 'zipper.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BundlePress</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	
	<div id="container">
		<?php if (isset($_POST['submit'])) : ?>
			
		<?php include 'downloader.php' ?>
			
		<?php else : ?>
		
		<h1>BundlePress</h1>
		<p class="leadin">Customise your WordPress install with the plugins and themes below</p>
		
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<fieldset>
				<legend>Plugins</legend>
				<ul>
					<li>
						<label for="acf">Advanced Custom Fields</label>
						<input type="checkbox" name="plugins[acf]" id="acf" value="acf" />
					</li>
					<li>
						<label for="seo">All In One SEO Pack</label>
						<input type="checkbox" name="plugins[seo]" id="seo" value="seo" />
					</li>
					<li>
						<label for="tree">CMS Tree Page View</label>
						<input type="checkbox" name="plugins[tree]" id="tree" value="tree" />
					</li>
					<li>
						<label for="cpt">Custom Post Type UI</label>
						<input type="checkbox" name="plugins[cpt]" id="cpt" value="cpt" />
					</li>
					<li>
						<label for="cf7">Contact Form 7</label>
						<input type="checkbox" name="plugins[cf7]" id="cf7" value="cf7" />
					</li>
					<li>
						<label for="sitemap">Google Sitemap Generator</label>
						<input type="checkbox" name="plugins[sitemap]" id="sitemap" value="sitemap" />
					</li>
				</ul>
			</fieldset>
			
			<fieldset>
				<legend>Themes</legend>
				<ul>
					<li>
						<label for="starkers">Starkers</label>
						<input type="checkbox" name="themes[starkers]" id="starkers" value="starkers" />
					</li>
					<li>
						<label for="bones">Bones</label>
						<input type="checkbox" name="themes[bones]" id="bones" value="bones" />
					</li>
				</ul>
			</fieldset>
			
			<input type="submit" value="Create Bundle" class="button" name="submit" />
			
		</form>
		
		<?php endif; ?> 
	</div>
	
</body>
</html>