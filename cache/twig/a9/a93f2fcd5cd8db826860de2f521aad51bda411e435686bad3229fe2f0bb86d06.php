<?php

/* modular/about.html.twig */
class __TwigTemplate_07892b31061b4b02f62418a7466a8f125414a1b473e04090cf3da93102945e90 extends Twig_Template
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
        echo "<section id=\"about\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <ul class=\"timeline\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "abouts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["about"]) {
            // line 12
            echo "                    <li ";
            if (($this->getAttribute($context["about"], "align", array()) == "inverted")) {
                echo "class=\"timeline-inverted\"";
            }
            echo ">
                        <div class=\"timeline-image\">
                            ";
            // line 14
            if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["about"], "img", array()), array(), "array")) {
                // line 15
                echo "                            <img class=\"img-circle img-responsive\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["about"], "img", array()), array(), "array"), "url", array());
                echo "\" alt=\"\">
                            ";
            } else {
                // line 17
                echo "                            <h4>";
                echo $this->getAttribute($context["about"], "alttext", array());
                echo "</h4>
                            ";
            }
            // line 19
            echo "                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>";
            // line 22
            echo $this->getAttribute($context["about"], "heading", array());
            echo "</h4>
                                <h4 class=\"subheading\">";
            // line 23
            echo $this->getAttribute($context["about"], "subheading", array());
            echo "</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">";
            // line 26
            echo $this->getAttribute($context["about"], "body", array());
            echo "</p>
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['about'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>
        </div>   
    </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  75 => 26,  69 => 23,  65 => 22,  60 => 19,  54 => 17,  48 => 15,  46 => 14,  38 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <section id="about">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*             {{ content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <ul class="timeline">*/
/*                 {% for about in page.header.abouts %}*/
/*                     <li {% if about.align == 'inverted' %}class="timeline-inverted"{% endif %}>*/
/*                         <div class="timeline-image">*/
/*                             {% if page.media[about.img] %}*/
/*                             <img class="img-circle img-responsive" src="{{ page.media[about.img].url }}" alt="">*/
/*                             {% else %}*/
/*                             <h4>{{ about.alttext }}</h4>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>{{ about.heading }}</h4>*/
/*                                 <h4 class="subheading">{{ about.subheading }}</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">{{ about.body }}</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>   */
/*     </div>*/
/* </div>*/
/* </section>*/
