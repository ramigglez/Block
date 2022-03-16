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

    $aBlock = new Block (1, 'Data 1', '0', 0);

    print_r ($aBlock);

    $aBlock = new Block (2, 'Data 2', $aBlock->getCurrentHash(), 0);

    print_r ($aBlock);

    $aBlock = new Block (3, 'Data 3', $aBlock->getCurrentHash(), 0);

    print_r ($aBlock);
</pre>