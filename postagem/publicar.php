<?php
		require_once("enviar.php");
?>
<link rel="stylesheet" type="text/css" href="C:\xampps\htdocs\compara\postagem\styleinput.css">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content rounded-0 border-0">
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="container-fluid">
						<div class="row mb-3">
							<div class="col-6">
								<select name="categoria" id="categoria" class="form-select fw-bold">
									<option class="fw-bold" selected required>Selecionar categoria</option>
									<?php include_once "categorias.php";?>
								</select>
							</div>
							<div class="col-6">
								<select name="loja" id="loja" class="form-select fw-bold">
									<option selected required>Selecionar loja</option>
										<?php include_once "lojas.php";?>
									<option class="fw-bold fst-italic">+ Adicionar loja</option>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<div class="input-group">
									<textarea name="descricao" id="descricao" class="form-control" placeholder="Ouviu falar de alguma promoção?"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="input-group">
  								<span class="input-group-text">R$</span>
								<input name="preco" id="preco" type="text" class="form-control">
							</div>
						</div>
						<div class="row">
							<label for= "imagem"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
  							<path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
 							 <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
							</svg></label>
							<input name="imagem" id="imagem" type="file" display="none" >
						</div>
					</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary fw-bold rounded-0" data-bs-dismiss="modal">Cancelar</button>
				<button type="submit" name="enviar" value="Enviar" class="btn btn-danger botao-vermelho fw-bold">Publicar</button>
			</div>
		</div>
		</form>
	</div>
</div>