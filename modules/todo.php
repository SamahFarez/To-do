<?php

switch ($vars['action']) {

    case "do_add": {
            //WORKS
            if (!empty($vars['title'])){
                session_start();
                $db->query("INSERT INTO items (title, user_id) VALUES (?, ?)", $vars['title'], $_SESSION['user_id']);
                header("location: todolist.php");
                exit;
            }
            else {
                header("location: todolist.php");
                exit;
            }
        }
        break;

    case "delete": {
            //WORKS
            $db->query("DELETE FROM items WHERE (item_id) = (?)", $vars['item_id']);
            header("location: todolist.php");
            exit;
        }
        break;
}

?>