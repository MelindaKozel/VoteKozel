<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF=8">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded|Montserrat|Raleway" rel="stylesheet">
	<script>
	document.querySelector('.menuButton').addEventListener('click', () => {
  		document.querySelector('.menu__list')
    		.classList.toggle('menu__list--animate');	
		});
  	</script>	
	<!-- AddEvent script -->
<script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

<!-- AddEvent Settings -->
<script type="text/javascript">
window.addeventasync = function(){
    addeventatc.settings({
        appleical  : {show:true, text:"Apple Calendar"},
        google     : {show:true, text:"Google <em>(online)</em>"},
        outlook    : {show:true, text:"Outlook"},
        outlookcom : {show:true, text:"Outlook.com <em>(online)</em>"},
        yahoo      : {show:true, text:"Yahoo <em>(online)</em>"}
    });
};
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
	<header>
		<div class="topSection">
		<div class="bar">
 			<nav role='navigation'>
  <ul>
    <li><a href="#" id="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></a>
      <ul>
        <li><a href="http://votekozel.com/#district">LEARNING COMMUNITY COUNCIL</a></li>
	<li><a href="http://votekozel.com/#goals">PRIORITIES</a></li>
	<li><a href="http://votekozel.com/#about">ABOUT ME</a></li>
	<li><a href="http://votekozel.com/#events">EVENTS</a></li>
	<li><a href="http://votekozel.com/#contact">CONTACT</a></li>
	<li><a href="http://votekozel.com/voting">VOTING INFO</a></li>
      </ul>
    </li>

  </ul>
</nav>  
			 	<div class="menuLogo">
				<a href="<?php bloginfo('url'); ?>"><img class="logo" src="http://votekozel.com/wp-content/uploads/2017/10/campaign-logo-copy-e1507992892743.png" /></a>
					
			</div>
			<div class="socialRow"><a href="https://www.facebook.com/VoteKozel/" class="fa fa-facebook fa-lg" aria-hidden="true"></a><a href="https://twitter.com/MelindaKozel" class="fa fa-twitter fa-lg" aria-hidden="true"></a><a href="https://www.instagram.com/melindakozel" class="fa fa-instagram fa-lg" aria-hidden="true"></a></div>	
			
			<div class="home-service-box">
				<div class="outside-box">
				<div class="outer-border">
				<div class="inner-border">
				<div class="img-holder">
				<a href="https://secure.actblue.com/donate/
votekozel"><img src="http://votekozel.com/wp-content/uploads/2017/10/coin-blue-e1508027914141.png" /></a>
				</div>
				</div>
				</div>
				</div>
			</div>
			</div>
		
	
		
	</header>
