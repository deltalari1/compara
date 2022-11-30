<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content rounded-0 border-0">
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="container-fluid">
						<div class="row mb-3">
							<div class="col-6">
								<select class="form-select fw-bold">
									<option class="fw-bold" selected required>Selecionar categoria</option>
									<?php include_once "categorias.php";?>
								</select>
							</div>
							<div class="col-6">
								<select class="form-select fw-bold">
									<option selected required>Selecionar loja</option>
										<?php include_once "lojas.php";?>
									<option class="fw-bold fst-italic">+ Adicionar loja</option>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col">
								<div class="input-group">
									<textarea class="form-control" placeholder="Ouviu falar de alguma promoção?"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="input-group">
  								<span class="input-group-text">R$</span>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary fw-bold rounded-0" data-bs-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-danger botao-vermelho fw-bold">Publicar</button>
			</div>
		</div>
	</div>
</div>