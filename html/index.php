<HTML>
<BODY>
<HEADER>
  <H1>BigIP Configchecker v.001 (c) 2018 Rachel Cheng</H1>
<FORM ACTION="upload.php" METHOD="POST" ENCTYPE="multipart/form-data">
  Please select the configuration file to upload:
<BR/>
<INPUT TYPE="file" NAME="configFileUp" id="configFileUp">
<BR/>
<BR/>
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
