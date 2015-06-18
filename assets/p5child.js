jQuery(function(){

	jQuery.expr[':'].parents = function(a,i,m){
	    return jQuery(a).parents(m[3]).length < 1;
	};

	$('h1,h2,h3,h4,h5,h6').filter(':parents(.modal)').addClass('animated');
});