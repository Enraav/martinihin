<H1> Многомерные массивы </H1>
<?php
$students = [
    ['name' => 'Иванов Иван', 'group'=> ' ив1к', 'cource' =>2  ],
    ['name' => 'Бурцев Сергей', 'group'=> ' м1к', 'cource' =>1  ],    
    ['name' => 'Петров игнат', 'group'=> ' ад-24', 'cource' =>4  ],

];
foreach($students as $student){
    echo "Имя:{$student['name']}, группа:
    {$student['group']}, Курс: {$student
    ['cource']}"; 
echo '<br>';

}
?>