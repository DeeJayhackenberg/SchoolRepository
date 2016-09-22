<?php
echo "<form action = 'P2P.php' method = 'get'>";
echo "Enter Your Name <input type = 'text' name = 'Textfield'><br />";
echo "Enter Your Gamertag <input type = 'text' name = 'Gamerfield'><br />";
echo "Smash Bros <input type = 'radio' name = 'game' value = 'Smash Bros'<br />";
echo "StarCraft 2 <input type = 'radio' name = 'game' value = 'StarCraft 2'<br />";
echo " <input type = 'checkbox' name = 'snacks[]' value = 'pizza'> Pizza&nbsp";
echo " <input type = 'checkbox' name = 'snacks[]' value = 'soda'> Soda&nbsp";
echo " <input type = 'checkbox' name = 'snacks[]' value = 'chips'> Chips&nbsp";
echo " <input type = 'checkbox' name = 'snacks[]' value = 'other'> Other<br />";
echo "<select name = 'style'>";
echo "<option 'Competative'>Competative</option>";
echo "<option 'Casual'>Casual</option>";
echo "<option 'Hardcore'>Hardcore</option>";
echo "<option 'Spectate'>Spectator</option";
echo "</select>";
echo "<input type = 'submit' name = 'button' value = 'Click Me'>";
echo "</form>";
?>
