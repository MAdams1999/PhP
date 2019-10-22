<?php
class MyClass
{
    //construct
    public function __construct()
    {
        echo 'The Class "' . __CLASS__ . '" was initiated!';
    }

    //Destructor
    public function __destruct()
    {
        echo 'The Class"' . __CLASS__ . '" was destroyed.';
    }
}
//create a new object
$obj = new MyClass;

//output a message at the end of the file
echo "The end of the line.";
?>