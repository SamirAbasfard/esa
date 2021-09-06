<?php namespace Core;

use App\Config;
use \Core\View;
class Error
{

    public static function errorHandler($level, $message, $file, $line)
    {
        if (error_reporting() !== 0) {
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }

    public static function exceptionHandler($exception)
    {
        $code = $exception->getCode();
        if ($code != 404) {
            $code = 500;
        }

        http_response_code($code);

        if (Config::SHOW_DEBUG) {
            echo "<h1>Fatal error</h1>";
            echo "<p>Uncaught exception: '" . get_class($exception) . "'</p>";
            echo "<p>Message : '" . $exception->getMessage() . "'</p>";
            echo "<p>Stack trace: <pre>" . $exception->getTraceAsString() . "</pre></p>";
            echo "<p>Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
        } else {
            require_once '../Public/jdf.php';
//            $timeanddate =  jdate('o-n-j', '', '', '', 'en');
            $timeanddate =  jdate('o-n', '', '', '', 'en');
            $log = dirname(__DIR__) . '../Storage/logs/' . $timeanddate . '.txt';
            ini_set('error_log', $log);

            $message = "\nFatal error\n";
            $message .= "Uncaught exception: '" . get_class($exception) . "'\n";
            $message .= "Message : '" . $exception->getMessage() . "'\n";
            $message .= "Stack trace: " . $exception->getTraceAsString() . "\n";
            $message .= "Url Error: " ."/". $_SERVER['QUERY_STRING'] . "\n";
            $message .= "Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "\n";

            error_log($message);


   echo View::blade_render("Error/{$code}");
//   var_dump("$code");

        }


    }

}