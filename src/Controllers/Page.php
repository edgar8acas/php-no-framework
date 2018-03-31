<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Response;
use Example\Template\FrontendRenderer;
use Example\Page\PageReader;
use Example\Page\InvalidPageException;

class Page
{
    private $response;
    private $frontendRenderer;
    private $pageReader;

    public function __construct(
        Response $response,
        FrontendRenderer $frontendRenderer,
        PageReader $pagereader
    ) {
        $this->response = $response;
        $this->frontendRenderer = $frontendRenderer;
        $this->pagereader = $pagereader;
    }

    public function show($params)
    {
        $slug = $params['slug'];

        try {
            $data['content'] = $this->pagereader->readBySlug($slug);
        } catch (InvalidPageException $e) {
            $this->response->setStatusCode(404);
            return $this->response->setContent('404 - Page not found');
        }
        $html = $this->frontendRenderer->render('Page', $data);
        $this->response->setContent($html);
    }
}