<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/scrolltop.js"></script>

	<title>Infanto-Juvenil</title>

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#be0021">
	<link rel="shortcut icon" href="favicon/favicon.ico">
	<meta name="msapplication-config" content="favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<meta name="description" content="Infanto-Juvenil, primer y única banda punk de Piriápolis">

</head>
<body>

	<aside id="player">
		<iframe src="https://bandcamp.com/EmbeddedPlayer/album=1179711940/size=large/bgcol=333333/linkcol=2dad95/artwork=none/transparent=true/" seamless><a href="http://infantojuvenil.bandcamp.com/album/infanto-juvenil">Infanto-Juvenil by Infanto-Juvenil</a></iframe>
		<iframe src="https://bandcamp.com/EmbeddedPlayer/album=1179711940/size=small/bgcol=333333/linkcol=2dad95/transparent=true/" seamless><a href="http://infantojuvenil.bandcamp.com/album/infanto-juvenil">Infanto-Juvenil by Infanto-Juvenil</a></iframe>
	</aside>

	<header id="inicio">
		
		<nav>

			<div class="centrado">	
				
				<div>
					<a class="scrollTop" href="#inicio">
						<img src="img/layout/logo.svg" alt="Infanto-Juvenil">
					</a>
					<a class="scrollTop" href="#integrantes">
						<img src="img/layout/integrantes.svg" alt="integrantes">
						<img class="over" src="img/layout/integrantes-baba.gif" alt="Oscar babeando">
					</a>
				</div>
						
				<ul>
					<li>
						<a class="scrollTop" href="#historia">
							<img src="img/layout/menu-historia.svg" alt="Historia">
						</a>
					</li>
					<li>
						<a class="scrollTop" href="#integrantes">
							<img src="img/layout/menu-integrantes.svg" alt="Integrantes">
						</a>
					</li>
					<li>
						<a class="scrollTop" href="#discografia">
							<img src="img/layout/menu-discografia.svg" alt="Discografía">
						</a>
					</li>
					<li>
						<a href="http://instagram.com/infanto_juvenil" target="_blank">
							<img src="img/layout/menu-fotos.svg" alt="Fotos">
						</a>
					</li>
					<li>
						<a class="scrollTop" href="#letras">
							<img src="img/layout/menu-letras.svg" alt="Letras">
						</a>
					</li>
					<li class="fans">
						<img src="img/layout/menu-fans.svg" alt="Club de Fans">
						<img class="over" src="img/layout/menu-fans-over.svg" alt="Unite al club de fans de Infanto-Juvenil, la mejor banda!!">
					</li>
					<li class="like">
						<span class="fb-like" data-href="https://www.facebook.com/yosoytuinfantojuvenil" data-width="230" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></span>	
						<img class="over" src="img/layout/menu-fans-like.svg" alt="Excelente decisión!!">
					</li>
				</ul>

			</div>

		</nav>

	</header>

	<?php include "historia.inc" ?>
	<?php include "integrantes.inc" ?>
	<?php include "discografia.inc" ?>
	<?php include "letras.inc" ?>

	<footer>
		<div class="centrado">
			<ul>
				<li class="fans">
					<img src="img/layout/menu-fans.svg" alt="Club de Fans">
				</li>
				<li class="like">
					<span class="fb-like" data-href="https://www.facebook.com/yosoytuinfantojuvenil" data-width="230" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></span>	
				</li>
			</ul>
		</div>
	</footer>

	<script type="text/javascript">  
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));


		// Charly habla al pasar sobre el player

		$( "#player iframe" ).hover(
		 	function() {
		    	$( ".like .over" ).css( "display", "block" );
		  	}, 
			function() {
	    		$( ".like .over" ).css( "display", "none" );
	  		}
		);

		
		// Selector de Letras de canciones

		$( "#letras ul li a" ).click(function() {
			
			var $numero = $(this).parent().index() + 1; //Tomo número del botón
			
			$( "#letras article" ).css( "display", "none" );
			$( "#letras ul li a" ).removeClass( "seleccionado" );
			$( "#letras .centrado div" ).scrollTop( 0 );
			$( "#letras article:nth-of-type(" + $numero + ")" ).fadeIn("slow");
			$( this ).addClass( "seleccionado" );
		
		});


		// Centrado Vertical

        // $( document ).ready(function() {		
            
        //    $(window).resize(function(){
                                
        //        if (($(window).height() - $("#inicio nav .centrado").outerHeight())/2 > 0) {

	    //            $("#inicio nav .centrado").css({
	    //               marginTop: ($(window).height() - $("#inicio nav .centrado").outerHeight())/2
	    //            });

	    //        }

        //    });
            
        //    $(window).resize();
        
        //});

    </script>

</body>
</html>