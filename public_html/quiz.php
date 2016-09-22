<?php
echo "<form action = 'quiz2.php' method = 'get'>";
echo "First Name Location ---> <input type = 'text' name = 'First'><br />";
echo "Last Name Location ---> <input type = 'text' name = 'Last'><br />";
echo "Email Address ---> <input type = 'text' name = 'Email'><br />";
echo "Password <input type = 'password' name = 'YouMayPass'><br />";
echo "Female <input type = 'radio' name = 'Gender' value = 'Female'><br />";
echo "Male <input type = 'radio' name = 'Gender' value = 'Male'><br />";
echo " <input type = 'checkbox' name = 'food[]' value = 'Turkey' checked> Turkey&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'Burger'> Burger&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'Steak'> Steak&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'Pasta'> Pasta&nbsp";
echo " <input type = 'checkbox' name = 'food[]' value = 'Stir Fry'> Stir Fry<br />";
echo " <select name = 'style'>";
echo " <option 'Cash'>Cash</option>";
echo " <option 'Debit card'>Debit card</option>";
echo " <option 'Credit card'>Credit card</option>";
echo " <option 'Check'>Check</option>";
echo " <option 'Paypal'>Paypal</option>";
echo " <option 'Wire'>Wire</option>";
echo " </select>";
echo " <input type = 'submit' name ='button' value = 'order up'>";
?>
