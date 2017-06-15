<?php
include 'mysql/mysql-connection.php';

function crawl_page($url, $depth = 5)
{
    static $seen = array();
    if (isset($seen[$url]) || $depth === 0) {
        return;
    }

    $seen[$url] = true;

    $dom = new DOMDocument('1.0');
    @$dom->loadHTMLFile($url);
    $finder = new DomXPath($dom);
    //$classname="fundToplist";
    $classname="clientSortedRow";
    //$nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
    $nodes = $finder->query("//*[contains(@class, '$classname')]");
    //$domHTML = $dom->saveXML($nodes);
    //$finder = new Zend_Dom_Query($dom);
//$classname = 'clientSortedRow';
//$nodes = $finder->query("*[class~=\"$classname\"]");
    
    foreach ($nodes as $node) {
        //$nodeDom->loadHTML($node);
        $nodeHTML = new DomXPath($node);
        /*$nodeClassname="clientSortedRow";
        $nodeNodes = $nodeDomXPath->query("//*[contains(@class, '$nodeClassname')]");
        foreach ($nodeNodes as $nodeNode) {
        
        }*/
        $instrumentName = $nodeHTML->query("//*[contains(concat(' ', normalize-space(@class), ' '), 'instrumentName')]");
        $instrumentOwners = $nodeHTML->query("//*[contains(concat(' ', normalize-space(@class), ' '), 'totalAccounts')]");
        $instrumentYearlyChange = $nodeHTML->query("//*[contains(concat(' ', normalize-space(@class), ' '), 'total')]");
        $domHTML = $dom->saveHTML($node);
        $domHTML = $dom->saveHTML($instrumentName);
                $domHTML = $dom->saveHTML($instrumentOwners);
                $domHTML = $dom->saveHTML($instrumentYearlyChange);
        //include 'mysql/mysql-insert.php';
        echo $domHTML;
    }
/*
    $anchors = $dom->getElementsByTagName('a');
    $archive = $dom->getElementById('archives-2');
    foreach ($anchors as $element) {
        $href = $element->getAttribute('href');
        if (0 !== strpos($href, 'http')) {
            $path = '/' . ltrim($href, '/');
            if (extension_loaded('http')) {
                $href = http_build_url($url, array('path' => $path));
            } else {
                $parts = parse_url($url);
                $href = $parts['scheme'] . '://';
                if (isset($parts['user']) && isset($parts['pass'])) {
                    $href .= $parts['user'] . ':' . $parts['pass'] . '@';
                }
                $href .= $parts['host'];
                if (isset($parts['port'])) {
                    $href .= ':' . $parts['port'];
                }
                $href .= $path;
            }
        }
        crawl_page($href, $depth - 1);
    }*/
    //echo "URL:",$url,PHP_EOL,"CONTENT:",PHP_EOL,$dom->saveHTML(),PHP_EOL,PHP_EOL;
    //echo "ARCHIVE:",$dom->saveHTML($nodes);
}
?>
    <table>
        <?php crawl_page("http://www.avanza.se/lar-dig-mer/kom-igang/fondtips.html", 1); ?>
    </table>
