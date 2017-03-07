<?php

namespace AppBundle\Twig\HideMailExtension;

use AppBundle\Twig\HideMailExtension\HideMailInterface;
use Symfony\Component\Translation\TranslatorInterface;

class HideJSLink implements HideMailInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

	public function hideMail(string $email) : string 
	{
		$emailParts = explode('@', $email);
		$emailName = $emailParts[0];
		$emailDomain = $emailParts[1];

        $linkText = $this->translator->trans('hidemail.send');

        $email = "<a href=\"#\" onclick=\"this.href='mailto:' + '$emailName' + '@' + '$emailDomain'\" target=\"_blank\">$linkText</a>";

        return $email;		
	}
}
