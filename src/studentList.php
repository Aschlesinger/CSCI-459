<?php include './view/header.php'; ?>
<main>
    <h1>CofC Students</h1>

    <table>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach ($students as $student) : ?>
        <tr>
            <td><?php echo($student['id']); ?></td>
            <td><?php echo($student['f_name']); ?></td>
            <td><?php echo($student['l_name']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action" value="delete_student">
                <input type="hidden" name="id"
                       value="<?php echo($student['id']); ?>">
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="?action=show_add_form">Add Student</a></p>

</main>
<?php include './view/footer.php'; ?>
