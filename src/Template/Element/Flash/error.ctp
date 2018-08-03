<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message alert-danger" onclick="this.classList.add('hidden');"><?= $message ?></div>
