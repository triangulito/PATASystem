<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>
		<a class="btn btn-primary" href="<?php echo base_url('PreRegister/Insert'); ?>">Registrar nuevo</a>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Turno de la mascota</th>
					<th>Nombre de la mascota</th>
					<th>Especie de la mascota</th>
					<th>G&eacute;nero</th>
					<th>Tel&eacute;fono</th>
					<th>Enfermedad probable de la mascota</th>
					<th>Anestesiado</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php foreach($animals as $a) { 
					echo '<tr><td>';
					echo $a->turn;
					echo '</td><td>';
					echo $a->petName;
					echo '</td><td>';
						if($a->idSpecies == 1)
					{echo 'Perro';
				} else if($a->idSpecies == 2)
					{echo 'Gato';
				} else {
					echo 'Otro';
					}
					echo '</td><td>';
					echo $a->gender;
					echo '</td><td>';
					echo $a->phone;
					echo '</td><td>';
					echo $a->sick;
					echo '</td><td>';
					echo '<input class="cbSurgery" name="' . $a->id . '" type="checkbox"/>';
					echo '</td></tr>';
					
				} ?>
			</tbody>
		</table>
	</div>
</body>

<script>
	$(function(){
		$('.cbSurgery').on('click', function(){
			var id = $(this).attr('name');
			$.ajax({ url: '<?php echo base_url('Surgery/entered');?>',
	         data: { 'entered': $(this).prop('checked') },
	         type: 'post',
	         success: function(output) {
                      alert(output);
                  }
			});
		});
	});
</script>