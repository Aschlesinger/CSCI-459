<?php
require('./model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_students';
    }
}
switch ($action){
    case 'list_students':
         // Get studnet data
        $students = get_students();

        // Display the product list
         include('studentList.php');
         break;

    case 'select_student':
        $studentID = filter_input(INPUT_POST, 'id');
        $student = get_student($studentID);
        include ('studentEdit.php');
        break;

    case 'delete_student':
        $studentID = filter_input(INPUT_POST, 'id');
        delete_student($studentID);
        header("Location: .");
        break;


    case 'show_add_form';
        include('studentAdd.php');
        break;

    case 'add_student';
        $id = filter_input(INPUT_POST, 'id');
        $f_name = filter_input(INPUT_POST, 'f_name');
        $l_name = filter_input(INPUT_POST, 'l_name');
        // Validate the inputs
        if ( $id === NULL || $f_name === NULL ||
            $l_name === NULL) {
            $error = "Invalid product data. Check all fields and try again.";
            include('./view/error.php');
        } else {
            add_student($id, $f_name, $l_name);
            header("Location: .");
        break;
      }
      case 'update_student';
          $old_id = filter_input(INPUT_POST, 'old_id');
          $new_id = filter_input(INPUT_POST, 'id');
          $f_name = filter_input(INPUT_POST, 'f_name');
          $l_name = filter_input(INPUT_POST, 'l_name');
          if ( $new_id === NULL || $f_name === NULL ||
                $l_name === NULL) {
                $error = "Invalid product data. Check all fields and try again.";
                include('./view/error.php');
            } else {
                update_student($old_id, $f_name, $l_name, $new_id);
                header("Location: .");

    }

}

?>
