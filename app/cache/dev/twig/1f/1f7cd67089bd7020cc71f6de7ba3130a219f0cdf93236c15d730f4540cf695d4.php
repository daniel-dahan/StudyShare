<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70f3f7cb540de0a7cb55ff107293887073a159649f258d37b537424d4d88f4ba extends Twig_Template
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
        $__internal_2bcf877de90583c5a2d4a8130f70bfc228c045f5cce07c364f480c03fa420ff9 = $this->env->getExtension("native_profiler");
        $__internal_2bcf877de90583c5a2d4a8130f70bfc228c045f5cce07c364f480c03fa420ff9->enter($__internal_2bcf877de90583c5a2d4a8130f70bfc228c045f5cce07c364f480c03fa420ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bcf877de90583c5a2d4a8130f70bfc228c045f5cce07c364f480c03fa420ff9->leave($__internal_2bcf877de90583c5a2d4a8130f70bfc228c045f5cce07c364f480c03fa420ff9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83508c2bbecf3e24f817dd01be70648497254bafdeeb0444918385638dd7cdc1 = $this->env->getExtension("native_profiler");
        $__internal_83508c2bbecf3e24f817dd01be70648497254bafdeeb0444918385638dd7cdc1->enter($__internal_83508c2bbecf3e24f817dd01be70648497254bafdeeb0444918385638dd7cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83508c2bbecf3e24f817dd01be70648497254bafdeeb0444918385638dd7cdc1->leave($__internal_83508c2bbecf3e24f817dd01be70648497254bafdeeb0444918385638dd7cdc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_224b498f10516cf21c4d9091a2ae05c9ad766f47f42af7f9e3e9dc4154ef97e6 = $this->env->getExtension("native_profiler");
        $__internal_224b498f10516cf21c4d9091a2ae05c9ad766f47f42af7f9e3e9dc4154ef97e6->enter($__internal_224b498f10516cf21c4d9091a2ae05c9ad766f47f42af7f9e3e9dc4154ef97e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_224b498f10516cf21c4d9091a2ae05c9ad766f47f42af7f9e3e9dc4154ef97e6->leave($__internal_224b498f10516cf21c4d9091a2ae05c9ad766f47f42af7f9e3e9dc4154ef97e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62e49e846421a7cb49767dc0a06a1e063c8568ec5f5c7d96d8e7e1ae2f58240 = $this->env->getExtension("native_profiler");
        $__internal_f62e49e846421a7cb49767dc0a06a1e063c8568ec5f5c7d96d8e7e1ae2f58240->enter($__internal_f62e49e846421a7cb49767dc0a06a1e063c8568ec5f5c7d96d8e7e1ae2f58240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f62e49e846421a7cb49767dc0a06a1e063c8568ec5f5c7d96d8e7e1ae2f58240->leave($__internal_f62e49e846421a7cb49767dc0a06a1e063c8568ec5f5c7d96d8e7e1ae2f58240_prof);

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
