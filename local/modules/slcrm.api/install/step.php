<?php
if (!check_bitrix_sessid()) return;

echo CAdminMessage::ShowNote('Модуль установлен успешно.');
?>
<form action="<?= $APPLICATION->GetCurPage(); ?>">
    <input type="hidden" name="lang" value="<?= LANG; ?>">
    <input type="submit" name="" value="Вернуться в список">
</form>