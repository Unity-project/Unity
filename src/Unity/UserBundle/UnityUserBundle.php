<?php

namespace Unity\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UnityUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}