<?php

namespace CeresCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresCoconut::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}