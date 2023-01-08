<script type="text/javascript">
			
				function inicio(){
					var corrente = 0;
					var audio = $("#audio");
					var playlist = $("#play-list");
					var tracks = playlist.find("li a");
					var len = tracks.length - 1;
					audio [0].play();
					playlist.find("a").click(function(e){
							e.preventDefault();
							link = $(this);
							corrente = link.parent().index();
							run(link,audio[0]);
					});

					audio [0].addEventlistener("ended",function(e){
						corrente++;
						if(corrente = len){
							corrente = 0;
							link = playlist.find("a")[0];


						}

					});

				}

			function playmusica(url,player) {
				player.src = link.attr("href");
				par = link.parent();
				par.addClass("active").siblings().removeClass("active");
				player.load();
				player.play();
			}
		</script>	