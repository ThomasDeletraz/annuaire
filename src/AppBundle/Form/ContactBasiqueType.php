<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Choice;

class ContactBasiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $builder
            ->add('nom',TextType::class,array("required"=>"required"))
            ->add('prenom',TextType::class,array("required"=>""))
            ->add('sexe', ChoiceType::class, array('choices' => array( "Masculin" => false, 'Féminin' => true)))
            ->add('dateDeNaissance', DateType::class)
            ->add('telFixe',TextType::class,array("required"=>""))
            ->add('telMobile',TextType::class,array("required"=>""))
            ->add('email',EmailType::class,array("required"=>""));
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Classes\ContactBasique'
        ));
    }
}
