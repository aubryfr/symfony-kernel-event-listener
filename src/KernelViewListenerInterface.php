<?php

namespace Aubry\SymfonyKernelEventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;

interface KernelViewListenerInterface
{
    /**
     * @param GetResponseForControllerResultEvent $event
     */
    public function onKernelView(GetResponseForControllerResultEvent $event): void;
}

