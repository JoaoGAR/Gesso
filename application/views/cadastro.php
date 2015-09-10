<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lista</title>
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css");?>">
</head>
<?= $this->load->view("nav"); ?>
<body>
	<div class="container" id="formularioCadastro" style="backgound-color">
		<div class="col-md-offset-1">
			<?php echo form_open("gesseiro/novo");?>
			<fieldset>
				<!-- Form Name -->
				<legend>Cadastro de Gesseiro</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-1 control-label" for="nome">Nome:</label>  
					<div class="col-md-10">
						<input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-1 control-label" for="telefoneA">Telefone¹:</label>  
					<div class="col-md-10">
						<input id="telefoneA" name="telefoneA" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-1 control-label" for="telefoneB">Telefone²:</label>  
					<div class="col-md-10">
						<input id="telefoneB" name="telefoneB" type="text" placeholder="" class="form-control input-md">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-1 control-label" for="telefoneC">Telefone³:</label>  
					<div class="col-md-10">
						<input id="telefoneC" name="telefoneC" type="text" placeholder="" class="form-control input-md">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-1 control-label" for="endereco">Endereço:</label>  
					<div class="col-md-10">
						<input id="endereco" name="endereco" type="text" placeholder="" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-1 control-label" for="descricao">Descrição:</label>
					<div class="col-md-10">                     
						<textarea class="form-control" id="descricao" name="descricao">Digite aqui o que você faz, seus preços e o que achar relevante</textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-1 control-label" for="cadastrar"></label>
					<div class="col-md-5">
						<button id="cadastrar" name="cadastrar" class="btn btn-success form-control">Cadastrar</button>
					</div>
				</div>
			</fieldset>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>