<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_14285295b9941b29557ef7fc55fc85d3a3cf82f79cf2da03fe41c13cfee8e590 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('date_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('time_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('file_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('form_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('collection_row', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('collection_entry_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('button_row', $context, $blocks);
        // line 254
        echo "
";
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('form_label', $context, $blocks);
        // line 297
        echo "
";
        // line 299
        echo "
";
        // line 300
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 310
        echo "
";
        // line 311
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 353
        echo "
";
        // line 354
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 358
        echo "
";
        // line 359
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 417
        echo "
";
        // line 419
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 526
        echo "
";
        // line 527
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 531
        echo "
";
        // line 533
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 543
        echo "
";
        // line 545
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 556
        echo "
";
        // line 558
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 561
        echo "
";
        // line 562
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 574
        echo "
";
        // line 576
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 598
        echo "
";
        // line 599
        $this->displayBlock('comparison_widget', $context, $blocks);
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 613
        echo "
";
        // line 614
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 617
        echo "
";
        // line 618
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 680
        echo "
";
        // line 681
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 748
        echo "
";
        // line 749
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <div class=\"row\"> ";
        // line 12
        echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "referrer"], "method", false, false, false, 12), "html", null, true);
        echo "\">
";
    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            ";
        }
        // line 19
        echo "        </div> ";
        // line 20
        echo "    </form>
";
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 35
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 38
            echo "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 44
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        // line 46
        echo "    <div class=\"datetime-widget datetime-widget-datetime\">";
        // line 47
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        // line 48
        echo "</div>
";
    }

    // line 51
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 53
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 54
        echo "</div>";
    }

    // line 57
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 59
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 60
        echo "</div>";
    }

    // line 63
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 65
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 68
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 74
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 76
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 76), "")) : ("")) . " form-group")]);
        // line 78
        echo "
    <div class=\"";
        // line 79
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", false, false, false, 79)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", false, false, false, 79)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 80
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 80, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 82
        echo "<div class=\"form-widget\">
                ";
        // line 83
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 83), "prepend_html", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 83), "prepend_html", [], "any", false, false, false, 83), null)) : (null)));
        // line 84
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 84), "append_html", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 84), "append_html", [], "any", false, false, false, 84), null)) : (null)));
        // line 85
        echo "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 86
        echo "
                ";
        // line 87
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 88
        echo "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 89
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 90), "prepend_html", [], "any", false, false, false, 90);
            echo "</span>
                        </div>
                    ";
        }
        // line 93
        echo "
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    ";
        // line 96
        if (($context["has_append_html"] ?? null)) {
            // line 97
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 97), "append_html", [], "any", false, false, false, 97);
            echo "</span>
                    ";
        }
        // line 99
        echo "                ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 100
        echo "
                ";
        // line 101
        $context["nullable_fields_fqcn"] = [0 => "EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateTimeField", 1 => "EasyCorp\\Bundle\\EasyAdminBundle\\Field\\DateField", 2 => "EasyCorp\\Bundle\\EasyAdminBundle\\Field\\TimeField"];
        // line 106
        echo "                ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 106), "ea_crud_form", [], "any", false, true, false, 106), "ea_field", [], "any", false, true, false, 106), "fieldFqcn", [], "any", true, true, false, 106)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 106), "ea_crud_form", [], "any", false, true, false, 106), "ea_field", [], "any", false, true, false, 106), "fieldFqcn", [], "any", false, false, false, 106), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 106), "ea_crud_form", [], "any", false, false, false, 106), "ea_field", [], "any", false, false, false, 106), "formTypeOptions", [], "any", false, false, false, 106), "required", [], "any", false, false, false, 106))) {
            // line 107
            echo "                    <div class=\"nullable-control\">
                        <label>
                            <input type=\"checkbox\" ";
            // line 109
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 109), "currentAction", [], "any", false, false, false, 109) == "edit") && (null === ($context["data"] ?? null))) && ($context["valid"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                            ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 114
        echo "
                ";
        // line 115
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 115), "help", [], "any", true, true, false, 115) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)) : (false))) {
            // line 116
            echo "                    <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 116), "help", [], "any", false, false, false, 116);
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 117
($context["form"] ?? null), "vars", [], "any", false, true, false, 117), "help", [], "any", true, true, false, 117) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 117), "help", [], "any", false, false, false, 117)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 117), "help", [], "any", false, false, false, 117)) : (false))) {
            // line 118
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 118), "help", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 118), "help_translation_parameters", [], "any", false, false, false, 118), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 118), "translation_domain", [], "any", false, false, false, 118));
            echo "</small>
                ";
        }
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 122
        echo "</div>
        </div>
    </div>

    ";
        // line 127
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 127), "ea_crud_form", [], "any", false, true, false, 127), "ea_field", [], "any", false, true, false, 127), "columns", [], "any", true, true, false, 127)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 127), "ea_crud_form", [], "any", false, true, false, 127), "ea_field", [], "any", false, true, false, 127), "columns", [], "any", false, false, false, 127), null)) : (null)))) {
            // line 128
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
    }

    // line 132
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    ";
        if (("ea-autocomplete" == ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 133)) ? (_twig_default_filter((($__internal_compile_2 = ($context["attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["data-ea-widget"] ?? null) : null), false)) : (false)))) {
            // line 134
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    ";
        // line 141
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 144
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 145))) {
            // line 146
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 147
            echo "    ";
        }
        // line 148
        echo "
    ";
        // line 149
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_crud_form", [], "any", false, false, false, 151), "ea_field", [], "any", false, false, false, 151) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 151), "ea_crud_form", [], "any", false, false, false, 151), "ea_field", [], "any", false, false, false, 151), "customOptions", [], "any", false, false, false, 151), "get", [0 => "entryIsComplex"], "method", false, false, false, 151))) ? ("true") : ("false")), "data-allow-add" => ((        // line 152
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 153
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 154
($context["form"] ?? null), "children", [], "any", false, false, false, 154))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 154))))), "data-form-type-name-placeholder" => ((        // line 155
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 155), "name", [], "any", false, false, false, 155)) : (""))]);
        // line 157
        echo "
    ";
        // line 158
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 161
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "    ";
        // line 164
        echo "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
        // line 165
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "ea_crud_form", [], "any", false, true, false, 165), "ea_field", [], "any", false, true, false, 165), "fieldFqcn", [], "any", true, true, false, 165) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "ea_crud_form", [], "any", false, true, false, 165), "ea_field", [], "any", false, true, false, 165), "fieldFqcn", [], "any", false, false, false, 165)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "ea_crud_form", [], "any", false, true, false, 165), "ea_field", [], "any", false, true, false, 165), "fieldFqcn", [], "any", false, false, false, 165)) : (false)));
        // line 166
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 168
        if (($context["isEmptyCollection"] ?? null)) {
            // line 169
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 170
($context["is_array_field"] ?? null)) {
            // line 171
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 173
            echo "            <div class=\"accordion\">
                ";
            // line 174
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 177
        echo "    </div>

    ";
        // line 179
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 179), "prototype", [], "any", true, true, false, 179))) {
            // line 180
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 181
            echo "    ";
        }
        // line 182
        echo "
    ";
        // line 183
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 184
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 191
    public function block_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 192
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_crud_form", [], "any", false, true, false, 192), "ea_field", [], "any", false, true, false, 192), "fieldFqcn", [], "any", true, true, false, 192) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_crud_form", [], "any", false, true, false, 192), "ea_field", [], "any", false, true, false, 192), "fieldFqcn", [], "any", false, false, false, 192)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "ea_crud_form", [], "any", false, true, false, 192), "ea_field", [], "any", false, true, false, 192), "fieldFqcn", [], "any", false, false, false, 192)) : (false)));
        // line 193
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "entryIsComplex"], "method", true, true, false, 193) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "entryIsComplex"], "method", false, false, false, 193)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "entryIsComplex"], "method", false, false, false, 193)) : (false));
        // line 194
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "allow_delete", [], "any", true, true, false, 194)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 194), "allow_delete", [], "any", false, false, false, 194), false)) : (false));
        // line 195
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "ea_crud_form", [], "any", false, true, false, 195), "ea_field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", [0 => "renderExpanded"], "method", true, true, false, 195) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "ea_crud_form", [], "any", false, true, false, 195), "ea_field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", [0 => "renderExpanded"], "method", false, false, false, 195)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 195), "ea_crud_form", [], "any", false, true, false, 195), "ea_field", [], "any", false, true, false, 195), "customOptions", [], "any", false, true, false, 195), "get", [0 => "renderExpanded"], "method", false, false, false, 195)) : (false));
        // line 196
        echo "    ";
        ob_start(function () { return ''; });
        // line 197
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        echo "
    <div class=\"field-collection-item ";
        // line 203
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 204
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 205
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 206
            if (($context["allows_deleting_items"] ?? null)) {
                // line 207
                echo "                ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 209
            echo "        ";
        } else {
            // line 210
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 212
            echo ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            echo "
                    </button>

                    ";
            // line 217
            if (($context["allows_deleting_items"] ?? null)) {
                // line 218
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 220
            echo "                </h2>
                <div id=\"";
            // line 221
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        ";
            // line 223
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 228
        echo "    </div>
";
    }

    // line 231
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 233
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 234
            echo "            ";
            // line 236
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 237
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 238
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 240
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 240), "prototype", [], "any", true, true, false, 240))) {
                // line 241
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 242
                echo "            ";
            }
            // line 243
            echo "        ";
        }
        // line 244
        echo "
        ";
        // line 245
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 249
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 250), "css_class", [], "any", true, true, false, 250)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 250), "css_class", [], "any", false, false, false, 250), "")) : ("")), "html", null, true);
        echo "\">";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 252
        echo "</div>";
    }

    // line 257
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        if ((($context["label"] ?? null) === false)) {
            // line 259
            echo "<label>";
            echo "</label>";
        } else {
            // line 261
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 262
                $context["element"] = "legend";
                // line 263
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 263), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 265
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 265)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 265), "")) : ("")) . " form-control-label"))]);
            }
            // line 267
            if (($context["required"] ?? null)) {
                // line 268
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 268)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 268), "")) : ("")) . " required"))]);
            }
            // line 270
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 271
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 272
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 273
($context["name"] ?? null), "%id%" =>                     // line 274
($context["id"] ?? null)]);
                } else {
                    // line 277
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 280
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_3 = $context;
                $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 280, $this->getSourceContext());
                }
                $__internal_compile_4 = twig_to_array($__internal_compile_4);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_3;
            }
            echo ">";
            // line 281
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 282
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 283
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 285
                    echo ($context["label"] ?? null);
                }
            } else {
                // line 288
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 289
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 291
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 294
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 300
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 302
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 302));
        echo "
    </div>
";
    }

    // line 306
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 307
        echo "    ";
        $context["force_error"] = true;
        // line 308
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 311
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 312
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 313
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 314
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 315
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 322
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 323
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 323) &&  !(null === (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>";
            // line 324
            if (((array_key_exists("download_label", $context)) ? (_twig_default_filter(($context["download_label"] ?? null), false)) : (false))) {
                // line 325
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 327
                echo twig_escape_filter($this->env, ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 329
            echo "</a>
        ";
        }
        // line 331
        echo "
        ";
        // line 332
        ob_start(function () { return ''; });
        // line 333
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "id", [], "any", false, false, false, 336), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 338
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 341
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 343), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 346
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 346)) {
            // line 347
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 347), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 349
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 350
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 350), "vars", [], "any", false, false, false, 350), "id", [], "any", false, false, false, 350), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 354
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 355
        echo "    ";
        $context["force_error"] = true;
        // line 356
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 359
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 360
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 360), "formTypeOptions", [], "any", true, true, false, 360)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 360), "formTypeOptions", [], "any", false, false, false, 360), "")) : (""));
        // line 361
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 362
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 363
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 364
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 365
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 365) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 365)))) {
                    // line 366
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 366)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 368
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 370
                echo "                </div>
            ";
            } else {
                // line 372
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 373
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 374
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 375
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 375) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 375)))) {
                    // line 376
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 376)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 378
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 380
                echo "                </a>

                <div id=\"";
                // line 382
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 383
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 383) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 383)))) {
                    // line 384
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 384)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 386
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 388
                echo "                </div>
            ";
            }
            // line 390
            echo "        ";
        }
        // line 391
        echo "
        ";
        // line 392
        ob_start(function () { return ''; });
        // line 393
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 393), "vars", [], "any", false, false, false, 393), "id", [], "any", false, false, false, 393), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "id", [], "any", false, false, false, 396), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 398
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 401
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 403), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 406
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 406)) {
            // line 407
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 407), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 409
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 410
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 410), "vars", [], "any", false, false, false, 410), "id", [], "any", false, false, false, 410), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 414
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 415
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 419
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 420
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 420)) > 0)) {
            // line 421
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 424));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 425
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 426
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 426)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["tab_config"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["tab_config"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 427
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 427)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 427), false)) : (false))) {
                    // line 428
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 428), "html", null, true);
                    echo "\"></i>";
                }
                // line 430
                echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["tab_config"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["label"] ?? null) : null), "html", null, true);
                // line 431
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 431) > 0)) {
                    // line 432
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 432)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 433
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 433), "html", null, true);
                    // line 434
                    echo "</span>";
                }
                // line 436
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 441));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 442
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_10 = $context["tab_config"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 442)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 442)) ? (_twig_default_filter((($__internal_compile_11 = $context["tab_config"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 443
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 443)) ? (_twig_default_filter((($__internal_compile_12 = $context["tab_config"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["help"] ?? null) : null), false)) : (false))) {
                    // line 444
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 445
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_13 = $context["tab_config"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 445), "translationDomain", [], "any", false, false, false, 445));
                    echo "
                                </div>
                            ";
                }
                // line 448
                echo "
                            <div class=\"row\">
                                ";
                // line 450
                if ((array_key_exists("tab_name", $context) && $context["tab_name"])) {
                    // line 451
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return ( !twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 451), function ($__panel_config__, $__form_panel__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; $context["form_panel"] = $__form_panel__; return (($context["form_panel"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 451), "ea_crud_form", [], "any", false, false, false, 451), "form_panel", [], "any", false, false, false, 451)); }) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 451), "ea_crud_form", [], "any", false, false, false, 451), "form_tab", [], "any", false, false, false, 451) == $context["tab_name"])); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 452
                        echo "                                        ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 454
                    echo "                                ";
                }
                // line 455
                echo "                                ";
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 463
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 467
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 468
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 468), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 468) || (twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 468) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 469
            echo "        ";
            $context["panel_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 469), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 469), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 469)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 469), false)) : (false)));
            // line 470
            echo "
        ";
            // line 471
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 471);
            // line 472
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 472);
            // line 473
            echo "
        <div class=\"";
            // line 474
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 474) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 474)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 474), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"form-panel\">
                ";
            // line 476
            if (($context["panel_has_header"] ?? null)) {
                // line 477
                echo "                    <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 477), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-panel-title\">
                            <a ";
                // line 479
                if ( !($context["collapsible"] ?? null)) {
                    // line 480
                    echo "                                    href=\"#\" class=\"not-collapsible\"
                               ";
                } else {
                    // line 482
                    echo "                                    href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse ";
                    // line 483
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                                    aria-expanded=\"";
                    // line 484
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\"
                               ";
                }
                // line 486
                echo "                            >
                                ";
                // line 487
                if (($context["collapsible"] ?? null)) {
                    // line 488
                    echo "                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                ";
                }
                // line 490
                echo "
                                ";
                // line 491
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 491)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 491), false)) : (false))) {
                    // line 492
                    echo "                                    <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 492), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 494
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 494);
                echo "
                            </a>

                            ";
                // line 497
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 497)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 497), false)) : (false))) {
                    // line 498
                    echo "                                <div class=\"form-panel-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 498);
                    echo "</div>
                            ";
                }
                // line 500
                echo "                        </div>
                    </div>
                ";
            }
            // line 503
            echo "
                <div id=\"content-";
            // line 504
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"form-panel-body ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 506
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 506), "block_prefixes", [], "any", false, false, false, 506)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 506), "ea_crud_form", [], "any", false, false, false, 506), "form_panel", [], "any", false, false, false, 506) == $context["panel_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 507
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 507), "ea_crud_form", [], "any", false, false, false, 507), "form_tab", [], "any", false, false, false, 507) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 507), "ea_crud_form", [], "any", false, false, false, 507), "form_tab", [], "any", false, false, false, 507) == ($context["tab_name"] ?? null)))) {
                    // line 508
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 510
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 516
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 516), "block_prefixes", [], "any", false, false, false, 516)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 516), "ea_crud_form", [], "any", false, false, false, 516), "form_tab", [], "any", false, false, false, 516)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 517
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 519
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 523
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 524), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 527
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 528
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 528), "name", [], "any", false, false, false, 528);
        // line 529
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 533
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 534
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_crud_form", [], "any", false, false, false, 536), "ea_field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", [0 => "language"], "method", false, false, false, 536), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 537
($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "ea_crud_form", [], "any", false, false, false, 537), "ea_field", [], "any", false, false, false, 537), "customOptions", [], "any", false, false, false, 537), "get", [0 => "tabSize"], "method", false, false, false, 537), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 538
($context["form"] ?? null), "vars", [], "any", false, false, false, 538), "ea_crud_form", [], "any", false, false, false, 538), "ea_field", [], "any", false, false, false, 538), "customOptions", [], "any", false, false, false, 538), "get", [0 => "indentWithTabs"], "method", false, false, false, 538)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 539
($context["form"] ?? null), "vars", [], "any", false, false, false, 539), "ea_crud_form", [], "any", false, false, false, 539), "ea_field", [], "any", false, false, false, 539), "customOptions", [], "any", false, false, false, 539), "get", [0 => "showLineNumbers"], "method", false, false, false, 539)) ? ("true") : ("false")), "data-number-of-rows" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 540
($context["form"] ?? null), "vars", [], "any", false, false, false, 540), "ea_crud_form", [], "any", false, false, false, 540), "ea_field", [], "any", false, false, false, 540), "customOptions", [], "any", false, false, false, 540), "get", [0 => "numOfRows"], "method", false, false, false, 540)])]);
        // line 541
        echo "
";
    }

    // line 545
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 546
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content", "data-number-of-rows" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 549
($context["form"] ?? null), "vars", [], "any", false, false, false, 549), "ea_crud_form", [], "any", false, false, false, 549), "ea_field", [], "any", false, false, false, 549), "customOptions", [], "any", false, false, false, 549), "get", [0 => "numOfRows"], "method", false, false, false, 549)])]);
        // line 550
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 553
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>
";
    }

    // line 558
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 559
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 559), "row_attr", [], "any", false, false, false, 559), "class", [], "any", false, false, false, 559), "html", null, true);
        echo "\"></div>
";
    }

    // line 562
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 563
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "icon", [], "any", true, true, false, 563)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "icon", [], "any", false, false, false, 563), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "label", [], "any", true, true, false, 563)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "label", [], "any", false, false, false, 563), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "css_class", [], "any", true, true, false, 563)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 563), "css_class", [], "any", false, false, false, 563), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 565
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "icon", [], "any", true, true, false, 565)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 565), "icon", [], "any", false, false, false, 565), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 565), "icon", [], "any", false, false, false, 565), "html", null, true);
            echo "\"></i>";
        }
        // line 566
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 566), "label", [], "any", true, true, false, 566)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 566), "label", [], "any", false, false, false, 566), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 566), "label", [], "any", true, true, false, 566)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 566), "label", [], "any", false, false, false, 566), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 566), "translationDomain", [], "any", false, false, false, 566));
        }
        echo "</span>
        </h2>

        ";
        // line 569
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 569), "help", [], "any", true, true, false, 569)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 569), "help", [], "any", false, false, false, 569), false)) : (false))) {
            // line 570
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 570), "help", [], "any", false, false, false, 570), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 570), "translationDomain", [], "any", false, false, false, 570));
            echo "</p>
        ";
        }
        // line 572
        echo "    </div>
";
    }

    // line 576
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 577
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 577), "query", [], "any", false, true, false, 577), "all", [], "method", false, true, false, 577), "filters", [], "array", true, true, false, 577)) ? (_twig_default_filter((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 577), "query", [], "any", false, true, false, 577), "all", [], "method", false, true, false, 577)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["filters"] ?? null) : null), [])) : ([])));
        // line 578
        echo "
    ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 580
            echo "        <div class=\"col-12\">
            <div class=\"filter-field py-1 px-3 ";
            // line 581
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 581)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 581), "name", [], "any", false, false, false, 581), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 582
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 582), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 583
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 583), "name", [], "any", false, false, false, 583), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 584
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 584), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 584), "name", [], "any", false, false, false, 584), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 584), "html", null, true);
            echo "\"
                        ";
            // line 585
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 585), "label_attr", [], "any", true, true, false, 585)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 585), "label_attr", [], "any", false, false, false, 585), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 586
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 586), "label", [], "any", true, true, false, 586)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 586), "label", [], "any", false, false, false, 586), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 586), "name", [], "any", false, false, false, 586)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 586), "name", [], "any", false, false, false, 586)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 586), "translationDomain", [], "any", false, false, false, 586)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 589), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 589), "name", [], "any", false, false, false, 589), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 589), "html", null, true);
            echo "\">
                    <div class=\"form-widget my-2\">
                        ";
            // line 591
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 599
    public function block_comparison_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 600
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 600), "attr", [], "any", false, false, false, 600), ["data-ea-comparison-id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 600), "id", [], "any", false, false, false, 600)])]);
        echo "
";
    }

    // line 603
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 604
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 605
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 605), 'row');
        echo "
        ";
        // line 606
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 606), 'row');
        echo "
        <div data-ea-value2-of-comparison-id=\"";
        // line 607
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 607), "vars", [], "any", false, false, false, 607), "id", [], "any", false, false, false, 607), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 607), "vars", [], "any", false, false, false, 607), "value", [], "any", false, false, false, 607) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 608
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 608), 'row');
        echo "
        </div>
    </div>";
        // line 611
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 614
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 615
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 618
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 619
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 621
        $context["placeholder"] = "";
        // line 622
        echo "            ";
        $context["title"] = "";
        // line 623
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 624
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 625
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 626
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 627
                echo "                ";
            } else {
                // line 628
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 628);
                // line 629
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 629));
                // line 630
                echo "                ";
            }
            // line 631
            echo "            ";
        }
        // line 632
        echo "            <div class=\"custom-file\">
                ";
        // line 633
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 633), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 633), "vars", [], "any", false, false, false, 633), "attr", [], "any", false, false, false, 633), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "style" => "display: none"])]);
        echo "
                ";
        // line 634
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 634), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 637
        if (($context["currentFiles"] ?? null)) {
            // line 638
            if (($context["multiple"] ?? null)) {
                // line 639
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 639)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 641
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 641)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 644
        if (($context["allow_delete"] ?? null)) {
            // line 645
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 645), "vars", [], "any", false, false, false, 645), "id", [], "any", false, false, false, 645), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 649
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 649), "vars", [], "any", false, false, false, 649), "id", [], "any", false, false, false, 649), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 654
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 655
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 658
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 659
                echo "                        <tr>
                            <td>
                                ";
                // line 661
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 661))), "html", null, true);
                    echo "\">";
                }
                // line 662
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 662)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 663
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 663), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 665
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 666
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 667
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 667)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 670
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 674
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 675
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 675), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 677
        echo "    </div>
    ";
        // line 678
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 678), 'errors');
        echo "
";
    }

    // line 681
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 682
        echo "    ";
        $context["placeholder"] = "";
        // line 683
        echo "    ";
        $context["title"] = "";
        // line 684
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 685
        echo "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 686
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 687
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 688
                echo "        ";
            } else {
                // line 689
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 689);
                // line 690
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 690));
                // line 691
                echo "        ";
            }
            // line 692
            echo "    ";
        }
        // line 693
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 696
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 696), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 696), "vars", [], "any", false, false, false, 696), "attr", [], "any", false, false, false, 696), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        echo "

            ";
        // line 698
        if (($context["currentFiles"] ?? null)) {
            // line 699
            echo "                <span class=\"input-group-text\">
                    ";
            // line 700
            if (($context["multiple"] ?? null)) {
                // line 701
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 701)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 703
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 703)), "html", null, true);
                echo "
                    ";
            }
            // line 705
            echo "                </span>
            ";
        }
        // line 707
        echo "
            ";
        // line 708
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 709
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 713
        echo "
            ";
        // line 714
        if (($context["currentFiles"] ?? null)) {
            // line 715
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 719
        echo "        </div>

        ";
        // line 721
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 722
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 725
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 726
                echo "                        <tr>
                            <td>
                                ";
                // line 728
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 728))), "html", null, true);
                    echo "\">";
                }
                // line 729
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 729)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 730
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 730), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 732
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 733
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 734
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 734)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 737
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 741
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 742
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 742), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 744
        echo "    </div>

    ";
        // line 746
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 746), 'errors');
        echo "
";
    }

    // line 749
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 750
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 752
($context["form"] ?? null), "parent", [], "any", false, false, false, 752), "children", [], "any", false, false, false, 752)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 752), "id", [], "any", false, false, false, 752)]);
        // line 754
        echo "
    <div class=\"input-group\">
        ";
        // line 756
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2162 => 756,  2158 => 754,  2156 => 752,  2154 => 750,  2150 => 749,  2144 => 746,  2140 => 744,  2134 => 742,  2131 => 741,  2125 => 737,  2116 => 734,  2113 => 733,  2109 => 732,  2104 => 730,  2099 => 729,  2093 => 728,  2089 => 726,  2085 => 725,  2080 => 722,  2078 => 721,  2074 => 719,  2068 => 715,  2066 => 714,  2063 => 713,  2057 => 709,  2055 => 708,  2052 => 707,  2048 => 705,  2042 => 703,  2036 => 701,  2034 => 700,  2031 => 699,  2029 => 698,  2024 => 696,  2019 => 693,  2016 => 692,  2013 => 691,  2010 => 690,  2007 => 689,  2004 => 688,  2001 => 687,  1998 => 686,  1995 => 685,  1992 => 684,  1989 => 683,  1986 => 682,  1982 => 681,  1976 => 678,  1973 => 677,  1967 => 675,  1964 => 674,  1958 => 670,  1949 => 667,  1946 => 666,  1942 => 665,  1937 => 663,  1932 => 662,  1926 => 661,  1922 => 659,  1918 => 658,  1913 => 655,  1911 => 654,  1902 => 649,  1890 => 645,  1888 => 644,  1881 => 641,  1875 => 639,  1873 => 638,  1871 => 637,  1866 => 634,  1862 => 633,  1859 => 632,  1856 => 631,  1853 => 630,  1850 => 629,  1847 => 628,  1844 => 627,  1841 => 626,  1838 => 625,  1835 => 624,  1832 => 623,  1829 => 622,  1827 => 621,  1823 => 619,  1819 => 618,  1812 => 615,  1808 => 614,  1804 => 611,  1799 => 608,  1791 => 607,  1787 => 606,  1783 => 605,  1780 => 604,  1776 => 603,  1769 => 600,  1765 => 599,  1743 => 591,  1732 => 589,  1726 => 586,  1712 => 585,  1704 => 584,  1698 => 583,  1694 => 582,  1686 => 581,  1683 => 580,  1666 => 579,  1663 => 578,  1660 => 577,  1656 => 576,  1651 => 572,  1645 => 570,  1643 => 569,  1634 => 566,  1628 => 565,  1620 => 563,  1616 => 562,  1609 => 559,  1605 => 558,  1598 => 553,  1593 => 550,  1591 => 549,  1589 => 546,  1585 => 545,  1580 => 541,  1578 => 540,  1577 => 539,  1576 => 538,  1575 => 537,  1574 => 536,  1572 => 534,  1568 => 533,  1561 => 529,  1558 => 528,  1554 => 527,  1547 => 524,  1543 => 523,  1535 => 519,  1526 => 517,  1521 => 516,  1512 => 511,  1506 => 510,  1500 => 508,  1497 => 507,  1493 => 506,  1482 => 504,  1479 => 503,  1474 => 500,  1468 => 498,  1466 => 497,  1459 => 494,  1453 => 492,  1451 => 491,  1448 => 490,  1444 => 488,  1442 => 487,  1439 => 486,  1432 => 484,  1428 => 483,  1423 => 482,  1419 => 480,  1417 => 479,  1409 => 477,  1407 => 476,  1402 => 474,  1399 => 473,  1396 => 472,  1394 => 471,  1391 => 470,  1388 => 469,  1382 => 468,  1378 => 467,  1370 => 463,  1364 => 459,  1345 => 455,  1342 => 454,  1333 => 452,  1328 => 451,  1326 => 450,  1322 => 448,  1316 => 445,  1313 => 444,  1311 => 443,  1300 => 442,  1283 => 441,  1279 => 439,  1271 => 436,  1268 => 434,  1266 => 433,  1262 => 432,  1260 => 431,  1258 => 430,  1253 => 428,  1251 => 427,  1242 => 426,  1239 => 425,  1235 => 424,  1230 => 421,  1227 => 420,  1223 => 419,  1216 => 415,  1212 => 414,  1205 => 410,  1202 => 409,  1196 => 407,  1194 => 406,  1188 => 403,  1184 => 402,  1181 => 401,  1177 => 398,  1172 => 396,  1165 => 393,  1163 => 392,  1160 => 391,  1157 => 390,  1153 => 388,  1147 => 386,  1141 => 384,  1139 => 383,  1135 => 382,  1131 => 380,  1125 => 378,  1119 => 376,  1117 => 375,  1113 => 374,  1110 => 373,  1107 => 372,  1103 => 370,  1097 => 368,  1091 => 366,  1089 => 365,  1086 => 364,  1083 => 363,  1081 => 362,  1078 => 361,  1075 => 360,  1071 => 359,  1064 => 356,  1061 => 355,  1057 => 354,  1050 => 350,  1047 => 349,  1041 => 347,  1039 => 346,  1033 => 343,  1029 => 342,  1026 => 341,  1022 => 338,  1017 => 336,  1010 => 333,  1008 => 332,  1005 => 331,  1001 => 329,  998 => 327,  995 => 325,  993 => 324,  990 => 323,  985 => 322,  982 => 315,  979 => 314,  977 => 313,  974 => 312,  970 => 311,  963 => 308,  960 => 307,  956 => 306,  949 => 302,  946 => 301,  942 => 300,  935 => 294,  931 => 291,  928 => 289,  926 => 288,  922 => 285,  919 => 283,  917 => 282,  915 => 281,  900 => 280,  896 => 277,  893 => 274,  892 => 273,  891 => 272,  889 => 271,  887 => 270,  884 => 268,  882 => 267,  879 => 265,  876 => 263,  874 => 262,  872 => 261,  868 => 259,  866 => 258,  862 => 257,  858 => 252,  856 => 251,  850 => 250,  846 => 249,  839 => 245,  836 => 244,  833 => 243,  830 => 242,  827 => 241,  824 => 240,  818 => 238,  815 => 237,  812 => 236,  810 => 234,  808 => 233,  805 => 232,  801 => 231,  796 => 228,  788 => 223,  781 => 221,  778 => 220,  772 => 218,  770 => 217,  764 => 214,  757 => 212,  753 => 210,  750 => 209,  744 => 207,  742 => 206,  737 => 205,  735 => 204,  731 => 203,  728 => 202,  721 => 198,  718 => 197,  715 => 196,  712 => 195,  709 => 194,  706 => 193,  703 => 192,  699 => 191,  691 => 186,  687 => 184,  685 => 183,  682 => 182,  679 => 181,  676 => 180,  674 => 179,  670 => 177,  664 => 174,  661 => 173,  655 => 171,  653 => 170,  648 => 169,  646 => 168,  642 => 166,  639 => 165,  636 => 164,  634 => 162,  630 => 161,  624 => 158,  621 => 157,  619 => 155,  618 => 154,  617 => 153,  616 => 152,  615 => 151,  614 => 149,  611 => 148,  608 => 147,  605 => 146,  602 => 145,  598 => 144,  592 => 141,  589 => 140,  586 => 139,  583 => 134,  580 => 133,  576 => 132,  570 => 128,  567 => 127,  561 => 122,  559 => 121,  553 => 118,  551 => 117,  546 => 116,  544 => 115,  541 => 114,  534 => 110,  528 => 109,  524 => 107,  521 => 106,  519 => 101,  516 => 100,  511 => 99,  505 => 97,  503 => 96,  498 => 94,  495 => 93,  489 => 90,  486 => 89,  483 => 88,  479 => 87,  476 => 86,  473 => 85,  470 => 84,  468 => 83,  465 => 82,  463 => 81,  452 => 80,  448 => 79,  445 => 78,  443 => 76,  441 => 75,  437 => 74,  432 => 68,  429 => 66,  427 => 65,  425 => 64,  421 => 63,  417 => 60,  415 => 59,  413 => 58,  409 => 57,  405 => 54,  403 => 53,  401 => 52,  397 => 51,  392 => 48,  390 => 47,  388 => 46,  385 => 45,  381 => 44,  377 => 41,  374 => 39,  372 => 38,  370 => 37,  367 => 35,  365 => 34,  361 => 33,  356 => 28,  345 => 26,  340 => 25,  337 => 24,  333 => 23,  328 => 20,  326 => 19,  320 => 17,  317 => 16,  313 => 15,  306 => 12,  301 => 9,  298 => 8,  292 => 6,  289 => 5,  285 => 4,  281 => 749,  278 => 748,  276 => 681,  273 => 680,  271 => 618,  268 => 617,  266 => 614,  263 => 613,  261 => 603,  258 => 602,  256 => 599,  253 => 598,  251 => 576,  248 => 574,  246 => 562,  243 => 561,  241 => 558,  238 => 556,  236 => 545,  233 => 543,  231 => 533,  228 => 531,  226 => 527,  223 => 526,  221 => 523,  218 => 521,  216 => 467,  213 => 466,  211 => 419,  208 => 417,  206 => 414,  203 => 413,  201 => 359,  198 => 358,  196 => 354,  193 => 353,  191 => 311,  188 => 310,  186 => 306,  183 => 305,  181 => 300,  178 => 299,  175 => 297,  173 => 257,  170 => 256,  167 => 254,  165 => 249,  162 => 248,  160 => 231,  157 => 230,  155 => 191,  152 => 190,  150 => 161,  147 => 160,  145 => 144,  142 => 143,  140 => 132,  137 => 131,  135 => 74,  132 => 73,  129 => 71,  127 => 63,  124 => 62,  122 => 57,  119 => 56,  117 => 51,  114 => 50,  112 => 44,  109 => 43,  107 => 33,  104 => 32,  101 => 30,  99 => 23,  96 => 22,  94 => 15,  91 => 14,  89 => 4,  86 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/homepages/9/d914851249/htdocs/dosport/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
