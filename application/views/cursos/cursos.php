<ul>


<?php
	foreach ($cursos->result() as $curso) {
?>	
		<li><?php echo $curso->nombreCurso; ?></li>		
<?php
	}
?>
</ul>
</body>
</html>