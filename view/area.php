	
	<main>

		<section id="tabelaArea">
			<div class="container">
				
				<?php if(isset($msg)) echo "<strong class='text-$erro'>$msg</strong>"; ?>

				<form class="form-group" method="post">
					<input class="form-control" placeholder="Assunto" type="text" name="area">
					<button class="btn btn-primary" type="submit">Cadastrar</button>
				</form>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-left">#</th>
							<th class="text-center">Área</th>
							<th class="text-right">Controle</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach($areas as $key => $value) {?>

								<tr>
									<td class='text-left'><?php echo $key ?></td>
									<td class='text-center'><?php echo $value ?></td>
									<td class='text-right'> 
										<a href="area-edit.php?edit=<?php echo $key ?>&oldArea=<?php echo $value ?>"><i class='fa fa-pencil' aria-hidden='true'></i></a> 
										<a href="?del=<?php echo $key ?>"><i class='fa fa-times' aria-hidden='true'></i></a> 
									</td>
								</tr>

						<?php }	?>

					</tbody>
				</table>
			</div>
		</section>

	</main>