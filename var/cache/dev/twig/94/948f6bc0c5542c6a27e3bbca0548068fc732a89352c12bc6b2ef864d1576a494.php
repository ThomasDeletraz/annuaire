<?php

/* base.html.twig */
class __TwigTemplate_266bd5795798a1271fb1d01dc72cfa3a6a5851a9aff696eb23acf181a9592a5c extends Twig_Template
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
        $__internal_81114093feeb8af0327cfbdc835fa627a7354d7c90f5f7988f0837578279e14d = $this->env->getExtension("native_profiler");
        $__internal_81114093feeb8af0327cfbdc835fa627a7354d7c90f5f7988f0837578279e14d->enter($__internal_81114093feeb8af0327cfbdc835fa627a7354d7c90f5f7988f0837578279e14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_81114093feeb8af0327cfbdc835fa627a7354d7c90f5f7988f0837578279e14d->leave($__internal_81114093feeb8af0327cfbdc835fa627a7354d7c90f5f7988f0837578279e14d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9326e6ff9c740836cae628fff41cfd309d35c6149473ece6c4b47d23049e76f2 = $this->env->getExtension("native_profiler");
        $__internal_9326e6ff9c740836cae628fff41cfd309d35c6149473ece6c4b47d23049e76f2->enter($__internal_9326e6ff9c740836cae628fff41cfd309d35c6149473ece6c4b47d23049e76f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Annuaire";
        
        $__internal_9326e6ff9c740836cae628fff41cfd309d35c6149473ece6c4b47d23049e76f2->leave($__internal_9326e6ff9c740836cae628fff41cfd309d35c6149473ece6c4b47d23049e76f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a369bc6c317a6c9848813decfa6fb393e4d178eb6bf6d3b39f048deef5f8b383 = $this->env->getExtension("native_profiler");
        $__internal_a369bc6c317a6c9848813decfa6fb393e4d178eb6bf6d3b39f048deef5f8b383->enter($__internal_a369bc6c317a6c9848813decfa6fb393e4d178eb6bf6d3b39f048deef5f8b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a369bc6c317a6c9848813decfa6fb393e4d178eb6bf6d3b39f048deef5f8b383->leave($__internal_a369bc6c317a6c9848813decfa6fb393e4d178eb6bf6d3b39f048deef5f8b383_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a42701c0425c7578e95fa214e3fc203601661aaa258c5a4da38c4b0ef9270d = $this->env->getExtension("native_profiler");
        $__internal_41a42701c0425c7578e95fa214e3fc203601661aaa258c5a4da38c4b0ef9270d->enter($__internal_41a42701c0425c7578e95fa214e3fc203601661aaa258c5a4da38c4b0ef9270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41a42701c0425c7578e95fa214e3fc203601661aaa258c5a4da38c4b0ef9270d->leave($__internal_41a42701c0425c7578e95fa214e3fc203601661aaa258c5a4da38c4b0ef9270d_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ccfcca347031f0a8de1cf3bfe156ee1af8d19cb7040044a298a03bb9575d180d = $this->env->getExtension("native_profiler");
        $__internal_ccfcca347031f0a8de1cf3bfe156ee1af8d19cb7040044a298a03bb9575d180d->enter($__internal_ccfcca347031f0a8de1cf3bfe156ee1af8d19cb7040044a298a03bb9575d180d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ccfcca347031f0a8de1cf3bfe156ee1af8d19cb7040044a298a03bb9575d180d->leave($__internal_ccfcca347031f0a8de1cf3bfe156ee1af8d19cb7040044a298a03bb9575d180d_prof);

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
