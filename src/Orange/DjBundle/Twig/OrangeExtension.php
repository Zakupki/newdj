<?php
// src/Acme/DemoBundle/Twig/AcmeExtension.php
namespace Orange\DjBundle\Twig;

class OrangeExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }

    public function getName()
    {
        return 'acme_extension';
    }
}