
var params = { allowScriptAccess: "always" };
swfobject.embedSWF("http://www.youtube.com/v/mr-NXf5id0I?enablejsapi=1&playerapiid=p1&version=3&autoplay=0",
                   "p1", "320", "260", "8", null, null, params, {id:"p1"});
swfobject.embedSWF("http://www.youtube.com/v/8srPkl2PzJ4?enablejsapi=1&playerapiid=p2&version=3&autoplay=0",
                   "p2", "320", "260", "8", null, null, params, {id:"p2"});


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
function onytplayerStateChange(newState) {
      if(newState === 2){
		console.log(p1.getCurrentTime());
        // var stamp = document.createElement('dt');
        // var time = ytplayer.getCurrentTime();
        // var timestamp = parseInt(time/60);
        // var secs = parseInt(time%60);
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
		$.getJSON("https://gdata.youtube.com/feeds/api/videos?alt=json&q="+q, function(data) {
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
