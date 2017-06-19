<?php


namespace App\Action;

use App\Service\CurriculumService;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class CurriculumAction implements ServerMiddlewareInterface
{

    /**
     * @var CurriculumService
     */
    private $service;

    /**
     * CurriculumAction constructor.
     * @param CurriculumService $service
     */
    public function __construct(CurriculumService $service)
    {
        $this->service = $service;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * to the next middleware component to create the response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     *
     * @return JsonResponse
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        return new JsonResponse(['data' => $this->service->getCurriculum()]);
    }
}