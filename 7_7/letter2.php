<?php
require("letter.php");

define("SIGN", " 28.10.24 З повагою, Деканат");

$events = [
    "Відмінники" => " за успіхи в навчанні",
    "Стипендія" => "за участь в олімпіаді",
    "Відрахувати" => "відрахування за неуспішність"
];

$invitation["misha"] = "Відмінники";
$invitation["arsen"] = "Відрахувати";
$invitation["mark"] = "Стипендія";
$invitation["oleg"] = "Відрахувати";
$invitation["ivan"] = "Відмінники";


foreach ($people as $key => $man_info) {
    $event_key = $invitation[$key];
    if ($event_key != "") {
        foreach ($man_info as $key1 => $info) {
            if ($key1 == "name")
                $str = "Шановний $info!";
            if ($key1 == "email")
                $email = $info;
        }
        $str .= "\n " .
                $events[$event_key];
        switch ($event_key) {
            case "Відмінники":
                $str .= "\nВітаємо за великі успіхи в навчанні , даруємо диплом з відзнакою";
                break;
            case "Стипендія":
                $str .= "\nВітаємо , ви отримали стипендію";
                break;
            case "Відрахувати":
                $str .= "\nВас відраховано)";
                break;
            default: $str .= "\nВибачте, але Вас поки що нікуди не запрошують...";
        }
        $str .= "\n" . SIGN . "\n";

        echo $str;
    }
}