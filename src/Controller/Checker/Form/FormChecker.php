<?php
    namespace SciMS\Controller\Checker\Form;

    /**
     * Interface FormChecker.
     *
     * This interface can implements to check all forms presents on website.
     *
     * @author Kero76
     * @package SciMS\Controller\Checker\Form
     * @since SciMS 0.3
     * @version 1.0
     */
    interface FormChecker {
     
        /**
         * Method use to check insertion the differents forms present on website.
         *
         * @param array $post
         *  The array $_POST.
         * @return bool
         *  True if the insertion are correct, else return false.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function checkInsert(array $post);
    
        /**
         * Method use to check update the differents forms present on website.
         *
         * @param array $post
         *  The array $_POST.
         * @return bool
         *  True if the update are correct, else return false.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function checkUpdate(array $post);
    
        /**
         * Method use to check delete the differents forms present on website.
         *
         * @param array $post
         *  The array $_POST.
         * @return bool
         *  True if the delete are correct, else return false.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function checkDelete(array $post);
    }