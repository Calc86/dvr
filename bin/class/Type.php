<?php
/**
 * Created by PhpStorm.
 * User: calc
 * Date: 27.03.14
 * Time: 2:48
 */

abstract class Type {

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        if($value instanceof Type)
        {
            $this->set($value->get());
        }
        else{
            $this->set($value);
        }
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    protected function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function toInt(){
        return intval($this->getValue());
    }

    /**
     * @return string
     */
    public function toString(){
        return strval($this->getValue());
    }

    public function toBoolean(){
        return boolval($this->getValue());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    abstract public function get();
    abstract public function set($v);
}

class ETypeException extends Exception{
    public function __construct()
    {
        parent::__construct("wrong type");
    }
}

class EIntegerException extends ETypeException{}
class EStringException extends ETypeException{}
class EBooleanException extends ETypeException{}
class ESetException extends ETypeException{}

/**
 * Class Integer
 */
abstract class Integer extends Type{
    /**
     * @return int
     * @throws EIntegerException
     */
    public function get(){
        if(!is_int(parent::getValue())) throw new EIntegerException;
        return parent::toInt();
    }

    public function set($v){
        if(!is_integer($v)) throw new EIntegerException;
        parent::setValue($v);
    }


}

class IDType extends Integer{}
class UserID extends IDType{};
class CamID extends IDType{};
class Port extends Integer{};

/**
 * Class String
 */
abstract class String extends Type{
    /**
     * @return string
     * @throws EStringException
     */
    public function get()
    {
        if(!is_string(parent::getValue())) throw new EStringException;
        return parent::toString();
    }

    public function set($v){
        if(!is_string($v)) throw new EStringException;
        parent::setValue($v);
    }

}

class NameType extends String{}
class CamName extends NameType{};
class Url extends String{};
class Command extends String{};
class BashCommand extends Command{};
class VLCCommand extends Command{};
class VLMCommand extends Command{};

abstract class Boolean extends Type{
    public function get()
    {
        if(!is_bool(parent::getValue())) throw new EBooleanException;
        return parent::toBoolean();
    }

    public function set($v)
    {
        if(!is_bool(($v))) throw new EBooleanException;
        parent::setValue($v);
    }

    public function toString()
    {
        if(parent::getValue())
            return "true";
        else
            return "false";
    }
}

class OkFail extends Boolean{}
class YesNo extends Boolean{}

abstract class Set extends Type{
    public function get()
    {
        if(!is_array(parent::getValue())) throw new ESetException;
        return parent::getValue();
    }

    public function set($v)
    {
        if(!is_array($v)) throw new ESetException;
        parent::setValue($v);
    }

    public function toString()
    {
        $ret = '';
        foreach(parent::getValue() as $k=>$v)
            $ret.= $k.":".$v.";";
        return $ret;
    }


}

class Set1 extends Set{};


$id = new IDType(15);
$cid = new CamID(33);
$cname = new CamName("asd");

$n = new Set1(array(1,2,3, 15=>18));


echo $cname;
echo $id->get() + $cid->get();

echo true;
echo $n;
