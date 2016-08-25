<?php

/* :typecoordonnee:index.html.twig */
class __TwigTemplate_aad8f21ee8588288ddb6bac5a9cc6043d0cacbc603f623e36b6214d5c7404897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":typecoordonnee:index.html.twig", 1);
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
        $this->loadTemplate(":typecoordonnee:titre.html.twig", ":typecoordonnee:index.html.twig", 5)->display($context);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["typeCoordonnees"]) ? $context["typeCoordonnees"] : null));
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
    }

    public function getTemplateName()
    {
        return ":typecoordonnee:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  82 => 34,  75 => 29,  62 => 22,  54 => 17,  51 => 16,  47 => 15,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
