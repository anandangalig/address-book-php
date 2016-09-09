<?php
class Contact
{
  private $name;
  private $number;
  private $address;

  function __construct($full_name, $phone_number, $permanent_address)
  {
      $this->name = $full_name;
      $this->number = $phone_number;
      $this->address = $permanent_address;
  }

  function setName($new_name)
  {
      $this->name = (string) $new_name;
  }
  function getName()
  {
      return $this->name;
  }

  function setNumber($new_number)
  {
      $this->number = (string) $new_number;
  }
  function getNumber()
  {
      return $this->number;
  }

  function setAddress($new_address)
  {
      $this->address = (string) $new_address;
  }
  function getAddress()
  {
      return $this->address;
  }

  function save()
  {
      array_push($_SESSION['list_of_contacts'], $this);
  }

  static function getAll()
  {
      return $_SESSION['list_of_contacts'];
  }

  static function deleteAll()
  {
      $_SESSION['list_of_contacts'] = array();
  }

}
 ?>
