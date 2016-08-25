<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8df7cc27dec3c64f4d6589fb24e8233e97e5d00def8a0d811a15330a5c3193be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1661c2dd4ac1551b433ec210ce37e0d0d1dd49b2f8510c18065f0939cd0ee6a2 = $this->env->getExtension("native_profiler");
        $__internal_1661c2dd4ac1551b433ec210ce37e0d0d1dd49b2f8510c18065f0939cd0ee6a2->enter($__internal_1661c2dd4ac1551b433ec210ce37e0d0d1dd49b2f8510c18065f0939cd0ee6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1661c2dd4ac1551b433ec210ce37e0d0d1dd49b2f8510c18065f0939cd0ee6a2->leave($__internal_1661c2dd4ac1551b433ec210ce37e0d0d1dd49b2f8510c18065f0939cd0ee6a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
