<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success alert alert-success" onclick="this.classList.add('hidden')" style="z-index: 9999;position: absolute;width: 50%;top: 50px;right: 25%;text-align: center;"><?= $message ?><span style="float: right;padding: 0 10px 0 10px;cursor: pointer;" onclick="this.classList.add('hidden');">&times;</span></div>
<style type="text/css">
	.hidden{
		display: none;
	}
</style>
