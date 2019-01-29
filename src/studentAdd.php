<?php include './view/header.php'; ?>
<main>
    <h1>Add Student</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_student">

        <label>Code:</label>
        <input type="text" name="id"><br>

        <label>First Name:</label>
        <input type="text" name="f_name"><br>

        <label>Last Name:</label>
        <input type="text" name="l_name"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Student" /><br>
    </form>
    <p><a href="?action=list_students">View Product List</a></p>

</main>
<?php include './view/footer.php'; ?>
