<?php 
// menu para Becas Nivel 2
echo "<ul>"."\n";
echo "	<li ><a href=\"index.php\"><div>Inicio</div></a></li>"."\n";

echo "	<li ><a href=\"#\"><div>Becas</div></a>"."\n";
echo "		<ul>";
echo "			<li><a href=\"newBeca.php\"><div>Registrar </div></a></li>"."\n";
echo "			<li><a href=\"becasED.php\"><div>Editar / Eliminar</div></a></li>"."\n";
echo "		</ul>"."\n";
echo "   </li>"."\n";

echo "	<li ><a href=\"reporteBecas.php\"><div>Listados</div></a></li>"."\n";  
echo "	<li><a href=\"views/modules/salir.php\"><div>Salir</div></a></li>"."\n"; 
echo "</ul>"."\n";

?>