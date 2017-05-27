<?php
class Consultas
{
	function __construct($db){
		$this->db = $db;
	}

        //////////////////********************/////////////////7
        function getComentarios(){
            //session_start();
		$query = "SELECT r.* ,CONCAT_WS(' ',p.nombre,p.apellido) nombre_persona,l.nombre nombre_lugar, c.nombre nombre_categoria
                  FROM recomendacion r 
                  INNER JOIN persona p ON p.id=r.persona_id
                  INNER JOIN lugar l ON l.id=r.lugar_id
                   INNER JOIN categoria c ON c.id=l.categoria_id "
                        . "WHERE 1 ";
		//echo $query;
                $result = $this->db->loadObjectList($query);
		if($result)
			return $result;
		else
			return false;
	    }

        /*********************************************************************************/
        
}     
$consultas= new Consultas($db);