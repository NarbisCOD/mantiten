<?php

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 1 CONDICION /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	--------------------------------------------------------------------------------------------- */
class Modelo1Condicion{

	static public function Mdl1Condicion($tabla, $item, $valor){
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}		
		$stmt-> close();
		$stmt = null;
	}

	static public function Mdl1CondicionFA($tabla, $item, $valor){
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetchAll();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}		
		$stmt-> close();
		$stmt = null;
	}

	/* - Para un for each con "ordenar" - 1 condicion */
	static public function Mdl1CondicionFAobtm($tabla, $ordenar, $item, $valor, $base, $tope, $modo){
		if($item != null){
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $ordenar $modo LIMIT $base, $tope");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetchAll();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}		
		$stmt-> close();
		$stmt = null;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 2 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
    --------------------------------------------------------------------------------------------- */
class Modelo2Condiciones{

    static public function Mdl2Condiciones($tabla, $item, $valor, $item2, $valor2){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl2CondicionesFA($tabla, $item, $valor, $item2, $valor2){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    /* ----------------- Condicion 2 sea diferente a... ----------------- */
    static public function Mdl2CondicionesFAobtmDiferente($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 != :$item2 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 3 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
    --------------------------------------------------------------------------------------------- */
class Modelo3Condiciones{

    static public function Mdl3Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl3CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl3CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 4 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
    --------------------------------------------------------------------------------------------- */
class Modelo4Condiciones{

    static public function Mdl4Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl4CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl4CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 5 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM - PPP
    --------------------------------------------------------------------------------------------- */
class Modelo5Condiciones{

    static public function Mdl5Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl5CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl5CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 6 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
    --------------------------------------------------------------------------------------------- */
class Modelo6Condiciones{

    static public function Mdl6Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl6CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl6CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 7 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM - PPP
    --------------------------------------------------------------------------------------------- */
class Modelo7Condiciones{

    static public function Mdl7Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl7CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl7CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}

/* -------------
------------------------------------------------------------------------------------
    TRAER VALORES DE CUALQUIER TABLA / 8 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
    --------------------------------------------------------------------------------------------- */
class Modelo8Condiciones{

    static public function Mdl8Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7 AND $item8 = :$item8");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item8, $valor8, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl8CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7 AND $item8 = :$item8");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item8, $valor8, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

    static public function Mdl8CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8, $base, $tope, $modo){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND $item2 = :$item2 AND $item3 = :$item3 AND $item4 = :$item4 AND $item5 = :$item5 AND $item6 = :$item6 AND $item7 = :$item7 AND $item8 = :$item8 ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item4, $valor4, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item6, $valor6, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item7, $valor7, PDO::PARAM_STR);
            $stmt -> bindParam(":".$item8, $valor8, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }		
        $stmt-> close();
        $stmt = null;
    }

}