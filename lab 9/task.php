<form method="post">
        Enter units : <input type="number" name="units" required>

        <input type="submit" value="Cal">
    </form>
<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST["units"];
    $day =$_POST["day"];
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 100) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    echo "<h3>Bill: Rs. " . number_format($bill, 2) . "</h3>";


 
    

}









?>