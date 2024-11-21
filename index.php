<?php

function checkBrackets($expression)
{
    $stack = new SplStack();

    for ($i = 0; $i < strlen($expression); $i++) {
        $sym = $expression[$i];

        if ($sym == '(') {
            $stack->push($sym);
        } elseif ($sym == ')') {
            if ($stack->isEmpty()) {
                return false;
            }
            $left = $stack->pop();
            if ($left != '(') {
                return false;
            }
        }
    }

    return $stack->isEmpty();
}

$expressions = [
    's * (s – a) * (s – b) * (s – c)',
    '(– b + (b2 – 4*a*c)^0.5) / 2*a',
    's * (s – a) * (s – b * (s – c)',
    's * (s – a) * s – b) * (s – c)',
    '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))'
];

foreach ($expressions as $expr) {
    echo "Biểu thức: $expr\n";
    echo "Kết quả: " . (checkBrackets($expr) ? 'Đúng' : 'Sai') . "\n\n";
    echo "<br/>";
}
