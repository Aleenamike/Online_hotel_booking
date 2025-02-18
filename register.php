<?php include('header.php'); ?>
<link rel="stylesheet" href="form.css" type="text/css"/>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript">
		H5F.listen(window,"load",function () {
			H5F.setup(document.getElementById("signup"));
		},false);
	</script>
</head>
<body style="color:#DBDBDB;">
 <form id="signup" method="post" action="regis.php">

  <fieldset>

   <ol>
    <li>
     <label for="firstname"><font color="black">First Name *</font></label>
     <input type="text" id="firstname" name="firstname" placeholder="First Name" required />
    </li>
    <li>
    <label for="lastname"><font color="black">Last Name *</font></label>
    <input type="text" id="lastname" name="lastname" placeholder="Last Name" required />
    </li>
   </ol>


   <ol>
    <li>
     <label for="email"><font color="black">Email *</font></label>
     <input type="email" id="email" name="email" placeholder="e.g. swapnil@example.com" title="Please enter a valid email" required />
     <p class="validation01">
      <span class="invalid">Please enter a valid email address e.g. swapnil@example.com</span>
      <span class="valid">Your email address is now valid</span>
     </p>
    </li>

   </ol>

   <ol>
    <li>
     <label for="tel"><font color="black">Mobile *</font></label>
     <input type="tel" id="tel" name="tel" pattern="\d{10}" placeholder="Please enter a ten digit phone number" required />
     <p class="validation01">
      <span class="invalid">No spaces or brackets e.g. 9999999999</span>
      <span class="valid">Your mobile number is valid</span>
     </p>
    </li>
   </ol>

   <ol>
    <li>
     <label for="state"><font color="black">State *</font></label>
     <select name="state" id="state">
      <option>Kerala</option>
      <option>Karnataka</option>
      <option selected>Delhi</option>
      <option>Tamilnadu</option>
     </select>
    </li>
   </ol>
   <ol>
    <li>
     <label for="postcode"><font color="black">Post code *</font></label>
     <input id="postcode" name="postcode" type="number" min="10001" max="999999" maxlength="6" required />
     <p class="validation01">
      <span class="invalid">Your postcode is out of range between 10001 - 999999</span>
       <span class="valid">Your postcode is in the correct range</span>
     </p>
    </li>
   </ol>

   <ol>
    <li>
     <label for="address"><font color="black">Address *</font></label>
     <textarea id="address" name="address" type="text" required></textarea>
    </li>
   </ol>

   <ol>

    <li>
     <label for="username"><font color="black">Gender *</font></label>
     <input id="radio" name="gender" type="radio" required value="male"/>Male
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input id="radio" name="gender" type="radio" required value="female"/>Female

    </li>
   </ol>

   <ol>
    <li>
     <label for="password"><font color="black">Password *</font></label>
     <input id="password" name="password" type="password" title="Minimum 8 characters, one number, one uppercase and one lowercase letter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" required />
     <p class="validation01">
      <span class="invalid">Minimum 8 characters, one number, one uppercase letter and one lowercase letter</span>
      <span class="valid">Your password meets our requirements, thank you.</span>
     </p>
    </li>
   </ol>
  </fieldset>
  <input type="submit" value="Sign up" />
 </form>


   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
   </body></html>
