 <?php
$uid=$_GET['uid'];

 
 mysql_connect("mysql01.romeuprofessor.com.br", "wativa7", "aluno1a1b1c") or die(mysql_error()); 
 mysql_select_db("wativa7") or die(mysql_error()); 
 
 $data = mysql_query("SELECT * FROM Usuarios WHERE id = '$uid'") 
 or die(mysql_error()); 
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

 while($info1 = mysql_fetch_array( $data )) 
 {
 $userid=$info1['id']; 
 $userrep=$info1['reputacao'];
 $usernome=$info1['nome'];
 $usersobre=$info1['sobrenome'];
  
 }
 ?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<head>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />

<link rel='stylesheet' type='text/css' href='ep.css' />


<title> Giovanna Azevedo - Role No Ibirapuera </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(
    function() {
        $("#messnew").click(function() {
            $("#messbox").toggle();
            $("#frbox").slideUp("fast");
        });
    });
</script>

<script type="text/javascript">
$(document).ready(
    function() {
        $("#frnew").click(function() {
            $("#frbox").toggle();
			$("#messbox").slideUp("fast");
        });
    });
</script>


<script type="text/javascript">
$(document).ready(
    function() {
        $("#hovv").click(function() {
            $("#menuop").toggle();
        });
    });
</script>


<script type="text/javascript">
		$(document).ready(
    	function() {
      		$("#comm").click(function() {
            	$("#meio2").toggle();

        	});
    	});
</script>
<script type="text/javascript">
		$(document).ready(
    	function() {
      		$("#comm1").click(function() {
            	$("#meio2").toggle();
        	});
    	});
</script>
<script type="text/javascript">
		$(document).ready(
    	function() {
      		$("#compartilhar").click(function() {
            	$("#all").toggle();
            	$("#meio3").toggle();
        	});
    	});
</script>
<script type="text/javascript">
		$(document).ready(
    	function() {
      		$("#all").click(function() {
            	$("#all").toggle();
            	$("#meio3").toggle();
        	});
    	});
</script>
<script type="text/javascript">
$(document).ready(
    function() {
        $("#friends").click(function() {
            $("#friendsmenu").slideToggle("fast");
        });
    });
</script>
</head>
<?php
$rep="Logos/1stars.png";
if($userrep>=85){
$rep="Logos/5stars.png";
}
else if($userrep>=65&&$info['reputacao']<85){
$rep="Logos/4stars.png";
}
else if($userrep>=45&&$info['reputacao']<65){
$rep="Logos/3stars.png";
}
else if($userrep>=25&&$info['reputacao']<45){
$rep="Logos/2stars.png";
}
else if($userrep>=1&&$info['reputacao']<25){
$rep="Logos/1stars.png";
}
else if($userrep==0){
$rep="Logos/1starst.png";
}

?>

<body>
<div id="all" align="center">
</div>

<div id="main">


	<div id="header" align="center">
    
    <div id="homebt" align="center">
    <a href="valida.php"><img src="componentes/home.png" height="100%" width="100%" ></a>
    </div>
    <div id="searchbt" align="center">
    <form>
    	<input type="text" id="box" name="search" maxlength="40"  placeholder="Buscar Eventos" required autocomplete="off" >
    </form> 
    </div>
    
    <div id="messnew1" align="left">
    <div id="messnew">
    <img id="messagenew" src="componentes/messagenew.png" height="26px" width="26px" />
    </div>
    <div id="messbox" align="center">
	    <div id='notmess1' align='center'>
    		<div id='convpic1' align='center'><img src='eventos/ibira.jpg' width='100%' height='100%'></div>
   			<div id='convnome1' align='left'>  Role no Ibirapuera  </div>
        	<div id='convtext1' align="left"> Convidado por Giovanna Azevedo.. </div>
        	<a href='#'><div id='convaceita1' align='center'>Aceitar</a></div>
            <a href='##'><div id='convrecusa1' align='center'>Rejeitar</a></div>
        </div>
    </div>
    </div>
    
    <div id="frnew1" align="left">
    <div id="frnew">
    <img id="friendnew" src="componentes/friendicon.png" height="30px" width="30px" />
    </div>
    <div id="frbox" align="center">
	    <div id='notmess' align='center'>
    		<div id='convpic' align='center'><img src='perfil/doracampanella.jpg' width='100%' height='100%'></div>
   			<div id='convnome' align='left'>  Dora Campanella  </div>
        	<p id='convtext'> Quer te adicionar como amigo.. </p>
        	<a href='#'><div id='convaceita' align='center'>Aceitar</a></div>
            <a href='##'><div id='convrecusa' align='center'>Recusar</a></div>
        </div>
    </div>
    </div>
   
    
    <div id="hovv"> 
    <div id="menuop" align="left">
    <a href="conta.php"> <p class="menuitem">Minha Conta</p></a>
    <a href="config.php"><p class="menuitem">Configurações</p></a>
    <a href="CreateEventPage.php"><p class="menuitem">Criar Evento</p></a>
    <a href="contato.php"><p class="menuitem">Entre em Contato</p></a>
    <a href="Index.php"><p class="menuitem"><b>Logout</b></p></a>
    </div>
    </div>
    
	<div id="configbt" align="center">
    <img src="componentes/config.png" height="56%" width="56%" style="margin-top:9px;"/>
    </div>
    
     
       
         
  </div>
   <!--Menu-->
    
  
         
	</div>
    
    
    
	<div id="wrap" align="center">
    
    	<!--Parte da esquerda-->
		<div id="pl" align="center">
          
            <!--Suas Informações-->
        	<div id="profpic" align="center">
       			<img src="perfil/profpic.jpg" height="100%" width="100%">
        	</div> 
        	<div id="info" align="center">
        		<p id="profinfo"><b> <?php echo "$usernome $usersobre" ?></b> </p>
        		<p id="profinfo2"> 342 amigos </p>
                <div id="classif">
                	<img src="<?php echo $rep ?>" height="100%" width="100%">
                </div>
       		</div>
            <!--Suas Informações-->


            <!--Usuários que você segue-->
            
<?php
 mysql_connect("mysql01.romeuprofessor.com.br", "wativa7", "aluno1a1b1c") or die(mysql_error()); 
 mysql_select_db("wativa7") or die(mysql_error()); 
 $idusu=$uid;
 $cmd="SELECT * FROM Inscricoes$idusu";
 $cmdinscri = mysql_query($cmd) 
 or die(mysql_error());
 mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
$qtdinsc = mysql_num_rows($cmdinscri);
?>

            <!--Usu⳩os que vocꡳegue-->
            <p class="subt"><?php echo "Seguindo ($qtdinsc)"?></p>
            <div id="scrol" align="center">
            <div id="subs" align="center">
            <?php
 mysql_connect("mysql01.romeuprofessor.com.br", "wativa7", "aluno1a1b1c") or die(mysql_error()); 
 mysql_select_db("wativa7") or die(mysql_error()); 
 $idusu=$uid;
 $cmd="SELECT * FROM Inscricoes$idusu";
 $cmdinscri = mysql_query($cmd) 
 or die(mysql_error());
 mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
$varilimit=0;
while($inscricoes = mysql_fetch_array( $cmdinscri )) 
  {
  $varilimit=$varilimit+1;
  $inscricoesid[$varilimit] = $inscricoes['id_usuario'];
  $id_usu=$inscricoes['id_usuario'];
  $cmd2="SELECT * FROM Usuarios WHERE id='$id_usu'";
 $getnome = mysql_query($cmd2) 
 or die(mysql_error());
 mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
 while($nomes = mysql_fetch_array( $getnome )) 
  {
    $ididid=$nomes['id'];
	$nome = $nomes['nome'];
	$snome = $nomes['sobrenome'];
	$nome = "$nome $snome";
  }
 echo                     "<div class='insc' align='center'>" 
            ,"<div class='inscpic' align='center'>"
            ,"<img src='' height='100%' width='100%'>"
           ,"</div>"
            ,"<a target='_blank' href='profilepage.php?uid=$idusu&profid=$ididid/'><span class='inscname'> $nome</span></a>"
            ,"</div>";

 }
?>
            </div>
            </div>
            <!--Usuários que você segue-->
       		</div>
            <!--Parte da esquerda-->
            
            <!--Meio-->
            <div id='meio' align='center'>
            
            <!--Area de Comentarios-->
            <div id="meio2" align="center">
            	<div id="comm1" align="center">
            		<img src="componentes/comentariov.png" height="100%" width="100%">
            	</div> 
            	<p id='meiotit1'> Comentários </p>
                <div id="comments" align="center">
                	<div id="estrutura" align="center">
                
                		<div id='post' align='center'>
                			<div id='comprofpic' align='center'><a href='profilepage.php'><img src='perfil/victoriakaori.jpg' height='100%' width='100%'></a></div>
                			<p id='comnome'> <a href='profilepage.php'>Victória Kaori</a> </p>
                            <p id='horario'>  17:38 ~</p>
                			<p id='data'> 28/09/2014 </p>
                			<p id='comcom' align='justify'> Este é o meu comentario!!! Teste Maroto!!! Muy bien!  </p>
                		</div>
                        <div id='post' align='center'>
                			<div id='comprofpic' align='center'><a href='profilepage.php'><img src='perfil/victoriakaori.jpg' height='100%' width='100%'></a></div>
                			<p id='comnome'> <a href='profilepage.php'>Victória Kaori</a> </p>
                            <p id='horario'>  17:38 ~</p>
                			<p id='data'> 28/09/2014 </p>
                			<p id='comcom' align='justify'> Este é o meu comentario!!! Teste Maroto!!! Muy bien!  </p>
                		</div>
                
                	</div>
               	</div>
                <div id="commenting" align="center">
                	<form onSubmit="send_comentario.php">
                        <input type="image" src="componentes/arrow1.png" value="Comentar" action="comentar.php" onsubmit="comentar.php" id="arrowbt" required>       
                		<textarea onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" id="comment" name="comentario" placeholder="Comente sobre o evento..."></textarea>
                	</form>
               	</div>
			</div>
            <!--Area de Comentarios-->
        <?php
		mysql_connect("mysql01.romeuprofessor.com.br", "wativa7", "aluno1a1b1c") or die(mysql_error()); 
		mysql_select_db("wativa7") or die(mysql_error()); 
		$id=$_REQUEST['evid'];
		$evnt = mysql_query("SELECT * FROM Eventos WHERE id = '$id'")
		or die(mysql_error());
		while($eventos = mysql_fetch_array( $evnt )) 
		{
		$evntid=$eventos['id'];
		$enome=$eventos['Nome'];
		$edes=$eventos['Descricao'];
		$eloca=$eventos['Localizacao'];		
		$edia=$eventos['dia'];
		$emes=$eventos['mes'];
		$eano=$eventos['ano'];
		$epriv=$eventos['privacidade'];
		$eidade=$eventos['idade'];
		$esexo=$eventos['sexo'];
		$epreco=$eventos['preco'];
		$eidcria=$eventos['id_criador'];
		}
		?>
		
		            <!--Area de Convites-->
            <div id="meio3" align="center">
            <p id="meio3tit"> Convidar Amigos </p>
           	<div id="estrutura1" align="center">
            <iframe id="estrutura1i" align="middle" name="contente"> </iframe>
            </div>
            </div>
            <!--Area de Convites-->
            
    		<p id='meiotit'> <?php echo $enome ?> </p>
            <div id="comm" align="center">
            <img src="componentes/comentariop.png" height="100%" width="100%">
            </div> 
            
            	<div id="a" align="center">
            	<div id="x" align="center">
            	<img src="perfil/giovannaazevedo.jpg" height="100%" width="100%">
            	</div> 
            	</div>
            	<div id="nomecr" align="left">
				<a href="profilepage.php"><p id="nomecr1"> <?php echo $eidcria ?></p></a>
            	</div>
            	<div id="evcr" align="left">
				<p id="evcr1"> 13 eventos</p>
            	</div>
            	<div id="repcr" align="left">
				<img src="componentes/3starshalf.png" height="100%" width="100%">
            	</div>
            	</div>
			
            <div id="b" align="center">
            <img id="evimg" src="<?php echo $evntid ?>.jpg" height="100%" width="100%">
            </div>
            
            	
            	<div id="c" align="justify">
                <p id="endc"> Endereço: <br> </p> <p id="end1c"> <?php echo $eloca ?> </p>
                <p id="pric"> Privacidade: <br> </p> <p id="pri1c"> <?php echo $epriv ?> </p>
                <p id="clac"> Classificação Indicativa: <br> </p> <p id="cla1c"> <?php echo $eidade ?> </p>
                <p id="genc"> Genero: <br> </p> <p id="gen1c"> <?php echo $esexo ?> </p>
                <p id="prec"> Custo: <br> </p> <p id="pre1c"> <?php echo $epreco ?> </p>
                <p id="dat1c"> <?php echo "$edia/$emes/$eano" ?> </p>
				<a href="convidarevento.php" target="contente"><div id="compartilhar" align="center"><p class="tett">Convidar</p></div></a>
                <a href="participar.php?evid=<?php echo $evid ?>&uid=<?php echo $uid ?>"><div id="participar" align="center"><p class="tett">Participar</p></div></a>
                
            
            
            
            

            
            
            </div>
			<div id="d" align="justify">
			<p id="descev"> <?php echo $edes ?> </p>
            </div>
			
                        <div id="friends" align="center">
            <div id="fake"></div>
            <p id="friendstit" align="center">Amigos(12)</p>
            
            </div>
            <div id="friendsmenu" align="center">
            <div id="lista" align="center">
            
            <div id='amigo' align='center'>
            	<div id='amigopic' align='center'><img src='perfil/giovannaazevedo.jpg' height='100%' width='100%'></div>
           		<div id='amigonome' align='left'>Giovanna Azevedo</div>
                <!--<div id='amigoonline' align='center'><img src='componentes/onlineball.png' height='100%' width='100%'></div>-->
            	<div id='amigofake' align='center'></div>
            </div>
            
            <div id='amigo' align='center'>
            	<div id='amigopic' align='center'><img src='perfil/thabatamorilla.jpg' height='100%' width='100%'></div>
           		<div id='amigonome' align='left'>Thabata Morilla</div>
                <div id='amigofake' align='center'></div>

            </div>
            
            <div id='amigo' align='center'>
            	<div id='amigopic' align='center'><img src='perfil/victoriakaori.jpg' height='100%' width='100%'></div>
           		<div id='amigonome' align='left'>Victória Kaori</div>
                <!--<div id='amigoonline' align='center'><img src='componentes/onlineball.png' height='100%' width='100%'></div>-->
            	<div id='amigofake' align='center'></div>
            </div>
            
            <div id='amigo' align='center'>
            	<div id='amigopic' align='center'><img src='perfil/yasmin.jpg' height='100%' width='100%'></div>
           		<div id='amigonome' align='left'>Yasmin Waldorf</div>
            	<div id='amigofake' align='center'></div>
            </div>
            <!--Meio-->
			
		
        
        </div>
        
      
                    <form action="buscarpessoa.php" method="post">
            <input type="text" name="searchamigo" id="boxx" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }  maxlength="50" placeholder="Buscar pessoas" autocomplete="off">
            </form>
            
            
            </div>
        
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	</div>
</div>


</body>


</html>
