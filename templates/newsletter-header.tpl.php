<?php
  $image_path = url(drupal_get_path('theme', $GLOBALS['theme']), array('absolute' => TRUE, 'language' => FALSE));
?>
<table style="border-collapse: collapse; background-color: #8cc63f;" width="600" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font: 15px/15px Helvetica, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" width="15"><br></td>
      <td style="border-collapse: collapse;" valign="middle" width="600">
        <img src="<?php echo $image_path; ?>/img/emailkanon/logo.png" alt="<?php echo variable_get('site_name', ''); ?>">
      </td>
      <td style="border-collapse: collapse;" valign="middle">

      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" width="15"><br></td>
      <td style="border-collapse: collapse;" align="right">
        <p style="font: 13px/15px Helvetica, Arial, sans-serif; color: #ffffff; margin: 0; padding: 0">
          <a href="{{unsubscribe_url}}" style="color: #ffffff;"><?php echo t('Unsubscribe'); ?></a>
        </p>
      </td>
      <td style="border-collapse: collapse;" width="15"><br></td>
    </tr>
    <tr>
      <td colspan="3" style="border-collapse: collapse;" height="15">
        <p style="font: 15px/15px Helvetica, Arial, sans-serif; color: #231717; margin: 0; padding: 0">&nbsp;</p>
      </td>
    </tr>
  </tbody>
</table>
