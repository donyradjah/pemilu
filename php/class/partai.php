<?php

    /**
     * Class partai
     */
    class partai
    {
        /**
         * @param array $data
         * @return resource
         */
        public static function insert(array $data)
        {
            $query = "insert into partai values(NULL,'$data[partai]','$data[logo]')";
            $exec = mysql_query($query) or die (mysql_error());
            return $exec;
        }

        /**
         * @param $id
         * @param array $data
         * @return resource
         */
        public static function update($id, array $data)
        {
            $query = "update partai set partai='$data[partai]',logo = '$data[logo]' where id = '$id'";
            $exec = mysql_query($query) or die (mysql_error());
            return $exec;
        }

        /**
         * @param $id
         * @return resource
         */
        public static function delete($id)
        {
            $query = "delete from partai where id = '$id'";
            $exec = mysql_query($query) or die (mysql_error());
            return $exec;
        }

        /**
         * @param $id
         * @return array
         */
        public static function detail($id)
        {
            $query = "select * from partai where id = '$id'";
            $exec = mysql_query($query) or die (mysql_error());
            $array = mysql_fetch_array($exec);
            return $array;
        }

        /**
         * @return array
         */
        public static function all()
        {
            $query = "select * from partai";
            $exec = mysql_query($query) or die (mysql_error());
            while ($array = mysql_fetch_array($exec)) {
                $data = $array;
            }

            return $data;
        }

    }