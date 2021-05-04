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