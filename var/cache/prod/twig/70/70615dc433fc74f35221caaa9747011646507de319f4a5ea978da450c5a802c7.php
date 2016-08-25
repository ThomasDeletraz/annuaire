<?php

/* :typecoordonnee:new.html.twig */
class __TwigTemplate_67daf9ef7d807fe33c1dc4eccc2a6f4e473bc6acb3f1357ce3d97fdc57347cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typecoordonnee:new.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate(":typecoordonnee:titre.html.twig", ":typecoordonnee:new.html.twig", 4)->display($context);
        // line 5
        echo "
 <div class=\"text-left row\">
    <div class=\"row \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
            <h2>Ajouter un type</h2>
        </div>
    </div>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    <div class=\"row\">


        <div class=\"form-group formAjoutContact\">
            <h3> <span class=\"label label-info\">Libellé</span>  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "libelleTypeCoordonnee", array()), 'widget');
        echo "</h3>
            <div class=\"\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\"/><input type=\"reset\" value=\"effacer\" class=\"btn btn-danger\"/></div>


        </div>
    </div>



    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


    <div class=\"row \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 nested\">
            <ul>
                <li>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("gestion_index");
        echo "\">Retour à la liste</a>
                </li>
                <li>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'annuaire</a>
                </li>
            </ul>
        </div>
    </div>

 </div>
";
    }

    public function getTemplateName()
    {
        return ":typecoordonnee:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  74 => 34,  64 => 27,  52 => 18,  44 => 13,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% include(":typecoordonnee:titre.html.twig") %}*/
/* */
/*  <div class="text-left row">*/
/*     <div class="row ">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*             <h2>Ajouter un type</h2>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/*     <div class="row">*/
/* */
/* */
/*         <div class="form-group formAjoutContact">*/
/*             <h3> <span class="label label-info">Libellé</span>  {{ form_widget(form.libelleTypeCoordonnee) }}</h3>*/
/*             <div class=""><input type="submit" value="Enregistrer" class="btn btn-success"/><input type="reset" value="effacer" class="btn btn-danger"/></div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {{ form_end(form) }}*/
/* */
/* */
/*     <div class="row ">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nested">*/
/*             <ul>*/
/*                 <li>*/
/*                     <a href="{{ path('gestion_index') }}">Retour à la liste</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('homepage') }}">Retour à l'annuaire</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*  </div>*/
/* {% endblock %}*/
/* */
