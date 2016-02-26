<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_383091f098980b9f7a3c205606bf588ec6cae4fb785430d477360b0c35dbad11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c775830ac6ecaf92cfbf551e96fc8587445e400d85171ef65a5e049a34a65aad = $this->env->getExtension("native_profiler");
        $__internal_c775830ac6ecaf92cfbf551e96fc8587445e400d85171ef65a5e049a34a65aad->enter($__internal_c775830ac6ecaf92cfbf551e96fc8587445e400d85171ef65a5e049a34a65aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c775830ac6ecaf92cfbf551e96fc8587445e400d85171ef65a5e049a34a65aad->leave($__internal_c775830ac6ecaf92cfbf551e96fc8587445e400d85171ef65a5e049a34a65aad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8754ff2f45c283e492a09401052d802e6d92f8496b512508a68c8deedb32be2b = $this->env->getExtension("native_profiler");
        $__internal_8754ff2f45c283e492a09401052d802e6d92f8496b512508a68c8deedb32be2b->enter($__internal_8754ff2f45c283e492a09401052d802e6d92f8496b512508a68c8deedb32be2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<section class=\"login-page valign-wrapper\">
    <div class=\"login-box valign\">
        <h1 class=\"logo\">
            StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span>
        </h1>
        <p>Connectez-vous pour accéder à votre espace StudyShare</p>
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\", id=\"LoginForm\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"input-field\">
                <i class=\"material-icons prefix\">perm_identity</i>
                <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>
            <div class=\"input-field\">
                <i class=\"material-icons prefix\">lock</i>
                <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>
</section>

";
        
        $__internal_8754ff2f45c283e492a09401052d802e6d92f8496b512508a68c8deedb32be2b->leave($__internal_8754ff2f45c283e492a09401052d802e6d92f8496b512508a68c8deedb32be2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  85 => 27,  77 => 22,  70 => 18,  66 => 17,  60 => 14,  56 => 13,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* <section class="login-page valign-wrapper">*/
/*     <div class="login-box valign">*/
/*         <h1 class="logo">*/
/*             StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span>*/
/*         </h1>*/
/*         <p>Connectez-vous pour accéder à votre espace StudyShare</p>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post", id="LoginForm">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">perm_identity</i>*/
/*                 <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*             </div>*/
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">lock</i>*/
/*                 <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                 <input type="password" id="password" name="_password" required="required" />*/
/*             </div>*/
/* */
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                 <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*         </form>*/
/*     </div>*/
/* </section>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
