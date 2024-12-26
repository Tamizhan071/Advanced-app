<?php
  class user{
  public  $id;
   public  $name;
  function adddata($id,$name)
  {
    $this->id=$id;
    $this->name=$name;
   
  }
  
  }
  
  $user=new user;
  $user->adddata(1,"tom");
  echo $user->id;
 

?>