<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class md5 extends AbstractExtension
{
    public function getFilters(){
        return array(
            new TwigFilter('md5', [$this, 'getMd5'])
        );
    }
    public function getMd5($text){
        return md5($text);
    }
}