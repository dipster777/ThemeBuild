jQuery( document ).ready(function( $ ) {

//Function to add starter search div in mobile menu block and add the needed class to it
$('#mobile').prepend('<div class="mm-search"/>').addClass('mm-hassearch');

//Function to include the search function in the mobile menu
$('#search').appendTo('.mm-search');

//Function to wrap the banner text elements so as to vertiaclly align the whole div
$('.featuredContent').wrapInner('<div class="wrap"/>');

//Function for calling the contact human verification



});//End all functions