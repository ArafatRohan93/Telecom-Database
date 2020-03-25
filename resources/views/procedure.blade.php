@include('inclues.header')
<html>

   <head>
      <title>View All Posts</title>
   </head>

   <body>
        <center>
     <div style='padding: 44px'>
     <center><h4>Details of User Status table after applying Procedure user_condition</h4></center>
      <table class='table table-hover'>
         <tr style='background:#f49595;'>
            <td>ID</td>
            <td>Call_Packs</td>
            <td>SMS_Packs</td>
            <td>Data_Packs</td>

         </tr>
         @foreach ($user_condition as $user_condition)
         <tr class='table-light'>
            <td>{{ $user_condition->ID}}</td>
            <td>{{ $user_condition->Call_Packs }}</td>
            <td>{{ $user_condition->Sms_Packs }}</td>
            <td>{{ $user_condition->Data_Packs }}</td>

         </tr>
         @endforeach
      </table>
    </div>
  </center>
   </body>
</html>

@include('inclues.footer')
