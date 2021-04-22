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
					var bg_left = $._spritely.instances[el_id]['l'].toString();
                                        if (bg_left.indexOf('%') == -1) {
                                            bg_left += 'px ';
                                        } else { bg_left += ' '; }

                                        var bg_top = $._spritely.instances[el_id]['t'].toString();
                                        if (bg_top.indexOf('%') == -1) {
                                            bg_top += 'px ';
                                        } else { bg_top += ' '; }
                                        
					$(el).css('background-position', bg_left + bg_top);
				}
			}
			$._spritely.instances[el_id]['options'] = options;
			window.setTimeout(function() {
				$._spritely.animate(options);
			}, parseInt(1000 / options.fps));
		},
		randomIntBetween: function(lower, higher) {
			return parseInt(rand_no = Math.floor((higher - (lower - 1)) * Math.random()) + lower);
		},
		getBgY: function(el) {
			if ($.browser.msie) {
				var bgY = $(el).css('background-position-y') || '0';
			} else {
				var bgY = ($(el).css('background-position') || ' ').split(' ')[1];
			}
			return bgY;
		},
		getBgX: function(el) {
			if ($.browser.msie) {
				var bgX = $(el).css('background-position-x') || '0';
			} else {
				var bgX = ($(el).css('background-position') || ' ').split(' ')[0];
			}
			return bgX;
		},
		get_rel_pos: function(pos, w) {
			var r = pos;
			if (pos < 0) {
				while (r < 0) {
					r += w;
				}
			} else {
				while (r > w) {
					r -= w;
				}
			}
			return r;
		}
	};
	$.fn.extend({
		spritely: function(options) {
			var options = $.extend({
				type: 'sprite',
				do_once: false,
				width: null,
				height: null,
				fps: 12,
				no_of_frames: 2,
				stop_after: null
			}, options || {});
			var el_id = $(this).attr('id');
			if (!$._spritely.instances) {
				$._spritely.instances = {};
			}
			if (!$._spritely.instances[el_id]) {
				$._spritely.instances[el_id] = {current_frame: -1};
			}
			$._spritely.instances[el_id]['type'] = options.type;
			$._spritely.instances[el_id]['depth'] = options.depth;
			options.el = this;
			options.width = options.width || $(this).width() || 100;
			options.height = options.height || $(this).height() || 100;
			var get_rate = function() {
                return parseInt(1000 / options.fps);
            }
            if (!options.do_once) {
				window.setTimeout(function() {
					$._spritely.animate(options);
				}, get_rate(options.fps));
			} else {
				$._spritely.animate(options);
			}
			return this; // so we can chain events
		},
		sprite: function(options) {
			var options = $.extend({
				type: 'sprite',
				bounce: [0, 0, 1000]
			}, options || {});
			return $(this).spritely(options);
		},
		pan: function(options) {
			var options = $.extend({
				type: 'pan',
				dir: 'left',
				continuous: true,
				speed: 1 
			}, options || {});
			return $(this).spritely(options);
		},