<?php

/* :gestionContact:formContactBasique.html.twig */
class __TwigTemplate_bebb907c6778203641ea9539e935841dd04788f0b9a322bbb3cbb87df35d7a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gestionContact:formContactBasique.html.twig", 1);
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
        $__internal_cbfe459b914eb913bed9b38ee6364b05304155cc5c3c9937eaac719e1af1f4e1 = $this->env->getExtension("native_profiler");
        $__internal_cbfe459b914eb913bed9b38ee6364b05304155cc5c3c9937eaac719e1af1f4e1->enter($__internal_cbfe459b914eb913bed9b38ee6364b05304155cc5c3c9937eaac719e1af1f4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gestionContact:formContactBasique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfe459b914eb913bed9b38ee6364b05304155cc5c3c9937eaac719e1af1f4e1->leave($__internal_cbfe459b914eb913bed9b38ee6364b05304155cc5c3c9937eaac719e1af1f4e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c556eb2727b3e0abd4b561d14ad0bdbfbea3e05293287c76673c075602ac704 = $this->env->getExtension("native_profiler");
        $__internal_5c556eb2727b3e0abd4b561d14ad0bdbfbea3e05293287c76673c075602ac704->enter($__internal_5c556eb2727b3e0abd4b561d14ad0bdbfbea3e05293287c76673c075602ac704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"formAjoutContact \">

        <h3><span class=\"label label-info\">Nom</span> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Prénom</span> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Sexe</span> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "</h3>
        <h3><span class=\"label label-info\">Date de Naissance</span> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance", array()), 'widget');
        echo "</h3>
        <hr>
        <h3><span class=\"label label-info\">Ajouter</span> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnesDisponibles", array()), 'widget');
        echo "</h3>


    </div>





    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_5c556eb2727b3e0abd4b561d14ad0bdbfbea3e05293287c76673c075602ac704->leave($__internal_5c556eb2727b3e0abd4b561d14ad0bdbfbea3e05293287c76673c075602ac704_prof);

    }

    public function getTemplateName()
    {
        return ":gestionContact:formContactBasique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  95 => 39,  83 => 30,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <h3><span class="label label-info">Ajouter</span> {{ form_widget(form.coordonnesDisponibles) }}</h3>*/
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
