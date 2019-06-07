<?php

use Phalcon\Mvc\Controller;

class HomeController extends Controller
{
    public function indexAction()
    { 
        
    }

    public function submitAction()
    {

        // get the request from POST
		$name = $this->request->get('name');
		$year = $this->request->get('year');

		
        
            // $this->response->redirect("/home");
    }
    public function autofocusAction()
    {
        header("location:\home");
    }        
}
    
   


    
    










?>