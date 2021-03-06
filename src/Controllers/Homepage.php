<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\Template\FrontendRenderer;

class Homepage
{
    private $request;
    private $response;
    private $frontendRenderer;

    public function __construct(
        Request $request, 
        Response $response,
        FrontendRenderer $frontendRenderer
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->frontendRenderer = $frontendRenderer;
    }

    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];
        $html = $this->frontendRenderer->render('Homepage', $data);
        $this->response->setContent($html);
    }
}