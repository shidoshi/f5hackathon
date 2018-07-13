<HTML>
<BODY>
<HEADER>
  <H1>BIG-IP Transmigrator v.001 (c) 2018 Rachel Cheng</H1>
<FORM ACTION="upload.php" METHOD="POST" ENCTYPE="multipart/form-data">
  Please select the BIG-IP base configuration file to upload (e.g. bigip_base.conf):
<BR/>
<INPUT TYPE="file" NAME="configFileUp1" id="configFileUp1">
<P/>
  Please select the BIG-IP configuration file to upload (e.g. bigip.conf):
<BR/>
<INPUT TYPE="file" NAME="configFileUp2" id="configFileUp2">
<BR/>
<P/>
  Please select the BIG-IP script configuration file to upload (e.g. bigip_script.conf):
<BR/>
<INPUT TYPE="file" NAME="configFileUp3" id="configFileUp3">
<P/>
</HEADER>
<SECTION>
Next, please select your target BigIP version:
  <SELECT NAME="versionUp">
<OPTION VALUE="14.1.0">14.1.0</OPTION>
</SELECT>
</SECTION>
<BR/>
<ASIDE>
Finally, please select your target BigIP edition:
<SELECT NAME="editionUp">
<OPTION VALUE="STMM">STMM</OPTION>
<OPTION VALUE="VE">VE</OPTION>
</SELECT>
</ASIDE>
<P/>
<FOOTER>
  Click the <STRONG>Upload</STRONG> button to continue
  <INPUT TYPE="submit" VALUE="Upload..." NAME="submit">
</FOOTER>
</FORM>
</BODY>
</HTML>
