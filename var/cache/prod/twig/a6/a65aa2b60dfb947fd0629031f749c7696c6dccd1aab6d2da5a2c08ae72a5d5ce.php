<?php

/* :default:index.html.twig */
class __TwigTemplate_6afe88f395a1197510fc3a30f5f475ee707373afcd60076c3d5e7b5a8d4a2ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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

        <div class=\"row titre\">

            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 \">

                <h1> <span class=\"label label-info \">Mes Contacts</span></h1>

            </div>

        </div>

        <div class=\"row rechercheContact\">
            <div class=\"col-xs-6  col-sm-6 col-md-3  col-lg-6 \">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ajoutContact");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>Ajouter un contact</a>
            </div>
            <div class=\"col-xs-6 col-xs-offset-6 col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-6 col-lg-6 col-lg-offset-6\">
                 <input type=\"text\" placeholder=\"Taper un nom, prénom\">
            </div>
        </div>


        <div class=\"row contact\">

            <div class=\"col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-6 col-lg-offset-3\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 30
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
            // line 40
            if ($this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "sexePersonne", array())) {
                echo " panel-warning ";
            } else {
                echo " panel-info ";
            }
            echo "   \">





                                <div class=\"panel-heading \"><h3 class=\"media-heading\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "prenomPersonne", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "nomPersonne", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppressionContact", array("id" => $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"pull-right cursor glyphicon glyphicon-remove\"></span> </a></a></h3></div>

                                <div class=\"panel-body\">
                                    <table>
                                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contact"], "coordonnees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 51
                echo "                                        <tr>
                                            <td><h3>  ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "libelle", array()), "html", null, true);
                echo "</h3></td>

                                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenu", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
                                            <td><h3>Date de naissance</h3></td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('miscellaneous')->dateFilter($this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "DateNaissancePersonne", array())), "html", null, true);
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
        // line 85
        echo "
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 85,  126 => 59,  122 => 57,  113 => 54,  108 => 52,  105 => 51,  101 => 50,  90 => 46,  77 => 40,  65 => 30,  61 => 29,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <div class="col-xs-6  col-sm-6 col-md-3  col-lg-6 ">*/
/*                 <a href="{{ path('ajoutContact') }}"><span class="glyphicon glyphicon-plus"></span>Ajouter un contact</a>*/
/*             </div>*/
/*             <div class="col-xs-6 col-xs-offset-6 col-sm-6 col-sm-offset-6 col-md-3 col-md-offset-6 col-lg-6 col-lg-offset-6">*/
/*                  <input type="text" placeholder="Taper un nom, prénom">*/
/*             </div>*/
/*         </div>*/
/* */
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
/*                         <div class="panel {% if contact.personne.sexePersonne  %} panel-warning {% else %} panel-info {% endif %}   ">*/
/* */
/* */
/* */
/* */
/* */
/*                                 <div class="panel-heading "><h3 class="media-heading">{{ contact.personne.prenomPersonne }} {{ contact.personne.nomPersonne }} <a href="{{ path("suppressionContact",{"id":contact.personne.id } ) }}"><span class="pull-right cursor glyphicon glyphicon-remove"></span> </a></a></h3></div>*/
/* */
/*                                 <div class="panel-body">*/
/*                                     <table>*/
/*                                         {% for item in contact.coordonnees  %}*/
/*                                         <tr>*/
/*                                             <td><h3>  {{ item.libelle }}</h3></td>*/
/* */
/*                                             <td>{{ item.contenu }}</td>*/
/*                                         </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                             <td><h3>Date de naissance</h3></td>*/
/*                                             <td>{{ contact.personne.DateNaissancePersonne|dateFormatted }}</td>*/
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
