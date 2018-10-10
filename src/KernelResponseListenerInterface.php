<?php

namespace Aubry\SymfonyKernelEventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

interface KernelResponseListenerInterface
{
    /**
     * @param FilterResponseEvent $event
     */
    public function onKernelResponse(FilterResponseEvent $event): void;
}
