<?php

/* :gestionContact:formContactCustom.html.twig */
class __TwigTemplate_6b9cc79f1a02e6003ba651628b5b007eb77b71b3d375eb677d6d6c43b6c138e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gestionContact:formContactCustom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row titre\">

        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">

            <h1> <span class=\"label label-info \">Ajouter un contact</span></h1>

        </div>

    </div>

<div class=\"text-left row\">
    <div class=\"row \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
            <h2>Ajouter un Contact</h2>
        </div>


        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

    <div class=\"formAjoutContact \">

        <h3><span class=\"label label-info\">Nom</span> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Prénom</span> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Sexe</span> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sexe", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Date de Naissance</span> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateDeNaissance", array()), 'widget');
        echo "</h3>
        <hr>



    </div>





    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>
    <div class=\"row \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 nested\">
            <ul>

                <li>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'annuaire</a>
                </li>
            </ul>
        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return ":gestionContact:formContactCustom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  83 => 39,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row titre">*/
/* */
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/* */
/*             <h1> <span class="label label-info ">Ajouter un contact</span></h1>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* <div class="text-left row">*/
/*     <div class="row ">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*             <h2>Ajouter un Contact</h2>*/
/*         </div>*/
/* */
/* */
/*         {{ form_start(form) }}*/
/* */
/*     <div class="formAjoutContact ">*/
/* */
/*         <h3><span class="label label-info">Nom</span> {{ form_widget(form.nom) }}</h3>*/
/*         <h3><span class="label label-info">Prénom</span> {{ form_widget(form.prenom) }}</h3>*/
/*         <h3><span class="label label-info">Sexe</span> {{ form_widget(form.sexe) }}</h3>*/
/*         <h3><span class="label label-info">Date de Naissance</span> {{ form_widget(form.dateDeNaissance) }}</h3>*/
/*         <hr>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/*     <div class="row ">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nested">*/
/*             <ul>*/
/* */
/*                 <li>*/
/*                     <a href="{{ path('homepage') }}">Retour à l'annuaire</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
