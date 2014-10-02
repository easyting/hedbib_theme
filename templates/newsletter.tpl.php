<?php
/**
 * @file
 * Newsletter layout.
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo $newsletter->title . ' - ' . $footer->library_name; ?></title>
  </head>
  <body bgcolor="#ceccbd" style="margin:0; padding:0;">
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="margin: 0; border-collapse: collapse; background-color: #dbdbdb; line-height: 100% !important; padding: 0; mso-table-rspace: 0pt; mso-table-lspace: 0pt; width: 100% !important;" bgcolor="#ceccbd">
      <tbody>
        <tr>
          <td align="center" style="border-collapse: collapse;">
            <?php echo $regions['header']; ?>
            <?php echo $regions['body']; ?>
            <?php echo $regions['footer']; ?>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
