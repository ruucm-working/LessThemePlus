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
	    console.log('in the home');
	    $('.fb-share').click(function() {
			FB.ui({
			    method: 'feed',
			    name: blog_infos.siteTitle,
			    link: blog_infos.siteUrl,
			    // picture: 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.64.64/p64x64/14292291_1125309417538070_1126445235032104471_n.jpg?oh=0f60a255a25ffb3b9757f7158da696e0&oe=58CCA030',
			    description: blog_infos.siteInfo
			});
		});
	} else {
	    // Other page
	    console.log(window.location.pathname);
	    $('.fb-share').click(function() {
			FB.ui({
			    method: 'feed',
			    name: blog_infos.postTitle,
			    link: blog_infos.url,
			    // picture: 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.2.64.64/p64x64/14292291_1125309417538070_1126445235032104471_n.jpg?oh=0f60a255a25ffb3b9757f7158da696e0&oe=58CCA030',
			    description: blog_infos.postExcerpt
			});
		});
	}
});
