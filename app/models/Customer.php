<?php


class Customer extends Eloquent {
  protected $table = 'customers';
  //protect from mass assign
  protected $guarded = array('id');

  // hide from to array or to json
  protected $hidden = array('created_at', 'updated_at');


}