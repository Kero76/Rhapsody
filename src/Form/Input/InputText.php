<?php
    
    namespace SciMS\Form\Input;

    /**
     * Class InputText.
     *
     * This is a representation of the HTML tag input type="text" present on HTML.
     *
     * @author Kero76, TeeGreg
     * @package SciMS\Form\Input
     * @since SciMS 0.2
     * @version 1.0
     */
    class InputText extends Input {
    
        /**
         * InputText constructor.
         *
         * @constructor
         * @param array $attributes
         *  An array with all attributes use for create InputText object.
         * @since SciMS 0.2
         * @version 1.0
         */
        public function __construct(array $attributes) {
            $this->_hydrate($attributes);
            $render  = '<input ';
            $render .= ($this->getType()         == ''   ) ? '' : ' type="'           . $this->getType()          . '"';
            $render .= ($this->getClass()        == ''   ) ? '' : ' class="'          . $this->getClass()         . '"';
            $render .= ($this->getId()           == ''   ) ? '' : ' id="'             . $this->getId()            . '"';
            $render .= ($this->getName()         == ''   ) ? '' : ' name="'           . $this->getName()          . '"';
            $render .= ($this->getPlaceholder()  == ''   ) ? '' : ' placeholder="'    . $this->getPlaceholder()   . '"';
            $render .= ($this->getValue()        == ''   ) ? '' : ' value="'          . $this->getValue()         . '"';
            $render .= ($this->getRequired()     == false) ? '' : ' required';
            $render .= '>';
            $this->setRender($render);
        }
    }
