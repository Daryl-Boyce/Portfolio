$(function (){
    $('.nav__drop__down').hide(); // hide main menu
    $('.menu-btn').click(function (){ // select menu-button
        $('.nav__drop__down').toggle(300); // expands menu
    });

    $('.sub-menu').hide(); // hides sub-menu
    $('.nav__drop__down li.expand').click(function(){ // selects button to expand menu
        $('.sub-menu').toggle(400); // shows sub-menu
    });

});
