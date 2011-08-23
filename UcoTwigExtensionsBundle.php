<?php

namespace Uco\TwigExtensionsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class UcoTwigExtensionsBundle extends BaseBundle
{
    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    public function getPath()
    {
        return __DIR__;
    } 
}
