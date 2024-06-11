<?php
trait Jsonable
{
    public function enJson():string
    {
        return json_encode($this);
    }
}