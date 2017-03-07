<?php

namespace AppBundle\Twig\HideMailExtension;

/**
 * This Twig extension adds a new 'hidemail' filter.
 * The filter converts given string into a link difficult to read by spam bots using a method of your choice.
 * First declare this extension as service and set the conversion method passing te correct class to the DI container
 */
class HideMailExtension extends \Twig_Extension
{
    /**
     * @var HideMailInterface
     */
    private $method;

    public function __construct(HideMailInterface $method)
    {
        $this->method = $method;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('hidemail', [$this, 'hidemailFilter'], ['is_safe' => ['html']]),
        );
    }

    public function hidemailFilter(string $email) : string
    {
        if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Twig_Error('Invalid e-mail.');
        }

        return $this->method->hideMail($email);
    }

    public function getName() : string
    {
        return 'hidemail';
    }
}
