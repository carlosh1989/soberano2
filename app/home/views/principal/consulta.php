<div class="container">
	<div class="card-panel">
		<h5 class="red-text"><i class="fa fa-search-plus"></i> CONSULTA DE SOLICITUD</h5>
		<br>
		<form action="<?php echo baseUrl ?>home/principal/consulta" method="POST" class="col s12">
		<?php echo Token::field() ?>
			<div class="row">
				<div class="input-field col s6 m3">
					<i class="fa fa-barcode red-text prefix"></i>
					<input name="cod" id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">CODIGO SOLICITUD</label>
				</div>
				<div class="input-field col s6 m3">
					<i class="fa fa-user red-text prefix"></i>
					<input name="cedula" id="icon_telephone" type="tel" class="validate">
					<label for="icon_telephone">CEDULA SOLICITANTE</label>
				</div>
				<div class="input-field col s6 m3">
					<button class="btn waves-effect waves-light red" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
			<?php if (isset($solicitud) and $solicitud): ?>
				<?php Arr($solicitud); ?>
			<?php else: ?>
				no hay solicitud
			<?php endif ?>
		</form>
	</div>
</div>