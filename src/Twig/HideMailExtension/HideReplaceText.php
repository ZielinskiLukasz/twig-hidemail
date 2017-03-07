<?php

namespace AppBundle\Twig\HideMailExtension;

use AppBundle\Twig\HideMailExtension\HideMailInterface;
use Symfony\Component\Translation\TranslatorInterface;

class HideReplaceText implements HideMailInterface
{
	public function hideMail(string $email) : string 
	{
        return str_replace('@', ' [at] ', $email);
	}
}
