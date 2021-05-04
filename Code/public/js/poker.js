Array.prototype.allValuesSame = function() {

    for(var i = 1; i < this.length; i++)
    {
        if(this[i] !== this[0])
            return false;
    }

    return true;
};

function k_combinations(set, k) {
    var i, j, combs, head, tailcombs;
    if (k > set.length || k <= 0) {
        return [];
    }
    if (k == set.length) {
        return [set];
    }
    if (k == 1) {
        combs = [];
        for (i = 0; i < set.length; i++) {
            combs.push([set[i]]);
        }
        return combs;
    }
    combs = [];
    for (i = 0; i < set.length - k + 1; i++) {
        head = set.slice(i, i+1);
        tailcombs = k_combinations(set.slice(i + 1), k - 1);
        for (j = 0; j < tailcombs.length; j++) {
            combs.push(head.concat(tailcombs[j]));
        }
    }
    return combs;
}

// Kártya
function Card(int){
    var values = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];

    var suits = ['&clubs;', '&diams;','&hearts;','&spades;'];

    this.suit = Math.floor(int/13);
    this.value = Math.floor(int%13);
    this.string = values[this.value]+ ""+ suits[this.suit]+' '
}

// Kéz

function Hand(fiveCards){
    this.fiveCards = fiveCards;
    var values = fiveCards.map(function(card){return card % 13}) ;
    var suits = fiveCards.map(function(card){return Math.floor(card/13)}) ;
    this.isFlush = suits.allValuesSame();
    this.cardValueCount = [];
    this.addCards(values);
    this.uniqValues = this.cardValueCount.length;
    this.rank_int = this.rank()
}

// Kártya hozzá adás a kézhez

    this_hand = this;
    this.cardValueCount.push([cards.pop(),1]);
    cards.forEach(function(card){
        var found =false;
        for (var i in this_hand['cardValueCount']){
            if(this_hand['cardValueCount'][i][0] == card){
                this_hand['cardValueCount'][i][1] +=1;
                found = true;
                break;}
        }
        if ( !found ){ this_hand['cardValueCount'].push([card,1]); }
    });
    this_hand.sort()
};


// Kéz rendezés
Hand.prototype.sort = function(){
    this.cardValueCount.sort(function(a,b){
        if(a[1] < b[1]){return 1}
        else if(a[1] > b[1]){ return -1; }
        else if(a[0] > b[0]){ return -1; }
        else if(a[0] < b[0]){ return 1; }
        else{ return 0; }
    })

};

// Rank ellenőrzés

Hand.prototype.rank = function(){
    return this.uniqValues == 5 ? this.checkSrtFls.call(this) : this.checkPairs.call(this)
};

Hand.prototype.checkSrtFls = function(){
    var isStraight = (this.checkStraight.call(this));
    if(this.isFlush && isStraight){ return 9 }
    else if(this.isFlush){ return 6 }
    else if(isStraight){ return 5 }
    else{return 1}
};

// Pár ellenőrzés

Hand.prototype.checkPairs = function() {
    pair_count = this.cardValueCount[0][1];
    //four of kind or full house
    if(this.uniqValues === 2){ return pair_count == 4 ? 8 : 7}
    //three of kind and two pair
    else if(this.uniqValues === 3){ return pair_count == 3 ? 4 : 3}
    //two of a kind
    else {return 2}
};

Hand.prototype.checkStraight = function(){
    return this.cardValueCount[0][0] - this.cardValueCount[4][0] === 4;
};