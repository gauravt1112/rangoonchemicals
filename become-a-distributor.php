<?php
  $activeMenu = "distributors";
?>

    <?php include('includes/head.php');?>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="yes"){
                $(".partner-details").show();
            }
            if($(this).attr("value")=="no"){
                $(".partner-details").hide();
            }
        });
    });
</script>

  </head>
  <div class="top-space">
		
	</div>
<body>
<div id="wrapper">
  <div id="main">
    <?php include('includes/header.php');?>

    <div id="content">
    <div class="container_12">
	
	<div id="about-heading" style="margin-bottom:40px;">Essential Required Details<span class="req_symbol">*</span></div>
	<form name="distributor_form" id="distributor_form" action="form_submit_distributor.php" method="post">
	
	<div id="distributor-row">
	<div id="left-col">Full Name</div>
	<div id="right-col"><input type="text" name="principal-full-name" class="required"></div>
	</div>
	<div id="distributor-row">
	<div id="left-col">Company Name</div>
	<div id="right-col"><input type="text" name="principal-company-name" class="required"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Email</div>
	<div id="right-col-2"><input type="text" name="principal-Email" class="required email"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Tel</div>
	<div id="right-col-3"><input type="text" name="principal-Tel" class="required number"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">State</div>
	<div id="right-col-2"><input type="text" name="principal-State"  class="required"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Country of Operation</div>
	<div id="right-col"><input type="text" name="principal-Operation-Country"  class="required"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">State of Operation</div>
	<div id="right-col-2"><input type="text" name="principal-Operation-State"  class="required"></div>
	</div>
	
	<div id="about-heading" class="optional-info" style="margin-bottom:40px;">Optional Information <img src="images/arrow-down-optional.png"></div>
	
	<div class="optional" style="display:none;">
	<div id="distributor-row">
	<div id="left-col"></div>
	<div id="right-col-2"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col" style="margin-top:30px;">Website</div>
	<div id="right-col-2" style="margin-top:30px;"><input type="text" name="Website"></div>
	</div>
	
	<div id="about-heading" style="margin-bottom:40px;">Mailing Address</div>
	
	<div id="distributor-row">
	<div id="left-col">Street Address</div>
	<div id="right-col"><input type="text" name="Mailing-Street-Address"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Building</div>
	<div id="right-col-2"><input type="text" name="Mailing-Building"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Suite</div>
	<div id="right-col-2"><input type="text" name="Mailing-Suite"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">City</div>
	<div id="right-col-3"><input type="text" name="Mailing-City"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">State</div>
	<div id="right-col-2"><input type="text" name="Mailing-State"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Postal Code or Zip</div>
	<div id="right-col-3"><input type="text" name="Mailing-Postal-Code"></div>
	</div>
	
	<div id="distributor-bottom"></div>
	
		<div id="about-heading" style="margin-bottom:40px;">Ownership Information</div>
		
	<div id="distributor-row">
	<div id="left-col">Please Select Business Type</div>
	<div id="right-col">
	<input type="radio" class="regular-checkbox" name="Ownership-Business-Type" value="Sole Ownership" /><div id="checkbox-text">Sole Ownership</div>
	<input type="radio" class="regular-checkbox" name="Ownership-Business-Type" value="Corporation" /><div id="checkbox-text">Corporation</div>
	<input type="radio" class="regular-checkbox" name="Ownership-Business-Type" value="Other" /><div id="checkbox-text">Other</div>
	</div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Name of Owner</div>
	<div id="right-col-4">
	<input type="text" name="Ownership-First-Name" placeholder="First Name" >
	<input type="text" name="Ownership-Middle-Name" placeholder="Middle Name" >
	<input type="text" name="Ownership-Last-Name" placeholder="Last Name" >
	</div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Residential Address</div>
	<div id="right-col"><input type="text" name="Ownership-Residential-Address"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">City</div>
	<div id="right-col-3"><input type="text" name="Ownership-City"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">State</div>
	<div id="right-col-2"><input type="text" name="Ownership-State"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Postal Code or Zip</div>
	<div id="right-col-3"><input type="text" name="Ownership-Postal-Code"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Tel</div>
	<div id="right-col-3"><input type="text" name="Ownership-Tel"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Partners</div>
	<div id="right-col">
	<input type="radio" name="Ownership-partner" class="regular-checkbox" value="yes" /><div id="checkbox-text" >Yes</div>
	<input type="radio"  name="Ownership-partner" class="regular-checkbox" value="no" /><div id="checkbox-text" >No</div>
	</div>
	</div>
	
	<div class="partner-details" style="display:none;">
	<div id="distributor-row">
	<div id="left-col">Partner's Name</div>
	<div id="right-col-4">
	<input type="text" name="partner-First-Name" placeholder="First Name" >
	<input type="text" name="partner-Middle-Name" placeholder="Middle Name" >
	<input type="text" name="partner-Last-Name" placeholder="Last Name" >
	</div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Partner's Residential Address</div>
	<div id="right-col"><input type="text" name="partner-Address"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">City</div>
	<div id="right-col-3"><input type="text" name="partner-City"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">State</div>
	<div id="right-col-2"><input type="text" name="partner-State"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Postal Code or Zip</div>
	<div id="right-col-3"><input type="text" name="partner-Postal-Code"></div>
	</div>
	
	<div id="distributor-row">
	<div id="left-col">Tel</div>
	<div id="right-col-3"><input type="text" name="partner-Tel"></div>
	</div>
	</div>
	</div>
	
	
	<div id="distributor-row">
	<div id="left-col" style="margin-top:30px;"></div>
	<div id="right-col" style="margin-top:30px;"><input type="submit" value="SUBMIT"></div>
	</div>
	</form>

	
	</div>
	</div>

    <?php include('includes/footer.php');?>
  </div>
</div>
<?php include('includes/script-files.php');?>
</body>
</html>
