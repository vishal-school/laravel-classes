<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body> 
   

   <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    @foreach ($businessman as $row)
    <tr>
      <th scope="row">{{ $row->b_id  }}</th>
      <td>{{ $row->businessman_name  }}</td>
      <td>{{ $row->mobile  }}</td>
      <td>{{ $row->city  }}</td>
     <th scope="row"><a href=" {{ ( 'profile')  }}">delete</a>   </th>
       <!--  <th scope="row"><a href="/update-school/ {{ $row->b_id  }}">update</a>   </th> -->
    </tr>
 @endforeach
  </tbody>
</table>         
            
</body>
</html>
