class Solution {
    function fizzBuzz($n) {
        $answer = array();
        while($n>0){
            if($n%3==0 && $n%5==0){
                array_unshift($answer, "FizzBuzz");
                $n--;
            }
            elseif($n%3==0){
                array_unshift($answer, "Fizz");
                $n--;
            }
             elseif($n%5==0){
                array_unshift($answer, "Buzz");
                $n--;
            }
            else{
                array_unshift($answer, "$n");
                $n--;
            }   
        }
        return $answer;
    }
}