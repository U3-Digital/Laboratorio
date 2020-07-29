<?php 
// menu para Administrador

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
echo "  </li>";

echo "	<li ><a href=\"\"><div>Catalogos</div></a>";
echo "	  <ul>";
echo "			<li><a href=\"\"><div>Usuarios </div></a>";
echo "				<ul>";
echo "					<li><a href=\"newUsuario.php\"><div>Nuevo </div></a></li>";
echo "					<li><a href=\"usuariosED.php\"><div>Editar / Eliminar</div></a></li>";
echo "				</ul>";
echo "			</li>";

echo "			<li><a href=\"\"><div>Organo </div></a>";
echo "				<ul>";
echo "					<li><a href=\"newOrgano.php\"><div>Nuevo </div></a></li>";
echo "					<li><a href=\"organosED.php\"><div>Editar / Eliminar</div></a></li>";
echo "				</ul>";
echo "			</li>";

echo "			<li><a href=\"\"><div>Tipo </div></a>";
echo "				<ul>";
echo "					<li><a href=\"newTipo.php\"><div>Nuevo </div></a></li>";
echo "					<li><a href=\"tiposED.php\"><div>Editar / Eliminar</div></a></li>";
echo "				</ul>";
echo "			</li>";
echo "     </ul>";
echo "	</li>";

echo "	<li><a href=\"views/modules/salir.php\"><div>Salir</div></a></li>"; 

echo "</ul>";                 
?>
