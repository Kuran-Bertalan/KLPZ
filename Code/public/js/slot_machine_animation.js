(function($) {
	$._spritely = {
		animate: function(options) {
			var el = $(options.el);
			var el_id = el.attr('id');
			options = $.extend(options, $._spritely.instances[el_id] || {});
			if (options.play_frames && !$._spritely.instances[el_id]['remaining_frames']) {
				$._spritely.instances[el_id]['remaining_frames'] = options.play_frames + 1;
			}
			if (options.type == 'sprite' && options.fps) {
				var frames;
				var animate = function(el) {
					var w = options.width, h = options.height;
					if (!frames) {
						frames = [];
						total = 0
						for (var i = 0; i < options.no_of_frames; i ++) {
							frames[frames.length] = (0 - total);
							total += w;
						}
					}
