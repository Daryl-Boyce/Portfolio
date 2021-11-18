
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