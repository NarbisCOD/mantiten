<?php

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 1 CONDICION /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class UnaCondicion{

	static public function ctr1Condicion($tabla, $item, $valor){
		$respuesta = Modelo1Condicion::Mdl1Condicion($tabla, $item, $valor);
		return $respuesta;
	}

	static public function ctr1CondicionFA($tabla, $item, $valor){
		$respuesta = Modelo1Condicion::Mdl1CondicionFA($tabla, $item, $valor);
		return $respuesta;
	}

	static public function ctr1CondicionFAobtm($tabla, $ordenar, $item, $valor, $base, $tope, $modo){
		$respuesta = Modelo1Condicion::Mdl1CondicionFAobtm($tabla, $ordenar, $item, $valor, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 2 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class DosCondiciones{

	static public function ctr2Condiciones($tabla, $item, $valor, $item2, $valor2){
		$respuesta = Modelo2Condiciones::Mdl2Condiciones($tabla, $item, $valor, $item2, $valor2);
		return $respuesta;
	}

	static public function ctr2CondicionesFA($tabla, $item, $valor, $item2, $valor2){
		$respuesta = Modelo2Condiciones::Mdl2CondicionesFA($tabla, $item, $valor, $item2, $valor2);
		return $respuesta;
	}

	static public function ctr2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo){
		$respuesta = Modelo2Condiciones::Mdl2CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);
		return $respuesta;
	}

	static public function ctr2CondicionesFAobtmDiferente($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo){
		$respuesta = Modelo2Condiciones::Mdl2CondicionesFAobtmDiferente($tabla, $ordenar, $item, $valor, $item2, $valor2, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 3 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class TresCondiciones{

    static public function ctr3Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3){
        $respuesta = Modelo3Condiciones::Mdl3Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3);
        return $respuesta;
    }

    static public function ctr3CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3){
        $respuesta = Modelo3Condiciones::Mdl3CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3);
        return $respuesta;
    }

    static public function ctr3CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $base, $tope, $modo){
        $respuesta = Modelo3Condiciones::Mdl3CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $base, $tope, $modo);
        return $respuesta;
    }

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 4 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class CuatroCondiciones{

	static public function ctr4Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4){
		$respuesta = Modelo4Condiciones::Mdl4Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4);
		return $respuesta;
	}

	static public function ctr4CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4){
		$respuesta = Modelo4Condiciones::Mdl4CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4);
		return $respuesta;
	}

	static public function ctr4CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $base, $tope, $modo){
		$respuesta = Modelo4Condiciones::Mdl4CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 5 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class CincoCondiciones{

	static public function ctr5Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5){
		$respuesta = Modelo5Condiciones::Mdl5Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5);
		return $respuesta;
	}

	static public function ctr5CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5){
		$respuesta = Modelo5Condiciones::Mdl5CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5);
		return $respuesta;
	}

	static public function ctr5CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $base, $tope, $modo){
		$respuesta = Modelo5Condiciones::Mdl5CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 6 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class SeisCondiciones{

	static public function ctr6Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6){
		$respuesta = Modelo6Condiciones::Mdl6Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6);
		return $respuesta;
	}

	static public function ctr6CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6){
		$respuesta = Modelo6Condiciones::Mdl6CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6);
		return $respuesta;
	}

	static public function ctr6CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $base, $tope, $modo){
		$respuesta = Modelo6Condiciones::Mdl6CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 7 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class SieteCondiciones{

	static public function ctr7Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7){
		$respuesta = Modelo7Condiciones::Mdl7Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7);
		return $respuesta;
	}

	static public function ctr7CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7){
		$respuesta = Modelo7Condiciones::Mdl7CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7);
		return $respuesta;
	}

	static public function ctr7CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $base, $tope, $modo){
		$respuesta = Modelo7Condiciones::Mdl7CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $base, $tope, $modo);
		return $respuesta;
	}

}

/* -------------
------------------------------------------------------------------------------------
	TRAER VALORES DE CUALQUIER TABLA / 8 CONDICIONES /--- SIMPLE / FETCHALL / FETCHALL-OBTM
	-----------------------------------------------------------*/
class OchoCondiciones{

	static public function ctr8Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8){
		$respuesta = Modelo8Condiciones::Mdl8Condiciones($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8);
		return $respuesta;
	}

	static public function ctr8CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8){
		$respuesta = Modelo8Condiciones::Mdl8CondicionesFA($tabla, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8);
		return $respuesta;
	}

	static public function ctr8CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8, $base, $tope, $modo){
		$respuesta = Modelo8Condiciones::Mdl8CondicionesFAobtm($tabla, $ordenar, $item, $valor, $item2, $valor2, $item3, $valor3, $item4, $valor4, $item5, $valor5, $item6, $valor6, $item7, $valor7, $item8, $valor8, $base, $tope, $modo);
		return $respuesta;
	}

}