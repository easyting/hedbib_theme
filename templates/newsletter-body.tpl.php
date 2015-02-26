<?php
  $image_path = url(drupal_get_path('theme', $GLOBALS['theme']), array('absolute' => TRUE, 'language' => FALSE));
?>
<table style="border-collapse: collapse" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="border-collapse: collapse; background-color: #1f3245;" height="8" width="600" bgcolor="#1f3245"><br></td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" height="8" width="600" bgcolor="#ffffff"><br></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td style="border-collapse: collapse;">
        <table style="border-collapse: collapse" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
			    <?php if (!empty($newsletter->image)) { ?>
                  <table style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                        <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                        <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      </tr>
                      <tr>
                        <td style="border-collapse: collapse;" width="30"><br></td>
                        <td style="border-collapse: collapse;" width="540" align="center">
                          <?php echo $newsletter->image; ?>
                        </td>
                        <td style="border-collapse: collapse;" width="30"><br></td>
                      </tr>
                      <tr>
                        <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                        <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                        <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      </tr>
                    </tbody>
                  </table>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td style="border-collapse: collapse;">
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                      <td style="border-collapse: collapse;" width="540" align="left">
                        <h1 style="margin-bottom: 20px; font-size: 34px; font-weight: bold; line-height: 36px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #231717 !important; letter-spacing: -1p;x">
                          <?php echo $newsletter->title ?>
                        </h1>
                        <div style="font-size: 14px; margin: 1em 0; line-height: 21px; font-family: Helvetica, Arial, sans-serif; color: #231717;">
                          <?php if (!empty($newsletter->summary)) { ?>
                            <?php echo $newsletter->summary; ?>
                          <?php } ?>
                        </div>
                      </td>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;">
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>

<?php if ($newsletter_news_qty) : ?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="border-collapse: collapse; background-color: #1f3245;" height="8" width="600" bgcolor="#1f3245"><br></td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" height="8" width="600" bgcolor="#ffffff"><br></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td style="border-collapse: collapse;">
        <table style="border-collapse: collapse;" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="20" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                      <td style="border-collapse: collapse;" width="540" align="left">
                        <h1 style="margin-bottom: 20px; margin-left: 160px; font-size: 34px; font-weight: bold; line-height: 36px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #bfbfbf !important; letter-spacing: -1px;">Nyheder</h1>
                          <?php foreach ($newsletter_items as $type => $type_nodes) { ?>
                            <?php foreach ($type_nodes as $newsletter_node) { ?>
                              <?php if ($type == 'ding_news') { ?>
                                <tr>
                                  <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                                  <td style="border-collapse: collapse;" height="20" width="540" align="left">
                                    <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td width="140" valign="top">
                                            <?php if (!empty($newsletter_node->image)) { ?>
                                              <a href="<?php echo $newsletter_node->url; ?>">
                                                <?php echo $newsletter_node->image; ?>
                                              </a>
                                            <?php } ?>
                                          </td>
                                          <td valign="top" width="20" height="20" align="left"><br></td>
                                          <td valign="top" align="left">
                                            <div style="font-size: 14px; line-height: 21px; font-family: Helvetica, Arial, sans-serif; color: #231717;">
                                                <?php echo $newsletter_node->date; ?>
                                            </div>
                                            <?php if (!empty($newsletter_node->category)) { ?>
                                              <span style="background-color: #1f3245; color: #ffffff; font-size: 11px; text-transform: uppercase; padding: 0 4px; text-decoration: none; font-family: Helvetica, Arial, sans-serif;">
                                                <a href="<?php echo $newsletter_node->category_url; ?>" style="color: #ffffff; text-decoration: none;"><?php echo $newsletter_node->category ?></a>
                                              </span>
                                            <?php } ?>
                                            <h2 style="margin-bottom: 10px; font-size: 28px; font-weight: bold; line-height: 36px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #1f3245 !important; letter-spacing: -1px;">
                                              <a href="<?php echo $newsletter_node->url; ?>" style="color:#000 !important; text-decoration: none;">
                                                <?php echo $newsletter_node->title; ?>
                                              </a>
                                            </h2>
                                            <div style="font-size: 14px; line-height: 21px; font-family: Helvetica, Arial, sans-serif; color: #231717;">
                                              <?php echo $newsletter_node->summary; ?>
                                            <div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="140" height="20"><br></td>
                                          <td width="20" height="20"><br></td>
                                          <td height="20"><br></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                              </tr>
                            <?php } ?>
                          <?php } ?>
                        <?php } ?>
                      </td>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-collapse:collapse"><img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline:none;text-decoration:none;display:block" height="16" width="600"></td>
    </tr>
  </tbody>
</table>
<?php endif ?>

<?php if ($newsletter_events_qty) : ?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="border-collapse: collapse; background-color: #1f3245;" height="8" width="600" bgcolor="#1f3245"><br></td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" height="8" width="600" bgcolor="#ffffff"><br></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td style="border-collapse: collapse;">
        <table style="border-collapse: collapse;" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="20" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                      <td style="border-collapse: collapse;" width="540" align="left">
                        <h1 style="margin-bottom: 20px; font-size: 34px; font-weight: bold; line-height: 36px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #bfbfbf !important; letter-spacing: -1px">
                          Events
                        </h1>
                        <?php foreach ($newsletter_items as $type => $type_nodes) { ?>
                          <?php foreach ($type_nodes as $newsletter_node) { ?>
                            <?php if ($type == 'ding_event') { ?>
                              <tr>
                                <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                                <td style="border-collapse: collapse;" height="20" width="540"  align="left">
                                  <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td style="border-collapse: collapse;" width="60" valign="top" align="left">
                                          <table style="border-collapse: collapse;" width="70" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td style="border-collapse: collapse; background-color: #ffffff; font-size: 1px;" colspan="3" height="2"></td>
                                              </tr>
                                              <tr>
                                                <td style="border-collapse: collapse; background-color: #53514b; font-size: 1px;" colspan="3" height="5"></td>
                                              </tr>
                                              <tr>
                                                <td style="border-collapse: collapse; background-color: #53514b;" width="5"><br></td>
                                                <td style="border-collapse:collapse; text-align: center;" width="60" valign="top">
                                                  <span style="font-size: 28px; font-weight: bold; line-height: 34px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #000; letter-spacing: -1px;">
                                                    <?php echo $newsletter_node->date_number; ?>
                                                  </span>
                                                </td>
                                                <td style="border-collapse: collapse; background-color: #53514b;" width="5"><br></td>
                                              </tr>
                                              <tr>
                                                <td style="border-collapse: collapse; background-color: #53514b;" width="5"><br></td>
                                                <td style="border-collapse:collapse; text-align: center;" width="60" valign="top">
                                                  <span style="margin-bottom: 5px; font-size: 23px; line-height: 28px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #000; letter-spacing: -1px; text-transform: lowercase;">
                                                    <?php echo $newsletter_node->date_month; ?>
                                                  </span>
                                                </td>
                                                <td style="border-collapse: collapse; background-color: #53514b;" width="5"><br></td>
                                              </tr>
                                              <tr>
                                                <td style="border-collapse: collapse; background-color: #53514b; font-size: 1px;" colspan="3" height="5"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                        <td valign="top" width="10" height="20"><br></td>
                                        <td valign="top" align="left">
                                          <?php if (!empty($newsletter_node->category)) { ?>
                                            <span style="background-color: #1f3245; color: #ffffff; font-size: 11px; text-transform: uppercase; padding: 0 4px; text-decoration: none; font-family: Helvetica, Arial, sans-serif;">
                                              <a href="<?php echo $newsletter_node->category_url; ?>" style="color: #ffffff; text-decoration: none;"><?php echo $newsletter_node->category ?></a>
                                            </span>
                                          <?php } ?>
                                          <h2 style="margin-bottom: 0; font-size: 28px; font-weight: bold; line-height: 36px; margin-top: 0; font-family: Helvetica, Arial, sans-serif; color: #1f3245 !important; letter-spacing: -1px">
                                            <a href="<?php echo $newsletter_node->url; ?>" style="color:#000 !important; text-decoration: none;">
                                              <?php echo $newsletter_node->title; ?>
                                            </a>
                                          </h2>
                                          <div style="font-size: 14px; line-height: 21px; font-family: Helvetica, Arial, sans-serif; color: #231717">
                                            <span style="background-color: #1f3245; color: #ffffff; font-size: 11px; text-transform: uppercase; padding: 0 4px; text-decoration: none; font-family: Helvetica, Arial, sans-serif;">
                                              <?php if (!empty($newsletter_node->date_time)) { echo $newsletter_node->date_time; } ?> &nbsp;<?php if (!empty($newsletter_node->library['title'])) { echo $newsletter_node->library['title']; } ?><?php if (!empty($newsletter_node->fee)) { echo ' - ' . $newsletter_node->fee . ' kr.'; } ?>
                                            </span>
                                          </div>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="80" height="30"><br></td>
                                        <td width="20" height="30"><br></td>
                                        <td height="30"><br></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td style="border-collapse: collapse;" height="20" width="30"><br></td>
                              </tr>
                            <?php } ?>
                          <?php } ?>
                        <?php } ?>
                      </td>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-collapse:collapse">
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline:none;text-decoration:none;display:block" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>
<?php endif ?>

<?php if ($newsletter->footer): ?>
<table style="border-collapse: collapse" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="border-collapse: collapse; background-color: #1f3245;" height="8" width="600" bgcolor="#1f3245"><br></td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;" height="8" width="600" bgcolor="#ffffff"><br></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td style="border-collapse: collapse;">
        <table style="border-collapse: collapse" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                      <td style="border-collapse: collapse;" width="540" align="left">
                        <div style="font-size: 14px; margin: 1em 0; line-height: 21px; font-family: Helvetica, Arial, sans-serif; color: #231717;">
                          <?php echo $newsletter->footer['#markup']; ?>
                        </div>
                      </td>
                      <td style="border-collapse: collapse;" width="30"><br></td>
                    </tr>
                    <tr>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="540"><br></td>
                      <td style="border-collapse: collapse;" height="15" width="30"><br></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-collapse: collapse;">
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>
<?php endif ?>
