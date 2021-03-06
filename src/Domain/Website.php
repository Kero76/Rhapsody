<?php
    namespace SciMS\Domain;

    /**
     * Class Website.
     *
     * This class contains all settings about the website.
     * It contains :
     *  - Title of the website.
     *  - Number of article at display on home.
     *  - Status of articles available when user create an Article.
     *  - Role of user can receive on website.
     *  - The number of characters displayed on home page.
     *  - The name of the website authors.
     *
     * @author Kero76
     * @package SciMS\Domain
     * @since SciMS 0.3
     * @version 1.0
     */
    class Website extends AbstractDomain {
    
        /**
         * Path of the settings file.
         *
         * @var string
         * @since SciMS 0.5
         */
        const WEBSITE_SETTING_PATH = '../app/settings.yml';
    
        /**
         * Title of the website.
         *
         * @var string
         * @since SciMS 0.3
         */
        private $_title;
    
        /**
         * Subtitle of the website.
         *
         * @var string
         * @since SciMS 0.3
         */
        private $_subtitle;
    
        /**
         * Copyright of the website
         *
         * @var string
         * @since 0.3
         */
        private $_copyright;
    
        /**
         * Number of article at display on website.
         *
         * @var integer
         * @since SciMS 0.3
         */
        private $_last_article;
    
        /**
         * Status of article.
         *
         * @var array
         * @since SciMS 0.3
         */
        private $_article_status;
    
        /**
         * Role of the user.
         *
         * @var array
         * @since SciMS 0.3
         */
        private $_user_role;
    
        /**
         * Contains abstract available on Homepage.
         *
         * @var string
         * @since SciMS 0.4
         */
        private $_abstract;
    
        /**
         * Authors of the website available on subtitle of website.
         *
         * @var string
         * @since SciMS 0.4
         */
        private $_website_authors;
    
        /**
         * The theme name.
         *
         * @var string
         * @since SciMS 0.4.1
         */
        private $_theme;
    
        /**
         * Website constructor.
         *
         * @constructor
         * @param array $data
         *  An array with all data use to build website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function __construct(array $data) {
            $this->hydrate($data);
        }
    
        /**
         * Return the title of the website.
         *
         * @return string
         *  The title of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getTitle() {
            return $this->_title;
        }
    
        /**
         * Set the title of the website.
         *
         * @param string $title
         *  The title of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setTitle($title) {
            $this->_title = $title;
        }
    
        /**
         * Return the subtitle of the website.
         *
         * @return string
         *  The subtitle of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getSubtitle() {
            return $this->_subtitle;
        }
    
        /**
         * Set the subtitle of the website.
         *
         * @param string $subtitle
         *  The subtitle of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setSubtitle($subtitle) {
            $this->_subtitle = $subtitle;
        }
    
        /**
         * Return the copyright of the website.
         *
         * @return string
         *  The copyright of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getCopyright() {
            return $this->_copyright;
        }
    
        /**
         * Set the copyright of the website.
         *
         * @param string $copyright
         *  The copyright of the website.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setCopyright($copyright) {
            $this->_copyright = $copyright;
        }
    
        /**
         * Return the number of the article display on home page of the website.
         *
         * @return integer
         *  The number of article display on website
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getLastArticle() {
            return $this->_last_article;
        }
    
        /**
         * Set the number of article display on website.
         *
         * @param integer $number_of_article
         *  Set the number of the last article.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setLastArticle($number_of_article) {
            $this->_last_article = $number_of_article;
        }
    
        /**
         * Return the article status.
         *
         * @return array
         *  The array with all article status.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getArticleStatus() {
            return $this->_article_status;
        }
    
        /**
         * Set the article status.
         *
         * @param array $article_status
         *  The article status.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setArticleStatus(array $article_status) {
            $this->_article_status = $article_status;
        }
    
        /**
         * Return the role of the user.
         *
         * @return array
         *  The role of the user.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function getUserRole() {
            return $this->_user_role;
        }
    
        /**
         * Set the role of the user.
         *
         * @param array $user_role
         *  The role of the user.
         * @since SciMS 0.3
         * @version 1.0
         */
        public function setUserRole(array $user_role) {
            $this->_user_role = $user_role;
        }
    
        /**
         * Return the number of characters displayed on home page.
         * @return integer
         *  The number of characters displayed on home page.
         * @since SciMS 0.4
         * @version 1.0
         */
        public function getAbstract() {
            return $this->_abstract;
        }
    
        /**
         * Set the number of characters displayed on home page.
         *
         * @param integer $abstract
         *  The number of characters displayed on home page.
         * @since SciMS 0.4
         * @version 1.0
         */
        public function setAbstract($abstract) {
            $this->_abstract = $abstract;
        }
    
        /**
         * Return the name of the website authors.
         *
         * @return string
         *  The name of the website authors.
         * @since SciMS 0.4
         * @version 1.0
         */
        public function getWebsiteAuthors() {
            return $this->_website_authors;
        }
    
        /**
         * Set the name of the website author's name.
         *
         * @param string $website_authors
         *  Website authors names.
         * @since SciMS 0.4
         * @version 1.0
         */
        public function setWebsiteAuthors($website_authors) {
            $this->_website_authors = $website_authors;
        }
    
        /**
         * Return the theme name use to display on website.
         *
         * @return string
         *  The theme name.
         * @since SciMS 0.4.1
         * @version 1.0
         */
        public function getTheme() {
            return $this->_theme;
        }
    
        /**
         * Set the theme name use to display on website.
         *
         * @param string $theme
         *  the theme name.
         * @since SciMS 0.4.1
         * @version 1.0
         */
        public function setTheme($theme) {
            $this->_theme = $theme;
        }
    }
