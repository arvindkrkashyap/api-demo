<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Json samples</title>
	<style>
		table, th 
		{
    		border: 1px solid black;
   			border-collapse: collapse;
		}
		th, td 
		{
		    padding: 5px;
		}
		th
		{
    		background-color: #0066CC;
    		color: white;
		}
		tr:nth-child(even){background-color: #f2f2f2}
	</style>
    </head>
    
    <body>
	<form id="form1" runat="server">
	<table style="width:40%">
		<tr><th>Select any option </th></tr>
		<!--<tr> 
			<td><a href="ClientSideEncryptionDemo.aspx">ClientSide Encryption </a> </td>
		</tr>   -->
		<tr>
                    <td><a href="OAuthTokenJson.php">Authentication Token</a> </td>
  		</tr>
		<tr>
			<td><a href="KeyedSaleJson.php">Keyed Sale (Card not present)</a> </td>
  		</tr>
		<tr>
			<td><a href="SwipedSaleJson.php">Swiped Sale (Card present)</a> </td>
 		 </tr>
		<tr>
			<td><a href="KeyedAuthorizationJson.php">Keyed Authorization(Card-Not Present)</a> </td>
  		</tr>
		<tr>
			<td><a href="CaptureJsonUI.php">Capture Authorized Transaction</a> </td>
  		</tr>
		<tr>
			<td><a href="KeyedRefundJson.php">Keyed Refund</a> </td>
 		 </tr>
		<!--<tr>
			<td><a href="VoidTransactionJson.aspx">Void Transaction</a> </td>
  		</tr>
		<tr>
			<td><a href="CreateCustomerJson.aspx">Create Customer Profile</a> </td>
 		</tr>
 		<tr>
    		<td><a href="VaultSaleByCustomerIDJson.aspx">Vault Sale By Customer ID</a> </td>
  		</tr>
	-->
</table>
	</form>
<?php
        // put your code here
 ?>
    </body>
</html>
