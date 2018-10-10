<?php

namespace Aubry\SymfonyKernelEventListener;

use Symfony\Component\HttpKernel\Event\FinishRequestEvent;

interface KernelFinishRequestListenerInterface
{
    /**
     * @param FinishRequestEvent $event
     */
    public function onKernelFinishRequest(FinishRequestEvent $event): void;
}

