<?php
    namespace SciMS\DAO;
    use SciMS\Domain\Article;

    /**
     * Created by PhpStorm.
     * User: Kero76
     * Date: 04/11/16
     * Time: 15:32
     */
    class ArticleDAO extends DAO {
    
        /**
         * Method use for build a Domain object.
         *
         * @param $row
         *  The data use for build Domain.
         *
         * @return mixed
         *  The corresponding instance of Domain object.
         */
        protected function buildDomain($row) {
            $article = new Article($row);
            return $article;
        }
    }