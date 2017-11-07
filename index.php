<?php
   session_start(); 
   ?>
   
   
    
    
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Trebuchet MS:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	</head>
<body>
<script>
	
	var theme = [['images/brown.png', '#FFC77F', '#8E5B54'],
				 ['images/blue.png', '#B8BFF5', '#2A347D'],
				 ['images/purple.png', '#CFA4E8', '#D08AF9'],
				 ['images/green.png', '#A6F4B6', '#70D885'],
				 ['images/red.png', '#ffaaaa', '#d46a6a']];
	
	<?php if(isset($_POST['submit'])) {
    	$theme = $_POST['submit']; ?>
    
    var brojteme = <?php echo $theme; ?>;
    <?php	} else {  ?>
    	var brojteme = 0;
    <?php } ?>
    	var bg = theme[brojteme][0];
    	var tex = theme[brojteme][1];
    	var main = theme[brojteme][2];
console.log(bg);
    	document.body.style.setProperty('background-image', 'url(' + bg + ')');
    	document.body.style.setProperty('--main-text-color', tex);
    	document.body.style.setProperty('--main', main);
    	
    	
</script>
    	
<link rel="stylesheet" href="style.css">

      <div class="forma">	
	<form action = "index.php" method = "post">
					<input type = "submit" name="submit" value = "0"/><br />
                   <input type = "submit" name="submit" value = "1"/><br />
                  <input type = "submit" name="submit" value = "2"/><br />
                  <input type = "submit" name="submit" value = "3"/><br />
                  <input type = "submit" name="submit" value = "4"/><br />
               </form>
               </div>
   <div id="container">
    	<div class="logo logopic">Logo</div>
    	<div class="logo"><p>Odvjetnički Ured</p><span class="name">Ime</span>Ureda</div>
    		<div class="poruka"><span class="tel"> >> Istražujte sami!</span><p>ili nazovite nas!</p> <p><span class="tel"> tel: +385 9x xxx xxxx</span></p></div>

    	<div class="nav">
    		<div class="navsub">O nama</div>
    		<div class="navsub">O uredu</div>
    		<div class="navsub">Odvjetnički tim</div>
    		<div class="navsub">Područja prava</div>
    		<div class="navsub">Stručni članci</div>
    		<div class="navsub">Kontakt</div>
    		
    	</div>
    	<div class="bannerwrap">
    		<div class="banner">
    			<div class="word">Ovdje.Moze.Neka.Poruka.</div>
    			

    		</div>
    	</div>
    	<div class="content">
    		<div class="textarea">
    			<h2 class="naslov">O nama</h2>
    			<p>Odvjetničko društvo osnovali su odvjetnici partneri Pero Peric i Ivica Ivić 1996. godine kao javno trgovačko društvo, a 2015. godine kao partner je društvu pristupio i odvjetnik Hrvoje Horvat.</p><p>
Odvjetničko društvo orijentrano je profesionalnom i osobnom pristupu svakoj stranci, a razvilo je pravnu praksu koja teži najvišim standardima stručnosti i pouzdanosti u pružanju pravnih savjeta fizičkim i pravnim osobama.</p><div class="highlighted">
Iako je tesko reći ali težište djelatnosti društva je pružanje pravnih usluga iz područja trgovačkog i građanskog prava.</div><p>
Dugogodišnje iskustvo u brojnim predmetima omogućuje nam da se s jednakom pažnjom posvetimo kako najsloženijim transakcijama tako i redovitim aktivnostima svojih klijenata.</p><p>
Cilj nam je pravnom podrškom prilagođenom današnjem zahtjevnom pravnom okruženju unaprijediti i olakšati poslovanje svojih stranaka, rješavati njihove probleme, gradeći pri tom uzajamno povjerenje.</p>
    		</div>
    		<div class="sideinfo">
    			<p class="sidekontakt">Kontakt</p>
    			<p>tel: +385 9X XXX XXXX</p>
    			<p>e-mail: hrvoje.horvat@gmail.com</p>
    			<p>adresa: Trg Slobode 13, 31000 Osijek </p>
    			<p class="sidekontakt">Lokacija</p>
    			<div id="map"></div>
    		</div>
    	</div>
    	<div class="footer">

    		<div class="nav2">
    			<div class="navsub">O nama</div>
    			<div class="navsub">O uredu</div>
    			<div class="navsub">Odvjetnički tim</div>
    			<div class="navsub">Podrucja prava</div>
    			<div class="navsub">Stručni članci</div>
    			<div class="navsub">Kontakt</div>
    		</div>
    		<div class="logo logopic">Logo</div>
    	<div class="logo"><p>Odvjetnički Ured</p><span class="name">Ime</span>Ureda</div>
            
    		<div class="down"><span class="name">Trg Slobode 13, 31000 Osijek, Hrvatska</span>, +385 9x xxx xxxx</div>
    		<div class="down">© Copyright 2017. All Rights Reserved.</div>
                
    	</div>
   </div> 
<script>
	
      
      </script>
<script>
	const words = document.querySelectorAll('.word').forEach(function(word){
			window.setTimeout(function(){
			word.style.visibility = 'visible';
			
			}, 2000);
		});
			
		
		
		
	
	const banner = document.querySelector('.banner');
			
		window.setTimeout(function zoom() {
			banner.classList.add('animate');
		}, 1);
	window.setInterval(function unzoom() {
		banner.classList.remove('animate');
		window.setTimeout(function zoom() {
			banner.classList.add('animate');
		}, 7200);
	}, 14400);

	
	function initMap() {
          
          var uluru = {lat: 45.76584, lng: 15.98729};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            animation: google.maps.Animation.DROP,
            map: map
          });
	}

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJPEGL_qaEUYuoeTQzPPP6Q55WZAXkXaQ&callback=initMap">
</script>

</body>
</html>	