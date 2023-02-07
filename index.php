<?php
#DailyChallenge
class User{
    //definition des propriétés
    public $firstName="Jonnie";
    public $lastname="Roe";


    public function hello()
    {
        echo "hello, ".$response = $this->firstName;

        return $response;
    }

    function test()
{
    //creation du nouvel objet
        $user = new User();

    
  echo "      salut, ".$var= $user->firstName  ." ". $user->lastname ;
        return $var ;


}
}


$great = new User();
 $great->hello();
 $great->test();

?>