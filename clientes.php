<!------------ Selecionar Dados da Base de Dados Alteração 1 -------------------->
<?php  
 $connect = mysqli_connect("localhost", "root1", "26X7Wp6XvODSCOq8LsqU", "form3");
 $connect->query("SET NAMES utf8");
    
 $query = "SELECT * FROM clientes";  
 $result = mysqli_query($connect, $query);
 ?>
<!------------ Selecionar Dados da Base de Dados Alteração 1 -------------------->

<!DOCTYPE html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<html lang="pt-PT">
<head>
<title>InforMadeira</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Loja de Informatica com bons preços" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/meu.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- countdown -->
<!-- //js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script language="javascript">
function validar() {
var email = form1.email.value;
var nome = form1.nome.value; //form1 é o nome do formulário

if (nome == "") {
alert('Preencha o campo com o seu nome');
form1.nome.focus(); 
return false; }
if (email ==""){
	alert('Preencha O email');
	form1.email.focus();
	return false;
}

}
</script>

<!-- //end-smooth-scrolling -->
</head>

<body>
<!-- for bootstrap working --> 
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script> 
<!-- //for bootstrap working --> 
<!-- header -->
<div class="header" id="home1">
  <div class="container">
    <div class="w3l_logo">
      <h1><a href="index.html">Informadeira<span>A Sua loja informatica em conta</span></a></h1>
    </div>
    
   
  </div>
</div>
<!-- //header --> 
<!-- navigation -->
<div class="navigation">
  <div class="container">
    <nav class="navbar navbar-default"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header nav_2">
        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Inicio</a></li>
          <!-- Mega Menu -->
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
              <div class="row">
                <div class="col-sm-3">
                  <ul class="multi-column-dropdown">
                    <h6>Accessories</h6>
                      <li><a href="products1.html">Impressoras</a></li>
                      <li><a href="products2.html">Scanners</a></li>
                      <li><a href="products3.html">Computadores</a></li>
                  </ul>
                </div>
             
                <div class="clearfix"></div>
              </div>
            </ul>
          </li>
          <li><a href="about.html">sobre nos</a></li>
        
          <li><a href="clientes.php" class="act">Clientes</a></li>
          <li><a href="mail.html">Contactos</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<!-- //navigation -->

<div class="container">
  <div class="row">
    <div class="col-lg-6"> 
     <!------------ Selecionar Dados da Base de Dados Alteração 2 -------------------->
  				<h1>AVALIAÇÕES</h1>
                              <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="20%">Nome</th>  
                               <th width="55%">Comentario</th>
                               <th width="25%">avaliacao</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["nome"]; ?></td> 
                               <td><?php echo $row["avaliacao"]; ?></td> 
                               <td><?php echo $row["comentario"]; ?></td>
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div> 
<!------------ Selecionar Dados da Base de Dados Alteração 2 -------------------->

    </div>
    <div class="col-lg-6">
      <h1>Por favor deixe a sua avaliação </h1>
      <form id="form1" action="insere.php" method="post">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome" placeholder="nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="assunto">Assunto</label>
          <input type="text" name="assunto" class="form-control" id="assunto" placeholder="nome">
        </div>
        <div class="form-group">
          <label for="comentario">Comentario</label>
          <textarea class="form-control" name="comentario" id="avaliacao" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="avaliacao">Comentario</label>
          <select class="form-control" name="avaliacao">
            <option> Muito mau -1 Estrela </option>
            <option> Mau - 2 estrelas </option>
            <option> Suficiente - 3 estrelas </option>
            <option> Bom - 4 Estrelas</option>
            <option> Excelente - 5 estrelas </option>
          </select>
        </div>
        <button type="submit" class="btn btn-default" onClick="return validar()">Submeter</button>
      </form>
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="w3_footer_grids">
      <div class="col-md-3 w3_footer_grid">
        <h3>Contactos</h3>
        <p>Contacte-nos facilemte na nossa loja ou por telefone/email</p>
        <ul class="address">
          <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Rua João de Deus, n.º 9, <span>Funchal.</span></li>
          <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:site@site.com">site@site.com</a></li>
          <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Informação</h3>
        <ul class="info">
          <li><a href="about.html">Sobre nos</a></li>
          <li><a href="mail.html">Contactos</a></li>
          <li><a href="products1.html">Produtos</a></li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Categoria</h3>
        <ul class="info">
                      <li><a href="products1.html">Impressoras</a></li>
                      <li><a href="products2.html">Scanners</a></li>
                      <li><a href="products3.html">Computadores</a></li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Loja</h3>
        <ul class="info">
          <li><a href="index.html">Pagina inicial</a></li>
          <li><a href="products1.html">Produtos</a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="footer-copy">
    <div class="footer-copy1">
      <div class="footer-copy-pos"> <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a> </div>
    </div>
    <div class="container">
      <p>&copy; Informadera, todos os direitos reservados</p>
    </div>
  </div>
</div>
<!-- //footer -->

</body>
</html>
<!------------ Selecionar Dados da Base de Dados Alteração 3 -------------------->

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Detalhes dos Clientes</h4>  
                </div>  
                <div class="modal-body" id="cliente_detalhe">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var cliente_id = $(this).attr("id");  
           $.ajax({  
                url:"seleciona.php",  
                method:"post",  
                data:{cliente_id:cliente_id},  
                success:function(data){  
                     $('#cliente_detalhe').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
 
<!------------ Selecionar Dados da Base de Dados Alteração 3 -------------------->
