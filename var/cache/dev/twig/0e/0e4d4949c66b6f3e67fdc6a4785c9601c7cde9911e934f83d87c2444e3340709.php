<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1ebedcfd2150ed8b448614303111190a64a5124b4426282a9994483e109df9cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39285897ac95b7e19a80c925e3bde91c6a289ac975a3090e33c6e13761a9f5ed = $this->env->getExtension("native_profiler");
        $__internal_39285897ac95b7e19a80c925e3bde91c6a289ac975a3090e33c6e13761a9f5ed->enter($__internal_39285897ac95b7e19a80c925e3bde91c6a289ac975a3090e33c6e13761a9f5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39285897ac95b7e19a80c925e3bde91c6a289ac975a3090e33c6e13761a9f5ed->leave($__internal_39285897ac95b7e19a80c925e3bde91c6a289ac975a3090e33c6e13761a9f5ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_581c9ecc93b11af1cc0f72ce39ea317a85166321452a0a6b1d0d8025dde5297a = $this->env->getExtension("native_profiler");
        $__internal_581c9ecc93b11af1cc0f72ce39ea317a85166321452a0a6b1d0d8025dde5297a->enter($__internal_581c9ecc93b11af1cc0f72ce39ea317a85166321452a0a6b1d0d8025dde5297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_581c9ecc93b11af1cc0f72ce39ea317a85166321452a0a6b1d0d8025dde5297a->leave($__internal_581c9ecc93b11af1cc0f72ce39ea317a85166321452a0a6b1d0d8025dde5297a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4ac69eeb651c8a7c72e7a855217135e732ca229b4a813346cdfc96fd88d4bce = $this->env->getExtension("native_profiler");
        $__internal_d4ac69eeb651c8a7c72e7a855217135e732ca229b4a813346cdfc96fd88d4bce->enter($__internal_d4ac69eeb651c8a7c72e7a855217135e732ca229b4a813346cdfc96fd88d4bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4ac69eeb651c8a7c72e7a855217135e732ca229b4a813346cdfc96fd88d4bce->leave($__internal_d4ac69eeb651c8a7c72e7a855217135e732ca229b4a813346cdfc96fd88d4bce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a138997cc6e012ad878293ae1f93cdac855868992e913533e977dbdbbb01b523 = $this->env->getExtension("native_profiler");
        $__internal_a138997cc6e012ad878293ae1f93cdac855868992e913533e977dbdbbb01b523->enter($__internal_a138997cc6e012ad878293ae1f93cdac855868992e913533e977dbdbbb01b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a138997cc6e012ad878293ae1f93cdac855868992e913533e977dbdbbb01b523->leave($__internal_a138997cc6e012ad878293ae1f93cdac855868992e913533e977dbdbbb01b523_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
