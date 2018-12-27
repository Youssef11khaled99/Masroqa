<?php
/**
 * A special type of lost object
 */
class Document extends LostObject
{
  var count; //no. of papers
  var type; //type of lost paper: ID, passport, etc.
  function __construct(argument)
  {
    // code...
    count=0;
    type="";
  }
}


 ?>
