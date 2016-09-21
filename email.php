<!doctype html>
<html class="no-js" lang="">
<style>
	.container_email {
		font:16px/26px "Roboto", Helvetica, Arial, sans-serif;
		width: 520px;
		border: solid 1px #CCCCCC;
		padding: 10px;
	}
	a {
		color: #369;
		text-decoration: none;
	}
	a:hover {
		text-decoration: underline;
	}
</style>
<body>
<div class="container_email">
  	<table cellpadding="0" cellspacing="0" width="500" style="border:solid 1px #CCCCCC">
  		<tr>
          <td height="60" align="left" valign="top" colspan="2"><h1>&nbsp;<a href="https://t2del.com/">t2deldotcom</a></h1></td>
          <td width="288" height="60" align="right" valign="top"><p class="contact_info text_right clearfix"><a href="mailto: macapagal.dennis@gmail.com">macapagal.dennis@gmail.com</a>&nbsp;<br />+639471846461&nbsp;</p></td>
        </tr>
        <tr>
          <td height="40" colspan="3" align="left" valign="top" style="background: #eee; border-top: 2px solid #ddd;border-bottom: 2px solid #ddd;">&nbsp;</td>
        </tr>
        <tr>
          <td height="5" colspan="3" align="left" valign="top">&nbsp;</td>
        </tr>
		<tr>
           <td width="95" height="30" align="left" valign="top">&nbsp;Name:</td>
           <td height="30" colspan="2" align="left" valign="top">&nbsp;<?php echo $name; ?></td>
   	  </tr>
        <tr>
           <td width="95" height="30" align="left" valign="top">&nbsp;Email:</td>
           <td height="30" colspan="2" align="left" valign="top">&nbsp;<?php echo $from; ?></td>
      	</tr>
      	<tr>
           <td height="30" align="left" valign="top">&nbsp;Phone:</td>
           <td width="115" height="30" align="left" valign="top">&nbsp;<?php echo $phone; ?></td>
           <td height="30" align="left" valign="top">&nbsp;</td>
   	  </tr>
      	<tr>
            <td height="30" align="left" valign="top">&nbsp;Message:</td>
            <td height="30" colspan="2" align="left" valign="top"><div><?php echo nl2br($message_display); ?></div></td>
      </tr>
      <tr>
          <td height="5" colspan="3" align="left" valign="top">&nbsp;</td>
        </tr>
      	<tr>
          <td height="30" colspan="3" align="right" valign="middle" style="border-top: 2px solid #ddd;"><a href="https://t2del.com">t2deldotcom</a> <?php echo date("Y");?>, All rights reserved</p>&nbsp;</td>
      	</tr>
  </table>
</div>
</body>
</html>