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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_34f2f0bd755b05bde8506d22f0bd4bb7201e4e7f218ccaa2b0237291cf7bf1b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_806192c9b7fb1c75959bbdfa96fef70f1959f3d22cb983f1e4eb5de30a7480bc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 10
        $context["ea_field_assets"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 10), "fieldAssets", [0 => twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud::PAGE_INDEX")], "method", false, false, false, 10);
        // line 47
        $context["has_batch_actions"] = (twig_length_filter($this->env, ($context["batch_actions"] ?? null)) > 0);
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-index" . (((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 12
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "headContents", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 15
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "bodyContents", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 22
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 26
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "cssAssets", [], "any", false, false, false, 28)], false);
        echo "
    ";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 29)], false);
        echo "
";
    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 34
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "jsAssets", [], "any", false, false, false, 34)], false);
        echo "
    ";
        // line 35
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => twig_get_attribute($this->env, $this->source, ($context["ea_field_assets"] ?? null), "webpackEncoreAssets", [], "any", false, false, false, 35)], false);
        echo "
";
    }

    // line 38
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        ob_start(function () { return ''; });
        // line 40
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 40), "customPageTitle", [0 => "index"], "method", false, false, false, 40);
        // line 41
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "defaultPageTitle", [0 => "index"], "method", false, false, false, 42), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 42), "translationParameters", [], "any", false, false, false, 42), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 43
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 43), "translationParameters", [], "any", false, false, false, 43),         // line 5
($context["__internal_806192c9b7fb1c75959bbdfa96fef70f1959f3d22cb983f1e4eb5de30a7480bc"] ?? null))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 48
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
            // line 50
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 51
            $this->displayBlock('filters', $context, $blocks);
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('global_actions', $context, $blocks);
        // line 74
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 51
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52), "filters", [], "array", true, true, false, 52)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 52), "query", [], "any", false, true, false, 52), "all", [], "any", false, true, false, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["filters"] ?? null) : null), [])) : ([])));
        // line 53
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 54), "includeReferrer", [], "method", false, false, false, 54), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 55), "translationParameters", [], "any", false, false, false, 55), "EasyAdminBundle"), "html", null, true);
        if (($context["applied_filters"] ?? null)) {
            echo " <span class=\"action-filters-button-count\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 56
        echo "                    </a>
                    ";
        // line 57
        if (($context["applied_filters"] ?? null)) {
            // line 58
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 58), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 62
        echo "                </div>
            ";
    }

    // line 67
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        <div class=\"global-actions\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 70
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 70), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    ";
    }

    // line 74
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 76
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 78
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 78), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            </div>
        ";
        }
        // line 82
        echo "    ";
    }

    // line 85
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        // line 87
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "get", [0 => "sort"], "method", false, false, false, 87)));
        // line 88
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "get", [0 => "sort"], "method", false, false, false, 88));
        // line 89
        echo "    ";
        $context["some_results_are_hidden"] = twig_array_reduce($this->env, ($context["entities"] ?? null), function ($__some_results_are_hidden__, $__entity__) use ($context, $macros) { $context["some_results_are_hidden"] = $__some_results_are_hidden__; $context["entity"] = $__entity__; return (($context["some_results_are_hidden"] ?? null) ||  !twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "isAccessible", [], "any", false, false, false, 89)); }, false);
        // line 90
        echo "    ";
        $context["has_footer"] = (twig_length_filter($this->env, ($context["entities"] ?? null)) != 0);
        // line 91
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 91), "isSearchEnabled", [], "any", false, false, false, 91);
        // line 92
        echo "    ";
        $context["has_filters"] = (twig_length_filter($this->env, ($context["filters"] ?? null)) > 0);
        // line 93
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, ($context["entities"] ?? null));
        // line 94
        echo "
    <table class=\"table datagrid ";
        // line 95
        echo ((twig_test_empty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 96
        if ((($context["num_results"] ?? null) > 0)) {
            // line 97
            echo "            <thead>
            ";
            // line 98
            $this->displayBlock('table_head', $context, $blocks);
            // line 131
            echo "            </thead>
        ";
        }
        // line 133
        echo "
        <tbody>
        ";
        // line 135
        $this->displayBlock('table_body', $context, $blocks);
        // line 214
        echo "        </tbody>

        <tfoot>
        ";
        // line 217
        $this->displayBlock('table_footer', $context, $blocks);
        // line 219
        echo "        </tfoot>
    </table>

    ";
        // line 222
        if ((twig_length_filter($this->env, ($context["entities"] ?? null)) > 0)) {
            // line 223
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 224
            $this->displayBlock('paginator', $context, $blocks);
            // line 227
            echo "        </div>
    ";
        }
        // line 229
        echo "
    ";
        // line 230
        $this->displayBlock('delete_form', $context, $blocks);
        // line 233
        echo "
    ";
        // line 234
        if (($context["has_filters"] ?? null)) {
            // line 235
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 237
        echo "
    ";
        // line 238
        if (($context["has_batch_actions"] ?? null)) {
            // line 239
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
    }

    // line 98
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                <tr>
                    ";
        // line 100
        if (($context["has_batch_actions"] ?? null)) {
            // line 101
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 107
        echo "
                    ";
        // line 108
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 109
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 110
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 110)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 111), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 111)], "method", false, false, false, 111);
            // line 112
            echo "                        ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 112), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 112)], "method", false, false, false, 112) == ($context["ea_sort_desc"] ?? null))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 113
            echo "                        ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((($context["next_sort_direction"] ?? null) == ($context["ea_sort_desc"] ?? null))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 114
            echo "
                        <th class=\"";
            // line 115
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 115)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 115), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_1 = ($context["class"] ?? null)) && is_string($__internal_compile_2 = "field-") && ('' === $__internal_compile_2 || 0 === strpos($__internal_compile_1, $__internal_compile_2))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 115), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 115), "textDirection", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                            ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 116)) {
                // line 117
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 117) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 117), "html", null, true);
                echo "\">
                                    ";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 118);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 121
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 121);
                echo "</span>
                            ";
            }
            // line 123
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
                    <th ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 126), "showEntityActionsAsDropdown", [], "any", false, false, false, 126)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 127), "translationParameters", [], "any", false, false, false, 127), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </th>
                </tr>
            ";
    }

    // line 135
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 137
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 137)) {
                // line 138
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 138), "html", null, true);
                echo "\">
                        ";
                // line 139
                if (($context["has_batch_actions"] ?? null)) {
                    // line 140
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 142
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 142), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 146
                echo "
                        ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 148
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 148), "html_attr");
                    echo "\" class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 148) == ($context["sort_field_name"] ?? null))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 148), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 148), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 148), "textDirection", [], "any", false, false, false, 148), "html", null, true);
                    echo "\">
                                ";
                    // line 149
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 149), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "
                        ";
                // line 153
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 180
                echo "                    </tr>

                ";
            }
            // line 183
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 184
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 204
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
            ";
        // line 206
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 207
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"100\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 213
        echo "        ";
    }

    // line 153
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 154), "showEntityActionsAsDropdown", [], "any", false, false, false, 154)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 155), "count", [], "any", false, false, false, 155) > 0)) {
            // line 156
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 156), "showEntityActionsAsDropdown", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                            <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                ";
                // line 160
                echo "                                                ";
                // line 161
                echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"21\" width=\"21\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z\" />
                                                </svg>
                                            </a>

                                            <div class=\"dropdown-menu dropdown-menu-right\">
                                                ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 167));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 168
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 168), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 168), "showEntityActionsAsDropdown", [], "any", false, false, false, 168)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                                            </div>
                                        </div>
                                    ";
            } else {
                // line 173
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 173));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 174
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 174), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 174), "showEntityActionsAsDropdown", [], "any", false, false, false, 174)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                                    ";
            }
            // line 177
            echo "                                ";
        }
        // line 178
        echo "                            </td>
                        ";
    }

    // line 184
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 186
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 195
            if ((3 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 195))) {
                // line 196
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 198
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 198), "translationParameters", [], "any", false, false, false, 198), "EasyAdminBundle"), "html", null, true);
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 202
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                ";
    }

    // line 217
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "        ";
    }

    // line 224
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 225), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        echo "
            ";
    }

    // line 230
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  799 => 231,  795 => 230,  788 => 225,  784 => 224,  780 => 218,  776 => 217,  772 => 203,  758 => 202,  751 => 198,  747 => 196,  745 => 195,  734 => 186,  716 => 185,  712 => 184,  707 => 178,  704 => 177,  701 => 176,  692 => 174,  687 => 173,  682 => 170,  673 => 168,  669 => 167,  661 => 161,  659 => 160,  655 => 157,  652 => 156,  650 => 155,  645 => 154,  641 => 153,  637 => 213,  630 => 209,  626 => 207,  624 => 206,  621 => 205,  615 => 204,  612 => 184,  599 => 183,  594 => 180,  592 => 153,  589 => 152,  580 => 149,  567 => 148,  563 => 147,  560 => 146,  553 => 142,  549 => 140,  547 => 139,  542 => 138,  539 => 137,  520 => 136,  516 => 135,  508 => 127,  500 => 126,  497 => 125,  490 => 123,  484 => 121,  476 => 118,  471 => 117,  469 => 116,  457 => 115,  454 => 114,  451 => 113,  448 => 112,  445 => 111,  440 => 110,  437 => 109,  435 => 108,  432 => 107,  424 => 101,  422 => 100,  419 => 99,  415 => 98,  407 => 239,  405 => 238,  402 => 237,  396 => 235,  394 => 234,  391 => 233,  389 => 230,  386 => 229,  382 => 227,  380 => 224,  377 => 223,  375 => 222,  370 => 219,  368 => 217,  363 => 214,  361 => 135,  357 => 133,  353 => 131,  351 => 98,  348 => 97,  346 => 96,  342 => 95,  339 => 94,  336 => 93,  333 => 92,  330 => 91,  327 => 90,  324 => 89,  321 => 88,  318 => 87,  316 => 86,  312 => 85,  308 => 82,  304 => 80,  295 => 78,  291 => 77,  288 => 76,  285 => 75,  281 => 74,  276 => 72,  267 => 70,  263 => 69,  260 => 68,  256 => 67,  251 => 62,  243 => 58,  241 => 57,  238 => 56,  231 => 55,  225 => 54,  222 => 53,  219 => 52,  215 => 51,  210 => 74,  208 => 67,  205 => 66,  201 => 64,  199 => 51,  196 => 50,  193 => 49,  189 => 48,  185 => 39,  182 => 5,  181 => 43,  180 => 42,  178 => 41,  176 => 40,  174 => 39,  170 => 38,  164 => 35,  160 => 34,  155 => 33,  151 => 32,  145 => 29,  141 => 28,  136 => 27,  132 => 26,  121 => 22,  117 => 21,  112 => 20,  108 => 19,  97 => 15,  93 => 14,  88 => 13,  84 => 12,  77 => 8,  70 => 7,  66 => 4,  64 => 47,  62 => 10,  60 => 5,  53 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/homepages/9/d914851249/htdocs/dosport/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/index.html.twig");
    }
}
