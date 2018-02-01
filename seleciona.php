<?php  
 if(isset($_POST["cliente_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "1234", "form3"); 
	  $connect->query("SET NAMES utf8");
      $query = "SELECT * FROM clientes WHERE id = '".$_POST["cliente_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Nome</label></td>  
                     <td width="70%">'.$row["nome"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Assunto</label></td>  
                     <td width="70%">'.$row["assunto"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Avaliação</label></td>  
                     <td width="70%">'.$row["avaliacao"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Comentário</label></td>  
                     <td width="70%">'.$row["comentario"].'</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
