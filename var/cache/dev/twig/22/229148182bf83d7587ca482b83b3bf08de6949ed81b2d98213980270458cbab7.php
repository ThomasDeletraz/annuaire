<?php

/* typecoordonnee/new.html.twig */
class __TwigTemplate_0f7b426e8ad1c5465ad9ed629ad5e905140fc7e5abc7899b52b75d4ff7b4e073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typecoordonnee/new.html.twig", 1);
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
        $__internal_6d96688dbc4f23c5e2814354f3f9148f230d7334ef9e89b2b10eb2448a2b5aa8 = $this->env->getExtension("native_profiler");
        $__internal_6d96688dbc4f23c5e2814354f3f9148f230d7334ef9e89b2b10eb2448a2b5aa8->enter($__internal_6d96688dbc4f23c5e2814354f3f9148f230d7334ef9e89b2b10eb2448a2b5aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecoordonnee/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d96688dbc4f23c5e2814354f3f9148f230d7334ef9e89b2b10eb2448a2b5aa8->leave($__internal_6d96688dbc4f23c5e2814354f3f9148f230d7334ef9e89b2b10eb2448a2b5aa8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c52dc6a702e57223eb452fcbbfab11e43c34e120f097927441740001bc4ed50 = $this->env->getExtension("native_profiler");
        $__internal_5c52dc6a702e57223eb452fcbbfab11e43c34e120f097927441740001bc4ed50->enter($__internal_5c52dc6a702e57223eb452fcbbfab11e43c34e120f097927441740001bc4ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate(":typecoordonnee:titre.html.twig", "typecoordonnee/new.html.twig", 4)->display($context);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">


        <div class=\"form-group formAjoutContact\">
            <h3> <span class=\"label label-info\">Libellé</span>  ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleTypeCoordonnee", array()), 'widget');
        echo "</h3>
            <div class=\"\"><input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\"/><input type=\"reset\" value=\"effacer\" class=\"btn btn-danger\"/></div>


        </div>
    </div>



    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_5c52dc6a702e57223eb452fcbbfab11e43c34e120f097927441740001bc4ed50->leave($__internal_5c52dc6a702e57223eb452fcbbfab11e43c34e120f097927441740001bc4ed50_prof);

    }

    public function getTemplateName()
    {
        return "typecoordonnee/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  83 => 34,  73 => 27,  61 => 18,  53 => 13,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
