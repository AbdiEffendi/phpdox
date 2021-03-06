<?php

namespace test;


/**
 *
 * @ invalid annotion syntax
 */
class FooException extends \Exception {}



interface someInterface {}
class base {

    public function baseMethod() {}
}

/**
 * Halli hallo hallöle :) Hier steht Text mit Sönderzeichän.
 *
 * @author Reiner Zufall
 * @copyright 1234 by Reiner Zufall Productions
 * @link http://remote.tld/page
 * @license BSD
 */
class foo extends base implements someInterface{

   /** some description */
   const foo = 123;
   const baz = 'abc';

   /** @var string for you */
   protected $bar = 'SomeDefaultValue';

   private $pr = NULL;

   public $pub = FALSE;

   /**
    * First line descr.
    * More text here with inline {@link My\Beautiful\Class} - addtionally
    * some {@link My\Beautiful\Class::getId} and of course with
    * even anther {@link http://http://www.php.net/manual/en/language.oop5.php Classes and Objects} to render
    */
   public function blupp(SomeClass $o, $x = 'hello', $y = 1, $z = 0.5,
        $c = self::foo, $c2 = \test\foo::foo, $c3 = \Exception::some,
        $a = array(), $a2 = array(1,2,3, 'four', 'five')
   ) {

   }

    /**
     * This is the 2nd method of this class
     *
     * We can have a funny description text here, going over multiple lines if need be. So we just add
     * more text so it get's longer and longer and longer.. This is for testing only, so the text
     * does not even have to make sense.
     *
     * @param SomeClass $o   First Parameter description
     * @param string    $x   Second parameter is a string with text
     * @param int       $y   We also pass in an integer
     * @param float     $z   This variable is a float, with a default
     * @param int       $c   An Integer with a given default value by self reference
     * @param int       $c2  Also floats can have a predefined value
     * @param string    $c3  Reference to some constant in a different class
     * @param array     $a   Array parameter
     * @param array     $a2  And an array with default entries
     */
    public function someLongerMethodNameWithSomeReallyLongName(SomeClass $o, $x = 'hello', $y = 1, $z = 0.5, $c = self::foo,
        $c2 = \test\foo::foo, $c3 = \Exception::some,
        $a = array(), $a2 = array(1,2,3, 'four', 'five')
    ) {

    }

    /**
     * @param Base $para Only Parameter
     */
    public function docblockClassParamSpec($para) {}

}

class baz extends foo {

    protected function bazMethod() {}
}

class last extends baz {
    public function blupp(SomeClass $o, $x = 'hello', $y = 1, $z = 0.5, $last = true) {}
}

