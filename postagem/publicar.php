<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content rounded-0 border-0">
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="container-fluid">
						<div class="row mb-3">
							<div class="col-6">
								<select class="form-select fw-bold rounded-0" name="categoria" required>
									<option>Selecionar categoria</option>
									<?php include_once "categorias.php";?>
								</select>
							</div>
							<div class="col-6">
								<select class="form-select fw-bold rounded-0" name="loja" required>
									<option>Selecionar loja</option>
										<?php include_once "lojas.php";?>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<div class="input-group">
									<textarea class="form-control rounded-0" placeholder="Ouviu falar de alguma promoção?" name="descricao"></textarea>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="input-group">
  								<span class="input-group-text rounded-0">R$</span>
								<input type="text" class="form-control rounded-0" name="preco">
							</div>
						</div>
						<div class="row text-end">
							<label for="upload">
								<i class="bi bi-camera-fill fa-lg"></i>
							</label>
							<input name="imagem" id="upload" type="file">		
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary fw-bold rounded-0" data-bs-dismiss="modal">Cancelar</button>
				<input class="btn botao-vermelho btn-danger fw-bold" type="submit" name="enviar" value="Publicar">
				<div><?php require_once "enviar.php";?></div>
			</div>
			</form>
		</div>
	</div>
</div>

