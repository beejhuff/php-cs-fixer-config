<?php

/**
 * Copyright (c) 2017 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @link https://github.com/localheinz/php-cs-fixer-config
 */

namespace Localheinz\PhpCsFixer\Config\Test\Unit\RuleSet;

use Localheinz\PhpCsFixer\Config\RuleSet\Php56;

final class Php56Test extends AbstractRuleSetTestCase
{
    protected function className()
    {
        return Php56::class;
    }

    protected function name()
    {
        return 'localheinz (PHP 5.6)';
    }

    protected function rules()
    {
        return [
            '@PSR2' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'binary_operator_spaces' => [
                'align_double_arrow' => false,
                'align_equals' => false,
            ],
            'blank_line_after_opening_tag' => true,
            'blank_line_before_return' => true,
            'cast_spaces' => true,
            'class_keyword_remove' => false,
            'combine_consecutive_unsets' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'declare_equal_normalize' => true,
            'declare_strict_types' => false,
            'dir_constant' => true,
            'doctrine_annotation_braces' => [
                'syntax' => 'without_braces',
            ],
            'doctrine_annotation_indentation' => true,
            'doctrine_annotation_spaces' => false,
            'ereg_to_preg' => true,
            'function_typehint_space' => true,
            'function_to_constant' => false,
            'general_phpdoc_annotation_remove' => false,
            'hash_to_slash_comment' => true,
            'header_comment' => false,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'is_null' => [
                'use_yoda_style' => true,
            ],
            'linebreak_after_opening_tag' => true,
            'lowercase_cast' => true,
            'magic_constant_casing' => false,
            'mb_str_functions' => true,
            'method_separation' => true,
            'modernize_types_casting' => true,
            'native_function_casing' => true,
            'native_function_invocation' => true,
            'new_with_braces' => true,
            'no_alias_functions' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_blank_lines_before_namespace' => false,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_consecutive_blank_lines' => [
                'break',
                'continue',
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'throw',
                'use',
                'useTrait',
            ],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => [
                'use' => 'echo',
            ],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_multiline_whitespace_before_semicolons' => true,
            'no_php4_constructor' => false,
            'no_short_bool_cast' => true,
            'no_short_echo_tag' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unreachable_default_argument_value' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'non_printable_character' => true,
            'normalize_index_brace' => true,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'object_operator_without_whitespace' => true,
            'ordered_class_elements' => true,
            'ordered_imports' => true,
            'php_unit_construct' => true,
            'php_unit_dedicate_assert' => true,
            'php_unit_fqcn_annotation' => true,
            'php_unit_strict' => false,
            'phpdoc_add_missing_param_annotation' => [
                'only_untyped' => false,
            ],
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => [
                'type' => 'var',
            ],
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_order' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_to_comment' => false,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'pre_increment' => true,
            'protected_to_private' => true,
            'psr0' => false,
            'psr4' => true,
            'random_api_migration' => true,
            'return_type_declaration' => true,
            'self_accessor' => true,
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'silenced_deprecation_error' => false,
            'simplified_null_return' => true,
            'single_blank_line_before_namespace' => true,
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => false,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => [
                'method',
                'property',
            ],
            'whitespace_after_comma_in_array' => true,
        ];
    }

    protected function targetPhpVersion()
    {
        return 50600;
    }
}
