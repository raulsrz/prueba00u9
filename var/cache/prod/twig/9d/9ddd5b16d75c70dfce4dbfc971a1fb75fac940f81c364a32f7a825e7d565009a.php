<?php

/* dato/index.html.twig */
class __TwigTemplate_ab17f8971a409e4d9a7987283712b18c50ecb8ffd03ebfaba653bffdd4814915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "dato/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/mensaje_codigo.js"), "html", null, true);
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

            <div class=\"ibox float-e-margins\">
                <div class=\"ibox-title\">
                    <h5>Gestionar Datos</h5>
                    <div class=\"ibox-tools\">

                    </div>
                </div>
                <div class=\"ibox-content\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover dataTables-example\" >
                            <thead>
                            <tr>

                                <th>Direccion</th>
                                <th>Web</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Dato bancario</th>
                                <th>Titular</th>
                                <th>Iban</th>
                                <th>Bic</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 38
            echo "                                <tr class=\"gradeX\">

                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "direccion", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "web", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "telefono", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "datobancario", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "titular", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "iban", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["dato"], "bic", array()), "html", null, true);
            echo "</td>

                                    <td class=\"center\">
                                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dato_edit", array("id" => $this->getAttribute($context["dato"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Editar\"></i>
                                        </a>

                                    </td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>Direccion</th>
                                <th>Web</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Dato bancario</th>
                                <th>Titular</th>
                                <th>Iban</th>
                                <th>Bic</th>
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 83
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
        return "dato/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 83,  160 => 82,  134 => 58,  120 => 50,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  82 => 38,  78 => 37,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/*     {% block js %}*/
/*         {{ parent() }}*/
/*         <script type="text/javascript" src="{{ asset('js/mensaje_codigo.js') }}"></script>*/
/*     {% endblock %}*/
/* {% block tabla %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/* */
/*             <div class="ibox float-e-margins">*/
/*                 <div class="ibox-title">*/
/*                     <h5>Gestionar Datos</h5>*/
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
/*                                 <th>Direccion</th>*/
/*                                 <th>Web</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Telefono</th>*/
/*                                 <th>Dato bancario</th>*/
/*                                 <th>Titular</th>*/
/*                                 <th>Iban</th>*/
/*                                 <th>Bic</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for dato in datos %}*/
/*                                 <tr class="gradeX">*/
/* */
/*                                     <td>{{ dato.direccion }}</td>*/
/*                                     <td>{{ dato.web }}</td>*/
/*                                     <td>{{ dato.email }}</td>*/
/*                                     <td>{{ dato.telefono }}</td>*/
/*                                     <td>{{ dato.datobancario }}</td>*/
/*                                     <td>{{ dato.titular }}</td>*/
/*                                     <td>{{ dato.iban }}</td>*/
/*                                     <td>{{ dato.bic }}</td>*/
/* */
/*                                     <td class="center">*/
/*                                         <a href="{{ path('dato_edit', { 'id': dato.id }) }}">*/
/*                                             <i class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="Editar"></i>*/
/*                                         </a>*/
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
/*                                 <th>Direccion</th>*/
/*                                 <th>Web</th>*/
/*                                 <th>Email</th>*/
/*                                 <th>Telefono</th>*/
/*                                 <th>Dato bancario</th>*/
/*                                 <th>Titular</th>*/
/*                                 <th>Iban</th>*/
/*                                 <th>Bic</th>*/
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
/* */
