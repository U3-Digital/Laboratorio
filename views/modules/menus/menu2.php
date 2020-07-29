<?php 
// menu para Abogados

echo "<ul>";
echo "	<li ><a href=\"inicio.php\"><div>Inicio</div></a></li>";

echo "	<li ><a href=\"#\"><div>Asuntos</div></a>";
echo "		<ul>";
echo "			<li><a href=\"newAsunto.php\"><div>Nuevo </div></a></li>";
echo "			<li><a href=\"asuntosED.php\"><div>Editar / Eliminar</div></a></li>";
echo "			<li><a href=\"#\"><div>Tareas</div></a>";
echo "				<ul>";
echo "					<li><a href=\"newTarea.php\"><div>Nueva tarea</div></a></li>";
echo "					<li><a href=\"tareasED.php\"><div>Editar / Eliminar Tarea</div></a></li>";
echo "				</ul>";
echo "			</li>";
echo "		</ul>";
echo "   </li>";

echo "	<li ><a href=\"inicio.php\"><div>Bitacora</div></a></li>";  
echo "	<li><a href=\"cerrar.php\"><div>Salir</div></a></li>";                    
echo "</ul>";

?>