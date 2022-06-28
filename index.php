<?php
//silly change
function magic8Ball()
{
  echo "\nAsk me a question and be quick about it..." . "\n";
  $question = readline(">");
  echo "\n" . $question . "\n" . "hmmm...";

  // generate random int between 0 & 19
  $magic_Answer = rand(0, 19);
  // echo $magic_Answer;
  echo "\n";

  // answer based on random int generated above:
  if ($magic_Answer == 0 || $magic_Answer == 1) {
    echo "\nIt is certain\n";
  } elseif ($magic_Answer == 2 || $magic_Answer == 3) {
    echo "\nWithout a doubt\n";
  } elseif ($magic_Answer == 4 || $magic_Answer == 5) {
    echo "\nNEVER\n";
  } else {
    echo "\nMost likely";
  }
  // refactor later to switch case, figure out how to implement || operators in switch cases as well
};

magic8Ball();
magic8Ball();
magic8Ball();
magic8Ball();
// add conditional func that adds a "?" if the user doesnt add one after their q

// try adding more possibilities for answers to accommodate for questions that have more broad answer, rather than the usual yes/no type answers