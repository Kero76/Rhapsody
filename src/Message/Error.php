<?php
    namespace SciMS\Message;

    /**
     * Class Error.
     *
     * This class return an Error message about the form check or file upload.
     *
     * @author Kero76
     * @package SciMS\Error
     * @since SciMS 0.2
     * @version 1.0
     */
    class Error implements MessageInterface {
    
        /**
         * A string which represent the message at display on view.
         *
         * @var string
         * @since SciMs 0.2
         * @version 1.0
         */
        private $_message;
    
        /**
         * Error constructor.
         *
         * @constructor
         * @param $message
         *  A message.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function __construct($message) {
            $this->_message = $message;
        }
    
        /**
         * Return the message associate at the error.
         *
         * @return string
         *  The message associate at the error.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function getMessage() {
            return $this->_message;
        }
    }
