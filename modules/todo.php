<?php

switch ($vars['action']) {

    case "do_add": {
            //WORKS
            session_start();
            $db->query("INSERT INTO items (title, user_id) VALUES (?, ?)", $vars['title'], $_SESSION['user_id']);
            header("location: todolist.php");
            exit;

        }
        break;

    case "delete": {
            //WORKS
            $db->query("DELETE FROM items WHERE (item_id) = (?)", $vars['item_id']);
            header("location: todolist.php");
            exit;
        }
        break;

    case "do_edit": {
            //some code here to edit and save...
            exit;
        }
        break;

    case "help": {
            //some code here to show help 
            exit;
        }
        break;

}

?>