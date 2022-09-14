<?php

include "DBH.class.php";

class show extends DBH {
    protected function show_class(){
        $sql="SELECT * FROM posts";
        $stmts= $this->connect()->prepare($sql);
         $stmts->execute();
        $sql_2 = "SELECT * FROM comments WHERE post_id = ?";
         
         $stmt = $this->connect()->prepare($sql_2);
         
         


        $names= $stmts->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        $j=0;
        foreach ($names as $name){
            $i++;
            $stmt->execute(array($name['id']));
            $comments= $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            
                <tr>
                <th scope="row"><p><?php echo $i ; ?></p></th>
                <td><p><?php echo $name['post'] ;?></p>
                <br>
                <div id="for_com<?php echo $name['id'] ;?>">
                <?php
                foreach($comments as $com){
                    $j++;                    
                    ?>
                    <br>                    
                        <h4><?php echo $com['author'] ;?> date: <?php echo $com['date_comment'] ;?></h4>
                        <p><?php echo $com['comment'] ;?></p>
                    <br>
                <?php
                }
                
                ?>
                </div>
                    
                    <textarea name="comment" class="form-control text_<?php echo $name['id']; ?>"  placeholder="Write your blogs here" >comment</textarea>
                    <br>
                    
                        <label for="author">author:</label>
                        <input  class="form-control in_<?php echo $name['id']; ?>" name="author" type="text">
                    <br>
                    <div class="d-flex justify-content-center">
                        <a class="test" >
                            <button id="<?php echo $name['id']; ?>" class="btns btn btn-primary btn-lg">send</button>
                        </a>
                    </div>
                        
                    
                </td>
                <td><p><?php echo $name['date_post'] ;?></p></td>

                <td>
                    <div>
                        <a href='classes/delete.class.php?did=<?php echo $name['id'];?>'><button class="btn btn-danger">Delete</button></a>
                        <a href='includes/edit.inc.php?eid=<?php echo $name['id'];?>'><button class="btn btn-success" >Edite</button></a>
                    </div>
                </td>
                </tr>
                
                
            <?php
            $comments = null;
        }
    
    }
}