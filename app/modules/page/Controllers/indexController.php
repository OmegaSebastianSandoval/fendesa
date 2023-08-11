<?php

/**
 *
 */

class Page_indexController extends Page_mainController
{

  public function indexAction()
  {
    $this->_view->banner = $this->template->banner("1");


    $this->_view->contenido = $this->template->getContentseccionHome("2");
    $ruletaModel = new Administracion_Model_DbTable_Ruleta();
    $id = $this->_getSanitizedParam("id");
    if ($id) {
      $this->_view->primerRuleta = $primerRuleta = $ruletaModel->getById($id);

      $this->_view->ruleta = $ruleta = $ruletaModel->getList("ruleta_estado = 1 AND ruleta_id!='$id'", "orden ASC LIMIT 4");

    } else {
      $this->_view->primerRuleta = $primerRuleta = $ruletaModel->getList("ruleta_estado = 1", "orden ASC")[0];
      $this->_view->ruleta = $ruleta = $ruletaModel->getList("ruleta_estado = 1 AND ruleta_id!='$primerRuleta->ruleta_id'", "orden ASC LIMIT 4");
    }



    /* echo '<pre>';
    print_r($ruleta);
    echo '</pre>'; */
  }
}
