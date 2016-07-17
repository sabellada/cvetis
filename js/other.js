$(document).ready(function(){
  $('.modal-trigger').leanModal();
  $('select').material_select();
  $('.scrollspy').scrollSpy();
  $(".dropdown-button").dropdown();
});
$('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: false, // Does not change width of dropdown to that of the activator
    hover: false, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'center' // Displays dropdown with edge aligned to the left of button
  }
);
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});
$('#add-cs').click(function() {
 $('.td1').toggle('show');
});
$('#add-dair-r').click(function() {
 $('.td1').toggle('show');
});
