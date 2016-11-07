<?php
    namespace SciMS\Domain;

    /**
     * Class User
     *
     * The class is a representation of an user in Website.
     * A user can interact with website in function of is role in Website.
     * He have 4 role on website :
     *  - ADMINISTRATOR : Can administrate front and backend of the application.
     *  - MODERATOR     : Can moderate website, but don't modify backend.
     *  - WRITTER       : Can write and modify these articles.
     *  - GUEST         : Can only view article without any modification of it.
     * He have an avatar, so it can using Gravatar service to add his avatar directly on website.
     *
     * -> V1.1 :
     *  Added attributes connect + corresponding Getter and Setter.
     *
     * @author Kero76
     * @package SciMS\Domain
     * @since SciMS 0.1
     * @version 1.1
     */
    class User {
    
        /**
         * The id of the User.
         *
         * @var integer
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_id;
    
        /**
         * The first name of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_fname;
    
        /**
         * The last name of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_lname;
    
        /**
         * The username of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_username;
    
        /**
         * The email of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_email;
    
        /**
         * The hash password of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_password;
    
        /**
         * The salt using in password of the user.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_salt;
    
        /**
         * The link for displaying the avatar.
         *
         * @var string
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_avatar;
    
        /**
         * The role of the user.
         *
         * @var integer
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_role;
    
        /**
         * Boolean which represent the connexion of the user of not.
         *
         * @var boolean
         * @since SciMS 0.1
         * @version 1.0
         */
        private $_connect;
    
        /**
         * User constructor.
         * @constructor
         * @param array $data
         *  An array with all data from Database.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function __construct(array $data) {
            $this->_hydrate($data);
        }
    
        /**
         * Return the id of the user.
         *
         * @return integer
         *  The id of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getId() {
            return $this->_id;
        }
    
        /**
         * Set the id of the user.
         *
         * @param integer $id
         *  The id of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setId($id) {
            $this->_id = $id;
        }
    
        /**
         * Return the first name of the user.
         *
         * @return string
         *  The first name of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getFname() {
            return $this->_fname;
        }
    
        /**
         * Set the first name of the user.
         *
         * @param string $fname
         *  The first name of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setFname($fname) {
            $this->_fname = $fname;
        }
    
        /**
         * Return the last name of the user.
         *
         * @return string
         *  The last name of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getLname() {
            return $this->_lname;
        }
    
        /**
         * Set the last name of the user.
         *
         * @param string $lname
         *  The last name of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setLname($lname) {
            $this->_lname = $lname;
        }
    
        /**
         * Return the username of the user.
         *
         * @return string
         *  The username.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getUsername() {
            return $this->_username;
        }
    
        /**
         * Set the username of the user.
         *
         * @param string $username
         *  The username of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setUsername($username) {
            $this->_username = $username;
        }
        
        /**
         * Return the mail of the user.
         *
         * @return string
         *  The mail of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getEmail() {
            return $this->_email;
        }
    
        /**
         * Set the password of the user.
         *
         * @param string $email
         *  The mail of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setEmail($email) {
            $this->_email = $email;
        }
    
        /**
         * Return the hashed password of the user.
         *
         * @return string
         *  The password of the user hashed with md5 method.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getPassword() {
            return $this->_password;
        }
    
        /**
         * Set the password of the user hash with md5 method.
         * @param string $password
         *  The password of the user (hash with md5 method).
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setPassword($password) {
            $this->_password = $password;
        }
    
        /**
         * Return the salt of the password.
         *
         * @return string
         *  The salt of the password.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getSalt() {
            return $this->_salt;
        }
    
        /**
         * Set the salt of the password.
         *
         * @param string $salt
         *  The salt of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setSalt($salt) {
            $this->_salt = $salt;
        }
    
        /**
         * Return the link of the avatar.
         *
         * @return string
         *  Return the link of the avatar.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getAvatar() {
            return $this->_avatar;
        }
    
        /**
         * Set the avatar of the user.
         *
         * @param string $avatar
         *  Link of the avatar.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setAvatar($avatar) {
            $this->_avatar = $avatar;
        }
    
        /**
         * Return the role of the user.
         *
         * @return string
         *  The role of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getRole() {
            return $this->_role;
        }
    
        /**
         * Set the role of the User.
         *
         * @param string $role
         *  Set the role of the user.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setRole($role) {
            $this->_role = $role;
        }
    
        /**
         * Return true if the user is connected, false if the user not connected.
         *
         * @return boolean
         *  A boolean to check if the user is connected.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function getConnect() {
            return $this->_connect;
        }
    
        /**
         * Set the user connexion.
         *
         * @param boolean $connect
         *  True if the user is connect, else it's false.
         * @since SciMS 0.1
         * @version 1.0
         */
        public function setConnect($connect) {
            $this->_connect = $connect;
        }
    
        /**
         * Method use for hydrate an instance of Category.
         *
         * This method is calling in the constructor of a Category instance to
         * fill all attributes with the good value from the Database.
         *
         * @access private
         * @param array $data
         *  An array with all Data for hydrate the current instance of Category.
         * @since SciMS 0.1
         * @version 1.0
         */
        private function _hydrate(array $data) {
            foreach($data as $key => $value) {
                $method = 'set';
                $keySplit = explode("_", $key);
                for ($i = 0; $i < count($keySplit); $i++ ) {
                    $method .= ucfirst($keySplit[$i]);
                }
                if(method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }
    }