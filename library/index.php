<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


</head>
 
<body>


    <div class="container">
	<div class="container-fluid">
		<div class="row content">
			<th:block th:include="fragment/navbar::navbar"></th:block>
			<div class="content_region" id="content_region">
				<hr>
				<div class="main-content">
					<div class="text-center">
						<br> <br>
						<h1>Library Management</h1>
						<h4>Copyright &copy; Thu Vo All Rights Reserved</h4>
					</div>					
				</div>
			</div>
		</div>
	</div>
            <div class="row">
				<p>
                    <a href="create.php" class="btn btn-success">Create</a>
                </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
					  <th>Name</th>
					  <th>Price</th>
					  <th>Available</th>
					  <th>Edition</th>
					  <th>Page</th>
					  <th>ISBN</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM customers ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['price'] . '</td>';
							echo '<td>'. $row['available'] . '</td>';
                            echo '<td>'. $row['edition'] . '</td>';
                            echo '<td>'. $row['Page'] . '</td>';
							echo '<td>'. $row['ISBN'] . '</td>';
							echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                            echo ' ';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>