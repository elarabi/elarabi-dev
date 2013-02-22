<?php
$about_ = <<<ABOUT
<div>
Model-View-Controller is the concept of 
    encapsulating some data together with its processing (the model) 
    and isolate it from the manipulation (the controller) 
    and presentation (the view) part that has to be done on a UserInterface. 
    <ul>
<li>A model is an object representing data or even activity, e.g. a database table. </li>
<li>A view is some form of visualization of the state of the model. </li>
<li>A controller offers facilities to change the state of the model. </li>
</ul>
Smalltalk provides mechanisms to link models, views and controllers in some standard way in order 
for a model to communicate state changes to every attached view (there can be several, as you can see). 
Model state changes happen either because a controller issued some command or for some internal reason.

<p>An easy way to understand MVC: The model is the data, the view is the window on the screen, and the controller is the glue between the two.</p>
</div>
ABOUT;
$this->html[] = $about_;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * An easy way to understand MVC: the model is the data, the view is the window on the screen, and the controller is the glue between the two.
 */
?>
