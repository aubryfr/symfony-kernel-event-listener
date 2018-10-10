<?php

namespace Aubry\SymfonyKernelEventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

interface KernelControllerListenerInterface
{
    /**
     * @param FilterControllerEvent $event
     */
    public function onKernelController(FilterControllerEvent $event): void;
}
