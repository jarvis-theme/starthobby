define(['jquery','bxSlider'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			$('.bxslider').bxSlider({
				pager:false
			});
		};
	}
});