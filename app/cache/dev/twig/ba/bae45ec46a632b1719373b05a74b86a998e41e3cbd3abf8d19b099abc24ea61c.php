<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_604d59bb3780bcaf67ce67ce325233ef0e293ec9f5cea1074d6b5a3739aa5e66 extends Twig_Template
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
        $__internal_d554cc5343c779f88c8ffe176d6f74fa8fb27e429dcfe486e3f082c4b2d0c2e3 = $this->env->getExtension("native_profiler");
        $__internal_d554cc5343c779f88c8ffe176d6f74fa8fb27e429dcfe486e3f082c4b2d0c2e3->enter($__internal_d554cc5343c779f88c8ffe176d6f74fa8fb27e429dcfe486e3f082c4b2d0c2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_d554cc5343c779f88c8ffe176d6f74fa8fb27e429dcfe486e3f082c4b2d0c2e3->leave($__internal_d554cc5343c779f88c8ffe176d6f74fa8fb27e429dcfe486e3f082c4b2d0c2e3_prof);

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
