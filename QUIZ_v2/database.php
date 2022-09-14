
<?php

$quest = [
    "q2" => [
        "question" => "who is the best african football team?",
        "choix" => ["algeria", "egypt", "tunisia", "moroco"],
        "réponse" => "egypt",
        "type" => "radio",
    ],
    "q1" => [
        "question" => "who is the best football players in africa?",
        "type" => "checkbox",
        "choix" => ["messi", "Mahrez", "M.Salah", "Belaili"],
        "réponse" => "Mahrez",
    ],
    "q3" => [
        "question" => "how much did algeria won the african cup? ",
        "réponse" => "2",
        "type" => "text",
    ],
    "q4" => [
        "question" => "is programing HARD?",
        "choix" => ["no", "yes"],
        "réponse" => "yes",
        "type" => "text",
    ],

    "q5" => [ // forme générale dans le cas d'réponse à choix multiples
        "question" => "who is best villains in superhero movies ?",
        "choix" => ["joker", "bane", "Dr.strange", "psycho-pirate", "loki"],
        "réponse" => ["Dr.strange", "bane", "joker"],
        "type" => "checkbox",
    ],
    "q6" => [ // forme générale dans le cas d'réponse à choix multiples
        "question" => "which of these countries are the largest in their continent?",
        "choix" => ["Russia", "Qatar", "America", "Canada", "Algeria"],
        "réponse" => ["Russia", "Algeria", "Canada"],
        "type" => "checkbox",
    ],
    
];
?>