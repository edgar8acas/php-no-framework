<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\Template\FrontendRenderer;

class ControllerUsuario implements Crud
{
    private $request;
    private $response;
    private $frontendRenderer;

    public function __construct(Request $request, Response $response, FrontendRenderer $frontendRenderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->frontendRenderer = $frontendRenderer;
    }

    public function Create() 
    {
        $body = $this->request->getRawBody();
        $json = json_decode($body, true);
        
        $data = '<pre>'.print_r($json, true).'</pre>';
        
        $html = $this->frontendRenderer->render('Page', $json);
        $this->response->setContent($html);
    }

    function Read() : object{}
    function ReadById($id) : object{}
    function Update($object){}
    function Delete($id){}
}