(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id))
	    return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
	FB.init({
	    appId: '210115759399043',  // Change appId 210115759399043 with your Facebook Application ID
	    status: true,
	    xfbml: true,
	    cookie: true
	});
};

jQuery(document).ready(function($) {
	if ( window.location.pathname == '/' ){
	    // Index (home) page
	    $('.fb-share').click(function() {
			FB.ui({
			    method: 'feed',
			    name: blog_infos.siteTitle,
			    link: blog_infos.siteUrl,
			    description: blog_infos.siteInfo
			});
		});
	} else {
	    // Other page
	    $('.fb-share').click(function() {
			FB.ui({
			    method: 'feed',
			    name: blog_infos.postTitle,
			    link: blog_infos.url,
			    description: blog_infos.postExcerpt
			});
		});
	}
});
