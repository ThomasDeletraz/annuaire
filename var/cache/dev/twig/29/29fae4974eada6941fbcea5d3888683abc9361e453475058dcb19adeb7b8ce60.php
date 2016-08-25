<?php

/* default/index.html.twig */
class __TwigTemplate_9bc6592057c835d02ee6ee78443b7b7dcd5f004168ce128216ff6e9c5b1018c7 extends Twig_Template
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
        $__internal_4e8a103746a509b7cefdedbd8ff1182e7b9d29438ca9775dac084b480ef417ff = $this->env->getExtension("native_profiler");
        $__internal_4e8a103746a509b7cefdedbd8ff1182e7b9d29438ca9775dac084b480ef417ff->enter($__internal_4e8a103746a509b7cefdedbd8ff1182e7b9d29438ca9775dac084b480ef417ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8a103746a509b7cefdedbd8ff1182e7b9d29438ca9775dac084b480ef417ff->leave($__internal_4e8a103746a509b7cefdedbd8ff1182e7b9d29438ca9775dac084b480ef417ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e709b13a1d1d3c97572d4546d67ab9ad4f9ccf9207ea80776b862601c0e20e = $this->env->getExtension("native_profiler");
        $__internal_f3e709b13a1d1d3c97572d4546d67ab9ad4f9ccf9207ea80776b862601c0e20e->enter($__internal_f3e709b13a1d1d3c97572d4546d67ab9ad4f9ccf9207ea80776b862601c0e20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            
        </div>


        <div class=\"row contact\">

            <div class=\"col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-6 col-lg-offset-3\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 28
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
            // line 38
            if ($this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "sexePersonne", array())) {
                echo " panel-warning ";
            } else {
                echo " panel-info ";
            }
            echo "   \">





                                <div class=\"panel-heading \"><h3 class=\"media-heading\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "prenomPersonne", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "nomPersonne", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppressionContact", array("id" => $this->getAttribute($this->getAttribute($context["contact"], "personne", array()), "id", array()))), "html", null, true);
            echo "\"><span class=\"pull-right cursor glyphicon glyphicon-remove\"></span> </a></a></h3></div>

                                <div class=\"panel-body\">
                                    <table>
                                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contact"], "coordonnees", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                echo "                                        <tr>
                                            <td><h3>  ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "libelle", array()), "html", null, true);
                echo "</h3></td>

                                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenu", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                                            <td><h3>Date de naissance</h3></td>
                                            <td>";
            // line 57
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
        // line 83
        echo "
";
        
        $__internal_f3e709b13a1d1d3c97572d4546d67ab9ad4f9ccf9207ea80776b862601c0e20e->leave($__internal_f3e709b13a1d1d3c97572d4546d67ab9ad4f9ccf9207ea80776b862601c0e20e_prof);

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
        return array (  165 => 83,  133 => 57,  129 => 55,  120 => 52,  115 => 50,  112 => 49,  108 => 48,  97 => 44,  84 => 38,  72 => 28,  68 => 27,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
/*             */
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
