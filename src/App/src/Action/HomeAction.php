<?php


namespace App\Action;

use App\Service\CurriculumService;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class HomeAction implements ServerMiddlewareInterface
{
    /**
     * @var Template\TemplateRendererInterface|null
     */
    private $template;
    /**
     * @var CurriculumService
     */
    private $service;

    /**
     * HomeAction constructor.
     * @param Template\TemplateRendererInterface|null $template
     * @param CurriculumService $service
     */
    public function __construct(Template\TemplateRendererInterface $template, CurriculumService $service)
    {
        $this->template = $template;
        $this->service = $service;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * to the next middleware component to create the response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     *
     * @return HtmlResponse
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $data = ['layout' => 'layout::null'];

        $curriculum = $this->service->getCurriculum();

        return new HtmlResponse($this->template->render('app::aboutme', array_merge($data, $curriculum)));
    }

}