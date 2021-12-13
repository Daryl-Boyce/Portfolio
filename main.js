//////////////////////////////////////
//////// Text Typewriter Code/////////
/////////////////////////////////////
var typed = new Typed('.hero__typer', {
  strings: ["My name is Daryl Boyce"],
  // these are the sentences that get typed out
  showCursor: false,
  // this disabled the standard cursor
  typeSpeed: 100,
  smartBackspace: true,
  backSpeed: 100,
  backDelay: 1000,
  // These set the speed and the amount of characters removed

  // These rules set the looping aspect so that the typewriter never stops
});
///
//////////////////////////////////////
/////////Pop Down Menu Code./////////
/////////////////////////////////////
$(function () {

  // hide main menu
  $('.nav__drop__down').hide();
  $('.menu-btnx').hide();

  // select menu-button and toggles between the X and burger symbol.
  $('.menu-btn, .menu-btnx').click(function () {
    $('.nav__drop__down').toggle(370); // expands menu
    $('.menu-btn').toggle(200);
    $('.menu-btnx').toggle(400);
  });

  // hides sub-menu
  $('.sub-menu').hide();

  // selects button to expand menu
  $('.nav li.expand').click(function () {
    $('.sub-menu').toggle(300); // shows sub-menu
  });

});
///
///
///This is for the form validation
lower__form.addEventListener('submit', (e) => {
  const email__check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  e.preventDefault();

  if (first__name.value == "") {
    alert("Enter a your  first name");
  } else

  if (last__name.value == "") {
    alert("Enter a your last name");
  }else

  if (email__address.value == "") {
    alert("Enter a Valid Email");
  } else

  if (email__address.value.match(email__check)) {
  } else
    alert("Enter a Vaild Email");
  
  if (subject.value == "") {
    alert("Enter a Vaild Subject");
  } else

  if (email__address.value == "") {
    alert("Enter a Valid Message");
  } 

})