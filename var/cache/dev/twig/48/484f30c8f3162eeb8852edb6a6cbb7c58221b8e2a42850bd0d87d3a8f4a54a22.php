<?php

/* default/index.html.twig */
class __TwigTemplate_77b4f700270608d43b061c23a288e9f92b16e386a98b1b1039644309dbe05730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_4ab4c05e7cc396fb61e11ed760b4d13ce9dc47c3d75f753e576183a529568e5f = $this->env->getExtension("native_profiler");
        $__internal_4ab4c05e7cc396fb61e11ed760b4d13ce9dc47c3d75f753e576183a529568e5f->enter($__internal_4ab4c05e7cc396fb61e11ed760b4d13ce9dc47c3d75f753e576183a529568e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab4c05e7cc396fb61e11ed760b4d13ce9dc47c3d75f753e576183a529568e5f->leave($__internal_4ab4c05e7cc396fb61e11ed760b4d13ce9dc47c3d75f753e576183a529568e5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20382ac0f7d4cd9a1ffa9a012585891af9e521b0c2776b4507680d7d8d6809da = $this->env->getExtension("native_profiler");
        $__internal_20382ac0f7d4cd9a1ffa9a012585891af9e521b0c2776b4507680d7d8d6809da->enter($__internal_20382ac0f7d4cd9a1ffa9a012585891af9e521b0c2776b4507680d7d8d6809da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

        <div class=\"row titre\">

            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">

                <h1> <span class=\"label label-info \">Mes Contacts</span></h1>

            </div>

        </div>

        <div class=\"row rechercheContact\">
            <div class=\"col-xs-6 col-xs-offset-6 col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-6 col-lg-8 col-lg-offset-6\">
                 <input type=\"text\" placeholder=\"Taper un nom, prénom\">
            </div>
        </div>

        <div class=\"row ajoutContact\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ajoutContact");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>Ajouter un contact</a>
            </div>
        </div>

        <div class=\"row contact\">

            <div class=\"col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-6 col-lg-offset-3\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 32
            echo "
                <div class=\"media\">

                    <div class=\"media-left\">
                        <a href=\"#\">
                            <span class=\"glyphicon glyphicon-user skinEmpty\"></span>
                            <!--<img class=\"media-object\" src=\"...\" alt=\"...\">-->
                        </a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"panel ";
            // line 42
            if ($this->getAttribute($context["contact"], "sexePersonne", array())) {
                echo " panel-warning ";
            } else {
                echo " panel-info ";
            }
            echo "   \">





                                <div class=\"panel-heading \"><h3 class=\"media-heading\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenomPersonne", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nomPersonne", array()), "html", null, true);
            echo "</h3></div>

                                <div class=\"panel-body\">
                                    <table>
                                        <tr>
                                            <td><h3>Téléphone fixe</h3></td>
                                            <td>07 60 06 34 50</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Téléphone mobile</h3></td>
                                            <td>07 60 06 34 50</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Email</h3></td>
                                            <td>07 60 06 34 50</td>
                                        </tr>
                                        <tr>
                                            <td><h3>Date de naissance</h3></td>
                                            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contact"], "DateNaissancePersonne", array())), "html", null, true);
            echo "</td>
                                        </tr>

                                    </table>
                                </div>


                            <!--
                            <div class=\"panel-heading\"><h3 class=\"media-heading\">Nom Prénom</h3></div>
                            <div class=\"panel-body\">
                               <table>
                                   <tr>
                                       <td><h3>Téléphone fixe</h3></td>
                                       <td>07 60 06 34 50</td>
                                   </tr>
                               </table>
                            </div>
                        </div>-->



                    </div>

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
";
        
        $__internal_20382ac0f7d4cd9a1ffa9a012585891af9e521b0c2776b4507680d7d8d6809da->leave($__internal_20382ac0f7d4cd9a1ffa9a012585891af9e521b0c2776b4507680d7d8d6809da_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 92,  124 => 66,  101 => 48,  88 => 42,  76 => 32,  72 => 31,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*         <div class="row titre">*/
/* */
/*             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/* */
/*                 <h1> <span class="label label-info ">Mes Contacts</span></h1>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="row rechercheContact">*/
/*             <div class="col-xs-6 col-xs-offset-6 col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-6 col-lg-8 col-lg-offset-6">*/
/*                  <input type="text" placeholder="Taper un nom, prénom">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row ajoutContact">*/
/*             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">*/
/*                 <a href="{{ path('ajoutContact') }}"><span class="glyphicon glyphicon-plus"></span>Ajouter un contact</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row contact">*/
/* */
/*             <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-6 col-lg-offset-3">*/
/*                 {% for contact in contacts %}*/
/* */
/*                 <div class="media">*/
/* */
/*                     <div class="media-left">*/
/*                         <a href="#">*/
/*                             <span class="glyphicon glyphicon-user skinEmpty"></span>*/
/*                             <!--<img class="media-object" src="..." alt="...">-->*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="media-body">*/
/*                         <div class="panel {% if contact.sexePersonne  %} panel-warning {% else %} panel-info {% endif %}   ">*/
/* */
/* */
/* */
/* */
/* */
/*                                 <div class="panel-heading "><h3 class="media-heading">{{ contact.prenomPersonne }} {{ contact.nomPersonne }}</h3></div>*/
/* */
/*                                 <div class="panel-body">*/
/*                                     <table>*/
/*                                         <tr>*/
/*                                             <td><h3>Téléphone fixe</h3></td>*/
/*                                             <td>07 60 06 34 50</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td><h3>Téléphone mobile</h3></td>*/
/*                                             <td>07 60 06 34 50</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td><h3>Email</h3></td>*/
/*                                             <td>07 60 06 34 50</td>*/
/*                                         </tr>*/
/*                                         <tr>*/
/*                                             <td><h3>Date de naissance</h3></td>*/
/*                                             <td>{{ contact.DateNaissancePersonne|date }}</td>*/
/*                                         </tr>*/
/* */
/*                                     </table>*/
/*                                 </div>*/
/* */
/* */
/*                             <!--*/
/*                             <div class="panel-heading"><h3 class="media-heading">Nom Prénom</h3></div>*/
/*                             <div class="panel-body">*/
/*                                <table>*/
/*                                    <tr>*/
/*                                        <td><h3>Téléphone fixe</h3></td>*/
/*                                        <td>07 60 06 34 50</td>*/
/*                                    </tr>*/
/*                                </table>*/
/*                             </div>*/
/*                         </div>-->*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
