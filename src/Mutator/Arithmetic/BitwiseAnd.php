<?php

declare(strict_types=1);


namespace Infection\Mutator\Arithmetic;


use Infection\Mutator\Mutator;
use PhpParser\Node;

class BitwiseAnd implements Mutator
{
    /**
     * Replaces "&" with "|"
     *
     * @param Node $node
     * @return Node\Expr\BinaryOp\BitwiseOr
     */
    public function mutate(Node $node)
    {
        return new Node\Expr\BinaryOp\BitwiseOr($node->left, $node->right, $node->getAttributes());
    }

    public function shouldMutate(Node $node): bool
    {
        return $node instanceof Node\Expr\BinaryOp\BitwiseAnd;
    }
}