/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// Forces WordPress to place nice with dropdowns
 	$("li.dropdown > a").addClass('dropdown-toggle');
	$("li.dropdown > a").attr('data-toggle','dropdown');
	$("a.dropdown-toggle").append('<b class="caret"></b>');

	// Twitter
	$("#tweet").tweet({
	      avatar_size: 32,
	      count: 1,
	      username: "ralphplumb",
	      template: "{text}"
	    });
	  }).bind("loaded", function(){
	    $(this).find("a.tweet_action").click(function(ev) {
	      window.open(this.href, "Retweet",
	                  'menubar=0,resizable=0,width=550,height=420,top=200,left=400');
	      ev.preventDefault();
	    });
	
});























