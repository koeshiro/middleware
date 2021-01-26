<?php

namespace Koeshiro\Middleware\Interfaces;

use Psr\Http\Message\ServerRequestInterface;
/**
 *
 * @author koesh
 */
interface MiddlewareHandlerInterface {
    public function handler(MiddlewareContextInterface $context, ServerRequestInterface $Request, \Closure $next);
}
