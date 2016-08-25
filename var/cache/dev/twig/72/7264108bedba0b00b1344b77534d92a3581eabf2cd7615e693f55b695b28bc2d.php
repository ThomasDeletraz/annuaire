<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_205cc6c681344a8a6ae7d07eab7c31609c6070989058b25ef341f28b29137989 extends Twig_Template
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
        $__internal_fdd7702b3f55e5783f3c19f8dac0c3ee15f36225178ebf98ccf3019beb47a8c8 = $this->env->getExtension("native_profiler");
        $__internal_fdd7702b3f55e5783f3c19f8dac0c3ee15f36225178ebf98ccf3019beb47a8c8->enter($__internal_fdd7702b3f55e5783f3c19f8dac0c3ee15f36225178ebf98ccf3019beb47a8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdd7702b3f55e5783f3c19f8dac0c3ee15f36225178ebf98ccf3019beb47a8c8->leave($__internal_fdd7702b3f55e5783f3c19f8dac0c3ee15f36225178ebf98ccf3019beb47a8c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcd77fc2dac57de99180d6c030b2029402147c34d097e8991c7b51b94d969e36 = $this->env->getExtension("native_profiler");
        $__internal_fcd77fc2dac57de99180d6c030b2029402147c34d097e8991c7b51b94d969e36->enter($__internal_fcd77fc2dac57de99180d6c030b2029402147c34d097e8991c7b51b94d969e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fcd77fc2dac57de99180d6c030b2029402147c34d097e8991c7b51b94d969e36->leave($__internal_fcd77fc2dac57de99180d6c030b2029402147c34d097e8991c7b51b94d969e36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a863cecb1d70b06690250945f81d08812e3151b4957c28d38f3e9122d21ef23 = $this->env->getExtension("native_profiler");
        $__internal_4a863cecb1d70b06690250945f81d08812e3151b4957c28d38f3e9122d21ef23->enter($__internal_4a863cecb1d70b06690250945f81d08812e3151b4957c28d38f3e9122d21ef23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a863cecb1d70b06690250945f81d08812e3151b4957c28d38f3e9122d21ef23->leave($__internal_4a863cecb1d70b06690250945f81d08812e3151b4957c28d38f3e9122d21ef23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2602f37853e0028cbd36f456b7cddfc9aa916a12ec59b53c3478ab64b3916cd = $this->env->getExtension("native_profiler");
        $__internal_d2602f37853e0028cbd36f456b7cddfc9aa916a12ec59b53c3478ab64b3916cd->enter($__internal_d2602f37853e0028cbd36f456b7cddfc9aa916a12ec59b53c3478ab64b3916cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2602f37853e0028cbd36f456b7cddfc9aa916a12ec59b53c3478ab64b3916cd->leave($__internal_d2602f37853e0028cbd36f456b7cddfc9aa916a12ec59b53c3478ab64b3916cd_prof);

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
