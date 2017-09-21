<?php include 'header.php';?>
 
  <div class="main-wrapper-onepage main oh">

    <!-- Revolution Slider -->
<section class="section-wrap promo-section no-pad-top">

      <div  class="pad-top-40">

      </div> 
    </section>
    
    <!-- About us / Progress Bars -->
    <section class="section-wrap-mp pad-top-20">
      <div class="container">
        <div class="row mt-minus-30">

          <div class="sobrepuesto paddingTop10">
					<div class="imgbotella">
						<img src="img/41grrben.png" class="img-center img-responsive centrar-div-pos" alt="GRAN RESERVA RED BLEND">
					</div>
				</div> <!-- end col -->
          
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 espacio-bot">
          <!-- espacio botella -->
			</div>

          <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12 descrip-vino">
           	
            	<div class="info-ow" style="text-transform: uppercase">
            	<h3><?php echo $lang['homeVariedades']; ?></h3>
             	<div class="contain-1">
             	<div class="vari"><a href="gr_rb.php"><h4><?php echo $lang['redBlend']; ?></h4></a></div>
             	</div>
             	</div>
             	
            <div class="info-ow mt-30">
              <h1 style="text-transform: uppercase"><?php echo $lang['redBlend']; ?></h1>
              <br>
              <h3><?php echo $lang['origen']; ?></h3>
              <h5><?php echo $lang['homeValleMaipo1']; ?></h5>
              <?php echo $lang['gr_rbTexto1']; ?>
              <br> <br>
              <h6><?php echo $lang['vinificacion']; ?></h6>
              <h3><?php echo $lang['semana']; ?>:</h3> <?php echo $lang['gr_rbTexto2']; ?>
              <h3><?php echo $lang['guarda']; ?>:</h3> <?php echo $lang['gr_rbTexto3']; ?>
              <h3><?php echo $lang['vinificacion']; ?>:</h3> <?php echo $lang['gr_rbTexto4']; ?>
              <h3>Reporte de vendimia:</h3> <?php echo $lang['gr_rbTexto5']; ?>
              <br><br>
              <h6><?php echo $lang['degustacion']; ?></h6>
              <h3><?php echo $lang['color']; ?>:</h3> <?php echo $lang['gr_rbTexto6']; ?>
              <h3><?php echo $lang['aroma']; ?>:</h3> <?php echo $lang['gr_rbTexto7']; ?>
              <h3><?php echo $lang['sabor']; ?>:</h3> <?php echo $lang['gr_rbTexto8']; ?>
              <h3><?php echo $lang['temp']; ?>:</h3> <?php echo $lang['gr_rbTexto9']; ?>
              <h3><?php echo $lang['maridaje']; ?>:</h3> <?php echo $lang['gr_rbTexto10']; ?>
              <h3><?php echo $lang['potencial']; ?>:</h3> <?php echo $lang['gr_rbTexto11']; ?>
              <br><br>
              
              <?php 
              if ($_SESSION['lang']=='en') {  ?>
              <a href="files/Gran Reserva/Eng/GranRes_CsSy_14.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <?php
              }
              else if ($_SESSION['lang']=='es') { ?>
              <a href="files/Gran Reserva/Esp/GranRes_CsSy_14.pdf" target="_blank" class="btn btn-lg btn-color"><?php echo $lang['download']; ?></a>
              <a href="http://www.cavamorande.cl/store/vistamar-gran-reserva/vistamar-gran-reserva-cabernet-sauvignon-syrah" target="_blank" class="btn btn-lg btn-color">
              <?php echo $lang['buy']; ?></a>
              <?php
              }
              ?> 


            </div>
          </div> <!-- end col -->   

        </div>
      </div>
    </section> <!-- end progress bars -->

   <section class="black-b">
    	<div class="content-title-img">
		<div class="title-img"><img src="img/title_wine.png" alt="our wines"></div>
		</div>
    </section>
 <section id="wines" class="no-pad-top">
    	<div class="altura-x">
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w1.jpg" height="433" alt="Brisa">
						<div class="work-overlay">        
						<a href="brisa.php" style="color: #FFFFFF">	<div class="other-wines">
								<h3 style="color: #FFFFFF"> Brisa</h3>
                  <span>El nombre de esta línea es un homenaje que le brindamos a las suaves brisas que refrescan nuestros viñedos, tanto en las áreas andinas como en las costeras. Los vinos de Brisa son para disfrutar de los buenos momentos en cualquier ocasión.</span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w3.jpg" height="433" alt="Corte de Campo">
						<div class="work-overlay">        
							<a href="corte-de-campo.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> Corte de Campo</h3>
                  <span>La línea Corte de Campo consta de dos ensamblajes que representan la mayor expresión de nuestros constantes esfuerzos por obtener vinos únicos. La mezcla tinta proviene de Cachapoal Andes, en tanto la mezcla blanca tiene su origen en Casablanca Costa.</span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w4.jpg" height="433" alt="Sepia Reserva">
						<div class="work-overlay">        
							<a href="sepia-reserva.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> Sepia Reserva</h3>
                  <span>Las uvas para nuestra línea Reserva se seleccionan de viñedos únicos de nuestra propiedad (Single Estate) en Casablanca Costa (Campo Belén) y en Cachapoal Andes (Campo La Moralina).</span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    		<div class="wine-space-ow">
    			<div class="work-item web-design print">
					<div class="work-img"><img src="img/w5.jpg" height="433" alt="Specialties">
						<div class="work-overlay">        
							<a href="especialidades.php" style="color: #FFFFFF"><div class="other-wines">
								<h3 style="color: #FFFFFF"> Especialidades</h3>
                  <span>Nuestro objetivo de ser diferentes e innovadores nos llevó a desarrollar estos increíbles vinos espumantes Brut y Brut Rosé y nuestro delicado, aromático y frutal Late Harvest Moscatel.</span>
							</div></a>
						</div>
					</div>
				</div>
    		</div>
    	</div>
    </section>
<script type="text/javascript">
window.onload=function () {
    $('#menu_our-wines').addClass('page-active');
	$('#menu_gran-reserva').addClass('page-active');
};
</script>
<?php include 'footer.php';?>