//======================================================================
// Custom Isotope grid
//
// Allows dynamic rearangement based on current academic unit value.
//======================================================================

$(document).ready(function() {
	$("#discipline").animsition();
} );

var draggedProgram = ''; // The program that was dropped in the dropzone.

// Text associated with a given program structure.
var courses = {
  honours: 'Honours BA', 
  major: 'Major', 
  minor: 'Minor'
};

var $grid = $('.grid').isotope({
	itemSelector: '.element-item',
	layoutMode: 'fitRows',
	getSortData: {
		name: '.name',
		symbol: '.symbol'
	}
});

var filterFns = {};

// bind filter button click
$('#filters').on('click', 'li', function() {
	
	var filterValue = $( this ).attr('data-filter');
	// use filterFn if matches value
	filterValue = filterFns[filterValue] || filterValue;
	$grid.isotope({ filter: filterValue });

	// Change 'is-checked' class on buttons.
	$('.is-checked').removeClass('is-checked');
	$(this).addClass('is-checked');

});  

// Get grid element that was clicked.
$('.element-item').click(function(event) {

	event.preventDefault();

	var discipline = $(this).attr('id');

	// Enable program button once discipline has been chosen.
	if (discipline) {

		$.cookie("discipline", discipline);
		
		// Redirect to program page.
		window.location.assign('program.php');

	}

});