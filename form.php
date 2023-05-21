<<link rel="stylesheet" href="style.css" type="text/css"/>
<style>
/* Сообщения об ошибках и поля с ошибками выводим с красным бордюром. */
.error {
border: 2px solid red;
margin-top: 10%;
}
</style>
<div class = "body">
<form action="" method="POST">
<?php
if (!empty($messages)) {
print('<div id="messages">');
// Выводим все сообщения.
foreach ($messages as $message) {
print($message);
}
print('</div>');
}
?>
<div class = "main">
<div class = "name"><label>Ваше ФИО</label>
<input name="fio" <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>"/></div>
<div class = "email"><label>Ваша электронная почта:</label>
<input name="email" <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>"/></div>
<div class = "year"><label>Ваш год рождения:</label>
<select name="year" <?php if ($errors['year']) {print 'class="error"';} ?> value="<?php print $values['year']; ?>">
<?php
for ($i = 1900; $i <= 2023; $i++) {
printf('<option value="%d">%d год</option>', $i, $i);
}
?>
</select></div>
<div class = "gender"><label>Ваш пол:</label>
<label>Мужской</label><input type="radio" checked="checked" name="gender" value="0"/>
<label>Женский</label><input type="radio" name="gender" value="1" />
</div>

<div class = "limbs"><label>Количество ваших конечностей:</label>
<label>4</label>
<input type="radio" checked="checked" name="limbs" value="4" />
<label>5-9</label>
<input type="radio" name="limbs" value="many" />
<label>10+</label>
<input type="radio" name="limbs" value="very many" />
</div>

<div class = "ability">
<select name="abilities" multiple="multiple"></br>
<option select="selected" value="immrotality">Бессмертие</option>
<option value="noclipping">Умение проходить сквозь стены</option>
<option value="levitation">Левитация</option>
</select>
</div>

<div class = "biography"><label> Ваша биография:</label></br>
<textarea name="biography" <?php if ($errors['biography']) {print 'class="error"';} ?> value="<?php print $values['biography']; ?>"></textarea>
</div>

<p>
<input type="checkbox" name="check1" /> С контрактом ознакомлен(а)
</p>
<input type="submit" value="Отправить заявку" />
</div>
</form>
</div>