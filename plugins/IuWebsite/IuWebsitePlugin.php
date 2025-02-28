<?php

class IuWebsitePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('public_head','public_body','public_footer');

    function hookpublichead()
    {		
		$head_html = file_get_contents('https://assets.iu.edu/brand/2.x/header-iub.html');
		echo $head_html;
	?>

		<link href="https://assets.iu.edu/brand/2.x/brand.css" rel="stylesheet" type="text/css">
<?php }

function hookpublicbody()
	{
	}
	
function hookpublicfooter()
	{
		$foot_html = file_get_contents('https://assets.iu.edu/brand/2.x/footer.html');
		echo $foot_html;
?>
		<script>
		var newPrivacyURL = 'https://libraries.indiana.edu/privacy-policy';
		(oldPrivacyURL = document.getElementById('privacy-policy-link')) ? (oldPrivacyURL.href = newPrivacyURL) : '';
		</script>
		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-5726636-13', 'auto');
		ga('send', 'pageview');

		</script>
		<!-- End Google Analytics -->
<?php }
	
	/*
	* Admin with jwplayer
	*/
    function iuwebsite_admin_head()
    {
    }	
}
?>
