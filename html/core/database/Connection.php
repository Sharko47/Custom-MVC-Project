<?php
//New Class Created Connection
class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\Exception $th) {
            die($th->getMessage());
        }
    }
}
