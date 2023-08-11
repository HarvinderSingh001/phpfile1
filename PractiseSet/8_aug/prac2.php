<?Php  
 class A{
    public $a;
    private function __construct()
   {
        echo 'there is class A';
    }
    public static function second(){
        echo 'this is second class function';
        return new A();
    }
}
$obj  = A::second();
print_r($obj);
?>