<?php
function checkEligibilityToVote()
{
    $age = 20;
    $myName = "Denoche";
    if($age>= 18)
    {
        echo "$myName You are eligible to vote";
    }
    else
    {
        echo "$myName You are not eligible to vote";
    }
}
checkEligibilityToVote()
//checkEligibilityToVote();

//grading
function gradingSystem()
{
  $marks=56;
  if($marks >=80)
  {
    $grade ="A (Plain)";
  }
  elseif($marks >=75)
  {
    $grade ="A-";
  }
  elseif($marks >=70)
  {
    $grade ="B+";
  }
   elseif($marks >=65)
  {
    $grade ="B (Plain)";
  }
  elseif($marks >=60)
  {
    $grade ="B-";
  }
  elseif($marks >=55)
  {
    $grade ="c+";
  }
  else
  {
    $grade ="Fail";
  }
  echo "your grade is $grade";
};
GradingSystem()
?>