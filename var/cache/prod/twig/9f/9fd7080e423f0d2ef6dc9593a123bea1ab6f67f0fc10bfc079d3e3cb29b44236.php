<?php

/* dato/edit.html.twig */
class __TwigTemplate_3d3ba997c78f60c852bfea6efe4822089cb30b238554c569e0fd886e3be82f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend.html.twig", "dato/edit.html.twig", 1);
        $this->blocks = array(
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
    public function block_tabla($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"col-lg-1\">
    </div>
    <div class=\"col-lg-10\">
        <div class=\"ibox float-e-margins\">
            <div class=\"ibox-title\">
                <h5>Editar Datos</h5>
            </div>
            <div class=\"ibox-content\">
                ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
                <br>
                <button class=\"btn btn-sm btn-primary pull-left m-t-n-xs\" type=\"submit\"><strong>Aceptar</strong></button>
                ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
        echo "
                <br>
            </div>
        </div>
    </div>
    <div class=\"col-lg-1\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "dato/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'backend.html.twig' %}*/
/* {% block tabla %}*/
/* */
/*     <div class="col-lg-1">*/
/*     </div>*/
/*     <div class="col-lg-10">*/
/*         <div class="ibox float-e-margins">*/
/*             <div class="ibox-title">*/
/*                 <h5>Editar Datos</h5>*/
/*             </div>*/
/*             <div class="ibox-content">*/
/*                 {{ form_start(edit_form) }}*/
/*                 {{ form_widget(edit_form) }}*/
/*                 <br>*/
/*                 <button class="btn btn-sm btn-primary pull-left m-t-n-xs" type="submit"><strong>Aceptar</strong></button>*/
/*                 {{ form_end(edit_form) }}*/
/*                 <br>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-lg-1">*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
