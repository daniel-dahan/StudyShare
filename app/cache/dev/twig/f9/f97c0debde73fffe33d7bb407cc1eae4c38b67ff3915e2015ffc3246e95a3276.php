<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8f01a2ad085fb1e88124927af8bb3fe98a963cbf878bfa39460a4d021c7c2410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe031cb4dbe74128b9989a074d78bfafaf662265604a91dab7da5caae7ab8539 = $this->env->getExtension("native_profiler");
        $__internal_fe031cb4dbe74128b9989a074d78bfafaf662265604a91dab7da5caae7ab8539->enter($__internal_fe031cb4dbe74128b9989a074d78bfafaf662265604a91dab7da5caae7ab8539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe031cb4dbe74128b9989a074d78bfafaf662265604a91dab7da5caae7ab8539->leave($__internal_fe031cb4dbe74128b9989a074d78bfafaf662265604a91dab7da5caae7ab8539_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2860145b678405af9a5cff6aa7ebeca839e2d6c95c568d50e8aad493bb6409e4 = $this->env->getExtension("native_profiler");
        $__internal_2860145b678405af9a5cff6aa7ebeca839e2d6c95c568d50e8aad493bb6409e4->enter($__internal_2860145b678405af9a5cff6aa7ebeca839e2d6c95c568d50e8aad493bb6409e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2860145b678405af9a5cff6aa7ebeca839e2d6c95c568d50e8aad493bb6409e4->leave($__internal_2860145b678405af9a5cff6aa7ebeca839e2d6c95c568d50e8aad493bb6409e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
