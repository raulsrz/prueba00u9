<?php

/* :default:login.html.twig */
class __TwigTemplate_8ae4843bcc83b3b678fa72226486e2d17cfb4e5484156238b49191dd33c5c521 extends Twig_Template
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
        $__internal_397e6e4a475f118f9715c806cd0d85d49fef6a71f5c05b897bb2312ded4a9a30 = $this->env->getExtension("native_profiler");
        $__internal_397e6e4a475f118f9715c806cd0d85d49fef6a71f5c05b897bb2312ded4a9a30->enter($__internal_397e6e4a475f118f9715c806cd0d85d49fef6a71f5c05b897bb2312ded4a9a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"es\">
<head>
    <title>Control de Facturas</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body class=\"cover\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/loginFont.jpg"), "html", null, true);
        echo ");\">

<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" autocomplete=\"off\" class=\"full-box logInForm\">
    <p class=\"text-center text-muted\"><i class=\"zmdi zmdi-account-circle zmdi-hc-5x\"></i></p>
    <p class=\"text-center text-muted text-uppercase\">Inicia sesión con tu cuenta</p>
    ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "        <div class=\"alert alert-warning text-center\">
            <button class=\"close\" data-dismiss=\"alert\"></button>
            <span>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 22
        echo "    <div class=\"form-group label-floating\">
        <label class=\"control-label\" for=\"UserEmail\">Correo</label>
        <input class=\"form-control\" id=\"UserEmail\" type=\"email\" name=\"_username\">
        <p class=\"help-block\">Escribe tu Correo</p>
    </div>
    <div class=\"form-group label-floating\">
        <label class=\"control-label\" for=\"UserPass\">Contraseña</label>
        <input class=\"form-control\" id=\"UserPass\" type=\"password\" name=\"_password\">
        <p class=\"help-block\">Escribe tu contraseña</p>
    </div>
    <div class=\"form-group text-center\">
        <input type=\"submit\" value=\"Iniciar sesión\" class=\"btn btn-raised btn-danger\">
    </div>
    <div class=\"text-center\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "today", "Y"), "html", null, true);
        echo " &copy; FAC</div>

</form>

<!--====== Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ripples.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sweetalert2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    \$.material.init();
</script>
</body>
</html>";
        
        $__internal_397e6e4a475f118f9715c806cd0d85d49fef6a71f5c05b897bb2312ded4a9a30->leave($__internal_397e6e4a475f118f9715c806cd0d85d49fef6a71f5c05b897bb2312ded4a9a30_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  103 => 45,  99 => 44,  95 => 43,  91 => 42,  87 => 41,  83 => 40,  75 => 35,  60 => 22,  54 => 19,  50 => 17,  48 => 16,  42 => 13,  37 => 11,  32 => 9,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/*     <title>Control de Facturas</title>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/* */
/*     <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />*/
/* </head>*/
/* <body class="cover" style="background-image:url({{asset('assets/img/loginFont.jpg')}});">*/
/* */
/* <form action="{{path('login_check')}}" method="post" autocomplete="off" class="full-box logInForm">*/
/*     <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>*/
/*     <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>*/
/*     {% if error %}*/
/*         <div class="alert alert-warning text-center">*/
/*             <button class="close" data-dismiss="alert"></button>*/
/*             <span>{{ error.message }}</span>*/
/*         </div>*/
/*     {% endif %}*/
/*     <div class="form-group label-floating">*/
/*         <label class="control-label" for="UserEmail">Correo</label>*/
/*         <input class="form-control" id="UserEmail" type="email" name="_username">*/
/*         <p class="help-block">Escribe tu Correo</p>*/
/*     </div>*/
/*     <div class="form-group label-floating">*/
/*         <label class="control-label" for="UserPass">Contraseña</label>*/
/*         <input class="form-control" id="UserPass" type="password" name="_password">*/
/*         <p class="help-block">Escribe tu contraseña</p>*/
/*     </div>*/
/*     <div class="form-group text-center">*/
/*         <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">*/
/*     </div>*/
/*     <div class="text-center">{{ 'today'| date('Y') }} &copy; FAC</div>*/
/* */
/* </form>*/
/* */
/* <!--====== Scripts -->*/
/* <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/material.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/ripples.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/sweetalert2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>*/
/* <script>*/
/*     $.material.init();*/
/* </script>*/
/* </body>*/
/* </html>*/
