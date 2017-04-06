<?php

namespace ICGM2\MessageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MessageBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSMessageBundle';
    }
}
