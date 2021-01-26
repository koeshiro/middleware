<?php
namespace Koeshiro\Middleware;
/**
 * Description of MiddlewareHandler
 *
 * @author koesh
 */
abstract class MiddlewareHandler implements Interfaces\MiddlewareHandlerInterface {
    abstract public function handler(Interfaces\MiddlewareContextInterface $context, \Psr\Http\Message\ServerRequestInterface $Request, \Closure $next);
}
