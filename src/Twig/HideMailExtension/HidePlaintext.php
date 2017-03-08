<?php

namespace AppBundle\Twig\HideMailExtension;

use AppBundle\Twig\HideMailExtension\HideMailInterface;

class HidePlaintext implements HideMailInterface
{
    public function hideMail(string $email) : string
    {
        return $email;
    }
}
