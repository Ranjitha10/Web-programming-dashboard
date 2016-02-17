<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		tr.spaceUnder > td
		{
		  padding-bottom: 3em;
		}
		td.rightGap
		{
			padding-right: 1em;
		}
	</style>
	<title>Insert New Module</title>
</head>
<body>
	<hr><h1 align="center">Insert New Module</h1><hr><br/><br/>
	<form align="center" method="post" action="add_module.php">
		<table align="center">
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Project Name:</td>
			
			<td class="rightGap" align="left"><input id="name" name="name" type="text" size="30px"> </td>

		</tr>
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Brief Description:</td>
			<td class="rightGap" align="left"><input id="details" name="details" type="text" size="30px" maxlength="500"></td>

		</tr>
		<tr class="spaceUnder">
			<td class="rightGap" align="left">Home Page Full Path Name:</td>
			<td class="rightGap" align="left"><input id="path" name="path" type="text" size="30px"></td>
		</tr>
		</table>
		<button type="submit">Add Module</button>
	</form>
</body>
</html>