<?php
 
namespace TslTheme\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class TslThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('TslTheme::content.TslTheme');
    }
}
