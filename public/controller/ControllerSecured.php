<?php

require_once 'framework/Controller.php';


abstract class ControllerSecured extends Controller
{

    public function executeAction($action)
    {
       
        if ($this->request->getSession()->existingAttribute("idUser")) {
            parent::executeAction($action);
        }
        else {
            $this->redirect("connection");
        }
    }

    /**
     * Appel pour génèrer la vue associée au contrôleur courant
     * 
     * @param array $datasView Données nécessaires pour la génération de la vue
     * @param string $action Action associée à la vue (permet à un contrôleur de générer une vue pour une action spécifique)
     */
    protected function generateView($datasView = array(), $action = null)
    {
        parent::generateView($datasView, $action);
    }
}

