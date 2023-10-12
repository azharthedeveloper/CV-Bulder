<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV Builder</title>
	<style type="text/css">
		body{
			background-color: lightsteelblue;
		}
		h1{
			background-color: navy;
			color: white;
			padding: 10px;
			margin: 5px 30px;
			border-radius: 10px;
		}
		fieldset{
			width: 45%;
			border: 4px double blue;
		}
		legend{
			font-size: 24px;
			font-weight: bolder;
			color: navy;
		}
		input{
			padding: 5px;
		}
	</style>
</head>
<body>
	<center>
		<h1>CV Builder</h1>
		<fieldset>
			<legend>Generate CV</legend>
		<form action="process.php" method="POST">
			<table>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--INFORMATION--</th>
				</tr>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="first_name" placeholder="Enter Your First Name" required></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="last_name" placeholder="Enter your Last Name" required></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address" placeholder="Enter your Address" required></td>
				</tr>
				<tr>
					<td>Phone No: </td>
					<td><input type="text" name="phone_number" placeholder="Enter your Phone Number" required></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" placeholder="example12@gmail.com" required></td>
				</tr>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--Objective--</th>
				</tr>
				<tr>
					<td>Objective: </td>
					<td><textarea name="objective" cols="20" rows="5" required></textarea></td>
				</tr>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--Personal Details--</th>
				</tr>
				<tr>
					<td>Date-Of-Birth: </td>
					<td><input type="text" name="dob" placeholder="DD-MM-YYYY" required></td>
				</tr>
				<tr>
					<td>Father's Name: </td>
					<td><input type="text" name="father_name" placeholder="Enter your Father's Name" required></td>
				</tr>
				<tr>
					<td>Nationality: </td>
					<td><input type="text" name="nationality" placeholder="Enter your Nationality" required></td>
				</tr>
				<tr>
					<td>CNIC: </td>
					<td><input type="text" name="cnic" placeholder="Enter your CNIC" required></td>
				</tr>
				<tr>
					<td>Domicile: </td>
					<td><input type="text" name="domicile" placeholder="Karachi(U)" required></td>
				</tr>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--Education--</th>
				</tr>
				<tr>
					<td>Board/University: </td>
					<td><input type="text" name="board" placeholder="Board/University" required></td>
				</tr>
				<tr>
					<td>Class/Department: </td>
					<td><input type="text" name="class" placeholder="Class/Department" required></td>
				</tr>
				<tr>
					<td>Grade/Division: </td>
					<td><input type="text" name="grade" placeholder="A Grade/1st Division" required></td>
				</tr>
				<tr>
					<td>Passing Year: </td>
					<td><input type="text" name="year" placeholder="2021/2022" required></td>
				</tr>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--Skills--</th>
				</tr>
				<tr>
					<td>Skill 1: </td>
					<td><input type="text" name="skill_1" required></td>
				</tr>
				<tr>
					<td>Skill 2: </td>
					<td><input type="text" name="skill_2" required></td>
				</tr>
				<tr>
					<td>Skill 3: </td>
					<td><input type="text" name="skill_3" required></td>
				</tr>
				<tr>
					<th align="center" colspan="3" style="font-size: 20px; font-weight: bolder;">--Languages--</th>
				</tr>
				<tr>
					<td>Language 1: </td>
					<td><input type="text" name="lang_1" required></td>
				</tr>
				<tr>
					<td>Language 2: </td>
					<td><input type="text" name="lang_2" required></td>
				</tr>
				<tr>
					<td>Language 3: </td>
					<td><input type="text" name="lang_3" required></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="generate" value="Generate CV"></td>
				</tr>
			</table>
		</form>
		</fieldset>
	</center>
</body>
</html>