<h1> Esto es la prueba</h1>
<?php echo 'Es una prueba de registro';?>
<?php echo CHtml::link('Crear Tarea',array('add'));?>
<table>
	<tr>
		<th>CI:</th>
		<th>NOMBRE:</th>
		<th>PASSWORD:</th>
                <th>VER</th>
                <th>EDITAR</th>
                <th>BORRAR</th>
	</tr>
	<?php foreach ($prueba as $t){?>
	<tr>
		<td><?php echo $t->ci;?></td>
		<td><?php echo $t->usuario;?></td>
		<td><?php echo $t->password;?></td>
		<td><?php echo CHtml::link('Ver',array('view','id'=>$t->ci));?></td>
                <td><?php echo CHtml::link('Editar',array('edit','id'=>$t->ci));?></td>
                <td><?php echo CHtml::link('Borrar',array('delete','id'=>$t->ci),array('confirm'=>'Seguro de borrar?'));?></td>
	</tr>
	<?php }?>
	
</table>

