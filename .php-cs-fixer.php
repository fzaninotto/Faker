<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/test');

return (new PhpCsFixer\Config())->setRules(
    [
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'function_declaration' => [
            'closure_function_spacing' => 'none',
            'closure_fn_spacing' => 'none',
        ],
        'no_unreachable_default_argument_value' => false,
        'braces' => ['allow_single_line_closure' => true],
        'fopen_flags' => ['b_mode' => true],
        'heredoc_to_nowdoc' => false,
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_trim' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'phpdoc_order' => true,
        'phpdoc_to_comment' => false,
        'single_line_comment_style' => true,
        'ternary_to_null_coalescing' => true,
        'echo_tag_syntax' => ['format' => 'long'],
        'static_lambda' => true,
        'global_namespace_import' => false,
        'multiline_whitespace_before_semicolons' => true,
        'linebreak_after_opening_tag' => true,
        'combine_consecutive_unsets' => true,
        'native_function_invocation' => [
            'include' => [\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::SET_INTERNAL],
            'exclude' => ['sleep'],
            'scope' => 'namespaced',
            'strict' => true,
        ],
    ]
)
    ->setRiskyAllowed(true)
    ->setFinder($finder);
