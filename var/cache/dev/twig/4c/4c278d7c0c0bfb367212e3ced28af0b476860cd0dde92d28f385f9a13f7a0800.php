<?php

/* typecoordonnee/index.html.twig */
class __TwigTemplate_639825143e10f287e573417973449bf18260e477b958b128a10d09712ddfcdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typecoordonnee/index.html.twig", 1);
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
        $__internal_329b8e3e6d904bc6c3cca3d150cfc0487a90f91cd81ff28a26e15514aad4fee0 = $this->env->getExtension("native_profiler");
        $__internal_329b8e3e6d904bc6c3cca3d150cfc0487a90f91cd81ff28a26e15514aad4fee0->enter($__internal_329b8e3e6d904bc6c3cca3d150cfc0487a90f91cd81ff28a26e15514aad4fee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecoordonnee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329b8e3e6d904bc6c3cca3d150cfc0487a90f91cd81ff28a26e15514aad4fee0->leave($__internal_329b8e3e6d904bc6c3cca3d150cfc0487a90f91cd81ff28a26e15514aad4fee0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7453ac239e3f5872e2d7bdf07000b530c5d619b99c0fe4fdb124432d525458be = $this->env->getExtension("native_profiler");
        $__internal_7453ac239e3f5872e2d7bdf07000b530c5d619b99c0fe4fdb124432d525458be->enter($__internal_7453ac239e3f5872e2d7bdf07000b530c5d619b99c0fe4fdb124432d525458be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate(":typecoordonnee:titre.html.twig", "typecoordonnee/index.html.twig", 5)->display($context);
        // line 6
        echo "
    <table class=\"table text-left\">
        <thead>
            <tr>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeCoordonnees"]) ? $context["typeCoordonnees"] : $this->getContext($context, "typeCoordonnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeCoordonnee"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeCoordonnee"], "libelleTypeCoordonnee", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>

                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_edit", array("id" => $this->getAttribute($context["typeCoordonnee"], "id", array()))), "html", null, true);
            echo "\">éditer</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeCoordonnee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
             <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("gestion_new");
        echo "\">Ajouter un type</a><br><br>
             <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'annuaire</a>
        </div>
    </div>


";
        
        $__internal_7453ac239e3f5872e2d7bdf07000b530c5d619b99c0fe4fdb124432d525458be->leave($__internal_7453ac239e3f5872e2d7bdf07000b530c5d619b99c0fe4fdb124432d525458be_prof);

    }

    public function getTemplateName()
    {
        return "typecoordonnee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  91 => 34,  84 => 29,  71 => 22,  63 => 17,  60 => 16,  56 => 15,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% include(":typecoordonnee:titre.html.twig") %}*/
/* */
/*     <table class="table text-left">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for typeCoordonnee in typeCoordonnees %}*/
/*             <tr>*/
/*                 <td>{{ typeCoordonnee.libelleTypeCoordonnee }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/* */
/*                         <li>*/
/*                             <a href="{{ path('gestion_edit', { 'id': typeCoordonnee.id }) }}">éditer</a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*              <a href="{{ path('gestion_new') }}">Ajouter un type</a><br><br>*/
/*              <a href="{{ path('homepage') }}">Retour à l'annuaire</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
