<!-- Q -1 : what does the static keyword do in PHP? -->

<!-- ans - Makes a property or method belong to the class rather than an instance. -->

<!-- Explaination : -

1.) PHP me static keyword ka use class ke variables aur methods ko bina object banaye access karne ke liye hota hai.

2.) Ye class ke andar ek shared property ya method create karta hai, jo sabhi objects ke liye same rehta hai 

-->


<?php 

class Counter{

    public static $count =0; //static property

    public static function increment(){
        self::$count++; // Self ka use class ke andar hota hai

    }
}


Counter::increment();

Counter::increment();

Counter::increment();

Counter::increment();

echo Counter::$count;
?>