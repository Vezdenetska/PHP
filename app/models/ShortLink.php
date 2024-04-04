<?php
    require 'DB.php';

    class ShortLink {
        private $short;
        private $link;
        private $_db = null;

        public function __construct() {
            $this->_db = DB::getInstence();
        }

        public function setData($short, $link) {
            $this->short = $short;
            $this->link = $link;
        }

        public function validForm() {
            try {
                $existingShort = $this->_db->query("SELECT * FROM `short_links` WHERE `short` = '$this->short'");
                $existingShort = $existingShort->fetch(PDO::FETCH_ASSOC);
                $existingShortMessage = "Cкорочення вже існує";

                if ($existingShort) {
                    return $existingShortMessage;
                } else {
                    return "Верно";
                }
            } catch (PDOException $e) {
                return "SQL Error: " . $e->getMessage();
            }
        }


        public function addShort()
        {
            $sql = 'INSERT INTO short_links (short, link) VALUES(:short, :link)';
            $query = $this->_db->prepare($sql);

            try {
                $query->execute(['short' => $this->short, 'link' => $this->link]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }


        }
        public function getShort()
        {
            $result = $this->_db->query("SELECT * FROM `short_links`");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function deleteShort($shortId)
        {
            $sql = 'DELETE FROM short_links WHERE id = :shortId';
            $query = $this->_db->prepare($sql);

            try {
                $query->execute(['shortId' => $shortId]);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

    }
