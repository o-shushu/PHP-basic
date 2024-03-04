<?php
trait A
{
    public function eat(){
        echo "This is A.";
    }
}
trait B
{
    public function eat(){
        echo "This is B.";
    }
}
class Somebody{
    use A,B{
        B::eat insteadOf A;//B的eat替换掉A的
        A::eat as Aeat;//A重命名为Aeat,as还能更改方法访问权限，如下：
        // A::eat as protected Aeat;
    }
    // public function test()
    // {
    //     echo $this->Aeat();
    // }
}
$human = new Somebody;
echo $human->eat();//This is B.
echo $human->Aeat();//This is A.




