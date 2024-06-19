/*
Template Name: HUD - Responsive Bootstrap 5 Admin Template
Version: 1.7.0
Author: Sean Ngu
Website: http://www.seantheme.com/hud/
*/

var handleRenderCountdownTimer = function() {
	var newYear = new Date();
	newYear = new Date(1);
	$('#timer').countdown({until: newYear});
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleRenderCountdownTimer();
});