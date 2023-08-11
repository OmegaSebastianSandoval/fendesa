<?php
/**
* Controlador de Ruleta que permite la  creacion, edicion  y eliminacion de los ruleta del Sistema
*/
class Administracion_ruletaController extends Administracion_mainController
{
	public $botonpanel = 6;
	/**
	 * $mainModel  instancia del modelo de  base de datos ruleta
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
	protected $pages ;

	/**
	 * $namefilter nombre de la variable a la fual se le van a guardar los filtros
	 * @var string
	 */
	protected $namefilter;

	/**
	 * $_csrf_section  nombre de la variable general csrf  que se va a almacenar en la session
	 * @var string
	 */
	protected $_csrf_section = "administracion_ruleta";

	/**
	 * $namepages nombre de la pvariable en la cual se va a guardar  el numero de seccion en la paginacion del controlador
	 * @var string
	 */
	protected $namepages;



	/**
     * Inicializa las variables principales del controlador ruleta .
     *
     * @return void.
     */
	public function init()
	{
		$this->mainModel = new Administracion_Model_DbTable_Ruleta();
		$this->namefilter = "parametersfilterruleta";
		$this->route = "/administracion/ruleta";
		$this->namepages ="pages_ruleta";
		$this->namepageactual ="page_actual_ruleta";
		$this->_view->route = $this->route;
		if(Session::getInstance()->get($this->namepages)){
			$this->pages = Session::getInstance()->get($this->namepages);
		} else {
			$this->pages = 20;
		}
		parent::init();
	}


	/**
     * Recibe la informacion y  muestra un listado de  ruleta con sus respectivos filtros.
     *
     * @return void.
     */
	public function indexAction()
	{
		$title = "Aministración de ruleta";
		$this->getLayout()->setTitle($title);
		$this->_view->titlesection = $title;
		$this->filters();
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$filters =(object)Session::getInstance()->get($this->namefilter);
        $this->_view->filters = $filters;
		$filters = $this->getFilter();
		$order = "orden ASC";
		$list = $this->mainModel->getList($filters,$order);
		$amount = $this->pages;
		$page = $this->_getSanitizedParam("page");
		if (!$page && Session::getInstance()->get($this->namepageactual)) {
		   	$page = Session::getInstance()->get($this->namepageactual);
		   	$start = ($page - 1) * $amount;
		} else if(!$page){
			$start = 0;
		   	$page=1;
			Session::getInstance()->set($this->namepageactual,$page);
		} else {
			Session::getInstance()->set($this->namepageactual,$page);
		   	$start = ($page - 1) * $amount;
		}
		$this->_view->register_number = count($list);
		$this->_view->pages = $this->pages;
		$this->_view->totalpages = ceil(count($list)/$amount);
		$this->_view->page = $page;
		$this->_view->lists = $this->mainModel->getListPages($filters,$order,$start,$amount);
		$this->_view->csrf_section = $this->_csrf_section;
	}

	/**
     * Genera la Informacion necesaria para editar o crear un  ruleta  y muestra su formulario
     *
     * @return void.
     */
	public function manageAction()
	{
		$this->_view->route = $this->route;
		$this->_csrf_section = "manage_ruleta_".date("YmdHis");
		$this->_csrf->generateCode($this->_csrf_section);
		$this->_view->csrf_section = $this->_csrf_section;
		$this->_view->csrf = Session::getInstance()->get('csrf')[$this->_csrf_section];
		$this->_view->list_ruleta_categoria1_abrir = $this->getRuletacategoria1abrir();
		$this->_view->list_ruleta_categoria2_abrir = $this->getRuletacategoria2abrir();
		$this->_view->list_ruleta_categoria3_abrir = $this->getRuletacategoria3abrir();
		$this->_view->list_ruleta_abrir_link1 = $this->getRuletaabrirlink1();
		$this->_view->list_ruleta_abrir_link2 = $this->getRuletaabrirlink2();
		$this->_view->list_ruleta_abrir_link3 = $this->getRuletaabrirlink3();
		$id = $this->_getSanitizedParam("id");
		if ($id > 0) {
			$content = $this->mainModel->getById($id);
			if($content->ruleta_id){
				$this->_view->content = $content;
				$this->_view->routeform = $this->route."/update";
				$title = "Actualizar ruleta";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
			}else{
				$this->_view->routeform = $this->route."/insert";
				$title = "Crear ruleta";
				$this->getLayout()->setTitle($title);
				$this->_view->titlesection = $title;
			}
		} else {
			$this->_view->routeform = $this->route."/insert";
			$title = "Crear ruleta";
			$this->getLayout()->setTitle($title);
			$this->_view->titlesection = $title;
		}
	}

	/**
     * Inserta la informacion de un ruleta  y redirecciona al listado de ruleta.
     *
     * @return void.
     */
	public function insertAction(){
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf ) {	
			$data = $this->getData();
			$uploadImage =  new Core_Model_Upload_Image();
			if($_FILES['ruleta_fendyshop_icono']['name'] != ''){
				$data['ruleta_fendyshop_icono'] = $uploadImage->upload("ruleta_fendyshop_icono");
			}
			if($_FILES['ruleta_categoria1_img']['name'] != ''){
				$data['ruleta_categoria1_img'] = $uploadImage->upload("ruleta_categoria1_img");
			}
			if($_FILES['ruleta_categoria2_img']['name'] != ''){
				$data['ruleta_categoria2_img'] = $uploadImage->upload("ruleta_categoria2_img");
			}
			if($_FILES['ruleta_categoria3_img']['name'] != ''){
				$data['ruleta_categoria3_img'] = $uploadImage->upload("ruleta_categoria3_img");
			}
			if($_FILES['ruleta_img_info']['name'] != ''){
				$data['ruleta_img_info'] = $uploadImage->upload("ruleta_img_info");
			}
			if($_FILES['ruleta_icono_principal']['name'] != ''){
				$data['ruleta_icono_principal'] = $uploadImage->upload("ruleta_icono_principal");
			}
			if($_FILES['ruleta_img_link1']['name'] != ''){
				$data['ruleta_img_link1'] = $uploadImage->upload("ruleta_img_link1");
			}
			if($_FILES['ruleta_img_link2']['name'] != ''){
				$data['ruleta_img_link2'] = $uploadImage->upload("ruleta_img_link2");
			}
			if($_FILES['ruleta_img_link3']['name'] != ''){
				$data['ruleta_img_link3'] = $uploadImage->upload("ruleta_img_link3");
			}
			if($_FILES['ruleta_img_cabezon']['name'] != ''){
				$data['ruleta_img_cabezon'] = $uploadImage->upload("ruleta_img_cabezon");
			}
			if($_FILES['ruleta_img_fondocabezon']['name'] != ''){
				$data['ruleta_img_fondocabezon'] = $uploadImage->upload("ruleta_img_fondocabezon");
			}
			$id = $this->mainModel->insert($data);
			$this->mainModel->changeOrder($id,$id);
			$data['ruleta_id']= $id;
			$data['log_log'] = print_r($data,true);
			$data['log_tipo'] = 'CREAR RULETA';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);
		}
		header('Location: '.$this->route.''.'');
	}

	/**
     * Recibe un identificador  y Actualiza la informacion de un ruleta  y redirecciona al listado de ruleta.
     *
     * @return void.
     */
	public function updateAction(){
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_getSanitizedParam("csrf_section")] == $csrf ) {
			$id = $this->_getSanitizedParam("id");
			$content = $this->mainModel->getById($id);
			if ($content->ruleta_id) {
				$data = $this->getData();
				$uploadImage =  new Core_Model_Upload_Image();
				if($_FILES['ruleta_fendyshop_icono']['name'] != ''){
					if($content->ruleta_fendyshop_icono){
						$uploadImage->delete($content->ruleta_fendyshop_icono);
					}
					$data['ruleta_fendyshop_icono'] = $uploadImage->upload("ruleta_fendyshop_icono");
				} else {
					$data['ruleta_fendyshop_icono'] = $content->ruleta_fendyshop_icono;
				}
			
				if($_FILES['ruleta_categoria1_img']['name'] != ''){
					if($content->ruleta_categoria1_img){
						$uploadImage->delete($content->ruleta_categoria1_img);
					}
					$data['ruleta_categoria1_img'] = $uploadImage->upload("ruleta_categoria1_img");
				} else {
					$data['ruleta_categoria1_img'] = $content->ruleta_categoria1_img;
				}
			
				if($_FILES['ruleta_categoria2_img']['name'] != ''){
					if($content->ruleta_categoria2_img){
						$uploadImage->delete($content->ruleta_categoria2_img);
					}
					$data['ruleta_categoria2_img'] = $uploadImage->upload("ruleta_categoria2_img");
				} else {
					$data['ruleta_categoria2_img'] = $content->ruleta_categoria2_img;
				}
			
				if($_FILES['ruleta_categoria3_img']['name'] != ''){
					if($content->ruleta_categoria3_img){
						$uploadImage->delete($content->ruleta_categoria3_img);
					}
					$data['ruleta_categoria3_img'] = $uploadImage->upload("ruleta_categoria3_img");
				} else {
					$data['ruleta_categoria3_img'] = $content->ruleta_categoria3_img;
				}
			
				if($_FILES['ruleta_img_info']['name'] != ''){
					if($content->ruleta_img_info){
						$uploadImage->delete($content->ruleta_img_info);
					}
					$data['ruleta_img_info'] = $uploadImage->upload("ruleta_img_info");
				} else {
					$data['ruleta_img_info'] = $content->ruleta_img_info;
				}

				if($_FILES['ruleta_icono_principal']['name'] != ''){
					if($content->ruleta_icono_principal){
						$uploadImage->delete($content->ruleta_icono_principal);
					}
					$data['ruleta_icono_principal'] = $uploadImage->upload("ruleta_icono_principal");
				} else {
					$data['ruleta_icono_principal'] = $content->ruleta_icono_principal;
				}
			
				if($_FILES['ruleta_img_link1']['name'] != ''){
					if($content->ruleta_img_link1){
						$uploadImage->delete($content->ruleta_img_link1);
					}
					$data['ruleta_img_link1'] = $uploadImage->upload("ruleta_img_link1");
				} else {
					$data['ruleta_img_link1'] = $content->ruleta_img_link1;
				}
			
				if($_FILES['ruleta_img_link2']['name'] != ''){
					if($content->ruleta_img_link2){
						$uploadImage->delete($content->ruleta_img_link2);
					}
					$data['ruleta_img_link2'] = $uploadImage->upload("ruleta_img_link2");
				} else {
					$data['ruleta_img_link2'] = $content->ruleta_img_link2;
				}
			
				if($_FILES['ruleta_img_link3']['name'] != ''){
					if($content->ruleta_img_link3){
						$uploadImage->delete($content->ruleta_img_link3);
					}
					$data['ruleta_img_link3'] = $uploadImage->upload("ruleta_img_link3");
				} else {
					$data['ruleta_img_link3'] = $content->ruleta_img_link3;
				}
			
				if($_FILES['ruleta_img_cabezon']['name'] != ''){
					if($content->ruleta_img_cabezon){
						$uploadImage->delete($content->ruleta_img_cabezon);
					}
					$data['ruleta_img_cabezon'] = $uploadImage->upload("ruleta_img_cabezon");
				} else {
					$data['ruleta_img_cabezon'] = $content->ruleta_img_cabezon;
				}
			
				if($_FILES['ruleta_img_fondocabezon']['name'] != ''){
					if($content->ruleta_img_fondocabezon){
						$uploadImage->delete($content->ruleta_img_fondocabezon);
					}
					$data['ruleta_img_fondocabezon'] = $uploadImage->upload("ruleta_img_fondocabezon");
				} else {
					$data['ruleta_img_fondocabezon'] = $content->ruleta_img_fondocabezon;
				}
				$this->mainModel->update($data,$id);
			}
			$data['ruleta_id']=$id;
			$data['log_log'] = print_r($data,true);
			$data['log_tipo'] = 'EDITAR RULETA';
			$logModel = new Administracion_Model_DbTable_Log();
			$logModel->insert($data);}
		header('Location: '.$this->route.''.'');
	}

	/**
     * Recibe un identificador  y elimina un ruleta  y redirecciona al listado de ruleta.
     *
     * @return void.
     */
	public function deleteAction()
	{
		$this->setLayout('blanco');
		$csrf = $this->_getSanitizedParam("csrf");
		if (Session::getInstance()->get('csrf')[$this->_csrf_section] == $csrf ) {
			$id =  $this->_getSanitizedParam("id");
			if (isset($id) && $id > 0) {
				$content = $this->mainModel->getById($id);
				if (isset($content)) {
					$uploadImage =  new Core_Model_Upload_Image();
					if (isset($content->ruleta_fendyshop_icono) && $content->ruleta_fendyshop_icono != '') {
						$uploadImage->delete($content->ruleta_fendyshop_icono);
					}
					
					if (isset($content->ruleta_categoria1_img) && $content->ruleta_categoria1_img != '') {
						$uploadImage->delete($content->ruleta_categoria1_img);
					}
					
					if (isset($content->ruleta_categoria2_img) && $content->ruleta_categoria2_img != '') {
						$uploadImage->delete($content->ruleta_categoria2_img);
					}
					
					if (isset($content->ruleta_categoria3_img) && $content->ruleta_categoria3_img != '') {
						$uploadImage->delete($content->ruleta_categoria3_img);
					}
					
					if (isset($content->ruleta_img_info) && $content->ruleta_img_info != '') {
						$uploadImage->delete($content->ruleta_img_info);
					}
					
					if (isset($content->ruleta_icono_principal) && $content->ruleta_icono_principal != '') {
						$uploadImage->delete($content->ruleta_icono_principal);
					}
					if (isset($content->ruleta_img_link1) && $content->ruleta_img_link1 != '') {
						$uploadImage->delete($content->ruleta_img_link1);
					}
					
					if (isset($content->ruleta_img_link2) && $content->ruleta_img_link2 != '') {
						$uploadImage->delete($content->ruleta_img_link2);
					}
					
					if (isset($content->ruleta_img_link3) && $content->ruleta_img_link3 != '') {
						$uploadImage->delete($content->ruleta_img_link3);
					}
					
					if (isset($content->ruleta_img_cabezon) && $content->ruleta_img_cabezon != '') {
						$uploadImage->delete($content->ruleta_img_cabezon);
					}
					
					if (isset($content->ruleta_img_fondocabezon) && $content->ruleta_img_fondocabezon != '') {
						$uploadImage->delete($content->ruleta_img_fondocabezon);
					}
					$this->mainModel->deleteRegister($id);$data = (array)$content;
					$data['log_log'] = print_r($data,true);
					$data['log_tipo'] = 'BORRAR RULETA';
					$logModel = new Administracion_Model_DbTable_Log();
					$logModel->insert($data); }
			}
		}
		header('Location: '.$this->route.''.'');
	}

	/**
     * Recibe la informacion del formulario y la retorna en forma de array para la edicion y creacion de Ruleta.
     *
     * @return array con toda la informacion recibida del formulario.
     */
	private function getData()
	{
		$data = array();
		$data['ruleta_color_fondo1'] = $this->_getSanitizedParam("ruleta_color_fondo1");
		$data['ruleta_color_fondo2'] = $this->_getSanitizedParam("ruleta_color_fondo2");
		$data['ruleta_color_fondo3'] = $this->_getSanitizedParam("ruleta_color_fondo3");
		$data['ruleta_color_txt1'] = $this->_getSanitizedParam("ruleta_color_txt1");
		$data['ruleta_color_txt2'] = $this->_getSanitizedParam("ruleta_color_txt2");
		$data['ruleta_color_txt3'] = $this->_getSanitizedParam("ruleta_color_txt3");
		$data['ruleta_fendyshop_txt'] = $this->_getSanitizedParam("ruleta_fendyshop_txt");
		$data['ruleta_fendyshop_icono'] = "";
		$data['ruleta_fendyshop_fondo'] = $this->_getSanitizedParam("ruleta_fendyshop_fondo");
		$data['ruleta_categorias'] = $this->_getSanitizedParamHtml("ruleta_categorias");
		$data['ruleta_categoria1'] = $this->_getSanitizedParam("ruleta_categoria1");
		$data['ruleta_categoria1_img'] = "";
		$data['ruleta_categoria1_color'] = $this->_getSanitizedParam("ruleta_categoria1_color");
		$data['ruleta_categoria1_abrir'] = $this->_getSanitizedParam("ruleta_categoria1_abrir");
		$data['ruleta_categoria2'] = $this->_getSanitizedParam("ruleta_categoria2");
		$data['ruleta_categoria2_img'] = "";
		$data['ruleta_categoria2_color'] = $this->_getSanitizedParam("ruleta_categoria2_color");
		$data['ruleta_categoria2_abrir'] = $this->_getSanitizedParam("ruleta_categoria2_abrir");
		$data['ruleta_categoria3'] = $this->_getSanitizedParam("ruleta_categoria3");
		$data['ruleta_categoria3_img'] = "";
		$data['ruleta_categoria3_color'] = $this->_getSanitizedParam("ruleta_categoria3_color");
		$data['ruleta_categoria3_abrir'] = $this->_getSanitizedParam("ruleta_categoria3_abrir");
		$data['ruleta_color_bandera'] = $this->_getSanitizedParam("ruleta_color_bandera");
		$data['ruleta_color_ruleta'] = $this->_getSanitizedParam("ruleta_color_ruleta");
		$data['ruleta_txt_info'] = $this->_getSanitizedParam("ruleta_txt_info");
		$data['ruleta_color_info'] = $this->_getSanitizedParam("ruleta_color_info");
		$data['ruleta_img_info'] = "";
		$data['ruleta_icono_principal'] = "";

		// $data['ruleta_icono_principal'] = $this->_getSanitizedParam("ruleta_icono_principal");
		$data['ruleta_fondo_iconos'] = $this->_getSanitizedParam("ruleta_fondo_iconos");
		$data['ruleta_txt_links_interes'] = $this->_getSanitizedParam("ruleta_txt_links_interes");
		$data['ruleta_txt_link1'] = $this->_getSanitizedParam("ruleta_txt_link1");
		$data['ruleta_img_link1'] = "";
		$data['ruleta_fondo_link1'] = $this->_getSanitizedParam("ruleta_fondo_link1");
		$data['ruleta_abrir_link1'] = $this->_getSanitizedParam("ruleta_abrir_link1");
		$data['ruleta_txt_link2'] = $this->_getSanitizedParam("ruleta_txt_link2");
		$data['ruleta_img_link2'] = "";
		$data['ruleta_fondo_link2'] = $this->_getSanitizedParam("ruleta_fondo_link2");
		$data['ruleta_abrir_link2'] = $this->_getSanitizedParam("ruleta_abrir_link2");
		$data['ruleta_txt_link3'] = $this->_getSanitizedParam("ruleta_txt_link3");
		$data['ruleta_img_link3'] = "";
		$data['ruleta_fondo_link3'] = $this->_getSanitizedParam("ruleta_fondo_link3");
		$data['ruleta_abrir_link3'] = $this->_getSanitizedParam("ruleta_abrir_link3");
		$data['ruleta_descripcion'] = $this->_getSanitizedParamHtml("ruleta_descripcion");
		$data['ruleta_img_cabezon'] = "";
		$data['ruleta_img_fondocabezon'] = "";
		if($this->_getSanitizedParam("ruleta_estado") == '' ) {
			$data['ruleta_estado'] = '0';
		} else {
			$data['ruleta_estado'] = $this->_getSanitizedParam("ruleta_estado");
		}
		$data['ruleta_enlace_principal'] = $this->_getSanitizedParamHtml("ruleta_enlace_principal");
		$data['ruleta_enlace_cat1'] = $this->_getSanitizedParamHtml("ruleta_enlace_cat1");
		$data['ruleta_enlace_cat2'] = $this->_getSanitizedParamHtml("ruleta_enlace_cat2");
		$data['ruleta_enlace_cat3'] = $this->_getSanitizedParamHtml("ruleta_enlace_cat3");
		$data['ruleta_enlace_info'] = $this->_getSanitizedParamHtml("ruleta_enlace_info");
		$data['ruleta_enlace_link1'] = $this->_getSanitizedParamHtml("ruleta_enlace_link1");
		$data['ruleta_enlace_link2'] = $this->_getSanitizedParamHtml("ruleta_enlace_link2");
		$data['ruleta_enlace_link3'] = $this->_getSanitizedParamHtml("ruleta_enlace_link3");
	
		return $data;
	}

	/**
     * Genera los valores del campo ruleta_categoria1_abrir.
     *
     * @return array cadena con los valores del campo ruleta_categoria1_abrir.
     */
	private function getRuletacategoria1abrir()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';		return $array;
	}


	/**
     * Genera los valores del campo ruleta_categoria2_abrir.
     *
     * @return array cadena con los valores del campo ruleta_categoria2_abrir.
     */
	private function getRuletacategoria2abrir()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';		return $array;
	}


	/**
     * Genera los valores del campo ruleta_categoria3_abrir.
     *
     * @return array cadena con los valores del campo ruleta_categoria3_abrir.
     */
	private function getRuletacategoria3abrir()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';		return $array;
	}


	/**
     * Genera los valores del campo ruleta_abrir_link1.
     *
     * @return array cadena con los valores del campo ruleta_abrir_link1.
     */
	private function getRuletaabrirlink1()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';		return $array;
	}


	/**
     * Genera los valores del campo ruleta_abrir_link2.
     *
     * @return array cadena con los valores del campo ruleta_abrir_link2.
     */
	private function getRuletaabrirlink2()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';		return $array;
	}


	/**
     * Genera los valores del campo ruleta_abrir_link3.
     *
     * @return array cadena con los valores del campo ruleta_abrir_link3.
     */
	private function getRuletaabrirlink3()
	{
		$array = array();
		$array['1'] = 'Ventana actual';
		$array['2'] = 'Ventana nueva';

		return $array;
	}

	/**
     * Genera la consulta con los filtros de este controlador.
     *
     * @return array cadena con los filtros que se van a asignar a la base de datos
     */
    protected function getFilter()
    {
    	$filtros = " 1 = 1 ";
        if (Session::getInstance()->get($this->namefilter)!="") {
            $filters =(object)Session::getInstance()->get($this->namefilter);
            if ($filters->ruleta_icono_principal != '') {
                $filtros = $filtros." AND ruleta_icono_principal LIKE '%".$filters->ruleta_icono_principal."%'";
            }
            if ($filters->ruleta_img_cabezon != '') {
                $filtros = $filtros." AND ruleta_img_cabezon LIKE '%".$filters->ruleta_img_cabezon."%'";
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
        if ($this->getRequest()->isPost()== true) {
        	Session::getInstance()->set($this->namepageactual,1);
            $parramsfilter = array();
					$parramsfilter['ruleta_icono_principal'] =  $this->_getSanitizedParam("ruleta_icono_principal");
					$parramsfilter['ruleta_img_cabezon'] =  $this->_getSanitizedParam("ruleta_img_cabezon");Session::getInstance()->set($this->namefilter, $parramsfilter);
        }
        if ($this->_getSanitizedParam("cleanfilter") == 1) {
            Session::getInstance()->set($this->namefilter, '');
            Session::getInstance()->set($this->namepageactual,1);
        }
    }
}