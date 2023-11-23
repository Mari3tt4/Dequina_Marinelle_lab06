<!DOCTYPE <html
 lang="en">
 <head> 
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
 <title>Lab 6</title>
 </head> 
<style>
 Input[type=text]  {
width: 100%; 
padding: 12px 20px; 
margin: 8px;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
} 
input[type=email] {
width: 180%;
padding: 12px 20px;
margin: 8px;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type=submit] {
width: 100px;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
Input[type=submit]:hover {
background-color: #45a049;
}
div {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}
</style> 
<body>
<h1>Registration Form</h1>
<div>
<form action="index.php" method="post">
<p>Last Name:</p>
<input type="text" name="Iname" placeholder="Last Name..."  required><br>
<p>First Name:</p>
<input type="text" name="fname" placeholder= "First Name..." required><br>
<p>Middle Initial:</p>
<input type="text" name="mInitial" placeholder="Middle Initial..." required><br>
<p>Age:</p>
<input type="text" name="age" placeholder="Age..." required><br>
<p>COntact Number:</p>
<input type="text" name="conNum" placeholder="Contact Number..." required><br>
<p>Email Adress:</p>
<input type="text" name="email" placeholder="Email Adress..."  required><br>
<p>Adress:</p>
<input type="text" name="adress" placeholder="Adress..."  required><br>
<input type="submit" name="submit"
</form>
</div>
/body>
/html>
</body>