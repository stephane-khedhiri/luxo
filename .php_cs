<?php

$finder = \PhpCsFixer\Finder::create()
  ->in(__DIR__)
  ->exclude([
    'node_modules',
    'resources',
    'vendor',
    'build',
    'var',
  ])
;

return PhpCsFixer\Config::create()
  ->setRiskyAllowed(false)
  ->setRules(
    [
      'array_syntax' => [
        'syntax' => 'short',
      ],
      'binary_operator_spaces' => true, //  [@Symfony]
      'blank_line_after_namespace' => true, //  [@PSR2, @Symfony]
      'blank_line_after_opening_tag' => true, //  [@Symfony]
      'blank_line_before_return' => true, //  [@Symfony]
      'braces' => true, //  [@PSR2, @Symfony]
      'cast_spaces' => true, //  [@Symfony]
      'class_definition' => true, //  [@PSR2, @Symfony]
      'class_keyword_remove' => false, //
      'combine_consecutive_unsets' => true, //
      'concat_space' => false, //
      'declare_equal_normalize' => true, //  [@Symfony]
      'declare_strict_types' => false, // [:risky]
      'dir_constant' => false, // [:risky]
      'elseif' => true, //  [@PSR2, @Symfony]
      'encoding' => true, //  [@PSR1, @PSR2, @Symfony]
      'ereg_to_preg' => false, // [:risky]
      'full_opening_tag' => true, //  [@PSR1, @PSR2, @Symfony]
      'function_declaration' => true, //  [@PSR2, @Symfony]
      'function_typehint_space' => true, //  [@Symfony]
      'general_phpdoc_annotation_remove' => false, //
      'hash_to_slash_comment' => true, //  [@Symfony]
      'header_comment' => false, //
      'heredoc_to_nowdoc' => true, //  [@Symfony]
      'include' => true, //  [@Symfony]
      'indentation_type' => true, // [@PSR2, @Symfony]
      'line_ending' => true, // [@PSR2, @Symfony]
      'linebreak_after_opening_tag' => true, //
      'lowercase_cast' => true, //  [@Symfony]
      'lowercase_constants' => true, //  [@PSR2, @Symfony]
      'lowercase_keywords' => true, //  [@PSR2, @Symfony]
      'mb_str_functions' => false, // [:risky]
      'method_argument_space' => true, //  [@PSR2, @Symfony]
      'method_separation' => true, //  [@Symfony]
      'modernize_types_casting' => false, // [:risky]
      'native_function_casing' => true, //  [@Symfony]
      'new_with_braces' => true, //  [@Symfony]
      'no_alias_functions' => false, //  [@Symfony:risky]
      'no_blank_lines_after_class_opening' => true, //  [@Symfony]
      'no_blank_lines_after_phpdoc' => true, //  [@Symfony]
      'no_blank_lines_before_namespace' => false, //
      'no_closing_tag' => true, //  [@PSR2, @Symfony]
      'no_empty_comment' => true, //  [@Symfony]
      'no_empty_phpdoc' => true, //  [@Symfony]
      'no_empty_statement' => true, //  [@Symfony]
      'no_extra_consecutive_blank_lines' => true, //  [@Symfony]
      'no_leading_import_slash' => true, //  [@Symfony]
      'no_leading_namespace_whitespace' => true, //  [@Symfony]
      'no_mixed_echo_print' => true, //
      'no_multiline_whitespace_around_double_arrow' => true, //  [@Symfony]
      'no_multiline_whitespace_before_semicolons' => false, //
      'no_php4_constructor' => false, // [:risky]
      'no_short_bool_cast' => true, //  [@Symfony]
      'no_short_echo_tag' => true, //
      'no_singleline_whitespace_before_semicolons' => true, //  [@Symfony]
      'no_spaces_after_function_name' => true, //  [@PSR2, @Symfony]
      'no_spaces_around_offset' => true, //  [@Symfony]
      'no_spaces_inside_parenthesis' => true, //  [@PSR2, @Symfony]
      'no_trailing_comma_in_list_call' => true, //  [@Symfony]
      'no_trailing_comma_in_singleline_array' => true, //  [@Symfony]
      'no_trailing_whitespace' => true, //  [@PSR2, @Symfony]
      'no_trailing_whitespace_in_comment' => true, //  [@PSR2, @Symfony]
      'no_unneeded_control_parentheses' => true, //  [@Symfony]
      'no_unused_imports' => true, //  [@Symfony]
      'no_useless_else' => true, //
      'no_useless_return' => true, //
      'no_whitespace_before_comma_in_array' => true, //  [@Symfony]
      'no_whitespace_in_blank_line' => true, //  [@Symfony]
      'normalize_index_brace' => true, //  [@Symfony]
      'not_operator_with_space' => false, //
      'not_operator_with_successor_space' => false, //
      'object_operator_without_whitespace' => true, //  [@Symfony]
      'ordered_class_elements' => true, //
      'ordered_imports' => true, //
      'php_unit_construct' => false, //  [@Symfony:risky]
      'php_unit_dedicate_assert' => false, //  [@Symfony:risky]
      'php_unit_fqcn_annotation' => true, //  [@Symfony]
      'php_unit_strict' => false, // [:risky]
      'phpdoc_add_missing_param_annotation' => true, //
      'phpdoc_align' => true, //  [@Symfony]
      'phpdoc_annotation_without_dot' => true, //  [@Symfony]
      'phpdoc_indent' => true, //  [@Symfony]
      'phpdoc_inline_tag' => true, //  [@Symfony]
      'phpdoc_no_access' => true, //  [@Symfony]
      'phpdoc_no_alias_tag' => true, //
      'phpdoc_no_empty_return' => true, //  [@Symfony]
      'phpdoc_no_package' => true, //  [@Symfony]
      'phpdoc_order' => true, //
      'phpdoc_scalar' => true, //  [@Symfony]
      'phpdoc_separation' => true, //  [@Symfony]
      'phpdoc_single_line_var_spacing' => true, //  [@Symfony]
      'phpdoc_summary' => true, //  [@Symfony]
      'phpdoc_to_comment' => true, //  [@Symfony]
      'phpdoc_trim' => true, //  [@Symfony]
      'phpdoc_types' => true, //  [@Symfony]
      'phpdoc_var_without_name' => true, //  [@Symfony]
      'pow_to_exponentiation' => false, //  [@PHP56Migration, @PHP70Migration, @PHP71Migration:risky]
      'pre_increment' => true, //  [@Symfony]
      'protected_to_private' => true,
      'psr0' => false, // [:risky]
      'psr4' => false, // [:risky]
      'random_api_migration' => false, //  [@PHP70Migration, @PHP71Migration:risky]
      'return_type_declaration' => true, //  [@Symfony]
      'semicolon_after_instruction' => true, //
      'short_scalar_cast' => true, //  [@Symfony]
      'silenced_deprecation_error' => false, //  [@Symfony:risky]
      'simplified_null_return' => false, //
      'single_blank_line_at_eof' => true, //  [@PSR2, @Symfony]
      'single_blank_line_before_namespace' => true, //  [@Symfony]
      'single_class_element_per_statement' => true, //  [@PSR2, @Symfony]
      'single_import_per_statement' => true, //  [@PSR2, @Symfony]
      'single_line_after_imports' => true, //  [@PSR2, @Symfony]
      'single_quote' => true, //  [@Symfony]
      'space_after_semicolon' => true, //  [@Symfony]
      'standardize_not_equals' => true, //  [@Symfony]
      'strict_comparison' => false, // [:risky]
      'strict_param' => false, // [:risky]
      'switch_case_semicolon_to_colon' => true, //  [@PSR2, @Symfony]
      'switch_case_space' => true, //  [@PSR2, @Symfony]
      'ternary_operator_spaces' => true, //  [@Symfony]
      'trailing_comma_in_multiline_array' => true, //  [@Symfony]
      'trim_array_spaces' => true, //  [@Symfony]
      'unary_operator_spaces' => true, //  [@Symfony]
      'visibility_required' => true, //  [@PSR2, @Symfony, @PHP71Migration]
      'whitespace_after_comma_in_array' => true, //  [@Symfony]
    ]
  )
  ->setFinder($finder);
