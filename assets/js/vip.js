$(document).ready(function(){
	//Pagination Starts

	$('#video-pagination').twbsPagination({
        totalPages: videoPages,
        visiblePages: 10,
        onPageClick: function (event, page) {
            $.ajax({
					url: base_url+"song-pagination",
					type: "POST",
					data: { genre: songGenre, subGenre: songSubGenre, page: page, type: 'video'}
				}).done(function(data){
					data = $.parseJSON(data);
					populateList(data.songsList,'video'.false);
				});
        }
	});
	$('#music-pagination').twbsPagination({
	        totalPages: songPages,
	        visiblePages: 10,
	        onPageClick: function (event, page) {
	            $.ajax({
					url: base_url+"song-pagination",
					type: "POST",
					data: { genre: songGenre, subGenre: songSubGenre, page: page, type: 'music'}
				}).done(function(data){
					data = $.parseJSON(data);
					populateList(data.songsList,'music',false);
				});
	        }
	});

	// Pagination Ends

	// Genre Click

	$(".music-genre ul.dropdown-menu li a,.music-subgenre ul.dropdown-menu li a").click(function(){
		$(".music-genre button.genre").html($(this).text()+' <span class="fa fa-caret-down"></span>');
		if($(this).attr("data-genre") === ""){
			$(".music-subgenre").hide();
			$(".music-subgenre ul.dropdown-menu").html("");
		} else {
			var slug = $(this).attr("data-genre");
			$.ajax({
				url: base_url+"sub-genre-filter",
				type: "POST",
				data: { genre: slug}
			}).done(function(data){
				populateSubGenres(data,'music');
				$.ajax({
					url: base_url+"song-genre-filter",
					type: "POST",
					data: { genre: slug}
				}).done(function(data){
					data = $.parseJSON(data);
					songPages = data.count;
					populateList(data.songsList,'music',true);
				});
			});
		}
	});

	$(".video-genre ul.dropdown-menu li a, .video-subgenre ul.dropdown-menu li a").click(function(){
		$(".video-genre button.genre").html($(this).text()+' <span class="fa fa-caret-down"></span>');
		if($(this).attr("data-genre") === ""){
			$(".video-subgenre").hide();
			$(".video-subgenre ul.dropdown-menu").html("");
		} else {
			var slug = $(this).attr("data-genre");
			$.ajax({
				url: base_url+"sub-genre-filter",
				type: "POST",
				data: { genre: slug}
			}).done(function(data){
				populateSubGenres(data,'video');
				$.ajax({
					url: base_url+"song-genre-filter",
					type: "POST",
					data: { genre: slug}
				}).done(function(data){
					data = $.parseJSON(data);
					videoPages = data.count;
					populateList(data.songsList,'video',true);
				});
			});
		}
	});

	// Genre Click Ends

	// Sub Genre Click Start

	$(".music-subgenre ul.dropdown-menu li a").click(function(){
		$(".music-subgenre button.subgenre").html($(this).text()+' <span class="fa fa-caret-down"></span>');
		var slug = $(this).attr("data-genre");
		$.ajax({
			url: base_url+"song-genre-filter",
			type: "POST",
			data: { genre: slug}
		}).done(function(data){
			data = $.parseJSON(data);
			songPages = data.count;
			populateList(data.songsList,'music',true);
		});
	});

	$(".video-subgenre ul.dropdown-menu li a").click(function(){
		$(".video-subgenre button.subgenre").html($(this).text()+' <span class="fa fa-caret-down"></span>');
		var slug = $(this).attr("data-genre");
		$.ajax({
			url: base_url+"song-genre-filter",
			type: "POST",
			data: { genre: slug}
		}).done(function(data){
			data = $.parseJSON(data);
			videoPages = data.count;
			populateList(data.songsList,'video',true);
		});
	});

	// Sub Genre Click Ends

	// Play Music Starts

	$(".fa-play").click(function(){
		$.ajax({
			url: base_url+"get-sample",
			type: "POST",
			data: { slug: $(this).attr("data-slug")}
		}).done(function(data){
			data = $.parseJSON(data);

			if(data.type == 1){
				$("#player-instance").jPlayer("destroy");
				$('#player-instance .jp-title.audio-title').text(data.songName);
				$("#player-instance").jPlayer({
				   ready: function () {
				    $("#player-instance").jPlayer("setMedia", {
				    	title: data.songName,
				     	mp3: data.file
				    });
				   },
				   play: function() { // To avoid multiple jPlayers playing together.
						$("#player-instance").jPlayer("pauseOthers");
					},
					cssSelectorAncestor: "",
				   	swfPath: "assets/jPlayer/Jplayer.swf",
					supplied: "mp3",
					timeupdate: function(event) { // 4Hz
					      // Restrict playback to first 90 seconds.
					      if (event.jPlayer.status.currentTime > 90) {
					         $("#player-instance").jPlayer('stop');
					      }
					   }
				});
			} else {
				$.dialog({
				mask:false,
				height:430,
				title:'jQuery Script!',
				html:'<div id="jp_container_1" class="jp-video jp-video-w-458p">\n\
						<div class="jp-type-single">\n\
							<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0"><video id="jp_video_0" preload="metadata" src="'+data.file+'" title="'+data.songName+'" style="width: 0px; height: 0px;"></video></div>\n\
							<div class="jp-gui">\n\
								<div class="jp-video-play" style="display: block;">\n\
									<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>\n\
								</div>\n\
								<div class="jp-interface">\n\
									<div class="jp-progress">\n\
										<div class="jp-seek-bar" style="width: 100%;">\n\
											<div class="jp-play-bar" style="width: 0%;"></div>\n\
										</div>\n\
									</div>\n\
									<div class="jp-current-time"></div>\n\
									<div class="jp-duration"></div>\n\
									<div class="jp-details">\n\
										<ul>\n\
											<li><span class="jp-title">'+data.songName+'</span></li>\n\
										</ul>\n\
									</div>\n\
									<div class="jp-controls-holder">\n\
										<ul class="jp-controls">\n\
											<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>\n\
											<li><a href="javascript:;" class="jp-pause" tabindex="1" style="display: none;">pause</a></li>\n\
											<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>\n\
											<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>\n\
											<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute" style="display: none;">unmute</a></li>\n\
											<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>\n\
										</ul>\n\
										<div class="jp-volume-bar">\n\
											<div class="jp-volume-bar-value" style="width: 80%;"></div>\n\
										</div>\n\
										<ul class="jp-toggles">\n\
											<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>\n\
											<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen" style="display: none;">restore screen</a></li>\n\
											<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>\n\
											<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none;">repeat off</a></li>\n\
										</ul>\n\
									</div>\n\
								</div>\n\
							</div>\n\
							<div class="jp-no-solution" style="display: none;">\n\
								<span>Update Required</span>\n\
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.\n\
							</div>\n\
						</div>\n\
					</div>',
				callback:function(){
					$("#jquery_jplayer_1").jPlayer({
							ready: function () {
								$("#jquery_jplayer_1").jPlayer("setMedia", {
									title: data.songName,
									mp4: data.file,
								//	poster: data.poster
								});
							},
							play: function() { // To avoid multiple jPlayers playing together.
								$("#jquery_jplayer_1").jPlayer("pauseOthers");
							},
							swfPath: "assets/jPlayer/Jplayer.swf",
							supplied: "mp4",
							size: {
									 width: "458px",
									 height: "258px"
								},
							globalVolume: true,
							smoothPlayBar: true,
							keyEnabled: true
						});
						//$("#jplayer_inspector_1").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
					}
				});
			}
		});
	});

	// Play Music Ends
	// Play Video Starts
	/*$(".video span.fa-play").click(function(){
		$.ajax({
			url: base_url+"get-sample",
			type: "POST",
			data: { slug: $(this).attr("data-slug")}
		}).done(function(data){
			data = $.parseJSON(data);
			$.dialog({
				mask:false,
				height:430,
				title:'jQuery Script!',
				html:'<div id="jp_container_1" class="jp-video jp-video-w-458p">\n\
						<div class="jp-type-single">\n\
							<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0"><video id="jp_video_0" preload="metadata" src="'+data.file+'" title="'+data.songName+'" style="width: 0px; height: 0px;"></video></div>\n\
							<div class="jp-gui">\n\
								<div class="jp-video-play" style="display: block;">\n\
									<a href="javascript:;" class="jp-video-play-icon" tabindex="1">play</a>\n\
								</div>\n\
								<div class="jp-interface">\n\
									<div class="jp-progress">\n\
										<div class="jp-seek-bar" style="width: 100%;">\n\
											<div class="jp-play-bar" style="width: 0%;"></div>\n\
										</div>\n\
									</div>\n\
									<div class="jp-current-time"></div>\n\
									<div class="jp-duration"></div>\n\
									<div class="jp-details">\n\
										<ul>\n\
											<li><span class="jp-title">'+data.songName+'</span></li>\n\
										</ul>\n\
									</div>\n\
									<div class="jp-controls-holder">\n\
										<ul class="jp-controls">\n\
											<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>\n\
											<li><a href="javascript:;" class="jp-pause" tabindex="1" style="display: none;">pause</a></li>\n\
											<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>\n\
											<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>\n\
											<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute" style="display: none;">unmute</a></li>\n\
											<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>\n\
										</ul>\n\
										<div class="jp-volume-bar">\n\
											<div class="jp-volume-bar-value" style="width: 80%;"></div>\n\
										</div>\n\
										<ul class="jp-toggles">\n\
											<li><a href="javascript:;" class="jp-full-screen" tabindex="1" title="full screen">full screen</a></li>\n\
											<li><a href="javascript:;" class="jp-restore-screen" tabindex="1" title="restore screen" style="display: none;">restore screen</a></li>\n\
											<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>\n\
											<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display: none;">repeat off</a></li>\n\
										</ul>\n\
									</div>\n\
								</div>\n\
							</div>\n\
							<div class="jp-no-solution" style="display: none;">\n\
								<span>Update Required</span>\n\
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.\n\
							</div>\n\
						</div>\n\
					</div>',
				callback:function(){
					$("#jquery_jplayer_1").jPlayer({
							ready: function () {
								$("#jquery_jplayer_1").jPlayer("setMedia", {
									title: data.songName,
									mp4: data.file,
								//	poster: data.poster
								});
							},
							play: function() { // To avoid multiple jPlayers playing together.
								$("#jquery_jplayer_1").jPlayer("pauseOthers");
							},
							swfPath: "assets/jPlayer/Jplayer.swf",
							supplied: "mp4",
							size: {
									 width: "458px",
									 height: "258px"
								},
							globalVolume: true,
							smoothPlayBar: true,
							keyEnabled: true
						});
						//$("#jplayer_inspector_1").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
				}
			});
		});
	});		*/
	// Play Video Ends
});
function populateSubGenres(data,type){


	var html = "";
	$.each($.parseJSON(data),function(key,val){
		html += '<li><a href="javascript:void(0);" data-subgenre="'+val.slug+'">'+val.name+'</a></li>';
	});
	
	if(type === "music"){
		$(".music-subgenre ul.dropdown-menu").html(html);
		$(".music-subgenre").show();
	} else {
		$(".video-subgenre ul.dropdown-menu").html(html);
		$(".video-subgenre").show();
	}

}

function populateList(data,type,page){

	var html = "";
	$.each(data,function(key,val){
		html += '<div class="tour_row animatedParent">\n\
                            <div class="animated fadeInDownShort">\n\
                              <div class="column_one">\n\
                                <span>'+val.createdAt+'</span>\n\
                              </div>\n\
                              <div class="column_two"> <img src="assets/img/media/media_07.jpg" alt="" /> </div>\n\
                              <div class="column_three"> '+val.songName+' </div>\n\
                              <div class="column_four"> '+val.artistName+' </div>\n\
                              <div class="column_five"> '+val.bpm+' </div>';
                              if(type == "music"){
                              	html += '<div class="column_six music">';
                              } else {
                              	html += '<div class="column_six video">';
                              }
        
	                html += '<a href="#"><span class="fa fa-play" data-slug="'+val.slug+'"></span></a>\n\
	                  <a href="#"><span class="fa fa-plus" data-slug="'+val.slug+'"></span></a>\n\
	                  <a href="#"><span class="fa fa-download" data-slug="'+val.slug+'"></span></a>\n\
	              </div>\n\
	            </div>\n\
	          </div>';
	});
	if(type === "music"){
		$("#musicListHolder").html(html);
		if(page){
			$('#music-pagination').data('twbs-pagination').destroy();
			$('#music-pagination').twbsPagination({
			        totalPages: songPages,
			        visiblePages: 10,
			        onPageClick: function (event, page) {
			            alert(page);
			        }
			});
		}
		$('html, body').stop().animate({scrollTop: $("#music_section").offset().top}, 1000,"swing");
	} else {
		$("#videoListHolder").html(html);
		if(page){
			$('#video-pagination').data('twbs-pagination').destroy();
			$('#video-pagination').twbsPagination({
		        totalPages: videoPages,
		        visiblePages: 10,
		        onPageClick: function (event, page) {
		            alert(page);
		        }
			});
		}
		$('html, body').stop().animate({scrollTop: $("#videos_section").offset().top}, 1000,"swing");
	}
	

}