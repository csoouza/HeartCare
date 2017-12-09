<?php

if($_GET['Farmaco'] == 'Adrenalina'){
	$Display	= "Adrenalina";
	$BPM		= "r";
	$Veia		= "l";
	$Arteria	= "a";
	$Pa			= "a";
	$texto		= '<font color="#428bca"><strong>Grupo farmacológico:</strong></font> simpatomimético; vasopressor; potente estimulador de receptores α e β adrenérgicos.
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
            <font color="#d9534f"><strong>Indicações terapêuticas:</strong></font> a adrenalina pode ser utilizada para restaurar o ritmo cardíaco em pacientes com parada cardíaca devido a várias causas.';
}else if($_GET['Farmaco'] == 'Propranolol'){
	$Display	= "Propranolol";
	$BPM		= "l";
	$Veia		= "n";
	$Arteria	= "l";
	$Pa			= "b";
	$texto		= '<font color="#428bca"><strong>Grupo farmacológico:</strong></font> simpatolítico; anti-hipertensivo; antiarrítmico; betabloqueador não seletivo de receptores β adrenérgicos.
			<br><br>
            <font color="#d9534f"><strong>Mecanismo de ação:</strong></font> exerce ação antagonista em receptores β-adrenérgicos não seletivo, ou seja, bloqueia tanto receptores do tipo β1, quanto os β2. 
            <br><br>
           <font color="#d9534f"><strong>Efeitos antiarrítmicos:</strong></font> o bloqueio dos receptores β1 cardíacos reduz a frequência cardíaca e sobrecarga intracelular de cálcio, além de inibir o automatismo mediado pelas pós-despolarizações. Como resultado da ação antiarrítmica, ocorre o prolongamento do tempo de condução e da refratariedade do nodo atrioventricular.
            <br><br>
            <font color="#d9534f"><strong>Efeitos anti-hipertensivos:</strong></font> o antagonismo em receptores β1 do coração produz efeitos cronotrópico e inotrópico negativos com redução do débito cardíaco. Já o bloqueio de receptores β1 do complexo justaglomerular reduz a produção de angiotensina II circulante, resultando em diminuição da resistência periférica. Em conjunto, esses efeitos contribuem para a queda da pressão arterial.
            <br><br>
           <font color="#d9534f"><strong>Principais efeitos adversos:</strong></font> broncoconstrição, hipoglicemia, fadiga, extremidades frias. A interrupção abrupta do tratamento com propranolol pode causar taquicardia e arritmias, efeitos denominados de “sintomas de retirada”.
            <br><br>
            <font color="#d9534f"><strong>Indicações terapêuticas:</strong></font> pacientes hipertensivos; arritmias, especialmente com insuficiência cardíaca congestiva compensada; infarto do miocárdio.';
}

?>
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

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>

    <!-- Navigation -->
    <?php include('Include/menu.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row" style="margin-top: -30px;">
        
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $Display; ?></h1> 
            
            <div class="col-lg-6 col-md-offset-6" style="margin-top: -75px;">
                	<div id="Acao"></div>
                	<div id="progressTimer"></div>
             </div>
             
             <div align="right" class="col-lg-6 col-md-offset-6" style="margin-top: -66px;">
             <a id="BtnAjuda" href="javascript:(void)" class="btn btn-primary" data-toggle="modal" data-target="#BtnAjudaM"><span class="glyphicon glyphicon-info-sign"></span> <?php echo $Display; ?></a>
             
             <a id="BtnFarmaco" href="javascript:(void)" class="btn btn-warning" onClick="injetar('<?php echo $BPM ?>','Injetando <?php echo $Display; ?>');"><span class="glyphicon icons-syringe"></span> Injetar <?php echo $Display; ?></a> 
             
             <a id="BtnNormalizar" href="javascript:(void)" class="btn btn-success" style="display:none; width:130px;" onClick="injetar('n', 'Normalizando');"><span class="glyphicon icons-syringe"></span> Normalizar</a>
             </div>
             
             </div>
        </div>
        <!-- /.row -->

        <!-- Content Row  <button type="button" class="btn btn-warning" onClick="injetar('r','Injetando adrenalina');"><span class="glyphicon glyphicon-pushpin"></span> Injetar Adrenalina</button> <button type="button" class="btn btn-success" onClick="injetar('n', 'Normalizando');"><span class="glyphicon glyphicon-pushpin"></span> Normalizar</button> -->
        <div align="center" class="row">
            <div class="col-md-5" style="height:200px;">
              
              	<div id="Veia"></div>
              	<div id="Arteria"></div>
              	<div id="PA"></div>
              
            </div>
            <div align="center" class="col-md-7">
                <p id="coracao">
                </p>
            </div>
            
            
            
            
        </div>
        <!-- /.row -->

        <hr>

    </div>
    
    <?php include('Include/footer.php'); ?>
    
    <!-- /.container -->


<!-- Modal -->
    <div class="modal fade" id="BtnAjudaM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel"><span class="glyphicon icons-syringe"></span> <?php echo $Display; ?></h3>
          </div>
          <div class="modal-body">
            <?php echo $texto; ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fechar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/swfobject.js"></script>
<script src="js/jquery.progressTimer.js"></script> 
<script>
$( document ).ready(function() {
	ChamaCoracao('n');
	ChamaVeia('n');
	ChamaArteria('n');
	ChamaPA('n');
	
});

function injetar(BPM,Acao){
	
	if(BPM == 'n'){
		$('#BtnNormalizar').css('display', 'none');
		$('#BtnAjuda').css('display', 'none');
		Arteria = 'n';
		Veia	= 'n';
		PA		= 'n';
	}else{
		$('#BtnFarmaco').css('display', 'none');
		$('#BtnAjuda').css('display', 'none');
		Arteria = '<?php echo $Arteria; ?>';
		Veia	= '<?php echo $Veia; ?>';
		PA	= '<?php echo $Pa; ?>';
	}
	
	$('#Acao').html(Acao);
	
	$("#progressTimer").progressTimer({
		timeLimit: 3,
		baseStyle: 'progress-bar',
		warningStyle: 'progress-bar',
		completeStyle: 'progress-bar',
		
		onFinish: function() {
			ChamaCoracao(BPM);
			ChamaVeia(Veia);
			ChamaArteria(Arteria);
			ChamaPA(PA);
			$('#Acao').html('');
			$('.progress-striped').remove();
			if(BPM != 'n'){
				$('#BtnNormalizar').css('display', 'inline-block');
				$('#BtnAjuda').css('display', 'inline-block');
			}else{
				$('#BtnFarmaco').css('display', 'inline-block');
				$('#BtnAjuda').css('display', 'inline-block');
			}
		}
	});

}

function ChamaCoracao(BPM){
	swfobject.embedSWF("img/veia/CORACAO.swf?coracaoBPM="+BPM, "coracao", "470", "470", "7");
}

function ChamaVeia(BPM){
	swfobject.embedSWF("img/veia/VEIA2.swf?veiaT="+BPM, "Veia", "370", "150", "7");
}

function ChamaArteria(BPM){
	swfobject.embedSWF("img/veia/ARTERIA.swf?arteriaT="+BPM, "Arteria", "370", "150", "7");
}

function ChamaPA(BPM){
	swfobject.embedSWF("img/veia/PA.swf?paP="+BPM, "PA", "370", "150", "7");
}

</script>
</body>

</html>
