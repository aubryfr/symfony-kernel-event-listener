<?php

namespace Aubry\SymfonyKernelEventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

interface KernelRequestListenerInterface
{
    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event): void;
}

