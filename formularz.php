<pre>
<?php
foreach($_GET as $key => $value)
{
	if (is_array($value)){
		foreach($value as $k => $v)
		{	
			echo $k,' => ',$v,'     ';
		} 
	}
	else echo $key, ' => ', $value;
	echo '</br>';
}
?>
</pre>

