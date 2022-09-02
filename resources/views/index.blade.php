<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO|LARAVEL</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<style>
    .container{
       display: flex;
       align-content: center;
       justify-content: center;
       margin-top:50px; 

    }
    body{
       background: black;
       color: whitesmoke;
    }
    #additem{
       padding: 6px;
       border-radius: 20px;
       border-style: hidden;

    }
    #additem:focus{
       
       background: blanchedalmond;
      
    }
    h1{
       display: flex;
       align-content: center;
       justify-content: center;
       margin-top:20px; 
       font-family:"Sofia", sans-serif;
    }
    a{
        text-decoration: none;
        color: whitesmoke;
    }
    a:hover{
        text-decoration: none;
        color: whitesmoke;
    }
    .hidden{
        display:none;
    }
    
   </style>
  
</head>
<body >
   @if ($errors->any())
   <div class="alert alert-danger" >
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif
 <div class="container-fluid">
   <h1 > <span style="color: tan">TODO</span>-<span style="color:turquoise">APP</span>  </h1> 
   <div class="container">
    <div class="alert alert-danger" hidden id="err"  role="alert">
        
      </div>
      <br>

    
  
       <form class="form-group" action="/add" method="get">
             <input type="text"  id="additem"  name="additem"  placeholder="Add an item">      
           <button type="submit" style="border-radius: 40px;"  class="btn btn-primary mb-2">ADD </button>
          
         </form>
         
     
   </div>
</div>
 <div class="container " >
   <div>
      <div>
         <div>
            <table class="table table-dark table-striped text-white">
               <thead>
                 <tr>
                   <th scope="col">Slno</th>
                   <th colspan="2" scope="col">Item </th>      
                 </tr>
               </thead>
              <div class="hidden">{{$count=0}}</div>
               @foreach ($items as $item  )
               <div class="hidden">{{$count=$count+1}}
                  <input type="text" value={{$count}} name="slno">
               </div>  
               <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$item['item']}}</td>
                <td><button class="btn btn-primary "> <a href={{"/edit/".$item['slno']}}> Edit</a></button>
                     <button class="btn btn-danger"> <a href={{"/delete/".$item['slno']}}>Delete</a></button></td>
                </tr>  
                
               @endforeach
               <tbody>
             </table>
         </div>
      </div>
   </div>
  
 </div>

</body>
</html>