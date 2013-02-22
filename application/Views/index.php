<?php 
//echo '$this->searchForm'.__FILE__;

/*if(!empty($this->searchForm)) {
    $this->html[] =  $this->searchForm;
}*/
if (!empty($this->entries)) {
    $this->html[] =  '<table class="table">';
    $this->html[] =  '<thead><th>#</th><th>First Nane</th><th>Last Name</th><th>Email</th><th>Position</th><th>Location</th></thead>';
    $this->html[] = '<tbody>';
    foreach ($this->entries as $idx => $entry ){
        $this->html[] =  '<tr>';
        $this->html[] = sprintf( '<td><a href="?edit=%s">Edit#%s</td>', $idx, $idx);
        foreach($entry as $value) {
           $this->html[] = sprintf('<td>%s</td>',$value) ;
        }
        $this->html[] = '</tr>';
    }
    $this->html[] =  '</tbody></table>';

} else {
    $this->html[] =  '<h2>No record found for your request !</h2>';
}