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

	//PRODUCTS
	const PRODUCTS_CREATE_01_ID = "4_0001";
	const PRODUCTS_CREATE_01_TITLE = "Error de nuevo registro.";
	const PRODUCTS_CREATE_01_MESSAGE = "No se adjuntó la imagen para el producto.";

	const PRODUCTS_CREATE_02_ID = "4_0002";
	const PRODUCTS_CREATE_02_TITLE = "Error de nuevo registro.";
	const PRODUCTS_CREATE_02_MESSAGE = "El número de parte ingresado ya se encuentra registrado en otro producto.";

	const PRODUCTS_CREATE_03_ID = "4_0003";
	const PRODUCTS_CREATE_03_TITLE = "Error de nuevo registro.";
	const PRODUCTS_CREATE_03_MESSAGE = "El producto no se pudo registrar. Póngase en contacto con el administrador.";

	const PRODUCTS_EDIT_01_ID = "4_0004";
	const PRODUCTS_EDIT_01_TITLE = "Error de modificación.";
	const PRODUCTS_EDIT_01_MESSAGE = "No se pudo encontrar el producto a modificar. Verifique la información ingresada.";

	const PRODUCTS_EDIT_02_ID = "4_0005";
	const PRODUCTS_EDIT_02_TITLE = "Error de modificación.";
	const PRODUCTS_EDIT_02_MESSAGE = "Actualmente existe un producto con el Número de parte ingresado.";

	const PRODUCTS_EDIT_03_ID = "4_0006";
	const PRODUCTS_EDIT_03_TITLE = "Error de nuevo registro.";
	const PRODUCTS_EDIT_03_MESSAGE = "El producto no se pudo registrar. Póngase en contacto con el administrador.";

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
	const PROMOTIONS_CREATE_01_ID = "8_0001";
	const PROMOTIONS_CREATE_01_TITLE = "Error de nuevo registro.";
	const PROMOTIONS_CREATE_01_MESSAGE = "No se adjuntó una imagen en el formulario.";

	const PROMOTIONS_CREATE_02_ID = "8_0002";
	const PROMOTIONS_CREATE_02_TITLE = "Error de nuevo registro.";
	const PROMOTIONS_CREATE_02_MESSAGE = "La promoción/oferta no se pudo registrar. Póngase en contacto con el administrador.";

	const PROMOTIONS_EDIT_01_ID = "8_0003";
	const PROMOTIONS_EDIT_01_TITLE = "Error de modificación";
	const PROMOTIONS_EDIT_01_MESSAGE = "No se pudo encontrar la promoción/oferta a modificar.";	

	const PROMOTIONS_EDIT_02_ID = "8_0004";
	const PROMOTIONS_EDIT_02_TITLE = "Error de modificación";
	const PROMOTIONS_EDIT_02_MESSAGE = "La promoción/oferta no se pudo modificar. Póngase en contacto con el administrador.";

	//LOCATIONS
	const LOCATIONS_CREATE_01_ID = "9_0001";
	const LOCATIONS_CREATE_01_TITLE = "Error de nuevo registro.";
	const LOCATIONS_CREATE_01_MESSAGE = "La sucursal no se pudo registrar. Póngase en contacto con el administrador.";

	const LOCATIONS_EDIT_01_ID = "9_0002";
	const LOCATIONS_EDIT_01_TITLE = "Error de modificación";
	const LOCATIONS_EDIT_01_MESSAGE = "No se pudo encontrar la sucursal a modificar.";	

	const LOCATIONS_EDIT_02_ID = "9_0003";
	const LOCATIONS_EDIT_02_TITLE = "Error de modificación";
	const LOCATIONS_EDIT_02_MESSAGE = "La sucursal no se pudo modificar. Póngase en contacto con el administrador.";

	//MODELS
	const MODELS_CREATE_01_ID = "10_0001";
	const MODELS_CREATE_01_TITLE = "Error de nuevo registro.";
	const MODELS_CREATE_01_MESSAGE = "La marca asociada a este modelo no existe.";

	const MODELS_CREATE_02_ID = "10_0002";
	const MODELS_CREATE_02_TITLE = "Error de nuevo registro.";
	const MODELS_CREATE_02_MESSAGE = "El modelo no se pudo registrar. Póngase en contacto con el administrador.";

	const MODELS_EDIT_01_ID = "10_0003";
	const MODELS_EDIT_01_TITLE = "Error de modificación";
	const MODELS_EDIT_01_MESSAGE = "No se pudo encontrar el modelo a modificar.";	

	const MODELS_EDIT_02_ID = "10_0004";
	const MODELS_EDIT_02_TITLE = "Error de modificación";
	const MODELS_EDIT_02_MESSAGE = "El modelo no se pudo modificar. Póngase en contacto con el administrador.";

	//CATALOGS
	const CATALOGS_CREATE_01_ID = "11_0001";
	const CATALOGS_CREATE_01_TITLE = "Error de nuevo registro.";
	const CATALOGS_CREATE_01_MESSAGE = "No se adjuntó el PDF para el catálogo.";

	const CATALOGS_CREATE_02_ID = "11_0002";
	const CATALOGS_CREATE_02_TITLE = "Error de nuevo registro.";
	const CATALOGS_CREATE_02_MESSAGE = "El catálogo no se pudo registrar. Póngase en contacto con el administrador.";

	const CATALOGS_EDIT_01_ID = "11_0003";
	const CATALOGS_EDIT_01_TITLE = "Error de modificación.";
	const CATALOGS_EDIT_01_MESSAGE = "No se pudo encontrar el catálogo a modificar. Verifique la información ingresada.";

	const CATALOGS_EDIT_02_ID = "11_0004";
	const CATALOGS_EDIT_02_TITLE = "Error de nuevo registro.";
	const CATALOGS_EDIT_02_MESSAGE = "El catálogo no se pudo registrar. Póngase en contacto con el administrador.";

	//CATEGORIAS
	const CATEGORIES_CREATE_01_ID = "12_0001";
	const CATEGORIES_CREATE_01_TITLE = "Error de nuevo registro.";
	const CATEGORIES_CREATE_01_MESSAGE = "La URL amigable ya se encuentra registrada en otro tipo de categoria.";

	const CATEGORIES_CREATE_02_ID = "12_0001";
	const CATEGORIES_CREATE_02_TITLE = "Error de nuevo registro.";
	const CATEGORIES_CREATE_02_MESSAGE = "No se adjuntó la imagen para la catergoria.";

	const CATEGORIES_CREATE_03_ID = "12_0002";
	const CATEGORIES_CREATE_03_TITLE = "Error de nuevo registro.";
	const CATEGORIES_CREATE_03_MESSAGE = "La categoria no se pudo registrar. Póngase en contacto con el administrador.";

	const CATEGORIES_EDIT_01_ID = "12_0003";
	const CATEGORIES_EDIT_01_TITLE = "Error de modificación.";
	const CATEGORIES_EDIT_01_MESSAGE = "No se pudo encontrar la categoria a modificar. Verifique la información ingresada.";

	const CATEGORIES_EDIT_02_ID = "12_0004";
	const CATEGORIES_EDIT_02_TITLE = "Error de nuevo registro.";
	const CATEGORIES_EDIT_02_MESSAGE = "La categoria no se pudo registrar. Póngase en contacto con el administrador.";
	
}

?>