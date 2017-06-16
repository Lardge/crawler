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
    $classname="clientSortedRow";
    $nodes = $finder->query("//*[contains(@class, '$classname')]");
    
    foreach ($nodes as $node) {
        $td = $node->getElementsByTagName('td');
        
        $instrumentName = $dom->saveHTML($td[1]);
        $instrumentOwners = $dom->saveHTML($td[2]);
        $instrumentYearlyChange = $dom->saveHTML($td[3]);
        $date = date("Y-m-d");

        $instrumentNameText = $td[1]->textContent;
        $instrumentOwnersValue = (int)$td[2]->textContent;
        $instrumentYearlyChangeValue = (float)str_replace(",",".",($td[3]->textContent));
        include 'mysql/mysql-insert.php';

        echo '<tr>' . $instrumentName . $instrumentOwners . $instrumentYearlyChange . '<td>' . $date . '</td></tr>';
    }
}
?>
<table>
    <?php crawl_page("http://www.avanza.se/lar-dig-mer/kom-igang/fondtips.html", 1); ?>
</table>
