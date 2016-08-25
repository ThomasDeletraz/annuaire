<?php

/* :typecoordonnee:edit.html.twig */
class __TwigTemplate_d9e956fcbb733d1ea93ca74ffbfed527da2148c4f11eca79c65b85e0dc354888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typecoordonnee:edit.html.twig", 1);
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
        echo "
    ";
        // line 5
        $this->loadTemplate(":typecoordonnee:titre.html.twig", ":typecoordonnee:edit.html.twig", 5)->display($context);
        // line 6
        echo "<div class=\"text-left row\">
    <div class=\"row \">
        <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  \">
            <h2>Modifier un type</h2>
        </div>
    </div>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
    <div class=\"row\">

        <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  \">
            <div class=\"form-group formAjoutContact\">
               <h3><span class=\"label label-info\">Libellé</span>     ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "libelleTypeCoordonnee", array()), 'widget');
        echo "</h3>
                <div class=\"\"><input type=\"submit\" value=\"Editer\" class=\"btn btn-success\"/></div>
            </div>
        </div>
    </div>



    ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "


    <div class=\"row \">
        <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6  col-xs-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6 nested \">

            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
                </li>


            </ul>
        </div>
    </div>



    <div class=\"row \">
        <div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 nested  \">
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("gestion_index");
        echo "\">Retour à la liste</a>
        </div>
    </div>

</div>




";
    }

    public function getTemplateName()
    {
        return ":typecoordonnee:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 45,  77 => 33,  72 => 31,  63 => 25,  52 => 17,  44 => 12,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% include(":typecoordonnee:titre.html.twig") %}*/
/* <div class="text-left row">*/
/*     <div class="row ">*/
/*         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  ">*/
/*             <h2>Modifier un type</h2>*/
/*         </div>*/
/*     </div>*/
/*     {{ form_start(edit_form) }}*/
/*     <div class="row">*/
/* */
/*         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  ">*/
/*             <div class="form-group formAjoutContact">*/
/*                <h3><span class="label label-info">Libellé</span>     {{ form_widget(edit_form.libelleTypeCoordonnee) }}</h3>*/
/*                 <div class=""><input type="submit" value="Editer" class="btn btn-success"/></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/*     <div class="row ">*/
/*         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  col-xs-offset-6 col-sm-offset-6 col-md-offset-6 col-lg-offset-6 nested ">*/
/* */
/*             {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Supprimer" class="btn btn-danger">*/
/*             {{ form_end(delete_form) }}*/
/*                 </li>*/
/* */
/* */
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="row ">*/
/*         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8  col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 nested  ">*/
/*             <a href="{{ path('gestion_index') }}">Retour à la liste</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
