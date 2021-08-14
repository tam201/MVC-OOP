<?php

class DatabaseModel
{

    public function connect()
    {
        $con = mysqli_connect("localhost", "root", "", "bkd08");
        return ($con);
    }

    public function close($con)
    {
        mysqli_close($con);
    }
}
