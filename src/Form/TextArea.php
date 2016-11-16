<?php
    namespace SciMS\Form;
    
    
    class TextArea extends AbstractForm {
    
        /**
         * Number of rows in TextArea.
         *
         * @var integer
         * @since SciMS 0.2
         */
        private $_rows;
    
        /**
         * Number of cols in TextArea.
         *
         * @var integer
         * @since SciMS 0.2
         */
        private $_cols;
    
        /**
         * TextArea constructor.
         *
         * @constructor
         * @param array $attributes
         *  An array with all attributes use for create TextArea object.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function __construct(array $attributes) {
            $this->_hydrate($attributes);
            $render  = '<input ';
            $render .= $this->getClass()    == ''    ? '' : ' class="'  . $this->getClass() . '"';
            $render .= $this->getId()       == ''    ? '' : ' id="'     . $this->getId()    . '"';
            $render .= $this->getName()     == ''    ? '' : ' name="'   . $this->getName()  . '"';
            $render .= $this->getCols()     == 0     ? '' : ' cols="'   . $this->getCols()  . '"';
            $render .= $this->getRows()     == 0     ? '' : ' rows="'   . $this->getRows()  . '"';
            $render .= $this->getRequired() == false ? '' : ' required';
            $render .= '>';
            $this->setRender($render);
        }
    
        /**
         * Return the number of rows.
         *
         * @return integer
         *  Return the number of rows.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function getRows() {
            return $this->_rows;
        }
    
        /**
         * Set the number of rows.
         *
         * @param integer $rows
         *  Number of rows.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function setRows($rows) {
            $this->_rows = $rows;
        }
    
        /**
         * Return the number of cols.
         *
         * @return integer
         *  Return the number of cols.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function getCols() {
            return $this->_cols;
        }
    
        /**
         * Set the number of cols.
         *
         * @param integer $cols
         *  Number of cols.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function setCols($cols) {
            $this->_cols = $cols;
        }
    }