<?php

class Chain {

    private array $chain;

    public function __construct () {
        $this->chain = array();
    }

    public function getChain () {
        return $this->chain;
    }

    public function mine (Block $block) {
        if ($block->getPreviousHash() == 0 && count($this->chain) == 0) {
            $this->chain[0] = $block;
            $block->setIndex(count($this->chain)-1);
            $block->setNonce($block->getNonce() + 1);
        } else {
            if (count($this->chain) > 0) {
                $previousBlock = $this->chain[count($this->chain)-1];
                $block->setPreviousHash($previousBlock->getCurrentHash());
                $block->setIndex(count($this->chain));
                $block->setNonce($previousBlock->getNonce() + 1);
                $this->chain[] = $block;
            }
        }
    }
}