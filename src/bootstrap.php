<?php

require sprintf('%s/vendor/autoload.php', __DIR__);

require sprintf('./app/%s.php', $_SERVER['argv'][1]);

