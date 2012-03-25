<?php
    $wid = elgg_get_plugin_setting('gametreat_script', 'games');
?>

<script type="text/javascript" src="http://widget.gametreat.com/static/js/jquery.js"></script>
<script src="http://widget.gametreat.com/static/js/GameTreatWidget.js" type="text/javascript"></script>
<div id="gameTreatWidget" style="width:960px;height:730px"></div>
<script type="text/javascript">
params = {
wid: <?php echo $wid;?>,
width: 960,
height:730,
type: "FULL_SIZED_WIDGET",
style: "white",
noDocTypeSupport:false,/*If your site does not have a DOCTYPE tag (see http://www.w3.org/QA/Tips/Doctype), please change the ‘noDocTypeSupport’ parameter below to true.  This will disable the turn-the-light-off button in the widget.*/
fl: 3,
autoPlay:false,
GOTD: "false",
widgetContainerId:"gameTreatWidget",
embed: true};
var widget = GameTreat.getWidget(params);
</script>