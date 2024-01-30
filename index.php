$data = "2008-01-09 14:56:06";
echo date('d/m/Y H:i:s', strtotime($data)); // mostrará 09/01/2008 14:01:06.
echo date('d/m/Y', strtotime($data)); // mostrará 09/01/2008.


php > $data = "2008-01-09 14:56:06";
php > echo (new \DateTimeImmutable($data))->format('d/m/Y H:i:s');
09/01/2008 14:56:06
php > echo (new \DateTimeImmutable($data))->format('d/m/Y');
09/01/2008


Creditos: Rafael Bernard Araujo
https://rafael.bernard-araujo.com/converter-formato-de-data-para-o-formato-br-em-uma-linha-de-codigo-so.php
