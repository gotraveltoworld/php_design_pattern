<?php
/**
 * Design Pattern for the Singleton.
 */
class Singleton
{
    private static $instance = null;
    /**
     * Call this method to get singleton
     *
     * @return Singleton
     */
    public static function getSingleton()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance; 
    }
    /**
     * Call this method to get singleton
     *
     * @return string
     */
    public function responseString()
    {
        return 'Well done.';
    }
}
// Call the inside member.
echo (Singleton::getSingleton())->responseString(). "\n";

// Testing...
class A extends Singleton {}
class B extends Singleton {}

echo get_class(A::getSingleton()). "\n";
echo get_class(B::getSingleton()). "\n";
?>
