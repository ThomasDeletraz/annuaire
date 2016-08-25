<?php

/* typecoordonnee/show.html.twig */
class __TwigTemplate_28a0b4258077c7fe6d4dcfc7031167a357b593030b6c1c76f08b6cf3153a4773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typecoordonnee/show.html.twig", 1);
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
        $__internal_d3af39b2155b926ee4f457519a31acbee5af393c1eeb4e3499a23022dc29ac0e = $this->env->getExtension("native_profiler");
        $__internal_d3af39b2155b926ee4f457519a31acbee5af393c1eeb4e3499a23022dc29ac0e->enter($__internal_d3af39b2155b926ee4f457519a31acbee5af393c1eeb4e3499a23022dc29ac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typecoordonnee/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3af39b2155b926ee4f457519a31acbee5af393c1eeb4e3499a23022dc29ac0e->leave($__internal_d3af39b2155b926ee4f457519a31acbee5af393c1eeb4e3499a23022dc29ac0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d25ad44c84819c6c89fe45fd47b4d714388fb327bc65781cd688d9df4aec2a70 = $this->env->getExtension("native_profiler");
        $__internal_d25ad44c84819c6c89fe45fd47b4d714388fb327bc65781cd688d9df4aec2a70->enter($__internal_d25ad44c84819c6c89fe45fd47b4d714388fb327bc65781cd688d9df4aec2a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



    <table class=\"table\">
        <tbody>

            <tr>
                <th>Libelletypecoordonnee</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["typeCoordonnee"]) ? $context["typeCoordonnee"] : $this->getContext($context, "typeCoordonnee")), "libelleTypeCoordonnee", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("gestion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_edit", array("id" => $this->getAttribute((isset($context["typeCoordonnee"]) ? $context["typeCoordonnee"] : $this->getContext($context, "typeCoordonnee")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d25ad44c84819c6c89fe45fd47b4d714388fb327bc65781cd688d9df4aec2a70->leave($__internal_d25ad44c84819c6c89fe45fd47b4d714388fb327bc65781cd688d9df4aec2a70_prof);

    }

    public function getTemplateName()
    {
        return "typecoordonnee/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  73 => 26,  67 => 23,  61 => 20,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/*     <table class="table">*/
/*         <tbody>*/
/* */
/*             <tr>*/
/*                 <th>Libelletypecoordonnee</th>*/
/*                 <td>{{ typeCoordonnee.libelleTypeCoordonnee }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('gestion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('gestion_edit', { 'id': typeCoordonnee.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
