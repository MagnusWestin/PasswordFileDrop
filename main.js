$(document).ready( function()
{
   $('#display-password input[type=text]').click( function()
   {
      $(this).select();
   });
   $("#password-field").select();
   $("#password-field").focus();
});

