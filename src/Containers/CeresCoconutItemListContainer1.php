<?php

namespace CeresCoconut\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoconutItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresCoconut::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}