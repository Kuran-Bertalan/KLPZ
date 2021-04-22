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
					
					if (options.rewind == true) {
						if ($._spritely.instances[el_id]['current_frame'] <= 0) {
							$._spritely.instances[el_id]['current_frame'] = frames.length - 1;
						} else {
							$._spritely.instances[el_id]['current_frame'] = $._spritely.instances[el_id]['current_frame'] - 1;
						};
					} else {
						if ($._spritely.instances[el_id]['current_frame'] >= frames.length - 1) {
							$._spritely.instances[el_id]['current_frame'] = 0;
						} else {
							$._spritely.instances[el_id]['current_frame'] = $._spritely.instances[el_id]['current_frame'] + 1;
						}
					}
                                        
					var yPos = $._spritely.getBgY(el);
					el.css('background-position', frames[$._spritely.instances[el_id]['current_frame']] + 'px ' + yPos);
					if (options.bounce && options.bounce[0] > 0 && options.bounce[1] > 0) {
						var ud = options.bounce[0];
						var lr = options.bounce[1];
						var ms = options.bounce[2];
						el
							.animate({top: '+=' + ud + 'px', left: '-=' + lr + 'px'}, ms)
							.animate({top: '-=' + ud + 'px', left: '+=' + lr + 'px'}, ms);
					}
				}
				if ($._spritely.instances[el_id]['remaining_frames'] && $._spritely.instances[el_id]['remaining_frames'] > 0) {
					$._spritely.instances[el_id]['remaining_frames'] --;
					if ($._spritely.instances[el_id]['remaining_frames'] == 0) {
						$._spritely.instances[el_id]['remaining_frames'] = -1;
						delete $._spritely.instances[el_id]['remaining_frames'];
						return;
					} else {
						animate(el);
					}
				} else if ($._spritely.instances[el_id]['remaining_frames'] != -1) {
					animate(el);
				}
			} else if (options.type == 'pan') {
				if (!$._spritely.instances[el_id]['_stopped']) {
                                        if (options.dir == 'up') {
                                            $._spritely.instances[el_id]['l'] = $._spritely.getBgX(el).replace('px', '');
                                            $._spritely.instances[el_id]['t'] = ($._spritely.instances[el_id]['t'] - (options.speed || 1)) || 0;
                                        }
                                        else if (options.dir == 'down') {
                                            $._spritely.instances[el_id]['l'] = $._spritely.getBgX(el).replace('px', '');
                                            $._spritely.instances[el_id]['t'] = ($._spritely.instances[el_id]['t'] + (options.speed || 1)) || 0;
                                        }
					else if (options.dir == 'left') {
						$._spritely.instances[el_id]['l'] = ($._spritely.instances[el_id]['l'] - (options.speed || 1)) || 0;
                                                $._spritely.instances[el_id]['t'] = $._spritely.getBgY(el).replace('px', '');
					} else {
						$._spritely.instances[el_id]['l'] = ($._spritely.instances[el_id]['l'] + (options.speed || 1)) || 0;
                                                $._spritely.instances[el_id]['t'] = $._spritely.getBgY(el).replace('px', '');
					}