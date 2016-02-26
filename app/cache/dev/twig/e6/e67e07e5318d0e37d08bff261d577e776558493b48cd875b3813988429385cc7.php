<?php

/* UserBundle:Studyview:login.html.twig */
class __TwigTemplate_280aa241ecf24b5de87db0ac66a3570dacd8f5cf72fbbbaaf56136d67e0e6ef5 extends Twig_Template
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
        $__internal_b5ed3bea6506c4a124ce01ca8f8f210ce1dc810c2b2985e2fe86a262196d9328 = $this->env->getExtension("native_profiler");
        $__internal_b5ed3bea6506c4a124ce01ca8f8f210ce1dc810c2b2985e2fe86a262196d9328->enter($__internal_b5ed3bea6506c4a124ce01ca8f8f210ce1dc810c2b2985e2fe86a262196d9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Studyview:login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\"><html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>StudyShare</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

</head>

<body>
<section class=\"login-page valign-wrapper\">
    <div class=\"login-box valign\">
        <h1 class=\"logo\">
           StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span>
        </h1>
        <p>Connectez-vous pour accéder à votre espace StudyShare</p>
        <form action=\"\" method=\"post\" id=\"LoginForm\">
            <div class=\"input-field\">
                <i class=\"material-icons prefix\">perm_identity</i>
                <input type=\"email\" name=\"email\" placeholder=\"Email\">
            </div>
            <div class=\"input-field\">
                <i class=\"material-icons prefix\">lock</i>
                <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\">
            </div>
            <div>
                <input type=\"submit\" value=\"Connexion\">
            </div>
        </form>

        <a href=\"#\" class=\"pw-forget\">Mot de passe oublié ?</a>

    </div>
</section>
</body>

<footer class=\"global-footer login-page-footer\">
    <div class=\"container\">
        <div class=\"row\">
            <p class=\"col l6 m12\">©StudyShare UJF GTE - 2016</p>
            <ul class=\"col l6 m12 right-align footer-links\">
                <li><a href=\"#\">Mentions légales</a></li>
                <li><a href=\"#\">Contact</a></li>
                <li><a href=\"#\">Déconnexion</a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://code.jquery.com/jquery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_b5ed3bea6506c4a124ce01ca8f8f210ce1dc810c2b2985e2fe86a262196d9328->leave($__internal_b5ed3bea6506c4a124ce01ca8f8f210ce1dc810c2b2985e2fe86a262196d9328_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Studyview:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 56,  87 => 55,  83 => 54,  36 => 10,  32 => 9,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="fr"><html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>StudyShare</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/* */
/* </head>*/
/* */
/* <body>*/
/* <section class="login-page valign-wrapper">*/
/*     <div class="login-box valign">*/
/*         <h1 class="logo">*/
/*            StudyShare <br> <span>Université Joseph Fournier - <strong>Filière GTE</strong></span>*/
/*         </h1>*/
/*         <p>Connectez-vous pour accéder à votre espace StudyShare</p>*/
/*         <form action="" method="post" id="LoginForm">*/
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">perm_identity</i>*/
/*                 <input type="email" name="email" placeholder="Email">*/
/*             </div>*/
/*             <div class="input-field">*/
/*                 <i class="material-icons prefix">lock</i>*/
/*                 <input type="password" name="password" placeholder="Mot de passe">*/
/*             </div>*/
/*             <div>*/
/*                 <input type="submit" value="Connexion">*/
/*             </div>*/
/*         </form>*/
/* */
/*         <a href="#" class="pw-forget">Mot de passe oublié ?</a>*/
/* */
/*     </div>*/
/* </section>*/
/* </body>*/
/* */
/* <footer class="global-footer login-page-footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <p class="col l6 m12">©StudyShare UJF GTE - 2016</p>*/
/*             <ul class="col l6 m12 right-align footer-links">*/
/*                 <li><a href="#">Mentions légales</a></li>*/
/*                 <li><a href="#">Contact</a></li>*/
/*                 <li><a href="#">Déconnexion</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </body>*/
/* <script src="{{ asset('http://code.jquery.com/jquery-2.2.0.min.js') }}"></script>*/
/* <script src="{{ asset('js/materialize.min.js') }}"></script>*/
/* <script src="{{ asset('js/custom.js') }}"></script>*/
/* </html>*/
