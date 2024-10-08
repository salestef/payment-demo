<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Twig\Node;

use Twig\Attribute\YieldReady;
use Twig\Compiler;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Node;

#[YieldReady]
final class TemplateBoxNode extends Node
{
    /**
     * @param AbstractExpression $message Node message to display
     * @param bool               $enabled Is Symfony debug enabled?
     * @param int|null           $lineno  Symfony template line number
     * @param string|null        $tag     Symfony tag name
     */
    public function __construct(
        AbstractExpression $message,
        private bool $enabled,
        ?int $lineno = null,
        ?string $tag = null,
    ) {
        parent::__construct(['message' => $message], [], $lineno ?? 0, $tag);
    }

    public function compile(Compiler $compiler): void
    {
        $compiler
            ->addDebugInfo($this);

        if (!$this->enabled) {
            $compiler->write("// token for sonata_template_box, however the box is disabled\n");

            return;
        }

        $value = $this->getNode('message')->getAttribute('value');

        $message = <<<CODE
            "<div class='alert alert-default alert-info'>
                <strong>{$value}</strong>
                <div>This file can be found in <code>{\$this->getTemplateName()}</code>.</div>
            </div>"
            CODE;

        $display = class_exists(YieldReady::class) ? 'yield' : 'echo';
        $compiler
            ->write("$display $message;");
    }
}
