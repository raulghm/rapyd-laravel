<?php namespace Zofe\Rapyd\DataGrid;


class Column
{
    public $link = "";
    public $label = "";
    public $orderby = null;
    public $attributes = array();

    public function __construct($name, $label = null, $orderby = false)
    {
        $this->name = $name;
        $this->label($label);
        $this->orderby($orderby);
    }

    protected function label($label)
    {
        $this->label = $label;
    }

    protected function orderby($orderby)
    {
        $this->orderby = $orderby;
        return $this;
    }

    public function link($url)
    {
        $this->link = $url;
        return $this;
    }
     
    public function attributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }
    
}
