<?php

namespace App\Library;

class Errors {


	public static function getErrors($error_ID) {
		
		$return = array(	"title"		=> "Error de base de datos.",
							"message"	=> "Existe un problema de base de datos, pongase en contacto con el administrador del sistema. Error No. " . $error_ID);
		switch($error_ID) {
			case '23000':
				$return = array(	"title"		=> "Error de registro duplicado.",
									"message"	=> "El registro o la clave que intenta ingresar ya se encuentra en la base de datos.");
			break;
		}

		return $return;
	}

	//LOGIN
	const LOGIN_01_ID = "1_0001";
	const LOGIN_01_TITLE = "Acceso restringido."; 
	const LOGIN_01_MESSAGE = "Correo o password incorrectos. Verifique su información.";

	//SESSIONS
	const SESION_01_ID = "2_0001";
	const SESION_01_TITLE = "La sesión ha expirado."; 
	const SESION_01_MESSAGE = "La sesión del usuario ha finalizado, debe iniciar sesión nuevamente.";


	/* *********************************************************************
	 * *************	ERRORES DE LA INTERFAZ DEL PANEL ************
	 * ****************************************************************** */


	// POSTS
	const POSTS_CREATE_01_ID = "3_0001";
	const POSTS_CREATE_01_TITLE = "Error de nuevo registro.";
	const POSTS_CREATE_01_MESSAGE = "No se adjunto la imagen de la publicación.";

	const POSTS_CREATE_02_ID = "3_0002";
	const POSTS_CREATE_02_TITLE = "Error de nuevo registro.";
	const POSTS_CREATE_02_MESSAGE = "El post no se pudo registrar. Póngase en contacto con el administrador.";

	const POSTS_EDIT_01_ID = "3_0003";
	const POSTS_EDIT_01_TITLE = "Error de modificación.";
	const POSTS_EDIT_01_MESSAGE = "No se encontró el post a modificar. Verifique la información ingresada.";

	const POSTS_EDIT_02_ID = "3_0004";
	const POSTS_EDIT_02_TITLE = "Error de modificación.";
	const POSTS_EDIT_02_MESSAGE = "El post no se pudo registrar. Póngase en contacto con el administrador.";


	//SLIDERS
	const SLIDERS_CREATE_01_ID = "3_0001";
	const SLIDERS_CREATE_01_TITLE = "Error de nuevo registro.";
	const SLIDERS_CREATE_01_MESSAGE = "No se adjunto la imagen del slider.";

	const SLIDERS_CREATE_02_ID = "3_0002";
	const SLIDERS_CREATE_02_TITLE = "Error de nuevo registro.";
	const SLIDERS_CREATE_02_MESSAGE = "El slider no se pudo registrar. Póngase en contacto con el administrador.";

	const SLIDERS_EDIT_01_ID = "3_0003";
	const SLIDERS_EDIT_01_TITLE = "Error de modificación";
	const SLIDERS_EDIT_01_MESSAGE = "No se pudo encontrar el slider a modificar.";	

	const SLIDERS_EDIT_02_ID = "3_0004";
	const SLIDERS_EDIT_02_TITLE = "Error de modificación";
	const SLIDERS_EDIT_02_MESSAGE = "El slider no se pudo registrar. Póngase en contacto con el administrador.";

	//VIDEOS
	const VIDEOS_CREATE_01_ID = "4_0001";
	const VIDEOS_CREATE_01_TITLE = "Error de nuevo registro.";
	const VIDEOS_CREATE_01_MESSAGE = "No se ingresaron todos los campos requeridos. Verifique la información ingresada.";

	const VIDEOS_CREATE_02_ID = "4_0002";
	const VIDEOS_CREATE_02_TITLE = "Error de nuevo registro.";
	const VIDEOS_CREATE_02_MESSAGE = "Actualmente existe un registro con estatus (PUBLISHED). Solamente puede existir un vídeo activo.";

	const VIDEOS_CREATE_03_ID = "4_0003";
	const VIDEOS_CREATE_03_TITLE = "Error de nuevo registro.";
	const VIDEOS_CREATE_03_MESSAGE = "El vídeo no se pudo registrar. Póngase en contacto con el administrador.";

	const VIDEOS_EDIT_01_ID = "4_0004";
	const VIDEOS_EDIT_01_TITLE = "Error de modificación.";
	const VIDEOS_EDIT_01_MESSAGE = "No se pudo encontrar el vídeo a modificar. Verifique la información ingresada.";

	const VIDEOS_EDIT_02_ID = "4_0005";
	const VIDEOS_EDIT_02_TITLE = "Error de modificación.";
	const VIDEOS_EDIT_02_MESSAGE = "No se ingresaron todos los campos requeridos. Verifique la información ingresada.";

	const VIDEOS_EDIT_03_ID = "4_0006";
	const VIDEOS_EDIT_03_TITLE = "Error de modificación.";
	const VIDEOS_EDIT_03_MESSAGE = "Actualmente existe un registro con estatus (PUBLISHED). Solamente puede existir un vídeo activo.";

	const VIDEOS_EDIT_04_ID = "4_0007";
	const VIDEOS_EDIT_04_TITLE = "Error de nuevo registro.";
	const VIDEOS_EDIT_04_MESSAGE = "El vídeo no se pudo registrar. Póngase en contacto con el administrador.";


	//USUARIOS
	const USUARIOS_CREATE_01_ID = "5_0001";
	const USUARIOS_CREATE_01_TITLE = "Error de nuevo registro.";
	const USUARIOS_CREATE_01_MESSAGE = "No se ingresó el nombre completo del usuario.";

	const USUARIOS_CREATE_02_ID = "5_0002";
	const USUARIOS_CREATE_02_TITLE = "Error de nuevo registro.";
	const USUARIOS_CREATE_02_MESSAGE = "La fecha ingresada no se encuentra en un formato admitido.";

	const USUARIOS_CREATE_03_ID = "5_0003";
	const USUARIOS_CREATE_03_TITLE = "Error de nuevo registro.";
	const USUARIOS_CREATE_03_MESSAGE = "Los datos del nuevo usuario no pudieron registrarse. Verifique la información.";

	const USUARIOS_CREATE_04_ID = "5_0004";
	const USUARIOS_CREATE_04_TITLE = "Error de nuevo registro.";
	const USUARIOS_CREATE_04_MESSAGE = "Las contraseñas no coinciden. Verifique la información.";

	const USUARIOS_EDIT_01_ID = "5_0005";
	const USUARIOS_EDIT_01_TITLE = "Error de modificación.";
	const USUARIOS_EDIT_01_MESSAGE = "No se ingresó el nombre completo del usuario.";

	const USUARIOS_EDIT_02_ID = "5_0006";
	const USUARIOS_EDIT_02_TITLE = "Error de modificación.";
	const USUARIOS_EDIT_02_MESSAGE = "La fecha ingresada no se encuentra en un formato admitido.";

	const USUARIOS_EDIT_03_ID = "5_0007";
	const USUARIOS_EDIT_03_TITLE = "Error de modificación.";
	const USUARIOS_EDIT_03_MESSAGE = "Los datos del usuario no pudieron modificarse. Verifique la información.";

	const USUARIOS_EDIT_04_ID = "5_0008";
	const USUARIOS_EDIT_04_TITLE = "Error de modificación.";
	const USUARIOS_EDIT_04_MESSAGE = "Las contraseñas no coinciden. Verifique la información.";

	//BRANDS
	const BRANDS_CREATE_01_ID = "6_0001";
	const BRANDS_CREATE_01_TITLE = "Error de nuevo registro.";
	const BRANDS_CREATE_01_MESSAGE = "La marca no se pudo registrar. Póngase en contacto con el administrador.";

	const BRANDS_EDIT_01_ID = "6_0002";
	const BRANDS_EDIT_01_TITLE = "Error de modificación";
	const BRANDS_EDIT_01_MESSAGE = "No se pudo encontrar la marca a modificar.";	

	const BRANDS_EDIT_02_ID = "6_0003";
	const BRANDS_EDIT_02_TITLE = "Error de modificación";
	const BRANDS_EDIT_02_MESSAGE = "La marca no se pudo modificar. Póngase en contacto con el administrador.";

	//JOBS
	const JOBS_CREATE_01_ID = "6_0001";
	const JOBS_CREATE_01_TITLE = "Error de nuevo registro.";
	const JOBS_CREATE_01_MESSAGE = "El empleo no se pudo registrar. Póngase en contacto con el administrador.";

	const JOBS_EDIT_01_ID = "6_0002";
	const JOBS_EDIT_01_TITLE = "Error de modificación";
	const JOBS_EDIT_01_MESSAGE = "No se pudo encontrar el empleo a modificar.";	

	const JOBS_EDIT_02_ID = "6_0003";
	const JOBS_EDIT_02_TITLE = "Error de modificación";
	const JOBS_EDIT_02_MESSAGE = "El empleo no se pudo modificar. Póngase en contacto con el administrador.";

	//EXPERT TIPS
	const TIPS_CREATE_01_ID = "7_0001";
	const TIPS_CREATE_01_TITLE = "Error de nuevo registro.";
	const TIPS_CREATE_01_MESSAGE = "No se adjuntó una imagen en el formulario.";

	const TIPS_CREATE_02_ID = "7_0002";
	const TIPS_CREATE_02_TITLE = "Error de nuevo registro.";
	const TIPS_CREATE_02_MESSAGE = "El tip no se pudo registrar. Póngase en contacto con el administrador.";

	const TIPS_EDIT_01_ID = "7_0003";
	const TIPS_EDIT_01_TITLE = "Error de modificación";
	const TIPS_EDIT_01_MESSAGE = "No se pudo encontrar el tip a modificar.";	

	const TIPS_EDIT_02_ID = "7_0004";
	const TIPS_EDIT_02_TITLE = "Error de modificación";
	const TIPS_EDIT_02_MESSAGE = "El tip no se pudo modificar. Póngase en contacto con el administrador.";

	//PROMOCIONES
	const PROMOTIONS_CREATE_01_ID = "7_0001";
	const PROMOTIONS_CREATE_01_TITLE = "Error de nuevo registro.";
	const PROMOTIONS_CREATE_01_MESSAGE = "No se adjuntó una imagen en el formulario.";

	const PROMOTIONS_CREATE_02_ID = "7_0002";
	const PROMOTIONS_CREATE_02_TITLE = "Error de nuevo registro.";
	const PROMOTIONS_CREATE_02_MESSAGE = "La promoción/oferta no se pudo registrar. Póngase en contacto con el administrador.";

	const PROMOTIONS_EDIT_01_ID = "7_0003";
	const PROMOTIONS_EDIT_01_TITLE = "Error de modificación";
	const PROMOTIONS_EDIT_01_MESSAGE = "No se pudo encontrar la promoción/oferta a modificar.";	

	const PROMOTIONS_EDIT_02_ID = "7_0004";
	const PROMOTIONS_EDIT_02_TITLE = "Error de modificación";
	const PROMOTIONS_EDIT_02_MESSAGE = "La promoción/oferta no se pudo modificar. Póngase en contacto con el administrador.";
	
}

?>