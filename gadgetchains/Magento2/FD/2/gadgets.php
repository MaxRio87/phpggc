<?php

namespace Magento\Framework\Filesystem\Driver {
    class File {}
}

namespace Magento\RemoteStorage\Model\Filesystem\Directory {
    class Write {
	public function __construct() {
            $this->driver = new \Magento\Framework\Filesystem\Driver\File();
        }
    }
}

namespace Magento\RemoteStorage\Model { 
    class TmpFileCopier {
	    public function __construct($file) {
            $this->tmpFiles = array('1' => $file);
            $this->tmpDirectoryWrite = new \Magento\RemoteStorage\Model\Filesystem\Directory\Write();
        }		
    }   
}
