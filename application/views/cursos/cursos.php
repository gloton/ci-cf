<ul>


<?php
	foreach ($cursos->result() as $cursos) {
?>	
		<li><?php echo $cursos->nombreCurso; ?></li>		
<?php
	}
?>
</ul>
</body>
</html>