<?php

namespace Laravel\Pail {
    class File {
        public function __construct($file) {
            $this->file = $file;
        }
    }
}

namespace Laravel\Pail\Console\Commands {
    class PailCommand {
        public function __construct($file) {
            $this->file = new \Laravel\Pail\File($file);
        }
    }
}
