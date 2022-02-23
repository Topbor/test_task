<?php

class ObjectStorage
{
    private object $storage;

    public function __construct(object $obj = null)
    {
        if($obj){
           $this->storage = $obj;
        } else {
            $this->storage = new stdClass();
        }
    }

    public function add(object $key, $data = null)
    {
        try{
            $this->storage->$key = $data;
        }  catch (Exception $e){}
    }

    public function remove(object $key)
    {
        try{
            unset($this->storage->$key);
        }  catch (Exception $e){}
    }

    public function getHash(object $object): string
    {
        if(isset($this->storage->$object)){
            return spl_object_hash($object);
        }
        return emptyString();
    }

    public function current(): object
    {
        end($this->storage);
        $key = key($this->storage);
        if(is_object($key)){
            return $key;
        }
        return new stdClass();
    }

    public function getObjectList(): array
    {
        $res = [];
        foreach ($this->storage as $key => $value){
            $res[] = $key;
        }
        return $res;
    }

    public function check(object $object): bool
    {
        if(isset($this->storage->$object)){
            return true;
        }
        return false;
    }

    public function removeAll($collection)
    {
        try{
            foreach ($collection as $object){
                if(isset($this->storage->$object)){
                    unset($this->storage->$object);
                }
            }
        } catch(Exception $e){}
    }

}
