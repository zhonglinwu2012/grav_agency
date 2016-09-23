<?php

/* modular/header.html.twig */
class __TwigTemplate_4343bd6068d1043d6947574d83ffbb044c7830436ab6a0ed0154025db84875ef extends Twig_Template
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
        echo "<header>
    <div class=\"container\">
        <div class=\"intro-text\">
            ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 6
            echo "                <a class=\"page-scroll btn btn-xl\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <header>*/
/*     <div class="container">*/
/*         <div class="intro-text">*/
/*             {{ content }}*/
/*             {% for button in page.header.buttons %}*/
/*                 <a class="page-scroll btn btn-xl" href="{{ button.url }}">{{ button.text }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </header>*/
