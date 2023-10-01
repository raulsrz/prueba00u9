<?php

/* tipo/index.html.twig */
class __TwigTemplate_89f243a654eaf5be64147e08d2031cd910ce0c08d21cc22746e6b318aae659a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "tipo/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mensaje_tipo.js"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("tipo_new");
        echo "\">Nuevo Tipo de Empaque</a>
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Gestionar Tipos de Empaque</h5>
                    <div class=\"ibox-tools\">

                    </div>
                </div>
                <div class=\"ibox-content\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover dataTables-example\" >
                            <thead>
                            <tr>

                                <th>Nombre</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 31
            echo "                                <tr class=\"gradeX\">

                                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array()), "html", null, true);
            echo "</td>

                                    <td class=\"center\">
                                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_edit", array("id" => $this->getAttribute($context["tipo"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Editar\"></i>
                                        </a>

                                        <a data-toggle=\"modal\" data-target=\"#";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\">
                                            <i  class=\"fa fa-trash-o\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Eliminar\"></i>
                                        </a>

                                        <div class=\"modal inmodal\" id=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content animated flipInY\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                        <h4 class=\"modal-title\">Atención!!!!</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p class=\"text-center\"> Va a eliminar el Tipo <strong>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array()), "html", null, true);
            echo ". </strong> Desea Continuar.</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Cancelar</button>
                                                        <a class=\"btn btn-primary pull-right\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipo_delete", array("id" => $this->getAttribute($context["tipo"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>Nombre</th>

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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 87
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
        return "tipo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 87,  158 => 86,  138 => 68,  120 => 56,  113 => 52,  102 => 44,  95 => 40,  88 => 36,  82 => 33,  78 => 31,  74 => 30,  51 => 10,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/*     {% block js %}*/
/*         {{ parent() }}*/
/*         <script type="text/javascript" src="{{ asset('js/mensaje_tipo.js') }}"></script>*/
/*     {% endblock %}*/
/* {% block tabla %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <a class="btn btn-primary pull-right" href="{{ path('tipo_new') }}">Nuevo Tipo de Empaque</a>*/
/*             <div class="ibox float-e-margins">*/
/*                 <div class="ibox-title">*/
/*                     <h5>Gestionar Tipos de Empaque</h5>*/
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
/* */
/*                                 <th>Nombre</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for tipo in tipos %}*/
/*                                 <tr class="gradeX">*/
/* */
/*                                     <td>{{ tipo.nombre }}</td>*/
/* */
/*                                     <td class="center">*/
/*                                         <a href="{{ path('tipo_edit', { 'id': tipo.id }) }}">*/
/*                                             <i class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="Editar"></i>*/
/*                                         </a>*/
/* */
/*                                         <a data-toggle="modal" data-target="#{{ tipo.id }}">*/
/*                                             <i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="left" title="Eliminar"></i>*/
/*                                         </a>*/
/* */
/*                                         <div class="modal inmodal" id="{{ tipo.id }}" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                                             <div class="modal-dialog">*/
/*                                                 <div class="modal-content animated flipInY">*/
/*                                                     <div class="modal-header">*/
/*                                                         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                                                         <h4 class="modal-title">Atención!!!!</h4>*/
/*                                                     </div>*/
/*                                                     <div class="modal-body">*/
/*                                                         <p class="text-center"> Va a eliminar el Tipo <strong>{{ tipo.nombre }}. </strong> Desea Continuar.</p>*/
/*                                                     </div>*/
/*                                                     <div class="modal-footer">*/
/*                                                         <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>*/
/*                                                         <a class="btn btn-primary pull-right" href="{{ path('tipo_delete', { 'id': tipo.id }) }}">Aceptar</a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/* */
/* */
/*                                     </td>*/
/*                                 </tr>*/
/* */
/*                             {% endfor %}*/
/* */
/*                             </tbody>*/
/*                             <tfoot>*/
/*                             <tr>*/
/* */
/*                                 <th>Nombre</th>*/
/* */
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
