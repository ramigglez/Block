<?php

class Block {
    private $index = null;
    private $previous_hash = null;
    private $current_hash = null;
    private $transaction = null;
    private $timestamp = null;
    private $nonce = null;

    public function __construct ($index = 1,$transaction,$previous_hash,$nonce) {
        $this->index = $index ?? 1;
        $this->previous_hash = $previous_hash ?? str_repeat("0",64);
        $this->transaction = $transaction;
        $this->timestamp = time();
        $this->nonce = $nonce;
        $this->current_hash = $this->getHash();
    }

    public function getHash () {
        $data = [
            $this->index,
            $this->previous_hash,
            $this->transaction,
            $this->timestamp,
            $this->nonce,
            $this->current_hash
        ];
        $data = json_encode($data);
        $hash = hash('sha256',$data);
        return $hash;
    }

    public function setIndex ($index) {
        $this->index = $index;
    }
    public function setPreviousHash ($ph) {
        $this->previous_hash = $ph;
    }
    public function setCurrentHash ($ch) {
        $this->current_hash = $ch;
    }
    public function setTransaction ($t) {
        $this->transaction = $t;
    }
    public function setTimeStamp ($ts) {
        $this->timestamp = $ts;
    }
    public function setNonce ($n) {
        $this->nonce = $n;
    }

    public function getIndex () {
        return $this->index;
    }
    public function getPreviousHash () {
        return $this->previous_hash;
    }
    public function getCurrentHash () {
        return $this->current_hash;
    }
    public function getTransaction () {
        return $this->transaction;
    }
    public function getTimeStamp () {
        return $this->timestamp;
    }
    public function getNonce () {
        return $this->nonce;
    }
}