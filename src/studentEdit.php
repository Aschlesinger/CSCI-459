<?php include './view/header.php'; ?>
<main>
  <h2>Delete/Update Student</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_student">
        <input type="hidden" name="old_id"   value="<?php echo($student['id']); ?>">
        <label>ID:</label>
        <input type="text" name="id"
        value="<?php echo($student['id']); ?>"><br>

        <label>First Name:</label>
        <input type="text" name="f_name"
        value="<?php echo($student['f_name']); ?>"><br>

        <label>Last Name:</label>
        <input type="text" name="l_name"
        value="<?php echo($student['l_name']); ?>"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Student"><br>
      </form>

      <p><a href="?action=list_students">Students</a></p>
</main>
<?php include './view/footer.php'; ?>
