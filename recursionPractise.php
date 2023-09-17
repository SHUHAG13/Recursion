<?php



/////Print number//////
function printNumber($num)
{
    if($num==100)
    {
        return;
    }
    echo$num."\n";
   printNumber($num+1);

}
printNumber(1);

/////////Factorial number ////////

function factorial(int $num):int
{
if($num==0)
{
    return 1;
}
return $num*factorial($num-1);
}
$result=factorial(10);
echo$result;

//////Fibonacci series wirh recursion///////
function fibonacciSeries($numOfItem,$first=0,$second=1)
{
   //this block is for stop the recursion
    static $start=1;
    if($start>$numOfItem)
    {
        return;
    }
    $start++;

    //this is the recarsive call
    echo$first."\n";
    $_fibo=$first+$second;
    $first=$second;
    $second=$_fibo;
    fibonacciSeries($numOfItem,$first,$second);

}
$numOfItem=10;
fibonacciSeries($numOfItem);