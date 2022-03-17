# Block

## Methods

<ol>
    <li>__construct ($index = 1,$transaction,$previous_hash,$nonce)</li>
    <li>public function getHash ()</li>
    <li>public function setIndex ($index)</li>
    <li>public function setPreviousHash ($ph)</li>
    <li>public function setCurrentHash ($ch)</li>
    <li>public function setTransaction ($t)</li>
    <li>public function setTimeStamp ($ts)</li>
    <li>public function setNonce ($n)</li>
    <li>public function getIndex ()</li>
    <li>public function getPreviousHash ()</li>
    <li>public function getCurrentHash ()</li>
    <li>public function getTransaction ()</li>
    <li>public function getTimeStamp ()</li>
    <li>public function getNonce ()</li>
</ol>

## HOW TO

<pre>

    require_once './Block/Block.php';
    require_once './Chain/Chain.php';

    $Block = new Chain;

    $Block->mine(new Block('Data'));
    $Block->mine(new Block('Data 2'));
    $Block->mine(new Block('Data 3'));

    
    print_r($Block);
    
</pre>