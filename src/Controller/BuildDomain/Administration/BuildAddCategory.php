<?php
    namespace SciMS\Controller\BuildDomain\Administration;
    
    use \SciMS\Controller\BuildDomain\AbstractBuildDomain;
    use \SciMS\Domain\Theme;
    use \SciMS\Domain\Website;
    use \SciMS\Form\Input;
    
    /**
     * Class BuildAddCategory.
     *
     * This class build domain objects present on Add Category page.
     *
     * @author Kero76
     * @package SciMS\Controller\BuildDomain
     * @since SciMS 0.3
     * @version 1.0
     */
    class BuildAddCategory extends AbstractBuildDomain {
    
        /**
         * BuildAddCategory constructor.
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
            $website = $services['dao.website']->findSettings(Website::WEBSITE_SETTING_PATH);
            $themes  = $services['dao.theme']->findSettings(Theme::THEMES_SETTING_PATH);
            $theme   = "";
    
            foreach($themes as $t) {
                if (strtolower($t->getName()) === strtolower($website->getTheme())) {
                    $theme = $t;
                    break;
                }
            }
    
            $user    = $services['dao.user']->findById($services['session.handler']->getRequestField('user_id'));
            $domains = array(
                'forms' => $services['form.builder']->add(
                // Title
                    new Input(array(
                        'type'     => 'text',
                        'id'       => 'title',
                        'name'     => 'title',
                        'class'    => 'form-control',
                        'label'    => 'Title',
                        'readonly' => false,
                    ))
                )->add(
                // Submit
                    new Input(array(
                        'type'     => 'submit',
                        'id'       => 'submit',
                        'name'     => 'submit',
                        'class'    => 'form-control btn btn-primary',
                        'value'    => 'Submit',
                        'readonly' => false,
                    ))
                )->getForms(),
                'user'       => $user,
                'connect'    => true,
                'categories' => $services['dao.category']->findAll(),
                'website'    => $website,
                'theme'      => $theme,
            );
    
            return $domains;
        }
    }
