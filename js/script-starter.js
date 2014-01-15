/*
	Any site-specific scripts you might have.
	Note that <html> innately gets a class of "no-js".
	This is to allow you to react to non-JS users.
	Recommend removing that and adding "js" as one of the first things your script does.
	Note that if you are using Modernizr, it already does this for you. :-)
*/

getTwitters('feed', { 
	id: 'GC2Security', 
	count: 4, 
	enableLinks: true, 
	ignoreReplies: true, 
	clearContents: true,
	template: '"%text%" <a href="http://twitter.com/%user_screen_name%/statuses/%id_str%/" target="_blank">%time%</a>'
});
