<?php

namespace App\Logging;

use Monolog\Logger;

class TelegramLoggerFactory
{
    /**
     * Tạo một instance của custom logger.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        $handler = new TelegramLogHandler(
            $config['level'] ?? Logger::ERROR,
            true,
            request()
        );

        return new Logger('telegram', [$handler]);
    }
}
