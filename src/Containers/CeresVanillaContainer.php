<?php

namespace CeresCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresCoconut::Stylesheet');
    }
}