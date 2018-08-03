<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message alert-success" onclick="this.classList.add('hidden')"><?= $message ?></div>
