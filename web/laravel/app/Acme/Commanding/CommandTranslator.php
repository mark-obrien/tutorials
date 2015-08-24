<?php

namespace Acme\Commanding;

use Exception;

class CommandTranslator {

    public function toCommandHandler($command)
    {
        $handler = str_replace('Command', 'CommandHandler', get_class($command)); //PostJobListingCommand

        if(! class_exists($handler))
        {
            $message = 'Command handler ' . $handler . ' does not exist';

            throw new Exception($message);
        }

        return $handler;
    }

}