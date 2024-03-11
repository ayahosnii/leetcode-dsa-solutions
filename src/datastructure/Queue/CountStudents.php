<?php

namespace src\datastructure\Queue;

use SplQueue;

class CountStudents
{
    /**
     * @param Integer[] $students
     * @param Integer[] $sandwiches
     * @return Integer
     */


    function countStudents($students, $sandwiches) {
        $studentsQueue = new SplQueue();
        $countSandwiches = count($sandwiches);

        $unable_to_eat = 0;

        foreach ($students as $student){
            $studentsQueue->enqueue($student);
        }

        $round = 0;

        while (!$studentsQueue->isEmpty() && $countSandwiches > $round){
            if ($studentsQueue->bottom() === $sandwiches[0]){
                $studentsQueue->dequeue();
                array_shift($sandwiches);
                $round = 0;
            }else{
                $studentsQueue->enqueue($studentsQueue->dequeue());
                $round ++;
            }


        }

        $unable_to_eat = $studentsQueue->count();

        return $unable_to_eat;
    }
}