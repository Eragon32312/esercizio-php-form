<?php

	$nome = (isset($_POST['exampleInputNome'])) ? $_POST['exampleInputNome'] : '';
	
	$cognome = (isset($_POST['exampleInputcogome'])) ? $_POST['exampleInputcogome'] : '';
	
	$Emailaddress = (isset($_POST['exampleInputEmail1'])) ? $_POST['exampleInputEmail1'] : '';
	

?>


<body>

	<div class="container">
		
		<?php if ($nome == ''): ?> 
    	<div class="alert alert-danger" role="alert">Manca nome </div>
    	<?php else: ?>
    	<div class="alert alert-success" role="alert">Nome insrito</div>
    	<?php endif; ?>

	</div>		
	<div class="container">
		<div class="alert alert-primary" role="alert">
			<ul>
				<?php
				foreach ($_POST as $key => $value) {
			 	print '<li>' . $key . ':' . $value . '</li>' ;
				}
				?>
			</ul>
		</div>
	</div>
	
</body>


<!doctype html>
<html lang="en">
	<head>
		    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <form action= "index.php" method="post">


     	<div class="container">
     		<form action= "index.php" method="post">
	  <form>
 	 	<div class="form-group">
	    <label for="exampleInputNome1">Nome</label>
	    <input type="text" name="exampleInputNome" class="form-control" id="exampleInputNome" aria-describedby="text" placeholder="Nome">
	    <small id="NomeHelp" class="form-text text-muted">Nome.</small>
 	  </div>
 	  </div>

<div class="container">
	<form action= "index.php" method="post">
 	  <div class="form-group">
  	  <label for="exampleInputcogome1">cognome</label>
	    <input type="cognome" name="exampleInputcogome" class="form-control" id="exampleInputcogome" aria-describedby="cognomeHelp" placeholder="cognome">
 	   <small id="cognomeHelp" class="form-text text-muted">Cognome.</small>
	  </div>  
	  </div>
	 
	 <div class="container">
	 	<form action= "index.php" method="post">
	   	  <div class="form-group">
   			 <label for="exampleInputEmail">Emailaddress</label>
				<input type="email" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" 	aria-describedby="emailHelp" placeholder="Enter email">
    		<small id="emailHelp" class="form-text text-muted">la tua email deve contenere la @</small>
 		 </div>
 	 </div>


		<div class="container">
		  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Example textarea</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
 	 </div>
	</div>


	<div class="container">
	  <div class="form-group form-check">
 	   <input type="checkbox" class="form-check-input" id="exampleCheck1">
	   <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</div>

	</form>	 

	 




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>