$(document).ready(function() {
    var completed = 0,
        imgHeight = 1374,
        posArr = [
            0, //narancs
            80, //7-es szám
            165, //bar
            237, //guava
            310, //banán
            378, //cseresznye
            454, //narancs
            539, //7-es szám
            624, //bar
            696, //guava
            769, //banán
            837, //cseresznye
            913, //narancs
            1000, //7-es szám
            1085, //bar
            1157, //guava
            1230, //banán
            1298 //cseresznye
        ];
    
    var win = [];
    win[0] = win[454] = win[913] = 1;
    win[80] = win[539] = win[1000] = 2;
    win[165] = win[624] = win[1085] = 3;
    win[237] = win[696] = win[1157] = 4;
    win[310] = win[769] = win[1230] = 5;
    win[378] = win[837] = win[1298] = 6;

    function Slot(el, max, step) {
        this.speed = 0;
        this.step = step;
        this.si = null;
        this.el = el;
        this.maxSpeed = max;
        this.pos = null;   

        $(el).pan({
            fps:30,
            dir:'down'
        });
        $(el).spStop();
    }

    Slot.prototype.start = function() {
        var _this = this;
        $(_this.el).addClass('motion');
        $(_this.el).spStart();
        _this.si = window.setInterval(function() {
            if(_this.speed < _this.maxSpeed) {
                _this.speed += _this.step;
                $(_this.el).spSpeed(_this.speed);
            }
        }, 100);
    };

    Slot.prototype.stop = function() {
        var _this = this,
            limit = 30;
        clearInterval(_this.si);
        _this.si = window.setInterval(function() {
            if(_this.speed > limit) {
                _this.speed -= _this.step;
                $(_this.el).spSpeed(_this.speed);
            }
            if(_this.speed <= limit) {
                _this.finalPos(_this.el);
                $(_this.el).spSpeed(0);
                $(_this.el).spStop();
                clearInterval(_this.si);
                $(_this.el).removeClass('motion');
                _this.speed = 0;
            }
        }, 100);
    };
    
    /**
    * @method finalPos
    * Finds the final position of the slot
    */
     Slot.prototype.finalPos = function() {
        var el = this.el,
            el_id,
            pos,
            posMin = 2000000000,
            best,
            bgPos,
            i,
            j,
            k;

        el_id = $(el).attr('id');
        pos = document.getElementById(el_id).style.backgroundPosition;
        pos = pos.split(' ')[1];
        pos = parseInt(pos, 10);

        for(i = 0; i < posArr.length; i++) {
            for(j = 0;;j++) {
                k = posArr[i] + (imgHeight * j);
                if(k > pos) {
                    if((k - pos) < posMin) {
                        posMin = k - pos;
                        best = k;
                        this.pos = posArr[i]; //update the final position of the slot
                    }
                    break;
                }
            }
        }

        best += imgHeight + 4;
        bgPos = "0 " + best + "px";
        $(el).animate({
            backgroundPosition:"(" + bgPos + ")"
        }, {
            duration: 200,
            complete: function() {
                completed ++;
            }
        });
    };
    
    /**
    * @method reset
    *Újraindítás
    */
    Slot.prototype.reset = function() {
        var el_id = $(this.el).attr('id');
        $._spritely.instances[el_id].t = 0;
        $(this.el).css('background-position', '0px 4px');
        this.speed = 0;
        completed = 0;
        $('#result').html('');
    };

    function enableControl() {
        $('#control').attr("disabled", false);
    }

    function disableControl() {
        $('#control').attr("disabled", true);
    }

    function printResult() {
        var res;
        if(win[a.pos] === win[b.pos] && win[a.pos] === win[c.pos]) {
            res = "BIG LOOT Nyertél!!!";
        } else {
            res = "Vesztettél";
        }
        $('#result').html(res);
    }
    
   var a = new Slot('#slot1', 30, 1),
   b = new Slot('#slot2', 45, 2),
   c = new Slot('#slot3', 70, 3);


$('#control').click(function() {
   var x;
   if(this.innerHTML == "Kezdés") {
       a.start();
       b.start();
       c.start();
       this.innerHTML = "Leállítás";
       
       disableControl(); 
    
       x = window.setInterval(function() {
           if(a.speed >= a.maxSpeed && b.speed >= b.maxSpeed && c.speed >= c.maxSpeed) {
               enableControl();
               window.clearInterval(x);
           }
       }, 100);
   } else if(this.innerHTML == "Leállítás") {
       a.stop();
       b.stop();
       c.stop();
       this.innerHTML = "Újraindítás";

       disableControl();
       
       x = window.setInterval(function() {
           if(a.speed === 0 && b.speed === 0 && c.speed === 0 && completed === 3) {
               enableControl();
               window.clearInterval(x);
               printResult();
           }
       }, 100);
   } else { //reset
       a.reset();
       b.reset();
       c.reset();
       this.innerHTML = "Kezdés";
   }
});
});