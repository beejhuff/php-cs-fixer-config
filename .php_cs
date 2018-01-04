<?php

use Localheinz\PhpCsFixer\Config;

$year = \date('Y');

$header = <<<EOF
Copyright (c) 2017-$year Andreas Möller

For the full copyright and license information, please view
the LICENSE file that was distributed with this source code.

@see https://github.com/localheinz/php-cs-fixer-config
EOF;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php56($header));

$config->getFinder()->in(__DIR__);

$cacheDir = \getenv('TRAVIS') ? \getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
