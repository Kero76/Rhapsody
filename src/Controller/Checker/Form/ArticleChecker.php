<?php
    namespace SciMS\Controller\Checker\Form;
    use SciMS\Controller\Checker\AbstractChecker;

    /**
     * Class ArticleChecker.
     *
     *
     * @author Kero76
     * @package SciMS\Controller\Checker\Form
     * @since SciMS 0.3
     * @version 1.0
     */
    class ArticleChecker extends AbstractChecker implements FormCheckerInterface {
    
        /**
         * Method use to check insertion the different forms present on website.
         *
         * @param array $services
         *  The array with all services available on website.
         * @return bool
         *  True if the insertion are correct, else return false.
         * @since   SciMS 0.3
         * @version 1.0
         */
        public function checkInsert(array $services) {
            // Check if string is empty.
            foreach ($services['post.handler']->getRequest() as $p) {
                if ($services['mail.checker']->emptyString($p)) {
                    return false;
                }
            }
            
            return true;
        }
    
        /**
         * Method use to check update the different forms present on website.
         *
         * @param array $services
         *  The array with all services available on website.
         * @return bool
         *  True if the update are correct, else return false.
         * @since   SciMS 0.3
         * @version 1.0
         */
        public function checkUpdate(array $services) {
            // Check if string is empty.
            if ($services['mail.checker']->emptyString($services['post.handler']->getRequestField('title'))) {
                return false;
            }
            if ($services['mail.checker']->emptyString($services['post.handler']->getRequestField('content'))) {
                return false;
            }
            if ($services['mail.checker']->emptyString($services['post.handler']->getRequestField('authors'))) {
                return false;
            }
            if ($services['mail.checker']->emptyString($services['post.handler']->getRequestField('tags'))) {
                return false;
            }
            return true;
        }
    
        /**
         * Method use to check delete the different forms present on website.
         *
         * @param array $services
         *  The array with all services available on website.
         * @return bool
         *  True if the delete are correct, else return false.
         * @since   SciMS 0.3
         * @version 1.0
         */
        public function checkDelete(array $services) {
            
        }
    }
