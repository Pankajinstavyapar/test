<!DOCTYPE html>
<html>
<head>
    <title>You have a new lead from Aastha Enterprises</title>
    
    <style>
    table {
      font-family: arial, sans-serif;
      /*border-collapse: collapse;*/
      width: auto;
        margin:auto;
    }
    
    td, th {
      /*border: 1px solid #dddddd;*/
      text-align: left;
      padding: 2px 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
</head>
<body>
 
    <table border="1px">
  
  <tr>
    <th><p>Name: </p></th>
      <td><p>{{ $user->name }}</p></td>
  </tr>
  <tr>
    <th><p>Email: </p></th>
      <td><p> {{ $user->email }}</p></td>
  </tr>
  <tr>
    <th><p>Product: </p></th>
     <td><p> {{ $user->query }}</p></td>
  </tr>
  <tr>
    <th><p>Phone: </p></th>
     <td><p>{{ $user->phone }}</p></td>
  </tr>
  <tr>
    <th><p>Message: </p></th>
     <td><p>{{ $user->message }}</p></td>
  </tr>
   <tr>
    <th><p> Address: </p></th>
     <td><p>{{ $user->address }}</p></td>
  </tr>
  <tr>
    <th><p>Page URL: </p></th>
     <td><p>{{ $pageUrl }}</p></td>
  </tr>
</table>
</body>
</html>
