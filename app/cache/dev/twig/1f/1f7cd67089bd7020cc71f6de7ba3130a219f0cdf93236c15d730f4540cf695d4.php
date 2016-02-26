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
        $__internal_02f7ec308252b4fbf2ce3f823667d03998bbb11b063cd6a13287aaf7d9f63415 = $this->env->getExtension("native_profiler");
        $__internal_02f7ec308252b4fbf2ce3f823667d03998bbb11b063cd6a13287aaf7d9f63415->enter($__internal_02f7ec308252b4fbf2ce3f823667d03998bbb11b063cd6a13287aaf7d9f63415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f7ec308252b4fbf2ce3f823667d03998bbb11b063cd6a13287aaf7d9f63415->leave($__internal_02f7ec308252b4fbf2ce3f823667d03998bbb11b063cd6a13287aaf7d9f63415_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d52947ada869007f0db863ea5da95cf294144a2cd7835a451c75964ea5c588c8 = $this->env->getExtension("native_profiler");
        $__internal_d52947ada869007f0db863ea5da95cf294144a2cd7835a451c75964ea5c588c8->enter($__internal_d52947ada869007f0db863ea5da95cf294144a2cd7835a451c75964ea5c588c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d52947ada869007f0db863ea5da95cf294144a2cd7835a451c75964ea5c588c8->leave($__internal_d52947ada869007f0db863ea5da95cf294144a2cd7835a451c75964ea5c588c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d92f6f424f9e8da2bb7c7f5f78f4a1be2c5f9175fcf70de9d79a738fbf72769 = $this->env->getExtension("native_profiler");
        $__internal_9d92f6f424f9e8da2bb7c7f5f78f4a1be2c5f9175fcf70de9d79a738fbf72769->enter($__internal_9d92f6f424f9e8da2bb7c7f5f78f4a1be2c5f9175fcf70de9d79a738fbf72769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d92f6f424f9e8da2bb7c7f5f78f4a1be2c5f9175fcf70de9d79a738fbf72769->leave($__internal_9d92f6f424f9e8da2bb7c7f5f78f4a1be2c5f9175fcf70de9d79a738fbf72769_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_325199757376aec476f0ddfe5a0df34e2cb386548c1597b2c4e8b5382dd278b9 = $this->env->getExtension("native_profiler");
        $__internal_325199757376aec476f0ddfe5a0df34e2cb386548c1597b2c4e8b5382dd278b9->enter($__internal_325199757376aec476f0ddfe5a0df34e2cb386548c1597b2c4e8b5382dd278b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_325199757376aec476f0ddfe5a0df34e2cb386548c1597b2c4e8b5382dd278b9->leave($__internal_325199757376aec476f0ddfe5a0df34e2cb386548c1597b2c4e8b5382dd278b9_prof);

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
