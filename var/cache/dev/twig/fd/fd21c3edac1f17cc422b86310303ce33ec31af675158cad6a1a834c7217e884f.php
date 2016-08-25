<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9df2912c094c5ee80168644b61018e9c1f60e635bac0f82557070dcb73461d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc5ca5acc4dd257e45e7f76e09fbeabbf5e2543534b680b08273a7aec835fe6 = $this->env->getExtension("native_profiler");
        $__internal_8cc5ca5acc4dd257e45e7f76e09fbeabbf5e2543534b680b08273a7aec835fe6->enter($__internal_8cc5ca5acc4dd257e45e7f76e09fbeabbf5e2543534b680b08273a7aec835fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc5ca5acc4dd257e45e7f76e09fbeabbf5e2543534b680b08273a7aec835fe6->leave($__internal_8cc5ca5acc4dd257e45e7f76e09fbeabbf5e2543534b680b08273a7aec835fe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22239574d6ff49b3ecacfe1ca0a09a52a44e3eb89a3c047e1c748dec3186715d = $this->env->getExtension("native_profiler");
        $__internal_22239574d6ff49b3ecacfe1ca0a09a52a44e3eb89a3c047e1c748dec3186715d->enter($__internal_22239574d6ff49b3ecacfe1ca0a09a52a44e3eb89a3c047e1c748dec3186715d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22239574d6ff49b3ecacfe1ca0a09a52a44e3eb89a3c047e1c748dec3186715d->leave($__internal_22239574d6ff49b3ecacfe1ca0a09a52a44e3eb89a3c047e1c748dec3186715d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d100f2e4e6dec0207d2972912a3928d03e2ee7ac3f1e23389a0c8ab69d80a3c2 = $this->env->getExtension("native_profiler");
        $__internal_d100f2e4e6dec0207d2972912a3928d03e2ee7ac3f1e23389a0c8ab69d80a3c2->enter($__internal_d100f2e4e6dec0207d2972912a3928d03e2ee7ac3f1e23389a0c8ab69d80a3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d100f2e4e6dec0207d2972912a3928d03e2ee7ac3f1e23389a0c8ab69d80a3c2->leave($__internal_d100f2e4e6dec0207d2972912a3928d03e2ee7ac3f1e23389a0c8ab69d80a3c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67d15585b23c76d8e928f6d1e38df5dc9341a225a37bb74ec2fc6f6dbf53e9ee = $this->env->getExtension("native_profiler");
        $__internal_67d15585b23c76d8e928f6d1e38df5dc9341a225a37bb74ec2fc6f6dbf53e9ee->enter($__internal_67d15585b23c76d8e928f6d1e38df5dc9341a225a37bb74ec2fc6f6dbf53e9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67d15585b23c76d8e928f6d1e38df5dc9341a225a37bb74ec2fc6f6dbf53e9ee->leave($__internal_67d15585b23c76d8e928f6d1e38df5dc9341a225a37bb74ec2fc6f6dbf53e9ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
