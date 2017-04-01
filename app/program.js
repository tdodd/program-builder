//======================================================================
// This script conrols program logic, assigning values to the chart.
//======================================================================
$(document).ready(function() {

  // Initial chart data set to Honours BA.
  honours();

  $('.draggable').click(function() {
	 $('.active').removeClass('active');
	 $(this).addClass('active');
	 $('.main-header').html($(this).html());
  });

  // Resize credits in center of donut on browser resize.
  $(window).resize(function() {
	 
	 var x = parseFloat($('.left-side').css('width')) / 2.3;
	 var y = parseInt($('.left-side').css('height')) / 20;
	 var font = parseFloat($('.left-side').css('width')) / 130 + 'rem';
	 
	 $('.credits').css('width', x).css('height', y).css('font-size', font);

  });
  
}); // End document.ready

/**
 * Data for honours ba chart. 
 */
function honours() {

  values = {

	 labels: ['First Discipline', 'Electives', 'Basic Skills'],
	 data: [60, 48, 12],
	 backgroundColors: ['#2196F3', '#4CAF50', '#E91E63'],
	 hoverColors: ['#64B5F6', '#66BB6A', '#FF6384'],
	 header: 'Honours BA in ',
	 total: '120 credits'

	 // Program object:
	 // -----------------------------------------
	 // Structures: Honours BA, Major, Minor, etc.
	 // Title: structure in name (e.g. Major in Communication, Honours BA in English, etc.)
	 // Chart values (credits for each section): 60, 48, 12, etc.
	 // Total number of credits for the program.
	 // Background colors: associated with the snippet name/type; match chart colors.
	 // Snippets: custom text for each program (e.g. communication media/organizational), possibly in each snippet or elsewhere.

  }

  // Generate chart with provided values.
  generateChart(values);

} // End honours

/**
 * Generate a new chart based on an array of values.
 */
function generateChart(values) {

  var ctx = $('canvas');

  // Set chart data to program data.
  var data = {

	 labels: values.labels,
	 datasets: [{
		data: values.data,
		backgroundColor: values.backgroundColors,
		hoverBackgroundColor: values.hoverColors
	 }]

  };

// Remove previous chart before re-drawing.
//$('iframe').remove();

  // Draw chart.
  var myDoughnutChart = new Chart(ctx, {
	 type: 'doughnut',
	 data: data
  });

  // Remove previous colors.
  $('.colors').html('');

  // Set colors around snippet names.
  for (var index in values.backgroundColors) {

	   var color = $('<li>' + values.labels[index] + '</li>')
		.css('borderColor', values.backgroundColors[index])
		.appendTo($('.colors'));

	 // Show # of credits in the center of the donut.
	 var x = parseFloat($('.left-side').css('width')) / 2.3;
	 var y = parseInt($('.left-side').css('height')) / 20;
	 var font = parseFloat($('.left-side').css('width')) / 130 + 'rem'; // Font size 3rem.
	 
	 $('.credits').html(values.total).css('width', x).css('height', y).css('font-size', font);

  }

} // End generateChart.