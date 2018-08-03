<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message p-4 alert-success" onclick="this.classList.add('hidden')"><?= $message ?></div>
