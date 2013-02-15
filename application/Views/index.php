<?php 
include $this->form;
if($entries){
    echo '<dl>'
    foreach ($entries as $idx => $entry ){
        printf( '<dt>Row#%s</dt>', $idx);
        echo '<dd>';
        var_dump($entry);
        echo('</dd>');
    }
    echo '</dl>';
} else {
    print "<h2>No record found for your request !</h2>";
}