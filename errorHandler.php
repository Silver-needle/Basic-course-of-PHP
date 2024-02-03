<?php

set_exception_handler(function (Throwable $throwable) {
   $logger = new Logger('error_handler');
   $logger->log($throwable->getMessage());
   die('Страница обработки ошибок'. $throwable->getMessage());
});

?>