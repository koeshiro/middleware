<?php
namespace Koeshiro\Middleware\Interfaces;
/**
 *
 * @author koesh
 */
interface ControllerMiddlewareInterface {
    function __construct(MiddlewareContextInterface $context);
    public function addMiddleware(MiddlewareHandlerInterface $handler);
    public function useController($controller);
}
