<?php

/* MiraFaceBundle:Default:index.html.twig */
class __TwigTemplate_03f696607d6b2eb55df000fe074c6a20 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "MiraFaceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
