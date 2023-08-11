<?php

/**
 * clase que genera la insercion y edicion  de ruleta en la base de datos
 */
class Administracion_Model_DbTable_Ruleta extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'ruleta';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'ruleta_id';

	/**
	 * insert recibe la informacion de un ruleta y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data)
	{
		$ruleta_color_fondo1 = $data['ruleta_color_fondo1'];
		$ruleta_color_fondo2 = $data['ruleta_color_fondo2'];
		$ruleta_color_fondo3 = $data['ruleta_color_fondo3'];
		$ruleta_color_txt1 = $data['ruleta_color_txt1'];
		$ruleta_color_txt2 = $data['ruleta_color_txt2'];
		$ruleta_color_txt3 = $data['ruleta_color_txt3'];
		$ruleta_fendyshop_txt = $data['ruleta_fendyshop_txt'];
		$ruleta_fendyshop_icono = $data['ruleta_fendyshop_icono'];
		$ruleta_fendyshop_fondo = $data['ruleta_fendyshop_fondo'];
		$ruleta_categorias = $data['ruleta_categorias'];
		$ruleta_categoria1 = $data['ruleta_categoria1'];
		$ruleta_categoria1_img = $data['ruleta_categoria1_img'];
		$ruleta_categoria1_color = $data['ruleta_categoria1_color'];
		$ruleta_categoria1_abrir = $data['ruleta_categoria1_abrir'];
		$ruleta_categoria2 = $data['ruleta_categoria2'];
		$ruleta_categoria2_img = $data['ruleta_categoria2_img'];
		$ruleta_categoria2_color = $data['ruleta_categoria2_color'];
		$ruleta_categoria2_abrir = $data['ruleta_categoria2_abrir'];
		$ruleta_categoria3 = $data['ruleta_categoria3'];
		$ruleta_categoria3_img = $data['ruleta_categoria3_img'];
		$ruleta_categoria3_color = $data['ruleta_categoria3_color'];
		$ruleta_categoria3_abrir = $data['ruleta_categoria3_abrir'];
		$ruleta_color_bandera = $data['ruleta_color_bandera'];
		$ruleta_color_ruleta = $data['ruleta_color_ruleta'];
		$ruleta_txt_info = $data['ruleta_txt_info'];
		$ruleta_color_info = $data['ruleta_color_info'];
		$ruleta_img_info = $data['ruleta_img_info'];
		$ruleta_icono_principal = $data['ruleta_icono_principal'];
		$ruleta_fondo_iconos = $data['ruleta_fondo_iconos'];
		$ruleta_txt_links_interes = $data['ruleta_txt_links_interes'];
		$ruleta_txt_link1 = $data['ruleta_txt_link1'];
		$ruleta_img_link1 = $data['ruleta_img_link1'];
		$ruleta_fondo_link1 = $data['ruleta_fondo_link1'];
		$ruleta_abrir_link1 = $data['ruleta_abrir_link1'];
		$ruleta_txt_link2 = $data['ruleta_txt_link2'];
		$ruleta_img_link2 = $data['ruleta_img_link2'];
		$ruleta_fondo_link2 = $data['ruleta_fondo_link2'];
		$ruleta_abrir_link2 = $data['ruleta_abrir_link2'];
		$ruleta_txt_link3 = $data['ruleta_txt_link3'];
		$ruleta_img_link3 = $data['ruleta_img_link3'];
		$ruleta_fondo_link3 = $data['ruleta_fondo_link3'];
		$ruleta_abrir_link3 = $data['ruleta_abrir_link3'];
		$ruleta_descripcion = $data['ruleta_descripcion'];
		$ruleta_img_cabezon = $data['ruleta_img_cabezon'];
		$ruleta_img_fondocabezon = $data['ruleta_img_fondocabezon'];
		$ruleta_estado = $data['ruleta_estado'];

		$ruleta_enlace_principal = $data['ruleta_enlace_principal'];
		$ruleta_enlace_cat1 = $data['ruleta_enlace_cat1'];
		$ruleta_enlace_cat2 = $data['ruleta_enlace_cat2'];
		$ruleta_enlace_cat3 = $data['ruleta_enlace_cat3'];
		$ruleta_enlace_info = $data['ruleta_enlace_info'];
		$ruleta_enlace_link1 = $data['ruleta_enlace_link1'];
		$ruleta_enlace_link2 = $data['ruleta_enlace_link2'];
		$ruleta_enlace_link3 = $data['ruleta_enlace_link3'];


		$query = "INSERT INTO ruleta( ruleta_color_fondo1, ruleta_color_fondo2, ruleta_color_fondo3, ruleta_color_txt1, ruleta_color_txt2, ruleta_color_txt3, ruleta_fendyshop_txt, ruleta_fendyshop_icono, ruleta_fendyshop_fondo, ruleta_categorias, ruleta_categoria1, ruleta_categoria1_img, ruleta_categoria1_color, ruleta_categoria1_abrir, ruleta_categoria2, ruleta_categoria2_img, ruleta_categoria2_color, ruleta_categoria2_abrir, ruleta_categoria3, ruleta_categoria3_img, ruleta_categoria3_color, ruleta_categoria3_abrir, ruleta_color_bandera, ruleta_color_ruleta, ruleta_txt_info, ruleta_color_info, ruleta_img_info, ruleta_icono_principal, ruleta_fondo_iconos, ruleta_txt_links_interes, ruleta_txt_link1, ruleta_img_link1, ruleta_fondo_link1, ruleta_abrir_link1, ruleta_txt_link2, ruleta_img_link2, ruleta_fondo_link2, ruleta_abrir_link2, ruleta_txt_link3, ruleta_img_link3, ruleta_fondo_link3, ruleta_abrir_link3, ruleta_descripcion, ruleta_img_cabezon, ruleta_img_fondocabezon, ruleta_estado, ruleta_enlace_principal,ruleta_enlace_cat1, ruleta_enlace_cat2,  ruleta_enlace_cat3,ruleta_enlace_info, ruleta_enlace_link1, ruleta_enlace_link2,ruleta_enlace_link3  ) VALUES ( '$ruleta_color_fondo1', '$ruleta_color_fondo2', '$ruleta_color_fondo3', '$ruleta_color_txt1', '$ruleta_color_txt2', '$ruleta_color_txt3', '$ruleta_fendyshop_txt', '$ruleta_fendyshop_icono', '$ruleta_fendyshop_fondo', '$ruleta_categorias', '$ruleta_categoria1', '$ruleta_categoria1_img', '$ruleta_categoria1_color', '$ruleta_categoria1_abrir', '$ruleta_categoria2', '$ruleta_categoria2_img', '$ruleta_categoria2_color', '$ruleta_categoria2_abrir', '$ruleta_categoria3', '$ruleta_categoria3_img', '$ruleta_categoria3_color', '$ruleta_categoria3_abrir', '$ruleta_color_bandera', '$ruleta_color_ruleta', '$ruleta_txt_info', '$ruleta_color_info', '$ruleta_img_info', '$ruleta_icono_principal', '$ruleta_fondo_iconos', '$ruleta_txt_links_interes', '$ruleta_txt_link1', '$ruleta_img_link1', '$ruleta_fondo_link1', '$ruleta_abrir_link1', '$ruleta_txt_link2', '$ruleta_img_link2', '$ruleta_fondo_link2', '$ruleta_abrir_link2', '$ruleta_txt_link3', '$ruleta_img_link3', '$ruleta_fondo_link3', '$ruleta_abrir_link3', '$ruleta_descripcion', '$ruleta_img_cabezon', '$ruleta_img_fondocabezon', '$ruleta_estado', '$ruleta_enlace_principal', '$ruleta_enlace_cat1', '$ruleta_enlace_cat2', '$ruleta_enlace_cat3', '$ruleta_enlace_info', '$ruleta_enlace_link1', '$ruleta_enlace_link2', '$ruleta_enlace_link3' )";
		$res = $this->_conn->query($query);
		return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un ruleta  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data, $id)
	{

		$ruleta_color_fondo1 = $data['ruleta_color_fondo1'];
		$ruleta_color_fondo2 = $data['ruleta_color_fondo2'];
		$ruleta_color_fondo3 = $data['ruleta_color_fondo3'];
		$ruleta_color_txt1 = $data['ruleta_color_txt1'];
		$ruleta_color_txt2 = $data['ruleta_color_txt2'];
		$ruleta_color_txt3 = $data['ruleta_color_txt3'];
		$ruleta_fendyshop_txt = $data['ruleta_fendyshop_txt'];
		$ruleta_fendyshop_icono = $data['ruleta_fendyshop_icono'];
		$ruleta_fendyshop_fondo = $data['ruleta_fendyshop_fondo'];
		$ruleta_categorias = $data['ruleta_categorias'];
		$ruleta_categoria1 = $data['ruleta_categoria1'];
		$ruleta_categoria1_img = $data['ruleta_categoria1_img'];
		$ruleta_categoria1_color = $data['ruleta_categoria1_color'];
		$ruleta_categoria1_abrir = $data['ruleta_categoria1_abrir'];
		$ruleta_categoria2 = $data['ruleta_categoria2'];
		$ruleta_categoria2_img = $data['ruleta_categoria2_img'];
		$ruleta_categoria2_color = $data['ruleta_categoria2_color'];
		$ruleta_categoria2_abrir = $data['ruleta_categoria2_abrir'];
		$ruleta_categoria3 = $data['ruleta_categoria3'];
		$ruleta_categoria3_img = $data['ruleta_categoria3_img'];
		$ruleta_categoria3_color = $data['ruleta_categoria3_color'];
		$ruleta_categoria3_abrir = $data['ruleta_categoria3_abrir'];
		$ruleta_color_bandera = $data['ruleta_color_bandera'];
		$ruleta_color_ruleta = $data['ruleta_color_ruleta'];
		$ruleta_txt_info = $data['ruleta_txt_info'];
		$ruleta_color_info = $data['ruleta_color_info'];
		$ruleta_img_info = $data['ruleta_img_info'];
		$ruleta_icono_principal = $data['ruleta_icono_principal'];
		$ruleta_fondo_iconos = $data['ruleta_fondo_iconos'];
		$ruleta_txt_links_interes = $data['ruleta_txt_links_interes'];
		$ruleta_txt_link1 = $data['ruleta_txt_link1'];
		$ruleta_img_link1 = $data['ruleta_img_link1'];
		$ruleta_fondo_link1 = $data['ruleta_fondo_link1'];
		$ruleta_abrir_link1 = $data['ruleta_abrir_link1'];
		$ruleta_txt_link2 = $data['ruleta_txt_link2'];
		$ruleta_img_link2 = $data['ruleta_img_link2'];
		$ruleta_fondo_link2 = $data['ruleta_fondo_link2'];
		$ruleta_abrir_link2 = $data['ruleta_abrir_link2'];
		$ruleta_txt_link3 = $data['ruleta_txt_link3'];
		$ruleta_img_link3 = $data['ruleta_img_link3'];
		$ruleta_fondo_link3 = $data['ruleta_fondo_link3'];
		$ruleta_abrir_link3 = $data['ruleta_abrir_link3'];
		$ruleta_descripcion = $data['ruleta_descripcion'];
		$ruleta_img_cabezon = $data['ruleta_img_cabezon'];
		$ruleta_img_fondocabezon = $data['ruleta_img_fondocabezon'];
		$ruleta_estado = $data['ruleta_estado'];
		$ruleta_enlace_principal = $data['ruleta_enlace_principal'];
		$ruleta_enlace_cat1 = $data['ruleta_enlace_cat1'];
		$ruleta_enlace_cat2 = $data['ruleta_enlace_cat2'];
		$ruleta_enlace_cat3 = $data['ruleta_enlace_cat3'];
		$ruleta_enlace_info = $data['ruleta_enlace_info'];
		$ruleta_enlace_link1 = $data['ruleta_enlace_link1'];
		$ruleta_enlace_link2 = $data['ruleta_enlace_link2'];
		$ruleta_enlace_link3 = $data['ruleta_enlace_link3'];

		$query = "UPDATE ruleta SET  ruleta_color_fondo1 = '$ruleta_color_fondo1', ruleta_color_fondo2 = '$ruleta_color_fondo2', ruleta_color_fondo3 = '$ruleta_color_fondo3', ruleta_color_txt1 = '$ruleta_color_txt1', ruleta_color_txt2 = '$ruleta_color_txt2', ruleta_color_txt3 = '$ruleta_color_txt3', ruleta_fendyshop_txt = '$ruleta_fendyshop_txt', ruleta_fendyshop_icono = '$ruleta_fendyshop_icono', ruleta_fendyshop_fondo = '$ruleta_fendyshop_fondo', ruleta_categorias = '$ruleta_categorias', ruleta_categoria1 = '$ruleta_categoria1', ruleta_categoria1_img = '$ruleta_categoria1_img', ruleta_categoria1_color = '$ruleta_categoria1_color', ruleta_categoria1_abrir = '$ruleta_categoria1_abrir', ruleta_categoria2 = '$ruleta_categoria2', ruleta_categoria2_img = '$ruleta_categoria2_img', ruleta_categoria2_color = '$ruleta_categoria2_color', ruleta_categoria2_abrir = '$ruleta_categoria2_abrir', ruleta_categoria3 = '$ruleta_categoria3', ruleta_categoria3_img = '$ruleta_categoria3_img', ruleta_categoria3_color = '$ruleta_categoria3_color', ruleta_categoria3_abrir = '$ruleta_categoria3_abrir', ruleta_color_bandera = '$ruleta_color_bandera', ruleta_color_ruleta = '$ruleta_color_ruleta', ruleta_txt_info = '$ruleta_txt_info', ruleta_color_info = '$ruleta_color_info', ruleta_img_info = '$ruleta_img_info', ruleta_icono_principal = '$ruleta_icono_principal', ruleta_fondo_iconos = '$ruleta_fondo_iconos', ruleta_txt_links_interes = '$ruleta_txt_links_interes', ruleta_txt_link1 = '$ruleta_txt_link1', ruleta_img_link1 = '$ruleta_img_link1', ruleta_fondo_link1 = '$ruleta_fondo_link1', ruleta_abrir_link1 = '$ruleta_abrir_link1', ruleta_txt_link2 = '$ruleta_txt_link2', ruleta_img_link2 = '$ruleta_img_link2', ruleta_fondo_link2 = '$ruleta_fondo_link2', ruleta_abrir_link2 = '$ruleta_abrir_link2', ruleta_txt_link3 = '$ruleta_txt_link3', ruleta_img_link3 = '$ruleta_img_link3', ruleta_fondo_link3 = '$ruleta_fondo_link3', ruleta_abrir_link3 = '$ruleta_abrir_link3', ruleta_descripcion = '$ruleta_descripcion', ruleta_img_cabezon = '$ruleta_img_cabezon', ruleta_img_fondocabezon = '$ruleta_img_fondocabezon', ruleta_estado = '$ruleta_estado',ruleta_enlace_principal = '$ruleta_enlace_principal', ruleta_enlace_cat1 = '$ruleta_enlace_cat1', ruleta_enlace_cat2 = '$ruleta_enlace_cat2', ruleta_enlace_cat3 = '$ruleta_enlace_cat3', ruleta_enlace_info = '$ruleta_enlace_info', ruleta_enlace_link1 = '$ruleta_enlace_link1', ruleta_enlace_link2 = '$ruleta_enlace_link2', ruleta_enlace_link3 = '$ruleta_enlace_link3' WHERE ruleta_id = '" . $id . "'";
		$res = $this->_conn->query($query);
	}
}
