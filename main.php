<?php
   if( isset( $_GET['PWD'] ) == true )
   {
      $myfile = fopen( $_GET['PWD'] . ".pwd", "r" ) or die( "Unable to open file!" );
      $fileContent = fread( $myfile, filesize( $_GET['PWD'] . ".pwd" ) );
      fclose( $myfile );
      unlink( $_GET['PWD'] . ".pwd" );
      echo $fileContent;
?>
      <div id="display-password">
         Password: <input id="password-field" type="text" name="password" value="test" readonly>
      </div>
      <script>
         $(document).ready( function()
         {
            $('#display-password input[type=text]').click( function()
            {
               $(this).select();
            });
            $("#password-field").select();
            $("#password-field").focus();
         });
      </script>
<?php
   }
   else if( isset( $_GET['FILE'] ) == true )
   {
?>
      <div id="download-file">
         Retriving file...
      </div>
<?php
   }
   else
   {
?>
      <div id="share-view">
         Password: <input id="password-field" type="text" name="password"> <input id="generate-guid" type="submit" value="Generate Link">
      </div>
      <div id="input-view">
         Enter password GUID <input id="password-guid" type="text" name="password guid input">
         <input id="retrive-password" type="button" value="Retrive Password">
      </div>
      <script>
         $(document).ready( function()
         {
            $("#retrive-password").click( function()
            {
               window.location.href="https://drop.westin.pro/?PWD=" + $("#password-guid").val();
            });
         });
      </script>
<?php
   }
?>
      <div id="debug-output">
      </div>
