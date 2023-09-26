<?php
$studentGrades = [
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
];
function averageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = 0;
        $count = count($grades);

        // Calculate the total by summing up the grades
        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / $count;

        echo "{$student}: Average Grade is {$average}<br>";
    }
}

averageGrades($studentGrades);

?>