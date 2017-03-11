<?php

/* pages/home.twig */
class __TwigTemplate_36c8a81b1932653954d4026f0c068cfbf1edf77951237cc7e392ca79e8b1ccb9 extends Twig_Template
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
        // line 1
        echo "<h1>HOLLOOOOOOO!</h1>";
    }

    public function getTemplateName()
    {
        return "pages/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/home.twig", "C:\\Users\\taha\\Desktop\\lab\\slim3\\app\\views\\pages\\home.twig");
    }
}
