<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6308089423104b55dedd30ca6e0a15026225b08a382df68a3af857732a505589 extends Twig_Template
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
        $__internal_6508399764f3b126dc68531d0c32759b8e1300edb2ddcfecac1f35adb9e4e725 = $this->env->getExtension("native_profiler");
        $__internal_6508399764f3b126dc68531d0c32759b8e1300edb2ddcfecac1f35adb9e4e725->enter($__internal_6508399764f3b126dc68531d0c32759b8e1300edb2ddcfecac1f35adb9e4e725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6508399764f3b126dc68531d0c32759b8e1300edb2ddcfecac1f35adb9e4e725->leave($__internal_6508399764f3b126dc68531d0c32759b8e1300edb2ddcfecac1f35adb9e4e725_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_15d3e0d2d6a299f6e58f3496feea954d673b486755ea102d80d14fc6bebf8c27 = $this->env->getExtension("native_profiler");
        $__internal_15d3e0d2d6a299f6e58f3496feea954d673b486755ea102d80d14fc6bebf8c27->enter($__internal_15d3e0d2d6a299f6e58f3496feea954d673b486755ea102d80d14fc6bebf8c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_15d3e0d2d6a299f6e58f3496feea954d673b486755ea102d80d14fc6bebf8c27->leave($__internal_15d3e0d2d6a299f6e58f3496feea954d673b486755ea102d80d14fc6bebf8c27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfb99d7ec5bcfac8dcafd0246a17df2b98cf383a2fcb3cdce09ae8cf7bb89933 = $this->env->getExtension("native_profiler");
        $__internal_cfb99d7ec5bcfac8dcafd0246a17df2b98cf383a2fcb3cdce09ae8cf7bb89933->enter($__internal_cfb99d7ec5bcfac8dcafd0246a17df2b98cf383a2fcb3cdce09ae8cf7bb89933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfb99d7ec5bcfac8dcafd0246a17df2b98cf383a2fcb3cdce09ae8cf7bb89933->leave($__internal_cfb99d7ec5bcfac8dcafd0246a17df2b98cf383a2fcb3cdce09ae8cf7bb89933_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d227f1912fde1062e6c5cce478e38dfdd27f4743e95e0ac29f64237332e723a = $this->env->getExtension("native_profiler");
        $__internal_9d227f1912fde1062e6c5cce478e38dfdd27f4743e95e0ac29f64237332e723a->enter($__internal_9d227f1912fde1062e6c5cce478e38dfdd27f4743e95e0ac29f64237332e723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d227f1912fde1062e6c5cce478e38dfdd27f4743e95e0ac29f64237332e723a->leave($__internal_9d227f1912fde1062e6c5cce478e38dfdd27f4743e95e0ac29f64237332e723a_prof);

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
