<?php error_reporting(0);


	$mail = "darial3@yandex.ru, nakhimovsky@welcomediet.ru, ivanova@welcomediet.ru, ionova@welcomediet.ru, lid-klinika@yandex.ru, luzhina@welcomediet.ru";


	$url = 'Страница отправки формы: ' . ( isset( $_SERVER['HTTP_REFERER'] ) ? $_SERVER['HTTP_REFERER'] : 'не определена' );
        

	$message = "<h2>Здравствуйте! С сайта поступила заявка, с формы №: (".$_POST['number'].")</h2><hr>

		<p><strong>Name:</strong> ".$_POST['name']."</p>

		<p><strong>Phone:</strong> ".$_POST['phone']."</p>

		<p><strong>Email:</strong> ".$_POST['email']."</p>

        <p><strong>Url адрес сайта: http://здоровыепривычки.рф/ </strong></p>
		
		<p>".$url."</p>";

		

	$subject="Заявка с Лендинга \"Клиника доктора Ионовой\"";

        

	mail($mail, $subject, $message, "Content-type: text/html; charset=utf-8 \r\n");


        header('Location: http://здоровыепривычки.рф/spasibo.html');

?>