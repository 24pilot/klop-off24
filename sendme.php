<?php 
//mail("klopoffner@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3"); 
if (!empty($_POST['phone'])) {
  $letter ="Call: " .$_POST['phone'];
if (mail("klop-off@yandex.ru, 1-150236538451987@sms-form.ru", $letter, $letter)) { 
    echo "Спасибо за заявку, сейчас перезвоним"; 
} else { 
    echo "some error happen"; 
}
}
else { 
    echo "Нет телефона"; 
}
?>