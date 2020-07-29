<?php 
echo "<ul>";
echo "	<li ><a href=\"inicio.php\"><div>Inicio</div></a></li>";

echo "	<li ><a href=\"#\"><div>Bitacora</div></a>";
echo "				<ul>";
echo "					<li><a href=\"newBitacora.php\"><div>Nueva </div></a></li>";
echo "					<li><a href=\"bitacorasED.php\"><div>Editar / Eliminar</div></a></li>";
echo "					<li><a href=\"#\"><div>Actividades de Bitacora </div></a>";
echo "						<ul>";
echo "							<li><a href=\"newActividad.php\"><div>Nueva Actividad</div></a></li>";
echo "							<li><a href=\"actividadesED.php\"><div>Editar / Eliminar Actividad</div></a></li>";
echo "						</ul>";
echo "                  </li>";
echo "				</ul>";
echo "</li>";
 
echo "	<li><a href=\"cerrar.php\"><div>Salir</div></a></li>";                    
echo "</ul>";

?>