<?php


namespace App;


class MagicClass
{
    public $public_field;
    private $private_field;

    public function __construct($public, $private)
    {
        $this->public_field = $public;
        $this->private_field = $private;
        /*Классы, в которых объявлен метод-конструктор,
         будут вызывать этот метод при каждом создании нового объекта*/
        echo('__construct' . '<br/>');
    }

    public function __destruct()
    {
        /*Деструктор будет вызван при освобождении всех ссылок на определенный объект
         или при завершении скрипта (порядок выполнения деструкторов не гарантируется)*/
        echo('__destruct' . '<br/>');
    }

    public function __call($name, $arguments)
    {
        /*запускается при вызове недоступных методов в контексте объект*/
        echo('__call' . '<br/>');
    }

    public static function __callStatic($name, $arguments)
    {
        /*запускается при вызове недоступных методов в статическом контексте*/
        echo('__callStatic' . '<br/>');
    }

    public function __get($name)
    {
        /*будет выполнен при чтении данных из недоступных
         (защищенных или приватных) или несуществующих свойств*/
        echo('__get' . '<br/>');
    }

    public function __set($name, $value)
    {
        /*будет выполнен при записи данных в недоступные
         (защищенные или приватные) или несуществующие свойства*/
        echo('__set' . '<br/>');
    }

    public function __isset($name)
    {
        /*будет выполнен при использовании isset() или empty()
         на недоступных (защищенных или приватных) или несуществующих свойствах*/
        echo('__isset' . '<br/>');
    }

    public function __unset($name)
    {
        /*будет выполнен при вызове unset() на недоступном
        (защищенном или приватном) или несуществующем свойстве*/
        echo('__unset' . '<br/>');
    }


    public function __sleep()
    {
        /*Предполагаемое использование __sleep() состоит в завершении работы над данными,
         ждущими обработки или других подобных задач очистки*/
        echo('__sleep' . '<br/>');
        return [];
    }


    public function __wakeup()
    {
        /*Предполагаемое использование __wakeup()
         заключается в восстановлении любых соединений с базой данных,
         которые могли быть потеряны во время операции сериализации
        и выполнения других операций повторной инициализации*/
        echo('__wakeup' . '<br/>');
    }

    public function __toString()
    {
        /*Метод __toString() позволяет классу решать,
         как он должен реагировать при преобразовании в строку*/
        echo('__toString' . '<br/>');
        return '__toString';
    }

    public function __invoke()
    {
        /*Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию.*/
        echo('__invoke' . '<br/>');
    }

    public function __clone()
    {
        /*После завершения клонирования, если метод __clone() определен,
         тогда будет вызываться метод __clone() вновь созданного объекта,
        для возможного изменения всех необходимых свойств.*/
        echo('__clone' . '<br/>');
    }

    private function DontTouchMe()    {

    }

    private static function DontTouchMeStatic()    {

    }

}