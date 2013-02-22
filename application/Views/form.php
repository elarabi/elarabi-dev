<?php
//var_dump($_GET);
$this->html[] =
'<form action="?edit='.$this->entry->id.'">
    <fieldset>
    <legend>'.$this->formTitle.'</legend>
    <label>Name</label>
    <input type="text" name="fname" placeholder="First name" value="'.$this->entry->get('fname').'">
    <input type="text" name="lname" placeholder="Last name" value="'.$this->entry->get('lname').'">
    <span class="help-block">Example block-level help text here.</span>
    <label>Email</label>
    <input type="text" name="email" placeholder="e-mail" value="'.$this->entry->get('email').'">
    <label>Profession</label>
    <input type="text" name="profession" placeholder="Last name" value="'.$this->entry->get('profession').'">
    <label>Loaction</label>
    <input type="text" name="location" placeholder="Last name" value="'.$this->entry->get('location').'">
    <label></label>    
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>';
?>
