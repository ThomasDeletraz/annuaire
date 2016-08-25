<?php

namespace AppBundle\Twig\Extension;

class Miscellaneous extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'miscellaneous';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('dateFormatted', array($this, 'dateFilter')),
        );
    }


    public function dateFilter($date){
        if(is_null($date)){
            return("INCONNUE");
        }
        return $dateFormated = date_format($date,"d/m/Y ");
    }


}
