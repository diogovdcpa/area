<h1>Áreas da figuras geométricas</h1>
<fieldset>
	<legend>Calculo</legend>
	<form action="<?php echo URL_BASE . "area/calcula" ?>" method="POST">
		<label class="col-4">
			<small>Nome</small>
			<select name="figura">
				<option value="quadrado" <?php if($figura=="quadrado"){echo "selected";} ?> >Quadrado</option>
				<option value="retangulo" <?php if($figura=="retangulo"){echo "selected";} ?> >Retângulo</option>
				<option value="triangulo" <?php if($figura=="triangulo"){echo "selected";} ?> >Triângulo</option>
				<option value="circulo" <?php if($figura=="circulo"){echo "selected";} ?> >Circulo</option>
			</select>
		</label>

		<label class="col">
			<small>Base</small>
			<input type="text" name="base" value="<?php echo isset($base) ? $base : 0; ?>" placeholder="Digite aqui">
		</label>
		<label class="col">
			<small>Altura</small>
			<input type="text" name="altura" value="<?php echo isset($altura) ? $altura : 0; ?>"  placeholder="Digite aqui">
		</label>
		<label class="col">
			<small>Raio</small>
			<input type="text" name="raio" value="<?php echo isset($raio) ? $raio : 0; ?>"  placeholder="Digite aqui">
		</label>
		<div class="col-12">
			<input type="submit" value="calcular">
		</div>
	</form>

	<?php if (isset($area)) { ?>
		<fieldset class="alt">
			<legend>Resultado</legend>
			<div class="centralizar"><img src="<?php echo ASSETS."img/".$figura.".png"?>"></div>
			<h5>Área do <?php echo isset($figura) ? $figura : 0; ?> é área = <b><?php echo isset($formula) ? $formula : 0; ?> = <?php echo isset($area) ? $area : 0; ?></b></h5>
		</fieldset>
	<?php } ?>

</fieldset>