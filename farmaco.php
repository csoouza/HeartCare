<?
    session_start();
    $_GET['farmaco'];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> heart care </title>
<link rel='stylesheet' type='text/css' href="css/layout.css" />
</head>

<body>

<div id="container">

	<div id="pa">
    
    <?
       if ( $_GET['farmaco'] == "na" ){
		   echo "Noradrenalina 20mcg";
	   }
	   else
	   if ( $_GET['farmaco'] == "ad") {
		   echo "Adrenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "iso") {
		   echo "Isoprenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ete") {
	   	   echo "Etedrina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ab") {
		   echo "AMablogneador";
	   }
	   else
	   if ( $_GET['farmaco'] == "pr") {
		   echo "propanolol";
	   }
	   else
	   if ( $_GET['farmaco'] == "ac") {
		   echo "Acetilcolina";
	   }
	   else
	   if ( $_GET['farmaco'] == "at") {
	   	   echo "Atoprina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ne") {
		   echo "Neostigmima";
	   }
	   else
	   if ( $_GET['farmaco'] == "pi") {
		   echo "Pilocarpina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ni") {
	   	   echo "Nicotina";
	   }
	   else
	   if ( $_GET['farmaco'] == "he") {
		   echo "Hezametodina";
	   }
    ?>
    
    </div>
	
    
    <div id="coracao">
    <?
       if ( $_GET['farmaco'] == "na" ){
	?>	   
		    <object width="470" height=" 300 "><param name="movie" value=" ENDEREÇO DO ARQUIVO "></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="coracoes/CORACAO_RAPIDO.swf" type
    ]"application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="470" height="300"></embed></object>
	<?	   
	   }
	   else
	   if ( $_GET['farmaco'] == "ad") {
		   echo "Adrenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "iso") {
		   echo "Isoprenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ete") {
	   	   echo "Etedrina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ab") {
		   echo "AMablogneador";
	   }
	   else
	   if ( $_GET['farmaco'] == "pr") {
		   echo "propanolol";
	   }
	   else
	   if ( $_GET['farmaco'] == "ac") {
		   echo "Acetilcolina";
	   }
	   else
	   if ( $_GET['farmaco'] == "at") {
	   	   echo "Atoprina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ne") {
		   echo "Neostigmima";
	   }
	   else
	   if ( $_GET['farmaco'] == "pi") {
		   echo "Pilocarpina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ni") {
	   	   echo "Nicotina";
	   }
	   else
	   if ( $_GET['farmaco'] == "he") {
		   echo "Hezametodina";
	   }
    ?>
    </div>
	
    <font style=" padding:12px;"> RECEPTORES: a = alfa1 b = beta m = muscarinicos </font>
    
    <div id="v_viceral">
        
    <?
       if ( $_GET['farmaco'] == "na" ){
	?>	
    	<FONT>Arteria Viceral</FONT>
		    <object width="390" height=" 150 "><param name="movie" value=" ENDEREÇO DO ARQUIVO "></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="coracoes/ARTERIA.swf" type
    ]"application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="390" height="150"></embed></object>
	 <? 
       }
	   else
	   if ( $_GET['farmaco'] == "ad") {
		   echo "Adrenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "iso") {
		   echo "Isoprenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ete") {
	   	   echo "Etedrina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ab") {
		   echo "AMablogneador";
	   }
	   else
	   if ( $_GET['farmaco'] == "pr") {
		   echo "propanolol";
	   }
	   else
	   if ( $_GET['farmaco'] == "ac") {
		   echo "Acetilcolina";
	   }
	   else
	   if ( $_GET['farmaco'] == "at") {
	   	   echo "Atoprina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ne") {
		   echo "Neostigmima";
	   }
	   else
	   if ( $_GET['farmaco'] == "pi") {
		   echo "Pilocarpina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ni") {
	   	   echo "Nicotina";
	   }
	   else
	   if ( $_GET['farmaco'] == "he") {
		   echo "Hezametodina";
	   }
    ?>
    
    </div>
    
    <div id="v_muscular">
    
    <?
       if ( $_GET['farmaco'] == "na" ){
		   
	?>	
		<FONT>Arteria Muscular</FONT>		  
            <object width="390" height="150"><param name="movie" value=" ENDEREÇO DO ARQUIVO "></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="coracoes/ARTERIA.swf" type
    ]"application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="390" height="150"></embed></object>
	 <? 
       }
	   else
	   if ( $_GET['farmaco'] == "ad") {
		   echo "Adrenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "iso") {
		   echo "Isoprenalina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ete") {
	   	   echo "Etedrina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ab") {
		   echo "AMablogneador";
	   }
	   else
	   if ( $_GET['farmaco'] == "pr") {
		   echo "propanolol";
	   }
	   else
	   if ( $_GET['farmaco'] == "ac") {
		   echo "Acetilcolina";
	   }
	   else
	   if ( $_GET['farmaco'] == "at") {
	   	   echo "Atoprina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ne") {
		   echo "Neostigmima";
	   }
	   else
	   if ( $_GET['farmaco'] == "pi") {
		   echo "Pilocarpina";
	   }
	   else
	   if ( $_GET['farmaco'] == "ni") {
	   	   echo "Nicotina";
	   }
	   else
	   if ( $_GET['farmaco'] == "he") {
		   echo "Hezametodina";
	   }
    ?>
    
    </div>
    <form method="get" action="farmaco.php">
    <div id="menu">
     <input type="submit" value="Inetar Farmaco" />
    </div> 
   <font style="float:left; margin-left:10px;"> Escolha um farmaco: </font>
    <div id="drogas"> 
    
	<table cellspacing="10" width="1003">
      <tr>
        <td><input type="radio" name="farmaco" value="na" checked="checked"> na = Noradrenalina 20mcg </td>
        <td><input type="radio" name="farmaco" value="ad"> ad = Adrenalina 20 mcg </td>
        <td><input type="radio" name="farmaco" value="iso"> iso = Isoprenalina 20 mcg</td>
        <td><input type="radio" name="farmaco" value="ete"> ete = etedrina 5 mg</td>
      </tr>
      <tr>
        <td><input type="radio" name="farmaco" value="ab"> ab = AMablogneador</td>
        <td><input type="radio" name="farmaco" value="pr"> pr = Propranolol 10mg</td>
        <td><input type="radio" name="farmaco" value="ac"> ac = Acetilcolina 20mcg</td>
        <td><input type="radio" name="farmaco" value="at"> at = Atropina 10mg</td>
      </tr>
      <tr>
        <td><input type="radio" name="farmaco" value="ne"> ne = Neostigmima 0.5mg</td>
        <td><input type="radio" name="farmaco" value="pi"> pi = Pilocarpina 1.5mg</td>
        <td><input type="radio" name="farmaco" value="ni"> ni = Nicotina 300mg</td>
        <td><input type="radio" name="farmaco" value="he"> he = Hezametodina</td>
      </tr>
	</table>

    
    </div>
    </form>
 
    
	
</div>

<div id="rodape">
heart care : Cora&ccedil;&atilde;o Artificial.
</div>

</body>
</html>