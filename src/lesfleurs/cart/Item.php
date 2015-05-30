<?php

namespace lesfleurs\cart;

class Item_shipping
{

    protected $shipping_provider;
    protected $shipping_cost;
    protected $processing_time;


    public function __construct($data = array())
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

    }
}
