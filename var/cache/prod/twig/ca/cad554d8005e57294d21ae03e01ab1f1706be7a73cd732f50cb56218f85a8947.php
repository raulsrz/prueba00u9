<?php

/* factura/index.html.twig */
class __TwigTemplate_24becbd3aa358122e27f39b8765a7e240bc9160b4bd1565190420228b3807562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "factura/index.html.twig", 1);
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

            <a data-toggle=\"modal\" data-target=\"#modaltemp\">
                <i  class=\"btn btn-primary pull-right\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Eliminar\">Nueva Factura</i>
            </a>
            <div class=\"modal inmodal\" id=\"modaltemp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content animated flipInY\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                        </div>
                        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("factura_new");
        echo "\" method=\"post\">

                        <div class=\"modal-body\">
                            <label>Escoja un Producto</label>
                            <select class=\"form-control\" id=\"prod\" name=\"prod\" required=\"required\">
                                <option></option>
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 27
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </select>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Cancelar</button>
                            <button type=\"submit\" class=\"btn btn-primary pull-right\">Aceptar</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Gestionar Facturas</h5>
                    <div class=\"ibox-tools\">

                    </div>
                </div>
                <div class=\"ibox-content\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover dataTables-example\" >
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Empresa</th>
                                <th>Cliente</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 64
        $context["var"] = "0";
        // line 65
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facturas"]) ? $context["facturas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
            // line 66
            echo "                                <tr class=\"gradeX\">
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            if ($this->getAttribute($context["factura"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["factura"], "fecha", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "nombempresa", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "nombcliente", array()), "html", null, true);
            echo "</td>

                                    <td class=\"center\">
                                        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_show", array("id" => $this->getAttribute($context["factura"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-eye\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ver\"></i>
                                        </a>

                                            <a data-toggle=\"modal\" data-target=\"#";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "\">
                                                <i  class=\"fa fa-trash-o\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Eliminar\"></i>
                                            </a>

                                        <div class=\"modal inmodal\" id=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content animated flipInY\">
                                                    <div class=\"modal-header\">
                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                                                        <h4 class=\"modal-title\">Atención!!!!</h4>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <p class=\"text-center\"> Va a eliminar la factura de <strong>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["factura"], "nombempresa", array()), "html", null, true);
            echo ". </strong> Desea Continuar.</p>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Cancelar</button>
                                                        <a class=\"btn btn-primary pull-right\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("factura_delete", array("id" => $this->getAttribute($context["factura"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Empresa</th>
                                <th>Cliente</th>


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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 127
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
        return "factura/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 127,  225 => 126,  202 => 105,  184 => 93,  177 => 89,  166 => 81,  159 => 77,  152 => 73,  146 => 70,  142 => 69,  136 => 68,  132 => 67,  129 => 66,  124 => 65,  122 => 64,  85 => 29,  74 => 27,  70 => 26,  61 => 20,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
/* */
/*             <a data-toggle="modal" data-target="#modaltemp">*/
/*                 <i  class="btn btn-primary pull-right" data-toggle="tooltip" data-placement="left" title="Eliminar">Nueva Factura</i>*/
/*             </a>*/
/*             <div class="modal inmodal" id="modaltemp" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content animated flipInY">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                         </div>*/
/*                         <form action="{{ path('factura_new') }}" method="post">*/
/* */
/*                         <div class="modal-body">*/
/*                             <label>Escoja un Producto</label>*/
/*                             <select class="form-control" id="prod" name="prod" required="required">*/
/*                                 <option></option>*/
/*                                 {% for producto in productos %}*/
/*                                     <option value="{{ producto.id }}">{{ producto.nombre }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>*/
/*                             <button type="submit" class="btn btn-primary pull-right">Aceptar</button>*/
/* */
/*                         </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="ibox float-e-margins">*/
/*                 <div class="ibox-title">*/
/*                     <h5>Gestionar Facturas</h5>*/
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
/*                                 <th>Id</th>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Empresa</th>*/
/*                                 <th>Cliente</th>*/
/* */
/* */
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% set var ='0' %}*/
/*                             {% for factura in facturas %}*/
/*                                 <tr class="gradeX">*/
/*                                     <td>{{ factura.id }}</td>*/
/*                                     <td>{% if factura.fecha %}{{ factura.fecha|date('Y-m-d') }}{% endif %}</td>*/
/*                                     <td>{{ factura.nombempresa }}</td>*/
/*                                     <td>{{ factura.nombcliente }}</td>*/
/* */
/*                                     <td class="center">*/
/*                                         <a href="{{ path('factura_show', { 'id': factura.id }) }}">*/
/*                                             <i class="fa fa-eye" data-toggle="tooltip" data-placement="left" title="Ver"></i>*/
/*                                         </a>*/
/* */
/*                                             <a data-toggle="modal" data-target="#{{ factura.id }}">*/
/*                                                 <i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="left" title="Eliminar"></i>*/
/*                                             </a>*/
/* */
/*                                         <div class="modal inmodal" id="{{ factura.id }}" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                                             <div class="modal-dialog">*/
/*                                                 <div class="modal-content animated flipInY">*/
/*                                                     <div class="modal-header">*/
/*                                                         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*                                                         <h4 class="modal-title">Atención!!!!</h4>*/
/*                                                     </div>*/
/*                                                     <div class="modal-body">*/
/*                                                         <p class="text-center"> Va a eliminar la factura de <strong>{{ factura.nombempresa }}. </strong> Desea Continuar.</p>*/
/*                                                     </div>*/
/*                                                     <div class="modal-footer">*/
/*                                                         <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>*/
/*                                                         <a class="btn btn-primary pull-right" href="{{ path('factura_delete', { 'id': factura.id }) }}">Aceptar</a>*/
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
/*                                 <th>Id</th>*/
/*                                 <th>Fecha</th>*/
/*                                 <th>Empresa</th>*/
/*                                 <th>Cliente</th>*/
/* */
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
