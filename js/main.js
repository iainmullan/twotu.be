
var p1, p2;

function onYouTubePlayerReady(id) {

	console.log(id);

	if (id == 'p1') {
	   p1 = document.getElementById(id);
		p1.setVolume(100);
	} else if (id == 'p2') {
	   p2 = document.getElementById(id);
		p2.setVolume(0);
	}

}

$(document).ready(function() {

	$('#slider').slider({
		min: 0,
		max: 100,
		value: 50,
		slide: function (event,ui) {
			p1.setVolume(100 - ui.value);
			p2.setVolume(ui.value);
		}
	});

});
