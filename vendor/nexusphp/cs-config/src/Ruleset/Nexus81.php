<?php

declare(strict_types=1);

/**
 * This file is part of Nexus CS Config.
 *
 * (c) 2020 John Paul E. Balandan, CPA <paulbalandan@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Nexus\CsConfig\Ruleset;

/**
 * Ruleset for `Nexus` group.
 *
 * @internal
 */
final class Nexus81 extends AbstractRuleset
{
    public function __construct()
    {
        $this->name = 'Nexus for PHP 8.1';
        $this->rules = [
            'align_multiline_comment' => ['comment_type' => 'all_multiline'],
            'array_indentation' => true,
            'array_push' => true,
            'array_syntax' => ['syntax' => 'short'],
            'assign_null_coalescing_to_coalesce_equal' => true,
            'attribute_empty_parentheses' => ['use_parentheses' => false],
            'backtick_to_shell_exec' => true,
            'binary_operator_spaces' => [
                'default' => 'single_space',
                'operators' => [],
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'blank_line_between_import_groups' => true,
            'blank_lines_before_namespace' => [
                'min_line_breaks' => 2,
                'max_line_breaks' => 2,
            ],
            'braces_position' => [
                'control_structures_opening_brace' => 'same_line',
                'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_functions_opening_brace' => 'same_line',
                'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_classes_opening_brace' => 'same_line',
                'allow_single_line_empty_anonymous_classes' => true,
                'allow_single_line_anonymous_functions' => true,
            ],
            'cast_spaces' => ['space' => 'single'],
            'class_attributes_separation' => [
                'elements' => [
                    'case' => 'none',
                    'const' => 'none',
                    'property' => 'none',
                    'method' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => [
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
                'single_line' => false,
                'space_before_parenthesis' => true,
                'inline_constructor_arguments' => true,
            ],
            'class_keyword' => true,
            'class_reference_name_casing' => true,
            'clean_namespace' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'combine_nested_dirname' => true,
            'comment_to_phpdoc' => [
                'ignored_tags' => [
                    'todo',
                    'codeCoverageIgnore',
                    'codeCoverageIgnoreStart',
                    'codeCoverageIgnoreEnd',
                    'phpstan-ignore',
                    'phpstan-ignore-line',
                    'phpstan-ignore-next-line',
                ],
            ],
            'compact_nullable_type_declaration' => true,
            'concat_space' => ['spacing' => 'none'],
            'constant_case' => ['case' => 'lower'],
            'control_structure_braces' => true,
            'control_structure_continuation_position' => ['position' => 'same_line'],
            'date_time_create_from_format_call' => true,
            'date_time_immutable' => true,
            'declare_equal_normalize' => ['space' => 'none'],
            'declare_parentheses' => true,
            'declare_strict_types' => true,
            'dir_constant' => true,
            'doctrine_annotation_array_assignment' => false,
            'doctrine_annotation_braces' => false,
            'doctrine_annotation_indentation' => false,
            'doctrine_annotation_spaces' => false,
            'echo_tag_syntax' => [
                'format' => 'short',
                'long_function' => 'echo',
                'shorten_simple_statements_only' => true,
            ],
            'elseif' => true,
            'empty_loop_body' => ['style' => 'braces'],
            'empty_loop_condition' => ['style' => 'while'],
            'encoding' => true,
            'ereg_to_preg' => true,
            'error_suppression' => [
                'mute_deprecation_error' => true,
                'noise_remaining_usages' => false,
                'noise_remaining_usages_exclude' => [],
            ],
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'final_class' => false,
            'final_internal_class' => [
                'exclude' => ['final', 'no-final'],
                'include' => ['internal'],
                'consider_absent_docblock_as_internal_class' => true,
            ],
            'final_public_method_for_abstract_class' => true,
            'fopen_flag_order' => true,
            'fopen_flags' => ['b_mode' => true],
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => [
                'import_symbols' => true,
                'leading_backslash_in_global_namespace' => false,
                'phpdoc_tags' => [
                    'param',
                    'phpstan-param',
                    'phpstan-property',
                    'phpstan-property-read',
                    'phpstan-property-write',
                    'phpstan-return',
                    'phpstan-var',
                    'property',
                    'property-read',
                    'property-write',
                    'return',
                    'throws',
                    'var',
                ],
            ],
            'function_declaration' => [
                'closure_function_spacing' => 'one',
                'closure_fn_spacing' => 'none',
                'trailing_comma_single_line' => false,
            ],
            'function_to_constant' => [
                'functions' => [
                    'get_called_class',
                    'get_class',
                    'get_class_this',
                    'php_sapi_name',
                    'phpversion',
                    'pi',
                ],
            ],
            'general_attribute_remove' => ['attributes' => []],
            'general_phpdoc_annotation_remove' => [
                'annotations' => [
                    'package',
                    'subpackage',
                ],
                'case_sensitive' => false,
            ],
            'general_phpdoc_tag_rename' => [
                'case_sensitive' => false,
                'fix_annotation' => true,
                'fix_inline' => true,
                'replacements' => ['inheritDocs' => 'inheritDoc'],
            ],
            'get_class_to_class_keyword' => true,
            'global_namespace_import' => [
                'import_classes' => false,
                'import_constants' => false,
                'import_functions' => false,
            ],
            'group_import' => false,
            'header_comment' => false,
            'heredoc_closing_marker' => false,
            'heredoc_indentation' => ['indentation' => 'start_plus_one'],
            'heredoc_to_nowdoc' => true,
            'implode_call' => true,
            'include' => true,
            'increment_style' => ['style' => 'pre'],
            'indentation_type' => true,
            'integer_literal_case' => true,
            'is_null' => true,
            'lambda_not_used_import' => true,
            'line_ending' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => ['syntax' => 'short'],
            'logical_operators' => true,
            'long_to_shorthand_operator' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'mb_str_functions' => false,
            'method_argument_space' => [
                'keep_multiple_spaces_after_comma' => false,
                'on_multiline' => 'ensure_fully_multiline',
                'after_heredoc' => true,
                'attribute_placement' => 'standalone',
            ],
            'method_chaining_indentation' => true,
            'modernize_strpos' => ['modernize_stripos' => true],
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_promoted_properties' => [
                'keep_blank_lines' => false,
                'minimum_number_of_parameters' => 1,
            ],
            'multiline_string_to_heredoc' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
            'native_constant_invocation' => [
                'fix_built_in' => false,
                'include' => [
                    'DIRECTORY_SEPARATOR',
                    'PHP_INT_SIZE',
                    'PHP_SAPI',
                    'PHP_VERSION_ID',
                ],
                'exclude' => [],
                'scope' => 'namespaced',
                'strict' => true,
            ],
            'native_function_casing' => true,
            'native_function_invocation' => [
                'exclude' => [],
                'include' => ['@compiler_optimized'],
                'scope' => 'namespaced',
                'strict' => true,
            ],
            'native_type_declaration_casing' => true,
            'new_expression_parentheses' => ['use_parentheses' => true],
            'new_with_parentheses' => [
                'named_class' => true,
                'anonymous_class' => false,
            ],
            'no_alias_functions' => ['sets' => ['@all']],
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => ['fix_non_monolithic_code' => false],
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_break_comment' => ['comment_text' => 'no break'],
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_homoglyph_names' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => ['use' => 'echo'],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_multiple_statements_per_line' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_space_around_double_colon' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => ['positions' => ['inside', 'outside']],
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'allow_hidden_params' => true,
                'allow_mixed' => false,
                'allow_unused_params' => false,
                'remove_inheritdoc' => true,
            ],
            'no_trailing_comma_in_singleline' => [
                'elements' => ['arguments', 'array', 'array_destructuring', 'group_import'],
            ],
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_trailing_whitespace_in_string' => true,
            'no_unneeded_braces' => ['namespaces' => true],
            'no_unneeded_control_parentheses' => [
                'statements' => [
                    'break',
                    'clone',
                    'continue',
                    'echo_print',
                    'return',
                    'switch_case',
                    'yield',
                ],
            ],
            'no_unneeded_final_method' => ['private_methods' => true],
            'no_unneeded_import_alias' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unset_cast' => true,
            'no_unset_on_property' => false,
            'no_unused_imports' => true,
            'no_useless_concat_operator' => ['juggle_simple_strings' => true],
            'no_useless_else' => true,
            'no_useless_nullsafe_operator' => true,
            'no_useless_return' => true,
            'no_useless_sprintf' => true,
            'no_whitespace_before_comma_in_array' => ['after_heredoc' => false],
            'no_whitespace_in_blank_line' => true,
            'non_printable_character' => ['use_escape_sequences_in_strings' => true],
            'normalize_index_brace' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => true,
            'nullable_type_declaration' => ['syntax' => 'question_mark'],
            'nullable_type_declaration_for_default_null_value' => true,
            'numeric_literal_separator' => false,
            'object_operator_without_whitespace' => true,
            'octal_notation' => true,
            'operator_linebreak' => ['only_booleans' => true, 'position' => 'beginning'],
            'ordered_attributes' => ['order' => [], 'sort_algorithm' => 'alpha'],
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'case',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'magic',
                    'phpunit',
                    'method_public',
                    'method_protected',
                    'method_private',
                ],
                'sort_algorithm' => 'none',
                'case_sensitive' => false,
            ],
            'ordered_imports' => [
                'imports_order' => ['class', 'function', 'const'],
                'sort_algorithm' => 'alpha',
                'case_sensitive' => false,
            ],
            'ordered_interfaces' => [
                'order' => 'alpha',
                'direction' => 'ascend',
                'case_sensitive' => false,
            ],
            'ordered_traits' => ['case_sensitive' => false],
            'ordered_types' => [
                'sort_algorithm' => 'alpha',
                'null_adjustment' => 'always_first',
                'case_sensitive' => false,
            ],
            'php_unit_assert_new_names' => true,
            'php_unit_attributes' => [
                'keep_annotations' => false,
            ],
            'php_unit_construct' => [
                'assertions' => [
                    'assertEquals',
                    'assertSame',
                    'assertNotEquals',
                    'assertNotSame',
                ],
            ],
            'php_unit_data_provider_method_order' => [
                'placement' => 'after',
            ],
            'php_unit_data_provider_name' => [
                'prefix' => 'provide',
                'suffix' => 'Cases',
            ],
            'php_unit_data_provider_return_type' => true,
            'php_unit_data_provider_static' => ['force' => true],
            'php_unit_dedicate_assert' => ['target' => 'newest'],
            'php_unit_dedicate_assert_internal_type' => ['target' => 'newest'],
            'php_unit_expectation' => ['target' => 'newest'],
            'php_unit_fqcn_annotation' => true,
            'php_unit_internal_class' => ['types' => ['normal', 'final']],
            'php_unit_method_casing' => ['case' => 'camel_case'],
            'php_unit_mock' => ['target' => 'newest'],
            'php_unit_mock_short_will_return' => true,
            'php_unit_namespaced' => ['target' => 'newest'],
            'php_unit_no_expectation_annotation' => [
                'target' => 'newest',
                'use_class_const' => true,
            ],
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_size_class' => false,
            'php_unit_strict' => [
                'assertions' => [
                    'assertAttributeEquals',
                    'assertAttributeNotEquals',
                    'assertEquals',
                    'assertNotEquals',
                ],
            ],
            'php_unit_test_annotation' => ['style' => 'prefix'],
            'php_unit_test_case_static_method_calls' => [
                'call_type' => 'self',
                'methods' => [],
            ],
            'php_unit_test_class_requires_covers' => false,
            'phpdoc_add_missing_param_annotation' => ['only_untyped' => true],
            'phpdoc_align' => [
                'align' => 'vertical',
                'spacing' => 1,
                'tags' => [
                    'method',
                    'param',
                    'phpstan-assert',
                    'phpstan-assert-if-true',
                    'phpstan-assert-if-false',
                    'phpstan-param',
                    'phpstan-property',
                    'phpstan-return',
                    'property',
                    'return',
                    'throws',
                    'type',
                    'var',
                ],
            ],
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_array_type' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => [
                'tags' => [
                    'example',
                    'id',
                    'internal',
                    'inheritdoc',
                    'inheritdocs',
                    'link',
                    'source',
                    'toc',
                    'tutorial',
                ],
            ],
            'phpdoc_line_span' => [
                'const' => 'multi',
                'method' => 'multi',
                'property' => 'multi',
            ],
            'phpdoc_list_type' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    'property-read' => 'property',
                    'property-write' => 'property',
                    'type' => 'var',
                    'link' => 'see',
                ],
            ],
            'phpdoc_no_empty_return' => false,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => ['order' => ['param', 'return', 'throws']],
            'phpdoc_order_by_value' => [
                'annotations' => [
                    'author',
                    'covers',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'group',
                    'internal',
                    'method',
                    'property',
                    'property-read',
                    'property-write',
                    'requires',
                    'throws',
                    'uses',
                ],
            ],
            'phpdoc_param_order' => true,
            'phpdoc_readonly_class_comment_to_keyword' => false,
            'phpdoc_return_self_reference' => [
                'replacements' => [
                    'this' => '$this',
                    '@this' => '$this',
                    '$self' => 'self',
                    '@self' => 'self',
                    '$static' => 'static',
                    '@static' => 'static',
                ],
            ],
            'phpdoc_scalar' => [
                'types' => [
                    'boolean',
                    'callback',
                    'double',
                    'integer',
                    'real',
                    'str',
                ],
            ],
            'phpdoc_separation' => [
                'groups' => [
                    ['author', 'copyright', 'license'],
                    ['category', 'package', 'subpackage'],
                    ['deprecated', 'link', 'see', 'since'],
                    ['phpstan-assert', 'phpstan-assert-if-true', 'phpstan-assert-if-false'],
                    ['property', 'property-read', 'property-write'],
                    ['runTestsInSeparateProcess', 'runInSeparateProcess', 'preserveGlobalState'],
                    ['template', 'template-covariant'],
                ],
                'skip_unlisted_annotations' => false,
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_tag_casing' => ['tags' => ['inheritDoc']],
            'phpdoc_tag_type' => ['tags' => ['inheritDoc' => 'inline']],
            'phpdoc_to_comment' => [
                'allow_before_return_statement' => true,
                'ignored_tags' => [],
            ],
            'phpdoc_to_param_type' => [
                'scalar_types' => true,
                'types_map' => [],
                'union_types' => true,
            ],
            'phpdoc_to_property_type' => [
                'scalar_types' => true,
                'types_map' => [],
                'union_types' => true,
            ],
            'phpdoc_to_return_type' => [
                'scalar_types' => true,
                'types_map' => [],
                'union_types' => true,
            ],
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => ['groups' => ['simple', 'alias', 'meta']],
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_first',
                'sort_algorithm' => 'alpha',
                'case_sensitive' => false,
            ],
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'protected_to_private' => true,
            'psr_autoloading' => ['dir' => null],
            'random_api_migration' => [
                'replacements' => [
                    'getrandmax' => 'mt_getrandmax',
                    'rand' => 'mt_rand',
                    'srand' => 'mt_srand',
                ],
            ],
            'regular_callable_call' => true,
            'return_assignment' => true,
            'return_to_yield_from' => true,
            'return_type_declaration' => ['space_before' => 'none'],
            'self_accessor' => true,
            'self_static_accessor' => true,
            'semicolon_after_instruction' => true,
            'set_type_to_cast' => true,
            'short_scalar_cast' => true,
            'simple_to_complex_string_variable' => true,
            'simplified_if_return' => true,
            'simplified_null_return' => false,
            'single_blank_line_at_eof' => true,
            'single_class_element_per_statement' => ['elements' => ['const', 'property']],
            'single_import_per_statement' => ['group_to_single_imports' => true],
            'single_line_after_imports' => true,
            'single_line_comment_spacing' => true,
            'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],
            'single_line_empty_body' => true,
            'single_line_throw' => false,
            'single_quote' => ['strings_containing_single_quote_chars' => false],
            'single_space_around_construct' => [
                'constructs_contain_a_single_space' => ['yield_from'],
                'constructs_preceded_by_a_single_space' => ['as', 'use_lambda'],
                'constructs_followed_by_a_single_space' => [
                    'abstract',
                    'as',
                    'attribute',
                    'break',
                    'case',
                    'catch',
                    'class',
                    'clone',
                    'comment',
                    'const',
                    'const_import',
                    'continue',
                    'do',
                    'echo',
                    'else',
                    'elseif',
                    'enum',
                    'extends',
                    'final',
                    'finally',
                    'for',
                    'foreach',
                    'function',
                    'function_import',
                    'global',
                    'goto',
                    'if',
                    'implements',
                    'include',
                    'include_once',
                    'instanceof',
                    'insteadof',
                    'interface',
                    'match',
                    'named_argument',
                    'namespace',
                    'new',
                    'open_tag_with_echo',
                    'php_doc',
                    'php_open',
                    'print',
                    'private',
                    'protected',
                    'public',
                    'readonly',
                    'require',
                    'require_once',
                    'return',
                    'static',
                    'switch',
                    'throw',
                    'trait',
                    'try',
                    'type_colon',
                    'use',
                    'use_lambda',
                    'use_trait',
                    'var',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],
            'spaces_inside_parentheses' => ['space' => 'none'],
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'statement_indentation' => ['stick_comment_to_next_continuous_control_statement' => true],
            'static_lambda' => true,
            'static_private_method' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'string_implicit_backslashes' => [
                'double_quoted' => 'escape',
                'heredoc' => 'escape',
                'single_quoted' => 'ignore',
            ],
            'string_length_to_empty' => true,
            'string_line_ending' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_elvis_operator' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => [
                'after_heredoc' => true,
                'elements' => ['arrays', 'arguments', 'parameters'],
            ],
            'trim_array_spaces' => true,
            'type_declaration_spaces' => ['elements' => ['function', 'property']],
            'types_spaces' => ['space' => 'none', 'space_multiple_catch' => null],
            'unary_operator_spaces' => ['only_dec_inc' => false],
            'use_arrow_functions' => true,
            'visibility_required' => ['elements' => ['const', 'method', 'property']],
            'void_return' => true,
            'whitespace_after_comma_in_array' => ['ensure_single_space' => true],
            'yield_from_array_to_yields' => true,
            'yoda_style' => [
                'always_move_variable' => true,
                'equal' => true,
                'identical' => true,
                'less_and_greater' => null,
            ],
        ];
        $this->requiredPHPVersion = 8_01_00;
        $this->autoActivateIsRiskyAllowed = true;
    }
}
