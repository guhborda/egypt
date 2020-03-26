<?php

    include 'classes/Conexao.class.php';
	class Estoque
	{
		public function mostrar()
		{
			
            $con = new Conexao();
            $sql = "SELECT * FROM cliente ORDER BY nome ASC";
            $result = $con->query($sql);
            $resultados = array();
			while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum pruduto no estoque!");
			}
			
			return $resultados;
		}
    }
    
?>