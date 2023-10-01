<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6f6bc610a05a6906daa0bac10e08a88e4b68909ccf5aa6b8be7ce54aee0bf5e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_080cec4f50d26c819412c2b1af86ad3169b7e512429a4f7f5d56c33a7baeb1d0 = $this->env->getExtension("native_profiler");
        $__internal_080cec4f50d26c819412c2b1af86ad3169b7e512429a4f7f5d56c33a7baeb1d0->enter($__internal_080cec4f50d26c819412c2b1af86ad3169b7e512429a4f7f5d56c33a7baeb1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080cec4f50d26c819412c2b1af86ad3169b7e512429a4f7f5d56c33a7baeb1d0->leave($__internal_080cec4f50d26c819412c2b1af86ad3169b7e512429a4f7f5d56c33a7baeb1d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95846f6372e94e08591fae11003146c03bb97e32c9615fd58fd9ace01d09576c = $this->env->getExtension("native_profiler");
        $__internal_95846f6372e94e08591fae11003146c03bb97e32c9615fd58fd9ace01d09576c->enter($__internal_95846f6372e94e08591fae11003146c03bb97e32c9615fd58fd9ace01d09576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95846f6372e94e08591fae11003146c03bb97e32c9615fd58fd9ace01d09576c->leave($__internal_95846f6372e94e08591fae11003146c03bb97e32c9615fd58fd9ace01d09576c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_894d799d854f3628aa609f8c81f37ea057478a53dc135c0ad127510dd55b22c0 = $this->env->getExtension("native_profiler");
        $__internal_894d799d854f3628aa609f8c81f37ea057478a53dc135c0ad127510dd55b22c0->enter($__internal_894d799d854f3628aa609f8c81f37ea057478a53dc135c0ad127510dd55b22c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_894d799d854f3628aa609f8c81f37ea057478a53dc135c0ad127510dd55b22c0->leave($__internal_894d799d854f3628aa609f8c81f37ea057478a53dc135c0ad127510dd55b22c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_239ff6df1ae769e6bb80612b3bf841f2faec517a40726d369dcfa09ade4136fb = $this->env->getExtension("native_profiler");
        $__internal_239ff6df1ae769e6bb80612b3bf841f2faec517a40726d369dcfa09ade4136fb->enter($__internal_239ff6df1ae769e6bb80612b3bf841f2faec517a40726d369dcfa09ade4136fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_239ff6df1ae769e6bb80612b3bf841f2faec517a40726d369dcfa09ade4136fb->leave($__internal_239ff6df1ae769e6bb80612b3bf841f2faec517a40726d369dcfa09ade4136fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
