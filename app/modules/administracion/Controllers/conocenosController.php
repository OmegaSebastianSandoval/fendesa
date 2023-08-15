<?php

/**
 * Controlador de Contactenos que permite la  creacion, edicion  y eliminacion de los contactenos del Sistema
 */
class Administracion_conocenosController extends Administracion_mainController
{
	public $botonpanel = 8;
	/**
	 * $mainModel  instancia del modelo de  base de datos contactenos
	 * @var modeloContenidos
	 */
	public $mainModel;

	/**
	 * $route  url del controlador base
	 * @var string
	 */
	protected $route;

	/**
	 * $pages cantidad de registros a mostrar por pagina]
	 * @var integer
	 */
	protected $pages;

	/**
	 * $namefilter nombre de la variable a la fual se le van a guardar los filtros
	 * @var string
	 */
	protected $namefilter;

	/**
	 * $_csrf_section  nombre de la variable general csrf  que se va a almacenar en la session
	 * @var string
	 */
	protected $_csrf_section = "administracion_contactenos";

	/**
	 * $namepages nombre de la pvariable en la cual se va a guardar  el numero de seccion en la paginacion del controlador
	 * @var string
	 */
	protected $namepages;



	/**
	 * Inicializa las variables principales del controlador contactenos .
	 *
	 * @return void.
	 */
	public function init()
	{
		$this->mainModel = new Administracion_Model_DbTable_Contactenos();
		$this->namefilter = "parametersfiltercontactenos";
		$this->route = "/administracion/conocenos";
		$this->namepages = "pages_contactenos";
		$this->namepageactual = "page_actual_contactenos";
		$this->_view->route = $this->route;
		if (Session::getInstance()->get($this->namepages)) {
			$this->pages = Session::getInstance()->get($this->namepages);
		} else {
			$this->pages = 20;
		}
		parent::init();
	}


	/**
	 * Recibe la informacion y  muestra un listado de  contactenos con sus respectivos filtros.
	 *
	 * @return void.
	 */
	public function indexAction()
	{
		$title = "Aministración de contactenos";
		$this->getLayout()->setTitle($title);
		$this->_view->titlesection = $title;
		$this->filters();
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$filters = (object)Session::getInstance()->get($this->namefilter);
		$this->_view->filters = $filters;
		$filters = $this->getFilter();
		$order = "orden ASC";
		$list = $this->mainModel->getList($filters, $order);
		$amount = $this->pages;
		$page = $this->_getSanitizedParam("page");
		if (!$page && Session::getInstance()->get($this->namepageactual)) {
			$page = Session::getInstance()->get($this->namepageactual);
			$start = ($page - 1) * $amount;
		} else if (!$page) {
			$start = 0;
			$page = 1;
			Session::getInstance()->set($this->namepageactual, $page);
		} else {
			Session::getInstance()->set($this->namepageactual, $page);
			$start = ($page - 1) * $amount;
		}
		$this->_view->register_number = count($list);
		$this->_view->pages = $this->pages;
		$this->_view->totalpages = ceil(count($list) / $amount);
		$this->_view->page = $page;
		$this->_view->lists = $this->mainModel->getListPages($filters, $order, $start, $amount);
		$this->_view->csrf_section = $this->_csrf_section;
		$this->_view->padre = $this->_getSanitizedParam("padre");
		$tipo = $this->_getSanitizedParam("tipo");
		$this->_view->tipo = $tipo;
	}

	/**
	 * Genera la Informacion necesaria para editar o crear un  contactenos  y muestra su formulario
	 *
	 * @return void.
	 */
	public function manageAction()
	{
		$this->_view->route = $this->route;
		$this->_csrf_section = "manage_contactenos_" . date("YmdHis");
		$this->_csrf->generateCode($this->_csrf_section);
		$this->_view->csrf_section = $this->_csrf_section;
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$padre = $this->_getSanitizedParam("padre");
		$tipo = $this->_getSanitizedParam("tipo");

		$id = $this->_getSanitizedParam("id");
		if ($id > 0) {
			$content = $this->mainModel->getById($id);
			if ($content->contactenos_id) {
				$this->_view->content = $content;
				$this->_view->routeform = $this->route . "/update";
				$title = "Actualizar contactenos";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
				$padre = $content->contactenos_padre;
			} else {
				$this->_view->routeform = $this->route . "/insert";
				$title = "Crear contactenos";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
			}
		} else {
			$this->_view->routeform = $this->route . "/insert";
			$title = "Crear contactenos";
			$this->getLayout()->setTitle($title);
			$this->_view->titlesection = $title;
		}

		$this->_view->padre = $padre;
		$this->_view->tipo = $tipo;

		$contentpadre = $this->mainModel->getById($padre);
		if ($contentpadre->tipo == 2) {
			$this->_view->tipo = 3;
		}
	}

	/**
	 * Inserta la informacion de un contactenos  y redirecciona al listado de contactenos.
	 *
	 * @return void.
	 */
	public function insertAction()
	{
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf) {
			$data = $this->getData();
			$uploadImage =  new Core_Model_Upload_Image();
			if ($_FILES['contactenos_cuadro_img_fondo']['name'] != '') {
				$data['contactenos_cuadro_img_fondo'] = $uploadImage->upload("contactenos_cuadro_img_fondo");
			}
			if ($_FILES['contactenos_cuadro_img']['name'] != '') {
				$data['contactenos_cuadro_img'] = $uploadImage->upload("contactenos_cuadro_img");
			}
			if ($_FILES['contactenos_img_fendy']['name'] != '') {
				$data['contactenos_img_fendy'] = $uploadImage->upload("contactenos_img_fendy");
			}
			if ($_FILES['contactenos_logo']['name'] != '') {
				$data['contactenos_logo'] = $uploadImage->upload("contactenos_logo");
			}
			if ($_FILES['contactenos_logo2']['name'] != '') {
				$data['contactenos_logo2'] = $uploadImage->upload("contactenos_logo2");
			}
			if ($_FILES['contactenos_interna_img']['name'] != '') {
				$data['contactenos_interna_img'] = $uploadImage->upload("contactenos_interna_img");
			}
			if ($_FILES['contactenos_btn2_img']['name'] != '') {
				$data['contactenos_btn2_img'] = $uploadImage->upload("contactenos_btn2_img");
			}
			if ($_FILES['contactenos_btn3_img']['name'] != '') {
				$data['contactenos_btn3_img'] = $uploadImage->upload("contactenos_btn3_img");
			}
			if ($_FILES['contactenos_btn4_img']['name'] != '') {
				$data['contactenos_btn4_img'] = $uploadImage->upload("contactenos_btn4_img");
			}
			if ($_FILES['contactenos_btn5_img']['name'] != '') {
				$data['contactenos_btn5_img'] = $uploadImage->upload("contactenos_btn5_img");
			}
			if ($_FILES['contactenos_btn6_img']['name'] != '') {
				$data['contactenos_btn6_img'] = $uploadImage->upload("contactenos_btn6_img");
			}
			$id = $this->mainModel->insert($data);

			$data['contactenos_id'] = $id;
			$data['log_log'] = print_r($data, true);
			$data['log_tipo'] = 'CREAR CONTACTENOS';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);
		}
		$padre = $this->_getSanitizedParam("contactenos_padre");

		$contentpadre = $this->mainModel->getById($padre);
		if ($contentpadre->tipo == 2) {
			$this->_view->tipo = 3;
		} /* else if ($contentpadre->contenido_tipo == 2) {
		  $this->_view->mostrartipos = 1;
		} */
		$rutaadicional = "";
		if ($padre > 0) {
			$rutaadicional = "?padre=" . $padre;
		}
		header('Location: ' . $this->route . $rutaadicional);
	}

	/**
	 * Recibe un identificador  y Actualiza la informacion de un contactenos  y redirecciona al listado de contactenos.
	 *
	 * @return void.
	 */
	public function updateAction()
	{
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf) {
			$id = $this->_getSanitizedParam("id");
			$content = $this->mainModel->getById($id);
			if ($content->contactenos_id) {
				$data = $this->getData();
				$uploadImage =  new Core_Model_Upload_Image();
				if ($_FILES['contactenos_cuadro_img_fondo']['name'] != '') {
					if ($content->contactenos_cuadro_img_fondo) {
						$uploadImage->delete($content->contactenos_cuadro_img_fondo);
					}
					$data['contactenos_cuadro_img_fondo'] = $uploadImage->upload("contactenos_cuadro_img_fondo");
				} else {
					$data['contactenos_cuadro_img_fondo'] = $content->contactenos_cuadro_img_fondo;
				}

				if ($_FILES['contactenos_cuadro_img']['name'] != '') {
					if ($content->contactenos_cuadro_img) {
						$uploadImage->delete($content->contactenos_cuadro_img);
					}
					$data['contactenos_cuadro_img'] = $uploadImage->upload("contactenos_cuadro_img");
				} else {
					$data['contactenos_cuadro_img'] = $content->contactenos_cuadro_img;
				}

				if ($_FILES['contactenos_img_fendy']['name'] != '') {
					if ($content->contactenos_img_fendy) {
						$uploadImage->delete($content->contactenos_img_fendy);
					}
					$data['contactenos_img_fendy'] = $uploadImage->upload("contactenos_img_fendy");
				} else {
					$data['contactenos_img_fendy'] = $content->contactenos_img_fendy;
				}

				if ($_FILES['contactenos_logo']['name'] != '') {
					if ($content->contactenos_logo) {
						$uploadImage->delete($content->contactenos_logo);
					}
					$data['contactenos_logo'] = $uploadImage->upload("contactenos_logo");
				} else {
					$data['contactenos_logo'] = $content->contactenos_logo;
				}

				if ($_FILES['contactenos_logo2']['name'] != '') {
					if ($content->contactenos_logo2) {
						$uploadImage->delete($content->contactenos_logo2);
					}
					$data['contactenos_logo2'] = $uploadImage->upload("contactenos_logo2");
				} else {
					$data['contactenos_logo2'] = $content->contactenos_logo2;
				}

				if ($_FILES['contactenos_interna_img']['name'] != '') {
					if ($content->contactenos_interna_img) {
						$uploadImage->delete($content->contactenos_interna_img);
					}
					$data['contactenos_interna_img'] = $uploadImage->upload("contactenos_interna_img");
				} else {
					$data['contactenos_interna_img'] = $content->contactenos_interna_img;
				}

				if ($_FILES['contactenos_btn2_img']['name'] != '') {
					if ($content->contactenos_btn2_img) {
						$uploadImage->delete($content->contactenos_btn2_img);
					}
					$data['contactenos_btn2_img'] = $uploadImage->upload("contactenos_btn2_img");
				} else {
					$data['contactenos_btn2_img'] = $content->contactenos_btn2_img;
				}

				if ($_FILES['contactenos_btn3_img']['name'] != '') {
					if ($content->contactenos_btn3_img) {
						$uploadImage->delete($content->contactenos_btn3_img);
					}
					$data['contactenos_btn3_img'] = $uploadImage->upload("contactenos_btn3_img");
				} else {
					$data['contactenos_btn3_img'] = $content->contactenos_btn3_img;
				}

				if ($_FILES['contactenos_btn4_img']['name'] != '') {
					if ($content->contactenos_btn4_img) {
						$uploadImage->delete($content->contactenos_btn4_img);
					}
					$data['contactenos_btn4_img'] = $uploadImage->upload("contactenos_btn4_img");
				} else {
					$data['contactenos_btn4_img'] = $content->contactenos_btn4_img;
				}

				if ($_FILES['contactenos_btn5_img']['name'] != '') {
					if ($content->contactenos_btn5_img) {
						$uploadImage->delete($content->contactenos_btn5_img);
					}
					$data['contactenos_btn5_img'] = $uploadImage->upload("contactenos_btn5_img");
				} else {
					$data['contactenos_btn5_img'] = $content->contactenos_btn5_img;
				}

				if ($_FILES['contactenos_btn6_img']['name'] != '') {
					if ($content->contactenos_btn6_img) {
						$uploadImage->delete($content->contactenos_btn6_img);
					}
					$data['contactenos_btn6_img'] = $uploadImage->upload("contactenos_btn6_img");
				} else {
					$data['contactenos_btn6_img'] = $content->contactenos_btn6_img;
				}
				$this->mainModel->update($data, $id);
			}
			$data['contactenos_id'] = $id;
			$data['log_log'] = print_r($data, true);
			$data['log_tipo'] = 'EDITAR CONTACTENOS';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);
		}
		$rutaadicional = "";
		$padre = $this->_getSanitizedParam("contactenos_padre");
		if ($padre > 0) {
			$rutaadicional = "?padre=" . $padre;
		}
		header('Location: ' . $this->route . $rutaadicional);
	}

	/**
	 * Recibe un identificador  y elimina un contactenos  y redirecciona al listado de contactenos.
	 *
	 * @return void.
	 */
	public function deleteAction()
	{
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_csrf_section] == $csrf) {
			$id =  $this->_getSanitizedParam("id");
			if (isset($id) && $id > 0) {
				$content = $this->mainModel->getById($id);
				if (isset($content)) {
					$uploadImage =  new Core_Model_Upload_Image();
					if (isset($content->contactenos_cuadro_img_fondo) && $content->contactenos_cuadro_img_fondo != '') {
						$uploadImage->delete($content->contactenos_cuadro_img_fondo);
					}

					if (isset($content->contactenos_cuadro_img) && $content->contactenos_cuadro_img != '') {
						$uploadImage->delete($content->contactenos_cuadro_img);
					}

					if (isset($content->contactenos_img_fendy) && $content->contactenos_img_fendy != '') {
						$uploadImage->delete($content->contactenos_img_fendy);
					}

					if (isset($content->contactenos_logo) && $content->contactenos_logo != '') {
						$uploadImage->delete($content->contactenos_logo);
					}

					if (isset($content->contactenos_logo2) && $content->contactenos_logo2 != '') {
						$uploadImage->delete($content->contactenos_logo2);
					}

					if (isset($content->contactenos_interna_img) && $content->contactenos_interna_img != '') {
						$uploadImage->delete($content->contactenos_interna_img);
					}

					if (isset($content->contactenos_btn2_img) && $content->contactenos_btn2_img != '') {
						$uploadImage->delete($content->contactenos_btn2_img);
					}

					if (isset($content->contactenos_btn3_img) && $content->contactenos_btn3_img != '') {
						$uploadImage->delete($content->contactenos_btn3_img);
					}

					if (isset($content->contactenos_btn4_img) && $content->contactenos_btn4_img != '') {
						$uploadImage->delete($content->contactenos_btn4_img);
					}

					if (isset($content->contactenos_btn5_img) && $content->contactenos_btn5_img != '') {
						$uploadImage->delete($content->contactenos_btn5_img);
					}

					if (isset($content->contactenos_btn6_img) && $content->contactenos_btn6_img != '') {
						$uploadImage->delete($content->contactenos_btn6_img);
					}
					$this->mainModel->deleteRegister($id);
					$data = (array)$content;
					$data['log_log'] = print_r($data, true);
					$data['log_tipo'] = 'BORRAR CONTACTENOS';
					$logModel = new Administracion_Model_DbTable_Log();
					$logModel->insert($data);
				}
			}
		}
		header('Location: ' . $this->route . '' . '');
	}

	/**
	 * Recibe la informacion del formulario y la retorna en forma de array para la edicion y creacion de Contactenos.
	 *
	 * @return array con toda la informacion recibida del formulario.
	 */
	private function getData()
	{
		$data = array();
		$data['contactenos_padre'] = $this->_getSanitizedParam("contactenos_padre");

		$data['contactenos_titulo'] = $this->_getSanitizedParam("contactenos_titulo");
		$data['contactenos_color_txt'] = $this->_getSanitizedParam("contactenos_color_txt");
		$data['contactenos_color_fondo'] = $this->_getSanitizedParam("contactenos_color_fondo");
		$data['contactenos_color_bandera'] = $this->_getSanitizedParam("contactenos_color_bandera");
		$data['contactenos_cuadro_color'] = $this->_getSanitizedParam("contactenos_cuadro_color");
		$data['contactenos_cuadro_img_fondo'] = "";
		$data['contactenos_cuadro_img'] = "";
		$data['contactenos_img_fendy'] = "";
		$data['contactenos_titulo_boton'] = $this->_getSanitizedParam("contactenos_titulo_boton");
		$data['contactenos_boton_color'] = $this->_getSanitizedParam("contactenos_boton_color");
		$data['contactenos_boton_color_fondo'] = $this->_getSanitizedParam("contactenos_boton_color_fondo");
		$data['contactenos_logo'] = "";
		$data['contactenos_logo2'] = "";
		$data['contactenos_color_bandera2'] = $this->_getSanitizedParam("contactenos_color_bandera2");
		$data['contactenos_color_fondo_1'] = $this->_getSanitizedParam("contactenos_color_fondo_1");
		$data['contactenos_color_fondo_2'] = $this->_getSanitizedParam("contactenos_color_fondo_2");
		$data['contactenos_escribenos'] = $this->_getSanitizedParam("contactenos_escribenos");
		$data['contactenos_color_escribenos'] = $this->_getSanitizedParam("contactenos_color_escribenos");
		$data['contactenos_descripcion'] = $this->_getSanitizedParamHtml("contactenos_descripcion");
		$data['contactenos_btn1_color'] = $this->_getSanitizedParam("contactenos_btn1_color");
		$data['contactenos_interna_img'] = "";
		$data['contactenos_btn1_link'] = $this->_getSanitizedParam("contactenos_btn1_link");
		$data['contactenos_btn2_color'] = $this->_getSanitizedParam("contactenos_btn2_color");
		$data['contactenos_btn2_img'] = "";
		$data['contactenos_titulo_interno'] = $this->_getSanitizedParam("contactenos_titulo_interno");
		$data['contactenos_btn3_color'] = $this->_getSanitizedParam("contactenos_btn3_color");
		$data['contactenos_btn3_img'] = "";
		$data['contactenos_descripcion2'] = $this->_getSanitizedParamHtml("contactenos_descripcion2");
		$data['contactenos_btn4_color'] = $this->_getSanitizedParam("contactenos_btn4_color");
		$data['contactenos_btn4_img'] = "";
		$data['contactenos_btn4_link'] = $this->_getSanitizedParam("contactenos_btn4_link");
		$data['contactenos_btn4_txt'] = $this->_getSanitizedParam("contactenos_btn4_txt");
		$data['contactenos_btn5_color'] = $this->_getSanitizedParam("contactenos_btn5_color");
		$data['contactenos_btn5_img'] = "";
		$data['contactenos_btn5_link'] = $this->_getSanitizedParam("contactenos_btn5_link");
		$data['contactenos_btn5_txt'] = $this->_getSanitizedParam("contactenos_btn5_txt");
		$data['contactenos_btn6_color'] = $this->_getSanitizedParam("contactenos_btn6_color");
		$data['contactenos_btn6_img'] = "";
		$data['contactenos_btn6_txt'] = $this->_getSanitizedParam("contactenos_btn6_txt");
		$data['tipo'] = $this->_getSanitizedParam("tipo");
		$data['contactenos_cargo'] = $this->_getSanitizedParam("contactenos_cargo");


		return $data;
	}
	/**
	 * Genera la consulta con los filtros de este controlador.
	 *
	 * @return array cadena con los filtros que se van a asignar a la base de datos
	 */
	protected function getFilter()
	{
		$filtros = " 1 = 1 AND contactenos_id != 1 ";
		$padre = $this->_getSanitizedParam('padre');
		if ($padre) {
			$filtros = $filtros . " AND contactenos_padre = '$padre' ";
		} else {
			$filtros = $filtros . " AND contactenos_padre IS NULL OR contactenos_padre = '0' ";
		}


		if (Session::getInstance()->get($this->namefilter) != "") {
			$filters = (object)Session::getInstance()->get($this->namefilter);
			if ($filters->contactenos_titulo != '') {
				$filtros = $filtros . " AND contactenos_titulo LIKE '%" . $filters->contactenos_titulo . "%'";
			}
			if ($filters->contactenos_cuadro_img_fondo != '') {
				$filtros = $filtros . " AND contactenos_cuadro_img_fondo LIKE '%" . $filters->contactenos_cuadro_img_fondo . "%'";
			}
		}
		return $filtros;
	}

	/**
	 * Recibe y asigna los filtros de este controlador
	 *
	 * @return void
	 */
	protected function filters()
	{
		if ($this->getRequest()->isPost() == true) {
			Session::getInstance()->set($this->namepageactual, 1);
			$parramsfilter = array();
			$parramsfilter['contactenos_titulo'] =  $this->_getSanitizedParam("contactenos_titulo");
			$parramsfilter['contactenos_cuadro_img_fondo'] =  $this->_getSanitizedParam("contactenos_cuadro_img_fondo");
			Session::getInstance()->set($this->namefilter, $parramsfilter);
		}
		if ($this->_getSanitizedParam("cleanfilter") == 1) {
			Session::getInstance()->set($this->namefilter, '');
			Session::getInstance()->set($this->namepageactual, 1);
		}
	}
}
