<?php
$connection = new mysqli('localhost', 'cp62865_calc', 'calc1','cp62865_calc')
    or die('Не удалось соединиться: ' . mysql_error());
if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 
// Выполняем SQL-запрос
$query = 'SELECT * FROM visits';
if ($result = $connection->query('SELECT * FROM visits')) {
echo mysql_num_rows($result);
// Выводим результаты в html
    echo "<table>\n";
    while ( $line = $result->fetch_assoc()) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
      /* Освобождаем память */ 
    $result->close();
}
 $connection->close(); // Закрываем соединение
?>