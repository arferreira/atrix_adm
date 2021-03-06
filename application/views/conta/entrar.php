<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Atrix - Área Restrita - V 1.17</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('signin.css'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
    	<div class="row">

    			<div class="page-header">
					  <h1>ATRIX <small>Administração Militar</small></h1>
					  <hr />
					</div>

    	<div class="col-md-4 col-md-offset-4">
    		<br />

    		<?php if($alerta != null) { ?>
    		<div class="alert alert-<?php echo $alerta['class']; ?>">
    			<?php echo $alerta["mensagem"]; ?>
    		</div>
    		<?php } ?>

				<form action="<?php echo base_url('conta/entrar'); ?>" method="post">
				<input type="hidden" name="captcha">
				  <div class="form-group">
				    <label for="email">Saram</label>
				    <input type="text" name="saram" value="<?php echo set_value('saram');  ?>" class="form-control" id="exampleInputEmail1" placeholder="Saram">
				  </div>
				  <div class="form-group">
				    <label for="senha">Senha</label>
				    <input type="password" name="senha" value="<?php echo set_value('senha'); ?>" class="form-control" id="exampleInputPassword1" placeholder="Senha">
				  </div>
				  
				 
				  <button type="submit" class="btn btn-success pull-right" name="entrar" value="entrar">Acessar conta</button>
				</form>


    	</div>
    	</div>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>