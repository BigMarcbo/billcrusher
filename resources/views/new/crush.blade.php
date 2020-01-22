<?php

$text = "173. [H. 4218] Bill (H.) regarding breakfast after the bell (House, No. 4218). 2d.
            [On House, No. 591.]
            [From the committee on Education.]
            [The committee on Ways and Means (Rodrigues) recommends that the bill be amended by striking out all after the enacting clause and inserting in place thereof the text of Senate document numbered 2460.]
            [Also based on Senate, No. 267.]
            [Order relative to subject matter adopted.]";

// $regex = '/(\[h|\[s)(.*?)\]/i';
// $regex = '/(?<=\[).*?(?=\])/i';
$regex = '/(s\.|h\.).*?(?=\])/i';

preg_match_all($regex, $text, $matches);

$bills = [];

foreach ($matches[0] as $match) {
  $bills[] = str_replace('. ', 'B', $match);
}

var_dump($bills);