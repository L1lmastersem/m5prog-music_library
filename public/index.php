
<!doctype html>
<html lang="en">
<?php
include '../views/header.php';
?>
<body>
<?php
include '../views/navigation.php';

require_once('../source/database.php');

$query = 'SELECT * FROM single ORDER BY title';

$stmt = $connection->prepare($query);
$stmt->execute();

$result = $stmt->get_result();

while( $single = mysqli_fetch_assoc($result) ) {
}
?>

<?php
include '../views/footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 <script src="/dist/js/main.js"></script>
  </body>
</html>
