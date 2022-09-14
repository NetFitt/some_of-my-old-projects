<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php require_once 'database.php';

    if (isset($_GET['text']) && isset($_GET['check'])) {
        $check = $_GET['check'];
        $text = $_GET['text'];
        $radio=[];
        foreach ($quest as $x => $val){
            if($val['type']=='radio'){
                if(isset($_GET[$x])){
                    array_push($radio,$_GET[$x]);
                }
            }
            
        }
        $i = 0;
        $counter = 0;
        $nmbqust = 0;

        foreach ($quest as $x => $val) {
            $ch = 0;
            $nmbqust++;

            // CHECKBOX INPUTS

            if ($val['type'] == 'checkbox') {
                $diff = [];
             //more than one reponse
                if(is_array($val['réponse'])){
                    $qq = [];
                    $i = 0;
                    $dif = [];
                    $qq = $val['réponse'];
                    $dif = array_diff($check, $qq);

                    for ($j = 0; count($val['choix']) > $j; $j++) {
                        if (in_array($val['choix'][$j], $dif)) {
                            $i--;
                        }
                    }
                    $num = count($val['réponse']);
                    for ($k = 0; $num > $k; $k++) {
                        if (in_array($val['réponse'][$k], $check)) {
                            $i++;
                        }
                    }
                    if ($i == $num) {
                        $counter++;
                    }
                }else{
                    $qq=[];
                    array_push($qq,$val['réponse']);
                    $dif = array_diff($check, $qq);
                    $i=0;
                    for ($j = 0; count($val['choix']) > $j; $j++) {
                        if (in_array($val['choix'][$j], $dif)) {
                            $i--;
                        }
                    }
                    if(in_array($val['réponse'],$check)){
                        if($i==0){
                            $counter++;
                        }
                    }
                }
                //radio inputs 
            } elseif ($val['type'] == 'radio') {

                    if(!is_array($radio)){
                        if($radio == $val['réponse']){
                            $counter++;
                        }
                        
                    }
                    else{
                        if(in_array($val['réponse'],$radio)){
                                $counter++;
                            }
                        
                    }
                     
                
            }
            //TEXT INPUTs
            else {
                if (in_array($val['réponse'], $text)) {
                    $counter++;
                }
            }
        }
        echo "<div class='note'><h1 class='counter'> Number of correct answers is : <h1 class='num'>" . $counter . "/" . $nmbqust . "</h1> </h1></div>";
    } else { ?>
        <div class="container">
            <div class="head">
                <h1>QUIZ</h1>
                <div class="header-text">
                    <h3>NOTE : </h3>
                    this questions might have more than one answer you have to get them all right or you will not get the point.
                </div>
            </div>
            <form method="GET">
                <div class="elContainer">
                    <?php
                    $u=0;
                    foreach ($quest as $x => $val) {
                        echo "<p class='quests'>" . $val['question'] . "</p>";
                        if ($val["type"] == "checkbox") {
                                foreach ($val['choix'] as $b) { ?>
                                    <div class="checkbox">
                                        <input class="check" type="<?php echo $val["type"]; ?>" name="check[]" value="<?php echo $b; ?>">
                                        <label class="label-check" for="<?php echo $b; ?>"><?php echo $b ?></label>
                                    </div>
                                <?php
                            } 
                        } elseif ($val["type"] == "radio") {
                                foreach ($val['choix'] as $b) { ?>
                                    <div class="checkbox">
                                        <input class="check" type="<?php echo $val["type"]; ?>" name="<?php echo $x; ?>" value="<?php echo $b; ?>">
                                        <label class="label-radio" for="<?php echo $b; ?>"><?php echo $b ?></label>
                                    </div>
                            <?php   }
                            
                        } else { ?>
                            <div>
                                <input class="text" type="<?php echo $val["type"]; ?>" name="text[]" required>
                            </div>
                            <?php
                            if (isset($val['choix'])) {
                                if (is_array($val['choix'])) { ?>
                                    <h3>chose one of these:</h3>
                    <?php
                                    foreach ($val['choix'] as $b) {
                                        echo $b . "<br>";
                                    }
                                }
                            }
                        }
                    } ?>
                </div>
                <div class="submit-div">
                    <input class="submit" type="submit" value="Submit">
                </div>
            </form>
        </div> <?php
            } ?>

</body>

</html>