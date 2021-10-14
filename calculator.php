<?php 

 include ('header.php');

?>
    
<form>
    <input type= "text" name= "num1" placeholder= "Number 1">
    <input type= "text" name= "num2" placeholder= "Number2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtraction</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
    </form>

<p>The answer is;</p>
<?php
    if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['NUM2'];
    $operator = $_GET['operator'];
switch ($operator) {
    case "None":
        echo "You need to select a method!"
    break;
    case "Add":
        echo  $result1 + $result2;
    break;
    case "Subtract":
        echo $result2 - $result2;
    break:
    case "Multiply":
        echo $result1 * $result2;
    break:
    case "Divide":
        echo $result / $result2;
        break;
   }
}
?>
</body>
</html>