<?php
    namespace SciMS\Controller\BuildDomain;
    
    /**
     * Class BuildHome
     *
     * This class build domain objects present on Home page.
     *
     * @author Kero76
     * @package SciMS\Controller\BuildDomain
     * @since SciMS 0.3
     * @version 1.0
     */
    class BuildHome extends AbstractBuildDomain  {
    
        /**
         * BuildCategory constructor.
         *
         * @param $template
         *  Name of the template.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function __construct($template) {
            $this->setTemplateName($template);
        }
    
        /**
         * Method use for create domains array use to render the view.
         *
         * @param array $services
         *  Return services.
         * @return array
         *  Return an array who composed by all services present on Router.
         * @since   SciMS 0.3
         * @version 1.0
         */
        public function buildDomain(array $services) {
            $website = $services['dao.website']->findSettings('../app/settings.yml');
            
            $category_articles = array();
            $categories = $services['dao.category']->findAll();
            foreach($categories as $category) {
                $category_articles[$category->getTitle()] = $services['dao.category']->findById($category->getId());
            }
            
            if ($services['session.handler']->requestFieldExist('user_id')) {
                $domains = array(
                    'last_articles'         => $services['dao.article']->findLastArticle($website->getLastArticle()),
                    'user'                  => $services['dao.user']->findById($services['session.handler']->getRequestField('user_id')),
                    'connect'               => true,
                    'website'               => $website,
                    'categories_articles'   => $category_articles,
                );
            } else {
                $domains = array(
                    'last_articles'         => $services['dao.article']->findLastArticle($website->getLastArticle()),
                    'website'               => $website,
                    'categories_articles'   => $category_articles,
                );
            }
    
            return $domains;
        }
    }