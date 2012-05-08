<?php 


/**
 * BundlePress
 * v1
 */
 
 
$siteurl = 'http://www.insertsiteurlhere.co.uk/'; // Customise This line!


echo '<h1>BundlePress</h1>';

$wp = curl_init('http://wordpress.org/latest.zip');
curl_setopt($wp, CURLOPT_RETURNTRANSFER, 1); 
$filedata = curl_exec($wp);
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/bundlepress.zip', $filedata);


if (file_exists($_SERVER['DOCUMENT_ROOT'].'/bundlepress.zip')) {
	echo '<p class="leadin">Bundle Generated</p>';
}

$zip = new ZipArchive;

if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/bundlepress.zip') === TRUE) {
    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl');
    $zip->close();
} else {
    echo 'Something Went Wrong!';
}

// Advanced Custom Fields

if (isset($_POST['plugins']['acf'])) {

	$acf = curl_init('http://downloads.wordpress.org/plugin/advanced-custom-fields.zip');
	curl_setopt($acf, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($acf);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/acf.zip', $filedata);
	
	$acf = new ZipArchive;
	
	if ($acf->open($_SERVER['DOCUMENT_ROOT'].'/acf.zip') === TRUE) {
	    $acf->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $acf->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// Sitemap

if (isset($_POST['plugins']['sitemap'])) {

	$sitemap = curl_init('http://downloads.wordpress.org/plugin/google-sitemap-generator.3.2.7.zip');
	curl_setopt($sitemap, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($sitemap);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/sitemap.zip', $filedata);
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/sitemap.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// SEO

if (isset($_POST['plugins']['seo'])) {

	$seo = curl_init('http://downloads.wordpress.org/plugin/all-in-one-seo-pack.zip');
	curl_setopt($seo, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($seo);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/seo.zip', $filedata);
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/seo.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// CMS Tree Page View

if (isset($_POST['plugins']['tree'])) {

	$cms = curl_init('http://downloads.wordpress.org/plugin/cms-tree-page-view.zip');
	curl_setopt($cms, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($cms);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/tree.zip', $filedata);
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/tree.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// CMS Tree Page View

if (isset($_POST['plugins']['cpt'])) {

	$cpt = curl_init('http://downloads.wordpress.org/plugin/custom-post-type-ui.zip');
	curl_setopt($cpt, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($cpt);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/cpt.zip', $filedata);
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/cpt.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// Contact Form 7

if (isset($_POST['plugins']['cf7'])) {

	$cf7 = curl_init('http://downloads.wordpress.org/plugin/contact-form-7.3.1.2.zip');
	curl_setopt($cf7, CURLOPT_RETURNTRANSFER, 1); 
	$filedata = curl_exec($cf7);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/cf7.zip', $filedata);
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/cf7.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// MeeNews

if (isset($_POST['plugins']['mn'])) {
	
	$zip = new ZipArchive;
	
	if ($zip->open('plugins/meenews.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/plugins');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// Starkers

if (isset($_POST['themes']['starkers'])) {
	
	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/bundlepress/themes/starkers.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/themes');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// Bones

if (isset($_POST['themes']['bones'])) {

	$zip = new ZipArchive;
	
	if ($zip->open($_SERVER['DOCUMENT_ROOT'].'/bundlepress/themes/bones.zip') === TRUE) {
	    $zip->extractTo($_SERVER['DOCUMENT_ROOT'].'/wpdl/wordpress/wp-content/themes');
	    $zip->close();
	} else {
	    echo 'Something Went Wrong!';
	}
	
}

// Create the ZIP

$filename = 'bundlepress-'.date('dmhi').'.zip';

Zip($_SERVER['DOCUMENT_ROOT'].'/wpdl', $_SERVER['DOCUMENT_ROOT'].'/'.$filename);

// Delete the Directory at the end
deleteDir($_SERVER['DOCUMENT_ROOT'].'/wpdl');


echo '<a href="'.$siteurl.$filename.'" class="button dl-btn">Download Bundle</a>';