<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class Home
  {
   public function Inicio()
    {
        $smart=new Smarty();
        $smarty->display('Default.tpl');
    }
    

    public function Fun2()
    {
        echo "En controlador Home y metodo Fun2";
    }

  }

 ?>