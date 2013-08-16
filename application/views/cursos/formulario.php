<?php 
# form_open
#el primer parametro se especifica el action
#el segundo se podria especificar una clase
echo form_open('/cursos/recibirdatos');
$nombre =	array(
			'name'			=>	'nombre',	
			'placeholder'	=>	'Escribe tu nombre'	
);
$videos =	array(
			'name'			=>	'videos',
			'placeholder'	=>	'Cantidad de videos del curso'
);
?>
<p>
<?php 
	echo form_label('Nombre','nombre');
	echo form_input($nombre); 
?>
</p>
<p>
<?php 
	echo form_label('Número de videos','videos');
	echo form_input($videos); 
?>
</p>
<?php
echo form_submit('','Subir curso');
echo form_close()."\n";
?>
</body>
</html>