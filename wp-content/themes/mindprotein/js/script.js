// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {

	// Released under MIT license: http://www.opensource.org/licenses/mit-license.php

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
	  }
	}).blur().parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
	    var input = $(this);
	    if (input.val() == input.attr('placeholder')) {
	      input.val('');
	    }
	  });
	});

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























