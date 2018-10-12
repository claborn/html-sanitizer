<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlPurifier\Visitor;

use HtmlPurifier\Model\Cursor;
use HtmlPurifier\Node\H2Node;
use HtmlPurifier\Node\NodeInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class H2Visitor extends AbstractVisitor
{
    use ChildrenTagVisitorTrait;

    protected function getDomNodeName(): string
    {
        return 'h2';
    }

    protected function createNode(\DOMNode $domNode, Cursor $cursor): NodeInterface
    {
        return new H2Node($cursor->node);
    }
}
