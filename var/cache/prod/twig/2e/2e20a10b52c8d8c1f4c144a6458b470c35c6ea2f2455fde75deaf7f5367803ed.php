<?php

/* backend.html.twig */
class __TwigTemplate_0a67d9b466faaa7dd2b8fb0ba0fccaecd82fa8936e85cbb0bdbac2500fec874b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'tabla' => array($this, 'block_tabla'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2017 20:29:43 GMT -->
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>Control de Facturas</title>
    ";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "
</head>

<body>
<div id=\"wrapper\">
    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav metismenu\" id=\"side-menu\">
                <li class=\"nav-header\">
                    <div class=\"dropdown profile-element\"> <span>

                                <img width=\"120\" height=\"120\" alt=\"image\" class=\"img-circle\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\" />


                             </span>

                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"clear\"> <span class=\"block m-t-xs\"> <strong class=\"font-bold\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombre", array()), "html", null, true);
        echo "</strong>
                             </span> <span class=\"text-muted text-xs block text-center\">Acciones <b class=\"caret\"></b></span> </span> </a>
                        <ul class=\"dropdown-menu animated fadeInRight m-t-xs\">

                            <li><a class=\"fa fa-user\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\"> Editar</a></li>
                            <li class=\"divider\"></li>
                            <li><a class=\"fa fa-sign-out\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"> Salir</a></li>
                        </ul>
                    </div>
                    <div class=\"logo-element\">
                        FAC
                    </div>
                </li>
                ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "
                    <li ";
            // line 60
            if (((isset($context["active"]) ? $context["active"] : null) == "usuario")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("usuario_index");
            echo "\"><i class=\"fa fa-users\"></i> <span class=\"nav-label\">Gestionar Usuarios</span></a>
                    </li>
                    <li ";
            // line 63
            if (((isset($context["active"]) ? $context["active"] : null) == "factura")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("factura_index");
            echo "\"><i class=\"fa fa-credit-card\"></i> <span class=\"nav-label\">Gestionar Facturas</span></a>
                    </li>
                    <li ";
            // line 66
            if (((isset($context["active"]) ? $context["active"] : null) == "producto")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("producto_index");
            echo "\"><i class=\"fa fa-bookmark-o\"></i> <span class=\"nav-label\">Gestionar Productos</span></a>
                    </li>
                    <li ";
            // line 69
            if (((isset($context["active"]) ? $context["active"] : null) == "codigo")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("codigo_index");
            echo "\"><i class=\"fa fa-bookmark-o\"></i> <span class=\"nav-label\">Gestionar Codigos</span></a>
                    </li>

                    <li ";
            // line 73
            if (((isset($context["active"]) ? $context["active"] : null) == "size")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("size_index");
            echo "\"><i class=\"fa fa-bookmark-o\"></i> <span class=\"nav-label\">Gestionar Size</span></a>
                    </li>

                    <li ";
            // line 77
            if (((isset($context["active"]) ? $context["active"] : null) == "tipo")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("tipo_index");
            echo "\"><i class=\"fa fa-bookmark-o\"></i> <span class=\"nav-label\">Gestionar Tipos de Empaque</span></a>
                    </li>
                    <li ";
            // line 80
            if (((isset($context["active"]) ? $context["active"] : null) == "datos")) {
                echo "class=\"active\"";
            }
            echo ">
                        <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("dato_index");
            echo "\"><i class=\"fa fa-users\"></i> <span class=\"nav-label\">Gestionar Datos</span></a>
                    </li>




                ";
        }
        // line 88
        echo "



            </ul>

        </div>
    </nav>

    <div id=\"page-wrapper\" class=\"gray-bg dashbard-1\">
        <div class=\"row border-bottom\">
            <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\"><i class=\"fa fa-bars\"></i> </a>
                </div>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li>
                        <span class=\"m-r-sm text-muted welcome-message\">Control de Facturas.</span>
                    </li>
                    ";
        // line 108
        echo "                        ";
        // line 109
        echo "                            ";
        // line 110
        echo "                        ";
        // line 111
        echo "                        ";
        // line 112
        echo "                            ";
        // line 113
        echo "                                ";
        // line 114
        echo "                                    ";
        // line 115
        echo "                                        ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                    ";
        // line 118
        echo "                                        ";
        // line 119
        echo "                                        ";
        // line 120
        echo "                                        ";
        // line 121
        echo "                                    ";
        // line 122
        echo "                                ";
        // line 123
        echo "                            ";
        // line 124
        echo "                            ";
        // line 125
        echo "                            ";
        // line 126
        echo "                                ";
        // line 127
        echo "                                    ";
        // line 128
        echo "                                        ";
        // line 129
        echo "                                    ";
        // line 130
        echo "                                    ";
        // line 131
        echo "                                        ";
        // line 132
        echo "                                        ";
        // line 133
        echo "                                        ";
        // line 134
        echo "                                    ";
        // line 135
        echo "                                ";
        // line 136
        echo "                            ";
        // line 137
        echo "                            ";
        // line 138
        echo "                            ";
        // line 139
        echo "                                ";
        // line 140
        echo "                                    ";
        // line 141
        echo "                                        ";
        // line 142
        echo "                                    ";
        // line 143
        echo "                                    ";
        // line 144
        echo "                                        ";
        // line 145
        echo "                                        ";
        // line 146
        echo "                                        ";
        // line 147
        echo "                                    ";
        // line 148
        echo "                                ";
        // line 149
        echo "                            ";
        // line 150
        echo "                            ";
        // line 151
        echo "                            ";
        // line 152
        echo "                                ";
        // line 153
        echo "                                    ";
        // line 154
        echo "                                        ";
        // line 155
        echo "                                    ";
        // line 156
        echo "                                ";
        // line 157
        echo "                            ";
        // line 158
        echo "                        ";
        // line 159
        echo "                    ";
        // line 160
        echo "                    ";
        // line 161
        echo "                        ";
        // line 162
        echo "                            ";
        // line 163
        echo "                        ";
        // line 164
        echo "                        ";
        // line 165
        echo "                            ";
        // line 166
        echo "                                ";
        // line 167
        echo "                                    ";
        // line 168
        echo "                                        ";
        // line 169
        echo "                                        ";
        // line 170
        echo "                                    ";
        // line 171
        echo "                                ";
        // line 172
        echo "                            ";
        // line 173
        echo "                            ";
        // line 174
        echo "                            ";
        // line 175
        echo "                                ";
        // line 176
        echo "                                    ";
        // line 177
        echo "                                        ";
        // line 178
        echo "                                        ";
        // line 179
        echo "                                    ";
        // line 180
        echo "                                ";
        // line 181
        echo "                            ";
        // line 182
        echo "                            ";
        // line 183
        echo "                            ";
        // line 184
        echo "                                ";
        // line 185
        echo "                                    ";
        // line 186
        echo "                                        ";
        // line 187
        echo "                                        ";
        // line 188
        echo "                                    ";
        // line 189
        echo "                                ";
        // line 190
        echo "                            ";
        // line 191
        echo "                            ";
        // line 192
        echo "                            ";
        // line 193
        echo "                                ";
        // line 194
        echo "                                    ";
        // line 195
        echo "                                        ";
        // line 196
        echo "                                        ";
        // line 197
        echo "                                    ";
        // line 198
        echo "                                ";
        // line 199
        echo "                            ";
        // line 200
        echo "                        ";
        // line 201
        echo "                    ";
        // line 202
        echo "

                    <li>
                        <a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                            <i class=\"fa fa-sign-out\"></i> Salir
                        </a>
                    </li>

                </ul>

            </nav>
        </div>
        <div class=\"row  border-bottom white-bg dashboard-header\">

            ";
        // line 216
        $this->displayBlock('tabla', $context, $blocks);
        // line 219
        echo "        </div>
    </div>

</div>
";
        // line 223
        $this->displayBlock('js', $context, $blocks);
        // line 309
        echo "</body>


</html>
";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        // line 14
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- para las tablas-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/dataTables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- Toastr style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/gritter/jquery.gritter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- Gritter -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
    }

    // line 216
    public function block_tabla($context, array $blocks = array())
    {
        // line 217
        echo "
            ";
    }

    // line 223
    public function block_js($context, array $blocks = array())
    {
        // line 224
        echo "<!-- Mainly scripts -->
<script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>


<!-- Flot -->
<script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>

<!-- para las tablas -->
<script type=\"text/javascript\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/dataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>

<!-- Peity -->
<script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/peity-demo.js"), "html", null, true);
        echo "\"></script>


<!-- Custom and plugin javascript -->
<script type=\"text/javascript\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/inspinia.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>


<!-- jQuery UI -->
<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>


<!-- GITTER -->
<script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/gritter/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>


<!-- Sparkline -->
<script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>


<!-- Sparkline demo data  -->
<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo/sparkline-demo.js"), "html", null, true);
        echo "\"></script>


<!-- ChartJS-->
<script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/chartJs/Chart.min.js"), "html", null, true);
        echo "\"></script>


<!-- Toastr -->
<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/plugins/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function(){
        \$('.dataTables-example').DataTable({
            dom: '<\"html5buttons\"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                //{extend: 'csv'},
                {extend: 'excel', title: 'documento'},
                {extend: 'pdf', title: 'documento'},

                {extend: 'print',
                    customize: function (win){
                        \$(win.document.body).addClass('white-bg');
                        \$(win.document.body).css('font-size', '10px');

                        \$(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ]

        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>
";
    }

    public function getTemplateName()
    {
        return "backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 272,  568 => 268,  561 => 264,  554 => 260,  547 => 256,  540 => 252,  533 => 248,  529 => 247,  522 => 243,  518 => 242,  512 => 239,  506 => 236,  502 => 235,  498 => 234,  494 => 233,  490 => 232,  483 => 228,  479 => 227,  475 => 226,  471 => 225,  468 => 224,  465 => 223,  460 => 217,  457 => 216,  451 => 26,  446 => 24,  440 => 21,  436 => 20,  430 => 17,  425 => 15,  420 => 14,  417 => 13,  409 => 309,  407 => 223,  401 => 219,  399 => 216,  385 => 205,  380 => 202,  378 => 201,  376 => 200,  374 => 199,  372 => 198,  370 => 197,  368 => 196,  366 => 195,  364 => 194,  362 => 193,  360 => 192,  358 => 191,  356 => 190,  354 => 189,  352 => 188,  350 => 187,  348 => 186,  346 => 185,  344 => 184,  342 => 183,  340 => 182,  338 => 181,  336 => 180,  334 => 179,  332 => 178,  330 => 177,  328 => 176,  326 => 175,  324 => 174,  322 => 173,  320 => 172,  318 => 171,  316 => 170,  314 => 169,  312 => 168,  310 => 167,  308 => 166,  306 => 165,  304 => 164,  302 => 163,  300 => 162,  298 => 161,  296 => 160,  294 => 159,  292 => 158,  290 => 157,  288 => 156,  286 => 155,  284 => 154,  282 => 153,  280 => 152,  278 => 151,  276 => 150,  274 => 149,  272 => 148,  270 => 147,  268 => 146,  266 => 145,  264 => 144,  262 => 143,  260 => 142,  258 => 141,  256 => 140,  254 => 139,  252 => 138,  250 => 137,  248 => 136,  246 => 135,  244 => 134,  242 => 133,  240 => 132,  238 => 131,  236 => 130,  234 => 129,  232 => 128,  230 => 127,  228 => 126,  226 => 125,  224 => 124,  222 => 123,  220 => 122,  218 => 121,  216 => 120,  214 => 119,  212 => 118,  210 => 117,  208 => 116,  206 => 115,  204 => 114,  202 => 113,  200 => 112,  198 => 111,  196 => 110,  194 => 109,  192 => 108,  171 => 88,  161 => 81,  155 => 80,  150 => 78,  144 => 77,  138 => 74,  132 => 73,  126 => 70,  120 => 69,  115 => 67,  109 => 66,  104 => 64,  98 => 63,  93 => 61,  87 => 60,  84 => 59,  82 => 58,  72 => 51,  67 => 49,  60 => 45,  51 => 39,  38 => 28,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* */
/* <!-- Mirrored from webapplayers.com/inspinia_admin-v2.5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2017 20:29:43 GMT -->*/
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <title>Control de Facturas</title>*/
/*     {% block css %}*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />*/
/*     <!-- para las tablas-->*/
/*     <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*     <!-- Toastr style -->*/
/*     <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*     <!-- Gritter -->*/
/*     <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />*/
/* */
/*     <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* <div id="wrapper">*/
/*     <nav class="navbar-default navbar-static-side" role="navigation">*/
/*         <div class="sidebar-collapse">*/
/*             <ul class="nav metismenu" id="side-menu">*/
/*                 <li class="nav-header">*/
/*                     <div class="dropdown profile-element"> <span>*/
/* */
/*                                 <img width="120" height="120" alt="image" class="img-circle" src="{{ asset('img/user.png') }}" />*/
/* */
/* */
/*                              </span>*/
/* */
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ app.user.nombre }}</strong>*/
/*                              </span> <span class="text-muted text-xs block text-center">Acciones <b class="caret"></b></span> </span> </a>*/
/*                         <ul class="dropdown-menu animated fadeInRight m-t-xs">*/
/* */
/*                             <li><a class="fa fa-user" href="{{ path('usuario_edit', { 'id': app.user.id }) }}"> Editar</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a class="fa fa-sign-out" href="{{ path('logout') }}"> Salir</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="logo-element">*/
/*                         FAC*/
/*                     </div>*/
/*                 </li>*/
/*                 {%if is_granted('ROLE_ADMIN')%}*/
/* */
/*                     <li {% if active == 'usuario' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('usuario_index') }}"><i class="fa fa-users"></i> <span class="nav-label">Gestionar Usuarios</span></a>*/
/*                     </li>*/
/*                     <li {% if active == 'factura' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('factura_index') }}"><i class="fa fa-credit-card"></i> <span class="nav-label">Gestionar Facturas</span></a>*/
/*                     </li>*/
/*                     <li {% if active == 'producto' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('producto_index') }}"><i class="fa fa-bookmark-o"></i> <span class="nav-label">Gestionar Productos</span></a>*/
/*                     </li>*/
/*                     <li {% if active == 'codigo' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('codigo_index') }}"><i class="fa fa-bookmark-o"></i> <span class="nav-label">Gestionar Codigos</span></a>*/
/*                     </li>*/
/* */
/*                     <li {% if active == 'size' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('size_index') }}"><i class="fa fa-bookmark-o"></i> <span class="nav-label">Gestionar Size</span></a>*/
/*                     </li>*/
/* */
/*                     <li {% if active == 'tipo' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('tipo_index') }}"><i class="fa fa-bookmark-o"></i> <span class="nav-label">Gestionar Tipos de Empaque</span></a>*/
/*                     </li>*/
/*                     <li {% if active == 'datos' %}class="active"{% endif %}>*/
/*                         <a href="{{ path('dato_index') }}"><i class="fa fa-users"></i> <span class="nav-label">Gestionar Datos</span></a>*/
/*                     </li>*/
/* */
/* */
/* */
/* */
/*                 {% endif %}*/
/* */
/* */
/* */
/* */
/*             </ul>*/
/* */
/*         </div>*/
/*     </nav>*/
/* */
/*     <div id="page-wrapper" class="gray-bg dashbard-1">*/
/*         <div class="row border-bottom">*/
/*             <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*                 <div class="navbar-header">*/
/*                     <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>*/
/*                 </div>*/
/*                 <ul class="nav navbar-top-links navbar-right">*/
/*                     <li>*/
/*                         <span class="m-r-sm text-muted welcome-message">Control de Facturas.</span>*/
/*                     </li>*/
/*                     {#<li class="dropdown">#}*/
/*                         {#<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">#}*/
/*                             {#<i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>#}*/
/*                         {#</a>#}*/
/*                         {#<ul class="dropdown-menu dropdown-messages">#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="dropdown-messages-box">#}*/
/*                                     {#<a href="profile.html" class="pull-left">#}*/
/*                                         {#<img alt="image" class="img-circle" src="{{asset('uploads/users/'~ app.user.foto)}}">#}*/
/*                                     {#</a>#}*/
/*                                     {#<div class="media-body">#}*/
/*                                         {#<small class="pull-right">46h ago</small>#}*/
/*                                         {#<strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>#}*/
/*                                         {#<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="dropdown-messages-box">#}*/
/*                                     {#<a href="profile.html" class="pull-left">#}*/
/*                                         {#<img alt="image" class="img-circle" src="{{asset('uploads/users/'~ app.user.foto)}}">#}*/
/*                                     {#</a>#}*/
/*                                     {#<div class="media-body ">#}*/
/*                                         {#<small class="pull-right text-navy">5h ago</small>#}*/
/*                                         {#<strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>#}*/
/*                                         {#<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="dropdown-messages-box">#}*/
/*                                     {#<a href="profile.html" class="pull-left">#}*/
/*                                         {#<img alt="image" class="img-circle" src="{{asset('uploads/users/'~ app.user.foto)}}">#}*/
/*                                     {#</a>#}*/
/*                                     {#<div class="media-body ">#}*/
/*                                         {#<small class="pull-right">23h ago</small>#}*/
/*                                         {#<strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>#}*/
/*                                         {#<small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>#}*/
/*                                     {#</div>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="text-center link-block">#}*/
/*                                     {#<a href="mailbox.html">#}*/
/*                                         {#<i class="fa fa-envelope"></i> <strong>Read All Messages</strong>#}*/
/*                                     {#</a>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                         {#</ul>#}*/
/*                     {#</li>#}*/
/*                     {#<li class="dropdown">#}*/
/*                         {#<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">#}*/
/*                             {#<i class="fa fa-bell"></i>  <span class="label label-primary">8</span>#}*/
/*                         {#</a>#}*/
/*                         {#<ul class="dropdown-menu dropdown-alerts">#}*/
/*                             {#<li>#}*/
/*                                 {#<a href="mailbox.html">#}*/
/*                                     {#<div>#}*/
/*                                         {#<i class="fa fa-envelope fa-fw"></i> You have 16 messages#}*/
/*                                         {#<span class="pull-right text-muted small">4 minutes ago</span>#}*/
/*                                     {#</div>#}*/
/*                                 {#</a>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<a href="profile.html">#}*/
/*                                     {#<div>#}*/
/*                                         {#<i class="fa fa-twitter fa-fw"></i> 3 New Followers#}*/
/*                                         {#<span class="pull-right text-muted small">12 minutes ago</span>#}*/
/*                                     {#</div>#}*/
/*                                 {#</a>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<a href="grid_options.html">#}*/
/*                                     {#<div>#}*/
/*                                         {#<i class="fa fa-upload fa-fw"></i> Server Rebooted#}*/
/*                                         {#<span class="pull-right text-muted small">4 minutes ago</span>#}*/
/*                                     {#</div>#}*/
/*                                 {#</a>#}*/
/*                             {#</li>#}*/
/*                             {#<li class="divider"></li>#}*/
/*                             {#<li>#}*/
/*                                 {#<div class="text-center link-block">#}*/
/*                                     {#<a href="notifications.html">#}*/
/*                                         {#<strong>See All Alerts</strong>#}*/
/*                                         {#<i class="fa fa-angle-right"></i>#}*/
/*                                     {#</a>#}*/
/*                                 {#</div>#}*/
/*                             {#</li>#}*/
/*                         {#</ul>#}*/
/*                     {#</li>#}*/
/* */
/* */
/*                     <li>*/
/*                         <a href="{{ path('logout') }}">*/
/*                             <i class="fa fa-sign-out"></i> Salir*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/* */
/*             </nav>*/
/*         </div>*/
/*         <div class="row  border-bottom white-bg dashboard-header">*/
/* */
/*             {% block tabla %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* {% block js %}*/
/* <!-- Mainly scripts -->*/
/* <script type="text/javascript" src="{{ asset('js/jquery-2.1.1.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>*/
/* */
/* */
/* <!-- Flot -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>*/
/* */
/* <!-- para las tablas -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>*/
/* */
/* <!-- Peity -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/demo/peity-demo.js') }}"></script>*/
/* */
/* */
/* <!-- Custom and plugin javascript -->*/
/* <script type="text/javascript" src="{{ asset('js/inspinia.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>*/
/* */
/* */
/* <!-- jQuery UI -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>*/
/* */
/* */
/* <!-- GITTER -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/gritter/jquery.gritter.min.js') }}"></script>*/
/* */
/* */
/* <!-- Sparkline -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>*/
/* */
/* */
/* <!-- Sparkline demo data  -->*/
/* <script type="text/javascript" src="{{ asset('js/demo/sparkline-demo.js') }}"></script>*/
/* */
/* */
/* <!-- ChartJS-->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/chartJs/Chart.min.js') }}"></script>*/
/* */
/* */
/* <!-- Toastr -->*/
/* <script type="text/javascript" src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>*/
/* <script>*/
/*     $(document).ready(function(){*/
/*         $('.dataTables-example').DataTable({*/
/*             dom: '<"html5buttons"B>lTfgitp',*/
/*             buttons: [*/
/*                 { extend: 'copy'},*/
/*                 //{extend: 'csv'},*/
/*                 {extend: 'excel', title: 'documento'},*/
/*                 {extend: 'pdf', title: 'documento'},*/
/* */
/*                 {extend: 'print',*/
/*                     customize: function (win){*/
/*                         $(win.document.body).addClass('white-bg');*/
/*                         $(win.document.body).css('font-size', '10px');*/
/* */
/*                         $(win.document.body).find('table')*/
/*                                 .addClass('compact')*/
/*                                 .css('font-size', 'inherit');*/
/*                     }*/
/*                 }*/
/*             ]*/
/* */
/*         });*/
/*     });*/
/* </script>*/
/* <script>*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','','ga');*/
/* */
/*     ga('create', 'UA-4625583-2', 'webapplayers.com');*/
/*     ga('send', 'pageview');*/
/* */
/* </script>*/
/* {% endblock %}*/
/* </body>*/
/* */
/* */
/* </html>*/
/* */
