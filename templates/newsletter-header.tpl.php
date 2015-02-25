<?php
  $image_path = url(drupal_get_path('theme', $GLOBALS['theme']), array('absolute' => TRUE, 'language' => FALSE));
?>
<table style="border-collapse: collapse; background-color: #8cc63f;" bgcolor ="#8cc63f" width="630" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font-size: 15px; line-height: 15px; font-family: Verdana, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" width="15"><br></td>
      <td style="border-collapse: collapse;" width="600" valign="middle" width="355">
        <img src="<?php echo $image_path; ?>/images/emailkanon/logo.png" alt="<?php echo variable_get('site_name', ''); ?>">
      </td>
      <td style="border-collapse: collapse;" valign="middle">

      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" width="15"><br></td>
      <td style="border-collapse: collapse;" width="600" align="right">
        <p style="font-size: 13px; line-height: 15px; font-family: Verdana, Arial, sans-serif; margin: 0; color: #ffffff; padding: 0">
          <a href="{{unsubscribe_url}}" style="color: #ffffff;"><?php echo t('Unsubscribe'); ?></a>
        </p>
      </td>
      <td style="border-collapse: collapse;" width="15"><br></td>
    </tr>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font-size: 15px; line-height: 15px; font-family: Verdana, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
