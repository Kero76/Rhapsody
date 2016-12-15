<?php
    namespace SciMS\Controller\BuildDomain;

    /**
     * Class BuildConsultArticle.
     *
     * This class build domain objects present on Article page.
     *
     * @author Kero76
     * @package SciMS\Controller\BuildDomain
     * @since SciMS 0.3
     * @version 1.0
     */
    class BuildConsultArticle extends AbstractBuildDomain {
    
        /**
         * BuildConsultArticle constructor.
         *
         * @constructor
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
            $services['get.handler']->setRequest($_GET); // Retrieve $_GET.
            $website = $services['dao.website']->findSettings('../app/settings.yml');
            $themes  = $services['dao.theme']->findSettings('../app/themes.yml');
            $theme   = "";
    
            foreach($themes as $t) {
                if (strtolower($t->getName()) === strtolower($website->getTheme())) {
                    $theme = $t;
                    break;
                }
            }
    
            if ($services['session.handler']->requestFieldExist('user_id')) {
                $article = $services['dao.article']->findById($services['get.handler']->getRequestField('id'));
                $domains = array(
                    'article'       => $article,
                    'user'          => $services['dao.user']->findById($services['session.handler']->getRequestField('user_id')),
                    'connect'       => true,
                    'author_id'     => $article->getWritter()->getId(),
                    'website'       => $website,
                    'theme'         => $theme,
                );
            } else {
                $domains = array(
                    'article' => $services['dao.article']->findById($services['get.handler']->getRequestField('id')),
                    'website' => $website,
                    'theme'   => $theme,
                );
            }
            
            return $domains;
        }
    }
