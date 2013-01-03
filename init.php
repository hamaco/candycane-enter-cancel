<?php

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_enter_cancel','0.1.0');

$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
  'issues/form',
  '../../Plugin/CcEnterCancel/View/Element/enter_cancel',
  false
);
