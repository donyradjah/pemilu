<?php

    /**
     * Created by PhpStorm.
     * User: dony
     * Date: 3/30/16
     * Time: 1:49 PM
     */
    class capres
    {
        /**
         * @param array $data
         * @return resource
         */
        public static function insert(array $data)
        {
            $query = "insert into capres values(NULL,'$data[nama_capres]','$data[nama_cawapres]','$data[alamat_capres]','$data[alamat_cawapres]','$data[pendidikan_terakhir_capres]','$data[pendidikan_terakhir_cawapres]','$data[id_partai_capres]','$data[id_partai_cawapres]')";
            $exec = mysqli_query($query) or die (mysqli_error());
            return $exec;
        }

        /**
         * @param $id
         * @param array $data
         * @return resource
         */
        public static function update($id, array $data)
        {
            $query = "update capres set nama_capres='$data[nama_capres]',nama_cawapres = '$data[nama_cawapres]',alamat_capres = '$data[alamat_capres]',alamat_cawapres = '$data[alamat_cawapres]',pendidikan_terakhir_capres = '$data[pendidikan_terakhir_capres]',pendidikan_terakhir_cawapres = '$data[pendidikan_terakhir_cawapres]',id_partai_capres = '$data[id_partai_capres]',id_partai_cawapres = '$data[id_partai_cawapres]' where id = '$id'";
            $exec = mysqli_query($query) or die (mysqli_error());
            return $exec;
        }

        /**
         * @param $id
         * @return resource
         */
        public static function delete($id)
        {
            $query = "delete from capres where id = '$id'";
            $exec = mysqli_query($query) or die (mysqli_error());
            return $exec;
        }

        /**
         * @param $id
         * @return array
         */
        public static function detail($id)
        {
            $query = "select * from capres where id = '$id'";
            $exec = mysqli_query($query) or die (mysqli_error());
            $array = mysqli_fetch_array($exec);
            return $array;
        }

        /**
         * @return array
         */
        public static function all()
        {
            $query = "select * from capres";
            $exec = mysqli_query($query) or die (mysqli_error());
            while ($array = mysqli_fetch_array($exec)) {
                $data = $array;
            }

            return $data;
        }

    }