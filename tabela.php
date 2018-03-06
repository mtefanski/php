<table>
<?php
for($row = 1; $row <= 10; $row++)
{
	if ($row%2 == 0) echo '<tr bgcolor="yellow" align="center">';
	else echo '<tr bgcolor="orange" align="center">';
	for ($column = 1; $column <= 10; $column++)
	{
		echo '<td width="40" height="40">';
		echo $row*$column;
		echo '</td>';
	}
	echo '</tr>';
}
?>
</table>

