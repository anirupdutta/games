<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



$insert_view = elgg_view('gamessettings/extend');

$gametreat_script_string = elgg_echo('Gametreat Wid');
$gametreat_script_view = elgg_view('input/text', array(
	'name' => 'params[gametreat_script]',
	'value' => $vars['entity']->gametreat_script,
	'class' => 'text_input',
));


$settings = <<<__HTML
<div>$insert_view</div>
<div>$gametreat_script_string $gametreat_script_view</div>
__HTML;

echo $settings;

?>