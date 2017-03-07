<?php

namespace AppBundle\Twig\HideMailExtension;

/**
 * HideMailInterface
 *
 * Contract for e-mails
 *
 */
interface HideMailInterface
{
    /**
     * @return string
     */
    public function hideMail(string $email) : string;
}
