<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/content/media-reference-help.html.twig */
class __TwigTemplate_812ffacaf72585bbf096ea6c70387dfd413f79a9af4b5d11c45ce43b20454831 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "if" => 32, "trans" => 34, "for" => 46];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => "js-form-wrapper", 3 => "form-wrapper"];
        // line 18
        echo "<fieldset";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 20
        $context["legend_span_classes"] = [0 => "fieldset-legend", 1 => ((        // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 23
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 26
        echo "  ";
        // line 27
        echo "  <legend";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["legend_attributes"] ?? null)), "html", null, true);
        echo ">
    <span";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend_span_attributes"] ?? null), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["original_label"] ?? null)), "html", null, true);
        echo "</span>
  </legend>

  <div class=\"js-form-item form-item\">
    ";
        // line 32
        if (($context["media_add_help"] ?? null)) {
            // line 33
            echo "      <h4";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["header_attributes"] ?? null), "addClass", [0 => "label"], "method")), "html", null, true);
            echo ">
        ";
            // line 34
            echo t("Create new media", array());
            // line 37
            echo "      </h4><br />
      <div class=\"description\">
        ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_add_help"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($context["multiple"] ?? null)) {
            // line 44
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null)), "html", null, true);
            echo "
    ";
        } else {
            // line 46
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 47
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"]), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    <div";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => "description"], "method")), "html", null, true);
        echo ">
      ";
        // line 52
        if ((($context["multiple"] ?? null) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 53
            echo "        <ul>
          <li>";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null)), "html", null, true);
            echo "</li>
          <li>";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</li>
        </ul>
      ";
        } else {
            // line 58
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null)), "html", null, true);
            echo "
      ";
        }
        // line 60
        echo "      ";
        if ((($context["multiple"] ?? null) && ($context["button"] ?? null))) {
            // line 61
            echo "        <div class=\"clearfix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null)), "html", null, true);
            echo "</div>
      ";
        }
        // line 63
        echo "    </div>

  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content/media-reference-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  168 => 61,  165 => 60,  155 => 58,  149 => 55,  141 => 54,  138 => 53,  136 => 52,  132 => 51,  129 => 50,  126 => 49,  117 => 47,  112 => 46,  106 => 44,  104 => 43,  101 => 42,  95 => 39,  91 => 37,  89 => 34,  84 => 33,  82 => 32,  73 => 28,  68 => 27,  66 => 26,  64 => 23,  63 => 22,  62 => 20,  57 => 18,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for media reference fields.
 *
 * @see template_preprocess_field_multiple_value_form()
 * @see core/themes/classy/templates/form/fieldset.html.twig
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {#  Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend_attributes }}>
    <span{{ legend_span_attributes.addClass(legend_span_classes) }}>{{ original_label }}</span>
  </legend>

  <div class=\"js-form-item form-item\">
    {% if media_add_help %}
      <h4{{ header_attributes.addClass('label') }}>
        {% trans %}
          Create new media
        {% endtrans %}
      </h4><br />
      <div class=\"description\">
        {{ media_add_help }}
      </div>
    {% endif %}

    {% if multiple %}
      {{ table }}
    {% else %}
      {% for element in elements %}
        {{ element }}
      {% endfor %}
    {% endif %}

    <div{{ description.attributes.addClass('description') }}>
      {% if multiple and description.content %}
        <ul>
          <li>{{ media_list_help }} {{ media_list_link }} {{ allowed_types_help }}</li>
          <li>{{ description.content }}</li>
        </ul>
      {% else %}
        {{ media_list_help }} {{ media_list_link }} {{ allowed_types_help }}
      {% endif %}
      {% if multiple and button %}
        <div class=\"clearfix\">{{ button }}</div>
      {% endif %}
    </div>

  </div>
</fieldset>
", "core/themes/stable/templates/content/media-reference-help.html.twig", "C:\\xampp\\htdocs\\eshopbw\\core\\themes\\stable\\templates\\content\\media-reference-help.html.twig");
    }
}
