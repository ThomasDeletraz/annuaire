<?php

/* base.html.twig */
class __TwigTemplate_d8b19e7cc42e44959d78e93ba4c6fac34cbc3b591729856402745badc6286018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e352b5d27097332435d2e56e7e8eb562f522335ab6b265057de725cf50831461 = $this->env->getExtension("native_profiler");
        $__internal_e352b5d27097332435d2e56e7e8eb562f522335ab6b265057de725cf50831461->enter($__internal_e352b5d27097332435d2e56e7e8eb562f522335ab6b265057de725cf50831461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\">

    </head>
    <body>
        <div class=\"container text-center annuaire\">
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_e352b5d27097332435d2e56e7e8eb562f522335ab6b265057de725cf50831461->leave($__internal_e352b5d27097332435d2e56e7e8eb562f522335ab6b265057de725cf50831461_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dbaa70507408c24c7a79d0f40107978228a0f881ae7fbed787a14c5987ce12e = $this->env->getExtension("native_profiler");
        $__internal_4dbaa70507408c24c7a79d0f40107978228a0f881ae7fbed787a14c5987ce12e->enter($__internal_4dbaa70507408c24c7a79d0f40107978228a0f881ae7fbed787a14c5987ce12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annuaire";
        
        $__internal_4dbaa70507408c24c7a79d0f40107978228a0f881ae7fbed787a14c5987ce12e->leave($__internal_4dbaa70507408c24c7a79d0f40107978228a0f881ae7fbed787a14c5987ce12e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3cb28aef4d4a830094ac292525f7814b9e686e1813101f9ebc8dfac387ca6a75 = $this->env->getExtension("native_profiler");
        $__internal_3cb28aef4d4a830094ac292525f7814b9e686e1813101f9ebc8dfac387ca6a75->enter($__internal_3cb28aef4d4a830094ac292525f7814b9e686e1813101f9ebc8dfac387ca6a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3cb28aef4d4a830094ac292525f7814b9e686e1813101f9ebc8dfac387ca6a75->leave($__internal_3cb28aef4d4a830094ac292525f7814b9e686e1813101f9ebc8dfac387ca6a75_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_710f60fa48c37bfb91b20dd3d4c3a8e7b33494f1d48970fedb9c0e6c5d634ca3 = $this->env->getExtension("native_profiler");
        $__internal_710f60fa48c37bfb91b20dd3d4c3a8e7b33494f1d48970fedb9c0e6c5d634ca3->enter($__internal_710f60fa48c37bfb91b20dd3d4c3a8e7b33494f1d48970fedb9c0e6c5d634ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_710f60fa48c37bfb91b20dd3d4c3a8e7b33494f1d48970fedb9c0e6c5d634ca3->leave($__internal_710f60fa48c37bfb91b20dd3d4c3a8e7b33494f1d48970fedb9c0e6c5d634ca3_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee08514cf06c789ee58b7a2fdd6b7680b6737d04230e29cf806879f36f3a5797 = $this->env->getExtension("native_profiler");
        $__internal_ee08514cf06c789ee58b7a2fdd6b7680b6737d04230e29cf806879f36f3a5797->enter($__internal_ee08514cf06c789ee58b7a2fdd6b7680b6737d04230e29cf806879f36f3a5797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee08514cf06c789ee58b7a2fdd6b7680b6737d04230e29cf806879f36f3a5797->leave($__internal_ee08514cf06c789ee58b7a2fdd6b7680b6737d04230e29cf806879f36f3a5797_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 16,  91 => 14,  80 => 6,  68 => 5,  59 => 17,  57 => 16,  54 => 15,  52 => 14,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Annuaire{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('css/layout.css') }}">*/
/* */
/*     </head>*/
/*     <body>*/
/*         <div class="container text-center annuaire">*/
/*         {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
