<?php

/* usuario/index.html.twig */
class __TwigTemplate_9d48dadebcde5dda1d629ce49495de85ef610036f400e41babb961eca3ca6b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "usuario/index.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'tabla' => array($this, 'block_tabla'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mensaje_usuario.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 6
    public function block_tabla($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a class=\"btn btn-primary pull-right\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\">Nuevo Usuario</a>
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Gestionar Usuarios</h5>
                    <div class=\"ibox-tools\">

                    </div>
                </div>
                <div class=\"ibox-content\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover dataTables-example\" >
                            <thead>
                            <tr>
                                <th>Id</th>

                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
        // line 33
        $context["var"] = "0";
        // line 34
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 35
            echo "                                    ";
            $context["var"] = ((isset($context["var"]) ? $context["var"] : null) + $this->getAttribute($context["usuario"], "id", array()));
            // line 36
            echo "                                    <tr class=\"gradeX\">
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correo", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "rolid", array()), "html", null, true);
            echo "</td>
                                        <td class=\"center\">
                                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Editar\"></i>
                                            </a>
                                            ";
            // line 46
            if (($this->getAttribute($context["usuario"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
                // line 47
                echo "                                                <a data-toggle=\"modal\" data-target=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
                echo "\">
                                                    <i  class=\"fa fa-trash-o\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Eliminar\"></i>
                                                </a>
                                            ";
            }
            // line 51
            echo "                                            <div class=\"modal inmodal\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content animated flipInY\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                            <h4 class=\"modal-title\">Atención!!!!</h4>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <p class=\"text-center\"> Va a eliminar al usuario <strong>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo ". </strong> Desea Continuar.</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Cancelar</button>
                                                            <a class=\"btn btn-primary pull-right\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_delete", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Aceptar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 95
            echo "        <input id=\"mensaje\" class=\"form-control hidden\" value=\"";
            echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
            echo "\"  placeholder=\"\"><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 95,  182 => 94,  161 => 75,  143 => 63,  136 => 59,  124 => 51,  116 => 47,  114 => 46,  108 => 43,  103 => 41,  99 => 40,  95 => 39,  90 => 37,  87 => 36,  84 => 35,  79 => 34,  77 => 33,  51 => 10,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/*     {% block js %}*/
/*         {{ parent() }}*/
/*         <script type="text/javascript" src="{{ asset('js/mensaje_usuario.js') }}"></script>*/
/*     {% endblock %}*/
/* {% block tabla %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <a class="btn btn-primary pull-right" href="{{ path('usuario_new') }}">Nuevo Usuario</a>*/
/*             <div class="ibox float-e-margins">*/
/*                 <div class="ibox-title">*/
/*                     <h5>Gestionar Usuarios</h5>*/
/*                     <div class="ibox-tools">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="ibox-content">*/
/* */
/*                     <div class="table-responsive">*/
/*                         <table class="table table-striped table-bordered table-hover dataTables-example" >*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Id</th>*/
/* */
/*                                 <th>Nombre</th>*/
/*                                 <th>Correo</th>*/
/*                                 <th>Rol</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% set var ='0' %}*/
/*                                 {% for usuario in usuarios %}*/
/*                                     {% set var= var + usuario.id %}*/
/*                                     <tr class="gradeX">*/
/*                                         <td>{{ usuario.id }}</td>*/
/* */
/*                                         <td>{{ usuario.nombre }} </td>*/
/*                                         <td>{{ usuario.correo }}</td>*/
/*                                         <td>{{ usuario.rolid }}</td>*/
/*                                         <td class="center">*/
/*                                             <a href="{{ path('usuario_edit', { 'id': usuario.id }) }}">*/
/*                                                 <i class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="Editar"></i>*/
/*                                             </a>*/
/*                                             {% if usuario.id!=app.user.id %}*/
/*                                                 <a data-toggle="modal" data-target="#{{ usuario.id }}">*/
/*                                                     <i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="left" title="Eliminar"></i>*/
/*                                                 </a>*/
/*                                             {% endif %}*/
/*                                             <div class="modal inmodal" id="{{ usuario.id }}" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                                                 <div class="modal-dialog">*/
/*                                                     <div class="modal-content animated flipInY">*/
/*                                                         <div class="modal-header">*/
/*                                                             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                                                             <h4 class="modal-title">Atención!!!!</h4>*/
/*                                                         </div>*/
/*                                                         <div class="modal-body">*/
/*                                                             <p class="text-center"> Va a eliminar al usuario <strong>{{ usuario.nombre }}. </strong> Desea Continuar.</p>*/
/*                                                         </div>*/
/*                                                         <div class="modal-footer">*/
/*                                                             <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>*/
/*                                                             <a class="btn btn-primary pull-right" href="{{ path('usuario_delete', { 'id': usuario.id }) }}">Aceptar</a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/* */
/* */
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                 {% endfor %}*/
/* */
/*                             </tbody>*/
/*                             <tfoot>*/
/*                             <tr>*/
/*                                 <th>Id</th>*/
/*                                 <th>Nombre</th>*/
/*                                 <th>Correo</th>*/
/*                                 <th>Rol</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </tfoot>*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% for mensaje in app.session.flashbag.get('info') %}*/
/*         <input id="mensaje" class="form-control hidden" value="{{ mensaje }}"  placeholder=""><br>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
