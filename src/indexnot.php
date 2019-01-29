<?php

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

    $query = 'SELECT * FROM data459';
    $statement = $db->prepare($query);
    $statement->execute();
    $students = $statement->fetchAll();
    $statement->closeCursor();
?>
<?php include 'view/header.php'; ?>
    <main>
        <h1>CofC Students</h1>
	<table>
		<tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
       		 <?php foreach($students as $student): ?>
			<tr>
        <td><?php echo($student['id']); ?></td>
        <td><?php echo($student['f_name']); ?></td>
				<td><?php echo($student['l_name']); ?></td>

			</tr>
        	<?php endforeach; ?>
      </table>
    </main>
<?php include 'view/footer.php'; ?>
