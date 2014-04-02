<?php

class CustomerTest extends TestCase {
  public function testIndex()
  {
    $response = $this->call('GET', 'customers');
    $customers = json_decode($response->getContent());
    $this->assertTrue(count($customers)>0);
  }
  public function testCreate()
  {
    $number = rand();
    $response = $this->call('POST', 'customers', array("email"=>$number."@test.com", "name"=>"name".$number));
    $customer = json_decode($response->getContent());
    $this->assertTrue(count($customer)>0);
  }
}