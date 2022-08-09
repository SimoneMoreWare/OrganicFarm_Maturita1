
<?php
		// Creo la connessione
		$conn = mysqli_connect("localhost", "root", "", "ciociola_db");
		// Verifico la connessione
		if (!$conn) {
				die("Impossibile connettersi al Server: " . mysqli_connect_error());
		}

		$sqlQueryA = "select formatore.cod_formatore,formatore.nome,formatore.cognome,sedi.nome as sede
			from articoli,settori,vendite,sedi,venditaarticoli,formatore
			where settori.cod_settori=articoli.cod_settori and
			articoli.cod_articoli=venditaarticoli.cod_articoli and
			venditaarticoli.cod_vendite=vendite.cod_vendite and
			vendite.cod_formatore=formatore.cod_formatore and
			formatore.cod_sedi=sedi.cod_sedi and
			settori.nome='corso'
			group by formatore.cod_formatore,formatore.nome,formatore.cognome,sedi.nome
			order by sedi.nome";

			mysqli_close($conn);
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>alfa spa</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="main"><!-- Main starts here -->
<div id="header"><!-- Header starts here -->
	<div class="searchBar">


    </div>

    <div class="logo">
    	<a href="#"><img src="images/logo.png" alt=""></a>
    </div>

    <div class="menu">
    	<ul id="menu">
        	<li class="home"><a href="#">home</a></li>



    	</ul>
    </div>

</div><!-- Header ends here -->

<div class="clear"></div>

<div id="contentTop"></div><!-- Content starts here -->
<div id="content">

	<div class="welcomeHolder">
    <div class="welcome">
    	<img src="images/img01.jpg" alt="">
		<h1>Alfa Spa</h1>
        <p><em>è una società per azioni italiana specializzata nel latte, yogurt, panna e nel settore alimentare. Dal luglio 2011 è controllata dalla francese Lactalis al termine di una scalata finanziaria costata 4 miliardi di euro. Possiede 68 stabilimenti produttivi, in Italia si rifornisce di latte da circa 800 stalle. </em></p>

         <div class="clear"></div>
    </div>
    <div class="welcomeBottom"></div>
    </div>

	<div class="heading">Why Organic?</div>
    <div class="organic">
    	<div class="organicHolder">
        	<div class="organicContent">
            	<img src="images/img02.jpg" alt="">
                <h2><a href="../corso/index.html" class="corso">Corso user experience</a></h2>
								<p>Questo è un corso introduttivo ed è pensato per chi non ha alcuna base di user experience. E' un elemento fondamentale per chi ha un’attività online e ad apprenderne le basi.

</p>
								
								<p>Corso tenuto da <a href="../persona1/index.html" style='color:red'>Matteo Lo Manto</a></p>
            </div>
        </div>

        <div class="organicHolder">
        	<div class="organicContent">
            	<img src="images/img03.jpg" alt="">
                <h2><a href="../corso2/index.html" class="corso">Corso GROWTH HACKING</a></h2>
                <p>Questo corso racconta il Growth Hacking e i suoi concetti fondamentali: dalle sue varie definizioni e che cosa vuol dire crescere utilizzando questo approccio</p>
								<br>
								<p>Corso tenuto da <a href="../persona2/index.html" style='color:red'>Raffaele Gaito</a></p>
            </div>
        </div>

        <div class="organicHolder">
        	<div class="organicContent">
            	<img src="images/img04.jpg" alt="">
                <h2><a href="../corso3/index.html" class="corso">Corso Social Networking	</a></h2>
								<p>Questo corso si rivolge ad aspiranti Social Media Manager che vogliono sviluppare una visione d'insieme del mondo dei social media</p>
								<br>
								<p>Corso tenuto da <a href="../persona3/index.html" style='color:red'>Tiziano Pazzini
</a></p>
            </div>
        </div>
    </div>

    <div class="space"></div>

     <div class="organic">





    </div>
<div class="clear"></div>

<div class="hr"></div>
<div class="space"></div>
<div id="footer"><!-- Footer starts here -->

<div class="contactHeading">Contact Us</div>
<div class="footerHolder">
	<div class="footerLeft">
    	<p class="left">Via:</p>
        <p class="right">Via barletta 1a<br> Manfredonia FG<br> Italia</p>
    </div>

    <div class="footerRight">
    	<p class="left">Phone: <br>Email: <br></p>
	    <p class="right">+39 351 199 5882<br> alecio@gmail.com <br></p>
    </div>
    <div class="clear"></div>
</div>
</div><!-- Footer ends here -->
</div>
<div id="contentBottom"></div><!-- Content ends here -->

<div class="bottomHolder">

<div class="design"><a>Design by Alessandro Ciociola</a></div>
</div>
</div><!-- Main ends here -->






</body></html>
