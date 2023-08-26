<head>
    <style>
        /* Base styles */
        body {
            font-size: 10pt;
            font-family: Verdana, sans-serif;
            color: #444444;
            margin: 0;
            padding: 0;
        }

        /* Default table styles */
        table {
            width: 100%;
            max-width: 470px;
            font-size: 10pt;
            font-family: Verdana, sans-serif;
            margin: 0 auto;
        }

        /* Header section styles */
        td.header-cell {
            padding: 10px 0;
            text-align: center;
        }

        /* Name and title styles */
        td.name-cell {
            padding: 0;
            line-height: 27px;
            font-weight: bold;
            color: #00a09a;
        }

        td.title-cell {
            padding: 0;
            line-height: 18px;
            color: #2c2c2c;
        }

        /* Contact info styles */
        td.contact-cell {
            padding: 0;
            line-height: 18px;
            color: #2c2c2c;
        }

        /* Company and address styles */
        td.company-cell {
            padding: 0;
            line-height: 18px;
            color: #2c2c2c;
            font-weight: bold;
        }

        td.address-cell {
            padding: 0;
            line-height: 18px;
            color: #2c2c2c;
        }

        /* Website styles */
        td.website-cell {
            padding: 0;
            line-height: 18px;
            color: #3b4908;
            font-weight: bold;
        }

        /* Social media styles */
        td.social-media-cell {
            padding: 0;
            vertical-align: top;
        }

        td.social-media-cell img {
            border: 0;
            width: 16px;
            height: 16px;
            margin-right: 5px;
        }

        /* Media queries for tablet and mobile */
        @media (max-width: 768px) {

            /* Adjust the max-width as needed */
            table {
                max-width: 100%;
                width: 100%;
            }

            /* Adjust the padding and font size for readability */
            td.header-cell {
                padding: 10px 20px;
            }

            td.name-cell {
                font-size: 14pt;
            }

            td.title-cell,
            td.contact-cell,
            td.company-cell,
            td.address-cell,
            td.website-cell {
                font-size: 8pt;
            }
        }
    </style>
</head>

<div id="signature-preview-workspace" class="panel-body">
    <div class="hidden-xs hidden-sm hidden-md" style="position: absolute; right: 30px; margin-top: -40px"></div>

    <div>
        <!-- ngInclude: --><ng-include id="signaturePreview" src="selectedTemplatePath" class="ng-scope"><!--UNCOMMENT <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
  <HTML><HEAD><TITLE>Email Signature</TITLE>
  <META content="text/html; charset=utf-8" http-equiv="Content-Type">
  </HEAD>
  <BODY style="font-size:10pt; font-family: Verdana, sans-serif;">
  UNCOMMENT-->
            <table style="width: 470px; font-size: 10pt; font-family: Verdana, sans-serif" width="470"
                cellpadding="0" cellspacing="0" class="ng-scope">
                <tbody>
                    <tr>
                        <!-- ngIf: showField('logo') -->
                        <td ng-if="showField('logo')" width="120" rowspan="6" valign="top"
                            style="vertical-align: top; width: 120px" class="ng-scope">
                            <!-- ngIf: showField('logoURL') --><a ng-if="showField('logoURL')"
                                href="https://www.my-company.com/" target="_blank" class="ng-scope"><img border="0"
                                    alt="Logo" width="100" style="width: 100px; height: auto; border: 0"
                                    ng-src="https://raw.githubusercontent.com/okonueugene/metaweb/main/images/icon/android-chrome-192x192.png"
                                    src="https://raw.githubusercontent.com/okonueugene/metaweb/main/images/icon/android-chrome-192x192.png" /></a><!-- end ngIf: showField('logoURL') -->
                            <!-- ngIf: !showField('logoURL') -->
                        </td>
                        <!-- end ngIf: showField('logo') -->
                        <!-- ngIf: !showField('logo') -->
                        <td style="
                  font-size: 14pt;
                  padding: 0;
                  line-height: 27px;
                  font-family: Verdana, sans-serif;
                  color: #3b4908;
                  vertical-align: top;
                "
                            valign="top">
                            <strong><span style="font-family: Verdana, sans-serif; color: #00a09a"
                                    class="ng-binding">John&nbsp;Doe</span></strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="
                  padding-bottom: 10px;
                  padding-top: 0;
                  padding-left: 0;
                  padding-right: 0;
                  line-height: 18px;
                  vertical-align: top;
                  font-family: Verdana, sans-serif;
                  color: #444444;
                "
                            valign="top">
                            <!-- ngIf: showField('title') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    color: #2c2c2c;
                    font-size: 10pt;
                  "
                                ng-if="showField('title')" class="ng-binding ng-scope">Sales &amp; Marketing
                                Director</span><!-- end ngIf: showField('title') -->
                        </td>
                    </tr>
                    <!-- ngIf: isAnyFieldEntered('phone, mobile, email') -->
                    <tr ng-if="isAnyFieldEntered('phone, mobile, email')" class="ng-scope">
                        <td style="
                  padding-bottom: 10px;
                  padding-top: 0;
                  padding-left: 0;
                  padding-right: 0;
                  line-height: 18px;
                  vertical-align: top;
                  font-family: Verdana, sans-serif;
                  color: #444444;
                "
                            valign="top">
                            <!-- ngIf: showField('phone') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    color: #2c2c2c;
                    font-size: 10pt;
                  "
                                ng-if="showField('phone')" class="ng-binding ng-scope">tel: (800)
                                555-0199<!-- ngIf: isAnyFieldEntered('mobile, email') --><span
                                    ng-if="isAnyFieldEntered('mobile, email')"
                                    class="ng-scope"><br /></span><!-- end ngIf: isAnyFieldEntered('mobile, email') --></span><!-- end ngIf: showField('phone') -->
                            <!-- ngIf: showField('mobile') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    color: #2c2c2c;
                    font-size: 10pt;
                  "
                                ng-if="showField('mobile')" class="ng-binding ng-scope">mobile: (800)
                                555-0299<!-- ngIf: showField('email') --><span ng-if="showField('email')"
                                    class="ng-scope"><br /></span><!-- end ngIf: showField('email') --></span><!-- end ngIf: showField('mobile') -->
                            <!-- ngIf: showField('email') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    color: #2c2c2c;
                    font-size: 10pt;
                  "
                                ng-if="showField('email')" class="ng-binding ng-scope">email:
                                john.doe@my-company.com</span><!-- end ngIf: showField('email') -->
                        </td>
                    </tr>
                    <!-- end ngIf: isAnyFieldEntered('phone, mobile, email') -->
                    <!-- ngIf: isAnyFieldEntered('company, address1, address2') -->
                    <tr ng-if="isAnyFieldEntered('company, address1, address2')" class="ng-scope">
                        <td style="
                  padding-bottom: 10px;
                  padding-top: 0;
                  padding-left: 0;
                  padding-right: 0;
                  line-height: 18px;
                  vertical-align: top;
                  font-family: Verdana, sans-serif;
                  color: #444444;
                "
                            valign="top">
                            <!-- ngIf: showField('company') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    font-size: 10pt;
                    color: #00a09a;
                  "
                                ng-if="showField('company')" class="ng-scope">
                                <strong class="ng-binding">Metaspace Innovations
                                    Limited</strong><!-- ngIf: isAnyFieldEntered('address1, address2') --><span
                                    ng-if="isAnyFieldEntered('address1, address2')"
                                    class="ng-scope"><br /></span><!-- end ngIf: isAnyFieldEntered('address1, address2') --></span><!-- end ngIf: showField('company') -->
                            <!-- ngIf: showField('address1') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    font-size: 10pt;
                    color: #2c2c2c;
                  "
                                ng-if="showField('address1')" class="ng-binding ng-scope">Afya Business
                                Plaza<!-- ngIf: showField('address2') --><span ng-if="showField('address2')"
                                    class="ng-scope"><br /></span><!-- end ngIf: showField('address2') --></span><span
                                style="
                    font-family: Verdana, sans-serif;
                    font-size: 10pt;
                    color: #2c2c2c;
                  "
                                ng-if="showField('address1')" class="ng-binding ng-scope">P.O. BOX 86089 City
                                Square<!-- ngIf: showField('address2') --><span ng-if="showField('address2')"
                                    class="ng-scope"><br /></span><!-- end ngIf: showField('address2') --></span><!-- end ngIf: showField('address1') -->
                            <!-- ngIf: showField('address2') --><span
                                style="
                    font-family: Verdana, sans-serif;
                    font-size: 10pt;
                    color: #2c2c2c;
                  "
                                ng-if="showField('address2')" class="ng-binding ng-scope">Nairobi,
                                Kenya</span><!-- end ngIf: showField('address2') -->
                        </td>
                    </tr>
                    <!-- end ngIf: isAnyFieldEntered('company, address1, address2') -->
                    <!-- ngIf: showField('website') -->
                    <tr ng-if="showField('website')" class="ng-scope">
                        <td style="
                  padding-bottom: 10px;
                  padding-top: 0;
                  padding-left: 0;
                  padding-right: 0;
                  line-height: 18px;
                  vertical-align: top;
                "
                            valign="top">
                            <strong><a href="http://www.metaspace.co.ke" target="_blank" rel="noopener"
                                    style="text-decoration: none"><span
                                        style="
                        color: #3b4908;
                        font-family: Verdana, sans-serif;
                        font-size: 10pt;
                      "><span
                                            style="
                          color: #00a09a;
                          font-family: Verdana, sans-serif;
                          font-size: 10pt;
                        "
                                            class="ng-binding">www.metaspace.co.ke</span></span></a></strong>
                        </td>
                    </tr>
                    <!-- end ngIf: showField('website') -->
                    <!-- ngIf: isAnyFieldEntered('facebookURL, twitterURL, youtubeURL, linkedinURL, instagramURL' ) -->
                    <tr ng-if="isAnyFieldEntered('facebookURL, twitterURL, youtubeURL, linkedinURL, instagramURL' )"
                        class="ng-scope">
                        <td style="padding: 0; vertical-align: top" valign="top">
                            <!-- ngIf: showField('twitterURL') --><span ng-if="showField('twitterURL')"
                                class="ng-scope"><a href="https://twitter.com" target="_blank" rel="noopener"><img
                                        border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/tt.png"
                                        alt="twitter icon" style="border: 0; height: 16px; width: 16px"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/tt.png" /></a>&nbsp;</span><!-- end ngIf: showField('twitterURL') --><!-- ngIf: showField('facebookURL') --><span
                                ng-if="showField('facebookURL')" class="ng-scope"><a href="https://www.facebook.com"
                                    target="_blank" rel="noopener"><img border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/fb.png"
                                        alt="facebook icon" style="border: 0; height: 16px; width: 16px"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/fb.png" /></a>&nbsp;</span><!-- end ngIf: showField('facebookURL') --><!-- ngIf: showField('linkedinURL') --><span
                                ng-if="showField('linkedinURL')" class="ng-scope"><a
                                    href="https://www.linkedin.com/company/metaspace-innovations-ltd" target="_blank"
                                    rel="noopener"><img border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/ln.png"
                                        alt="linkedin icon" style="border: 0; height: 16px; width: 16px"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/ln.png" /></a>&nbsp;</span><!-- end ngIf: showField('linkedinURL') --><!-- ngIf: showField('youtubeURL') --><span
                                ng-if="showField('youtubeURL')" class="ng-scope"><a href="https://www.youtube.com"
                                    target="_blank" rel="noopener"><img border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/yt.png"
                                        alt="youtube icon" style="border: 0; height: 16px; width: 16px"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/yt.png" /></a>&nbsp;</span><!-- end ngIf: showField('youtubeURL') --><!-- ngIf: showField('instagramURL') --><span
                                ng-if="showField('instagramURL')" class="ng-scope"><a
                                    href="https://www.instagram.com" target="_blank" rel="noopener"><img
                                        border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/it.png"
                                        alt="instagram icon"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/it.png" /></a>&nbsp;</span><!-- end ngIf: showField('instagramURL') --><!-- ngIf: showField('pinterestURL') --><span
                                ng-if="showField('pinterestURL')" class="ng-scope"><a href="https://pinterest.com"
                                    target="_blank" rel="noopener"><img border="0" width="16"
                                        ng-src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/pt.png"
                                        alt="pinterest icon"
                                        src="https://www.mail-signatures.com/signature-generator/img/templates/plaintext2-with-logo/pt.png" /></a>&nbsp;</span><!-- end ngIf: showField('pinterestURL') -->
                        </td>
                    </tr>
                    <!-- end ngIf: isAnyFieldEntered('facebookURL, twitterURL, youtubeURL, linkedinURL, instagramURL' ) -->
                </tbody>
            </table>
            <!--UNCOMMENT </BODY></HTML>
      >
    </div>
  </div>
  
