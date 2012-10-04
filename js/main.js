
var p1, p2;

function onYouTubePlayerReady(id) {

	console.log(id);

	if (id == 'p1') {
	   p1 = document.getElementById(id);
		p1.setVolume(50);
	} else if (id == 'p2') {
	   p2 = document.getElementById(id);
		p2.setVolume(50);
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
	

	$('form').submit(function(e) {
		
		e.preventDefault();
		
		var q = $(this).find('input').val();
		var p = $(this).attr('rel');
		
		var sr = $(this).parent().find('.search-results');
		
		$.get("https://gdata.youtube.com/feeds/api/videos?alt=json&q="+q, function(data) {
			console.log(data);
			sr.html('');
			$.each(data.feed.entry, function (i,e) {
				var thumb = e.media$group.media$thumbnail[3].url;
				var playUrl = e.media$group.media$content[0].url;
				sr.append('<div class="video"><img src="'+thumb+'" /><a rel="'+p+'" href="'+playUrl+'">'+e.title.$t+'</a><br class="clear" /></div>');
			});
		});
		
	});
	
	$('.search-results a').live('click', function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		var p = $(this).attr('rel');
		console.log(url);
		if (p==1) {
			p1.loadVideoByUrl(url);			
		} else {
			p2.loadVideoByUrl(url);			
		}
		return false;
	});

	// $('#s2').change(function() {
	// 	p2.loadVideoByUrl($(this).val());
	// });

});
