<?php

/* :gestionContact:formContactBasique.html.twig */
class __TwigTemplate_8bafd4934152ad73efa44baf943c319bdd4a0dc8fcca2afd3fbe60561ec77366 extends Twig_Template
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
        $__internal_93dba4e3fbdaea06c24b261123b4d37a4587baee841c60c527d6f1d792adb607 = $this->env->getExtension("native_profiler");
        $__internal_93dba4e3fbdaea06c24b261123b4d37a4587baee841c60c527d6f1d792adb607->enter($__internal_93dba4e3fbdaea06c24b261123b4d37a4587baee841c60c527d6f1d792adb607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gestionContact:formContactBasique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93dba4e3fbdaea06c24b261123b4d37a4587baee841c60c527d6f1d792adb607->leave($__internal_93dba4e3fbdaea06c24b261123b4d37a4587baee841c60c527d6f1d792adb607_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba65492f904cefba66e08390af10cd954ac20856bf8dd4f812a618c481bf222 = $this->env->getExtension("native_profiler");
        $__internal_4ba65492f904cefba66e08390af10cd954ac20856bf8dd4f812a618c481bf222->enter($__internal_4ba65492f904cefba66e08390af10cd954ac20856bf8dd4f812a618c481bf222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <label class=\"label label-info\">Nom</label> ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Prénom</label> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Sexe</label> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Date de Naissance</label> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Téléphone fixe</label> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telFixe", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Téléphone mobile</label> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telMobile", array()), 'widget');
        echo "<br>
        <label class=\"label label-info\">Email</label> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "<br>

        <hr>
        <input class=\"btn btn-success\"  type=\"submit\"><input class=\"btn btn-danger\" type=\"reset\">



    </div>





    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
    <div class=\"row \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 nested\">
            <ul>

                <li>
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'annuaire</a>
                </li>
            </ul>
        </div>
    </div>



";
        
        $__internal_4ba65492f904cefba66e08390af10cd954ac20856bf8dd4f812a618c481bf222->leave($__internal_4ba65492f904cefba66e08390af10cd954ac20856bf8dd4f812a618c481bf222_prof);

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
        return array (  117 => 52,  106 => 44,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
/*         <label class="label label-info">Nom</label> {{ form_widget(form.nom) }}<br>*/
/*         <label class="label label-info">Prénom</label> {{ form_widget(form.prenom) }}<br>*/
/*         <label class="label label-info">Sexe</label> {{ form_widget(form.sexe) }}<br>*/
/*         <label class="label label-info">Date de Naissance</label> {{ form_widget(form.dateDeNaissance) }}<br>*/
/*         <label class="label label-info">Téléphone fixe</label> {{ form_widget(form.telFixe) }}<br>*/
/*         <label class="label label-info">Téléphone mobile</label> {{ form_widget(form.telMobile) }}<br>*/
/*         <label class="label label-info">Email</label> {{ form_widget(form.email) }}<br>*/
/* */
/*         <hr>*/
/*         <input class="btn btn-success"  type="submit"><input class="btn btn-danger" type="reset">*/
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
