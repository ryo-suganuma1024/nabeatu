<?php

class Nabeatu {

    public $condition;

    public function __construct(string $condition) {
        $this->condition = $condition;
    }

    public function performance(int $end_num): String {

        // 1からend_numまでの数が入った配列を作成
        $numbers = range(1, $end_num);

        $result = '';

        foreach ($numbers as $number) {
            $result.= $number;
            if($this->is3Multiple($number) || $this->contain3($number)) {
                $result.= $this->addAho();
            }

            $result.= '<br>';
        }

        return $result;
    }

    public function rehearsal(int $end_num): string {

    }

    private function is3Multiple(int $num): bool {
        return $num % 3 === 0;
    }

    private function contain3(int $num): bool {
        return str_contains((string)$num, '3');

    }


    private function addAho(): String {
        return '(アホ)';
    }
}