<?php
/**
 * @file
 * Newsletter body.
 */
  $image_path = url(drupal_get_path('theme', $GLOBALS['theme']), array('absolute' => TRUE, 'language' => FALSE));
?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="background-color: #1f3245;" height="8" width="600"><br /></td>
    </tr>
    <tr>
      <td height="8" width="600" style="background-color: #ffffff;"><br /></td>
    </tr>
    <tr>
      <td>
        <table style="border-collapse: collapse; background-color: #ffffff;" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
			          <?php if (!empty($newsletter->image)): ?>
                  <table style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td height="15" width="30"><br /></td>
                        <td height="15" width="540"><br /></td>
                        <td height="15" width="30"><br /></td>
                      </tr>
                      <tr>
                        <td width="30"><br /></td>
                        <td width="540" align="center">
                          <?php echo $newsletter->image; ?>
                        </td>
                        <td width="30"><br /></td>
                      </tr>
                      <tr>
                        <td height="15" width="30"><br /></td>
                        <td height="15" width="540"><br /></td>
                        <td height="15" width="30"><br /></td>
                      </tr>
                    </tbody>
                  </table>
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td>
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="30"><br /></td>
                      <td width="540" align="left">
                        <h1 style="margin: 0 0 20px 0; font: 700 34px/36px Helvetica, Arial, sans-serif; color: #231717 !important; letter-spacing: -1px;">
                          <?php echo $newsletter->title ?>
                        </h1>
                        <div style="font: 15px/21px Helvetica, Arial, sans-serif; margin: 1em 0; color: #231717;">
                          <?php if (!empty($newsletter->summary)): ?>
                            <?php echo $newsletter->summary; ?>
                          <?php endif; ?>
                        </div>
                      </td>
                      <td width="30"><br /></td>
                    </tr>
                    <tr>
                      <td height="15" width="30"><br /></td>
                      <td height="15" width="540"><br /></td>
                      <td height="15" width="30"><br /></td>
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
      <td>
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>

<?php if ($newsletter_news_qty) : ?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="background-color: #1f3245;" height="8" width="600"><br /></td>
    </tr>
    <tr>
      <td height="8" width="600" style="background-color: #ffffff;"><br /></td>
    </tr>
    <tr bgcolor="#ffffff">
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" style="background-color: #ffffff;">
          <tbody>
            <tr>
              <td>
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td height="20" width="30"><br /></td>
                      <td height="20" width="540"><br /></td>
                      <td height="20" width="30"><br /></td>
                    </tr>
                    <tr>
                      <td width="30"><br /></td>
                      <td width="540" align="left">
                        <h1 style="margin: 0 0 20px 160px; font: 700 34px/36px Helvetica, Arial, sans-serif; color: #bfbfbf !important; letter-spacing: -1px;">Nyheder</h1>
                          <?php foreach ($newsletter_items as $type => $type_nodes): ?>
                            <?php foreach ($type_nodes as $newsletter_node): ?>
                              <?php if ($type == 'ding_news'): ?>
                                <tr>
                                  <td height="20" width="30"><br /></td>
                                  <td height="20" width="540" align="left">
                                    <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td width="140" valign="top" align="left">
                                            <?php if (!empty($newsletter_node->image)): ?>
                                              <a href="<?php echo $newsletter_node->url; ?>">
                                                <?php echo $newsletter_node->image; ?>
                                              </a>
                                            <?php endif; ?>
                                          </td>
                                          <td valign="top" width="20" height="20" align="left"><br /></td>
                                          <td valign="top" align="left">
                                            <?php if (!empty($newsletter_node->category)): ?>
                                              <span style="background-color: #1F3245; color: #ffffff; font: 11px Helvetica, Arial, sans-serif; text-transform: uppercase; padding: 0 4px; text-decoration: none;">
                                                <a href="<?php echo $newsletter_node->category_url; ?>" style="color: #ffffff; text-decoration: none;"><?php echo $newsletter_node->category ?></a>
                                              </span>
                                            <?php endif; ?>
                                            <h2 style="margin: 0 0 10px 0; font: 700 28px/36px Helvetica, Arial, sans-serif; color: #1F3245 !important; letter-spacing: -1px;">
                                              <a href="<?php echo $newsletter_node->url; ?>" style="color:#000000 !important; text-decoration: none;">
                                                <?php echo $newsletter_node->title; ?>
                                              </a>
                                            </h2>
                                            <div style="font: 15px/21px Helvetica, Arial, sans-serif; color: #231717;">
                                              <?php echo $newsletter_node->summary; ?>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="140" height="20"><br /></td>
                                          <td width="20" height="20"><br /></td>
                                          <td height="20"><br /></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                <td height="20" width="30"><br /></td>
                              </tr>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </td>
                      <td width="30"><br /></td>
                    </tr>
                    <tr>
                      <td height="15" width="30"><br /></td>
                      <td height="15" width="540"><br /></td>
                      <td height="15" width="30"><br /></td>
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
      <td><img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600"></td>
    </tr>
  </tbody>
</table>
<?php endif ?>

<?php if ($newsletter_events_qty): ?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="background-color: #1F3245;" height="8x1" width="600"><br /></td>
    </tr>
    <tr>
      <td height="8" width="600" style="background-color: #ffffff;"><br /></td>
    </tr>
    <tr>
      <td>
        <table style="border-collapse: collapse; background-color: #ffffff;" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td>
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td height="20" width="30"><br /></td>
                      <td height="20" width="540"><br /></td>
                      <td height="20" width="30"><br /></td>
                    </tr>
                    <tr>
                      <td width="30"><br /></td>
                      <td width="540" align="left">
                        <h1 style="margin: 0 0 20px 0; font: 700 34px/36px Helvetica, Arial, sans-serif; color: #bfbfbf !important; letter-spacing: -1px;">
                          Events
                        </h1>
                        <?php foreach ($newsletter_items as $type => $type_nodes): ?>
                          <?php foreach ($type_nodes as $newsletter_node): ?>
                            <?php if ($type == 'ding_event'): ?>
                              <tr>
                                <td height="20" width="30"><br /></td>
                                <td height="20" width="540" align="left">
                                  <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                      <tr>
                                        <td width="60" valign="top" align="left">
                                          <table style="border-collapse: collapse;" width="70" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
                                                <td style="background-color: #ffffff; font-size: 1px;" colspan="3" height="2"></td>
                                              </tr>
                                              <tr>
                                                <td style="background-color: #53514b; font-size: 1px;" colspan="3" height="5"></td>
                                              </tr>
                                              <tr>
                                                <td style="background-color: #53514b;" width="5"><br /></td>
                                                <td style="text-align: center;" width="60" valign="top">
                                                  <span style="font: 700 28px/34px Helvetica, Arial, sans-serif; margin-top: 0; color: #000000; letter-spacing: -1px;">
                                                    <?php echo $newsletter_node->date_number; ?>
                                                  </span>
                                                </td>
                                                <td style="background-color: #53514b;" width="5"><br /></td>
                                              </tr>
                                              <tr>
                                                <td style="background-color: #53514b;" width="5"><br /></td>
                                                <td style="text-align: center;" width="60" valign="top">
                                                  <span style="margin: 0 0 5px 0; font: 23px/28px Helvetica, Arial, sans-serif; color: #000000; letter-spacing: -1px;">
                                                    <?php echo $newsletter_node->date_month; ?>
                                                  </span>
                                                </td>
                                                <td style="background-color: #53514b;" width="5"><br /></td>
                                              </tr>
                                              <tr>
                                                <td style="background-color: #53514b; font-size: 1px;" colspan="3" height="5"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                        <td valign="top" width="10" height="20"><br /></td>
                                        <td valign="top" align="left">
                                          <?php if (!empty($newsletter_node->category)): ?>
                                            <span style="background-color: #1F3245; color: #ffffff; font: 11px Helvetica, Arial, sans-serif; text-transform: uppercase; padding: 0 4px; text-decoration: none;">
                                              <a href="<?php echo $newsletter_node->category_url; ?>" style="color: #ffffff; text-decoration: none;"><?php echo $newsletter_node->category ?></a>
                                            </span>
                                          <?php endif; ?>
                                          <h2 style="margin-bottom: 0; font: 700 28px/36px Helvetica, Arial, sans-serif; margin-top: 0; color: #1F3245 !important; letter-spacing: -1px">
                                            <a href="<?php echo $newsletter_node->url; ?>" style="color:#000000 !important; text-decoration: none;">
                                              <?php echo $newsletter_node->title; ?>
                                            </a>
                                          </h2>
                                          <div style="font: 15px/21px Helvetica, Arial, sans-serif; color: #231717">
                                            <span style="background-color: #1F3245; color: #ffffff; font: 11px Helvetica, Arial, sans-serif; text-transform: uppercase; padding: 0 4px; text-decoration: none;">
                                              <?php if (!empty($newsletter_node->date_time)): echo $newsletter_node->date_time; endif; ?> &nbsp;
                                              <?php if (!empty($newsletter_node->library['title'])): echo $newsletter_node->library['title']; endif; ?>
                                              <?php if (!empty($newsletter_node->fee)): echo ' - ' . $newsletter_node->fee . ' kr.'; endif; ?>
                                            </span>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="80" height="30"><br /></td>
                                        <td width="20" height="30"><br /></td>
                                        <td height="30"><br /></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                                <td height="20" width="30"><br /></td>
                              </tr>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endforeach; ?>
                      </td>
                      <td width="30"><br /></td>
                    </tr>
                    <tr>
                      <td height="15" width="30"><br /></td>
                      <td height="15" width="540"><br /></td>
                      <td height="15" width="30"><br /></td>
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
      <td>
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>
<?php endif ?>

<?php if ($newsletter->footer): ?>
<table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="background-color: #1f3245;" height="8" width="600"><br /></td>
    </tr>
    <tr>
      <td height="8" width="600" style="background-color: #ffffff;"><br /></td>
    </tr>
    <tr>
      <td>
        <table style="border-collapse: collapse; background-color: #ffffff;" width="600" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td style="border-collapse: collapse;">
			          <?php if (!empty($newsletter->image)): ?>
                  <table style="border-collapse: collapse;" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td height="15" width="30"><br /></td>
                        <td height="15" width="540"><br /></td>
                        <td height="15" width="30"><br /></td>
                      </tr>
                      <tr>
                        <td width="30"><br /></td>
                        <td width="540" align="center">
                          <?php echo $newsletter->image; ?>
                        </td>
                        <td width="30"><br /></td>
                      </tr>
                      <tr>
                        <td height="15" width="30"><br /></td>
                        <td height="15" width="540"><br /></td>
                        <td height="15" width="30"><br /></td>
                      </tr>
                    </tbody>
                  </table>
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td>
                <table style="border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="30"><br /></td>
                      <td width="540" align="left">
                        <h1 style="margin: 0 0 20px 0; font: 700 34px/36px Helvetica, Arial, sans-serif; color: #231717 !important; letter-spacing: -1px;">
                          <?php echo $newsletter->title ?>
                        </h1>
                        <div style="font: 15px/21px Helvetica, Arial, sans-serif; margin: 1em 0; color: #231717;">
                          <?php if (!empty($newsletter->summary)): ?>
                            <?php echo $newsletter->summary; ?>
                          <?php endif; ?>
                        </div>
                      </td>
                      <td width="30"><br /></td>
                    </tr>
                    <tr>
                      <td height="15" width="30"><br /></td>
                      <td height="15" width="540"><br /></td>
                      <td height="15" width="30"><br /></td>
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
      <td>
        <img src="<?php echo $image_path; ?>/img/emailkanon/shadow-full.gif" alt="shadow-full" style="outline: none; text-decoration: none; display: block;" height="16" width="600">
      </td>
    </tr>
  </tbody>
</table>
<?php endif ?>
