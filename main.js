//This is the text typewriter code
var typed = new Typed('.container', {
    strings: ["I'm a Web Developer", "I'm a Programmer", "I'm a Designer"],
    // these are the sentences that get typed out
    showCursor: false,
    // this disabled the standard cursor
    typeSpeed: 100,
    smartBackspace: true,
    backSpeed: 100,
    backDelay: 1000,
    // These set the speed and the amount of characters removed
    loop: true,
    loopCount: Infinity
    // These rules set the looping aspect so that the typewriter never stops
  });
///
///
///This is the pop down menu code.
$(function (){

  // hide main menu
  $('.nav__drop__down').hide();
  $('.menu-btnx').hide();  

  // select menu-button and toggles between the X and burger symbol.
  $('.menu-btn, .menu-btnx').click(function (){ 
    $('.nav__drop__down').toggle(370); // expands menu
    $('.menu-btn').toggle(200);
    $('.menu-btnx').toggle(400);
  });

  // hides sub-menu
  $('.sub-menu').hide(); 

  // selects button to expand menu
  $('.nav li.expand').click(function(){ 
    $('.sub-menu').toggle(300); // shows sub-menu
  });
  
});
///
///