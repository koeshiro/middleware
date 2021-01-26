<?php

namespace Koeshiro\Middleware;

/**
 * Description of ControllerMiddleware
 *
 * @author koesh
 */
class ControllerMiddleware implements Interfaces\ControllerMiddlewareInterface {
    /**
     *
     * @var Interfaces\MiddlewareHandlerInterface[] 
     */
    protected $middleware = [];
    protected $context = null;
    public function __construct(Interfaces\MiddlewareContextInterface $context) {
        $this->context = $context;
    }

    public function addMiddleware(Interfaces\MiddlewareHandlerInterface $handler) {
        $this->middleware[]=$handler;
    }

    public function useController($controller, $Request) {
        $index = 0; $count = count($this->middleware);
        $next=function () use($next,$index,$count){
            if($index<$count){
                return $this->middleware[$index]->handler($context, $Request, $next);
            }
            $index++;
        };
    }

}
