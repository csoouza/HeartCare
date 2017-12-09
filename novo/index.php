<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <title>Heart Care - Simulação de fármaco no coração de animais</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
		@font-face {
			font-family: 'icomoon';
			src:url('fonts/icomoon.eot');
			src:url('fonts/icomoon.eot') format('embedded-opentype'),
				url('fonts/icomoon.ttf') format('truetype'),
				url('fonts/icomoon.woff') format('woff'),
				url('fonts/icomoon.svg') format('svg');
			font-weight: normal;
			font-style: normal;
		}
		[class^="icons-"], [class*=" icons-"] {
			font-family: 'icomoon';
			speak: none;
			font-style: normal;
			font-weight: normal;
			font-variant: normal;
			text-transform: none;
			line-height: 1;
		
			/* Better Font Rendering =========== */
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		
		.icons-syringe:before {
			content: "\27";
		}
	</style>
    
</head>

<body>

    <!-- Navigation -->
    <?php include('Include/menu.php'); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide" style="background-color:#cb0835;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('Interface/Banner1.png');"></div>
                <div class="container">
            <div class="carousel-caption">
             <!-- <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>-->
              
            </div>
          </div>
            </div>
           
           <!-- <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>-->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    O que é Heart Care?
                </h1>
            </div>
            <p style="font-size:17px;">
Heart Care é um sistema educacional (simulador) dos principais fármacos, direcionado ao estudo da farmacologia cardiovascular veterinária, como forma alternativa ao uso de animais em práticas acadêmicas. <br><br>
O sistema simula a reação dos principais fármacos no coração e veias dos animais, auxiliando o aluno no entendimento, complementando a fundamentação teórica e estimulando o raciocínio lógico necessário para o uso responsável de medicamentos cardiovasculares na clínica médica em pequenos animais.</p>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span class="glyphicon icons-syringe"></span> Fármacos
                </h1>
            </div>
            <p class="col-lg-9" style="font-size:17px;">
            <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Noradrenalina</button>
            <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Alfabloqueador</button>
            <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Neostigmina</button>
            
            	<button type="button" class="btn btn-warning" style="margin-bottom:15px;" data-toggle="modal" data-target="#Adrenalina"><span class="glyphicon icons-syringe"></span> Adrenalina</button>
                <button type="button" class="btn btn-warning" style="margin-bottom:15px;" data-toggle="modal" data-target="#Propranolol"><span class="glyphicon icons-syringe"></span> Propranolol</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Pilocarpina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Isoprenalina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Acetilcolina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Nicotina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Efedrina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Atropina</button>
                <button type="button" class="btn btn-warning disabled" style="margin-bottom:15px;"><span class="glyphicon icons-syringe"></span> Hexametônio</button>
            </p>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

	<!-- Modal -->
    <div class="modal fade" id="Adrenalina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel"><span class="glyphicon icons-syringe"></span> Adrenalina</h3>
          </div>
          <div class="modal-body">
            <font color="#428bca"><strong>Grupo farmacológico:</strong></font> simpatomimético; vasopressor; potente estimulador de receptores α e β adrenérgicos.
			<br><br>
            <font color="#d9534f"><strong>Mecanismo de ação:</strong></font> exerce ação agonista direta em receptores α1, β1 e β2 adrenérgicos. 
            <br><br>
            <font color="#d9534f"><strong>Efeitos cardíacos:</strong></font> poderoso estimulante cardíaco. Atua em receptores β1, predominante no miocárdio e nas células do marca-passo e do tecido condutor. A ativação de β1 eleva a concentração intracelular de AMPc e do cálcio que promovem o aumento da contração do miocárdio (inotropismo positivo), da frequência cardíaca (cronotropismo positivo), do débito cardíaco e da demanda de oxigênio pelo miocárdio. 
            <br><br>
            <font color="#d9534f"><strong>Efeitos vasculares:</strong></font> diferentes leitos vasculares reagem distintamente à ação da adrenalina, proporcionando importante redistribuição do fluxo sanguíneo. A adrenalina atua principalmente sobre as arteríolas menores, pequenas vênulas e os esfíncteres pré-capilares, embora as veias e grandes artérias também respondam. Contrai as arteríolas da pele, mucosas e vísceras (efeito α1, resultante do aumento do cálcio intracelular, e dilata os vasos que irrigam o fígado e a musculatura esquelética (efeito β2), através do aumento de AMPc intracelular. Nos vasos coronarianos, frequentemente, causa dilatação.
            <br><br>
            <font color="#d9534f"><strong>Efeitos pressores:</strong></font> em doses baixas, ocorre vasodilatação e queda da pressão arterial decorrentes da estimulação de receptores β2 presentes em leitos vasculares. Este efeito depressor é explicado pela maior sensibilidade dos receptores β à ação da adrenalina, em comparação aos receptores α (constritores). Doses maiores e injeção intravenosa rápida causam aumento significativo da pressão arterial, devido aos efeitos inotrópicos e cronotrópicos positivos e ação vasoconstritora, especialmente de vasos pré-capilares da pele, mucosas e rins. 
            <br><br>
            <font color="#d9534f"><strong>Principais efeitos adversos:</strong></font> podem ocorrer reações como tremor, ansiedade, tensão, fraqueza, vertigem, dificuldade respiratória. Em casos muito graves pode-se observar hemorragia cerebral e arritmias cardíacas, geralmente pelo uso inadequado do fármaco.
            <br><br>
            <font color="#d9534f"><strong>Indicações terapêuticas:</strong></font> a adrenalina pode ser utilizada para restaurar o ritmo cardíaco em pacientes com parada cardíaca devido a várias causas.

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> fechar</button>
            <a href="simulador.php?Farmaco=Adrenalina" class="btn btn-danger"><span class="glyphicon icons-syringe"></span> Simular</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="Propranolol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel"><span class="glyphicon icons-syringe"></span> Propranolol</h3>
          </div>
          <div class="modal-body">
            <font color="#428bca"><strong>Grupo farmacológico:</strong></font> simpatolítico; anti-hipertensivo; antiarrítmico; betabloqueador não seletivo de receptores β adrenérgicos.
			<br><br>
            <font color="#d9534f"><strong>Mecanismo de ação:</strong></font> exerce ação antagonista em receptores β-adrenérgicos não seletivo, ou seja, bloqueia tanto receptores do tipo β1, quanto os β2. 
            <br><br>
           <font color="#d9534f"><strong>Efeitos antiarrítmicos:</strong></font> o bloqueio dos receptores β1 cardíacos reduz a frequência cardíaca e sobrecarga intracelular de cálcio, além de inibir o automatismo mediado pelas pós-despolarizações. Como resultado da ação antiarrítmica, ocorre o prolongamento do tempo de condução e da refratariedade do nodo atrioventricular.
            <br><br>
            <font color="#d9534f"><strong>Efeitos anti-hipertensivos:</strong></font> o antagonismo em receptores β1 do coração produz efeitos cronotrópico e inotrópico negativos com redução do débito cardíaco. Já o bloqueio de receptores β1 do complexo justaglomerular reduz a produção de angiotensina II circulante, resultando em diminuição da resistência periférica. Em conjunto, esses efeitos contribuem para a queda da pressão arterial.
            <br><br>
           <font color="#d9534f"><strong>Principais efeitos adversos:</strong></font> broncoconstrição, hipoglicemia, fadiga, extremidades frias. A interrupção abrupta do tratamento com propranolol pode causar taquicardia e arritmias, efeitos denominados de “sintomas de retirada”.
            <br><br>
            <font color="#d9534f"><strong>Indicações terapêuticas:</strong></font> pacientes hipertensivos; arritmias, especialmente com insuficiência cardíaca congestiva compensada; infarto do miocárdio.

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> fechar</button>
            <a href="simulador.php?Farmaco=Propranolol" class="btn btn-danger"><span class="glyphicon icons-syringe"></span> Simular</a>
          </div>
        </div>
      </div>
    </div>

	<?php include('Include/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
