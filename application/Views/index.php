<?php 
include $this->searchForm;
if(!empty($this->entries)){
    echo '<dl>';
    foreach ($this->entries as $idx => $entry ){
        printf( '<dt>Row#%s</dt>', $idx);
        echo '<dd>';
        var_dump($entry);
        echo('</dd>');
    }
    echo '</dl>';
} else {
    print "<h2>No record found for your request !</h2>";
}