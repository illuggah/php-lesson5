<?php

$phonebook = json_decode(file_get_contents('phonebook.json'), true);

echo '<table cellpadding="5" cellspacing="0" border="1"><tr><td><b>Имя</b></td><td><b>Фамилия</b></td><td><b>Адрес</b></td><td><b>Номер телефона</b></td></tr><tr>';

foreach ($phonebook as $key => $value) {
	foreach ($value as $key_ => $value_) {
		echo '<td>' . $value_ . '</td>';
	}
	echo '</tr>';
}

echo "</table>";
