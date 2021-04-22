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

