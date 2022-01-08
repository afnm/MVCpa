<?php

require_once 'framework/Controller.php';
require_once 'model/User.php';

class ControllerConnection extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $this->generateView();
    }

    public function connect()
    {
        if ($this->request->existingParameter("login") && $this->request->existingParameter("mdp")) {
            $login = $this->request->getParameter("login");
            $pwd = $this->request->getParameter("mdp");
            if ($this->user->connect($login, $pwd)) {
                $user = $this->user->getUser($login, $pwd);
                $this->request->getSession()->setAttribute("idUser", $user['idUser']);
                $this->request->getSession()->setAttribute("login", $user['login']);
            }
            else
                $this->generateView(array('msgError' => 'Incorrect username or password'), "index");
        }
        else
            throw new Exception("There is no username and password");
    }

    public function disconnect()
    {
        $this->request->getSession()->destroy();
        $this->redirect("home");
    }

}
