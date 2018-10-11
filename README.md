# symfony-event-listener

Provides basic interfaces for implementing default kernel event listeners in Symfony.

See : https://symfony.com/doc/4.0/components/http_kernel.html

## Examples

Implement `KernelRequestListenerInterface` to be ready to handle the [`kernel.request` event](https://symfony.com/doc/4.0/components/http_kernel.html#the-kernel-request-event).

```php
<?php

namespace _____;

use Aubry\SymfonyKernelEventListener\KernelRequestListenerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class _____Listener 
{
    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event): void
    {
        // Implement desired behaviour here.
    }
}
```

## TODO

- [ ] Implement basic dependency checks
