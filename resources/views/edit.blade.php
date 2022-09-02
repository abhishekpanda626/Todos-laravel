<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO|LARAVEL</title>
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
    #item{
       padding: 6px;
       border-radius: 20px;
       border-style: hidden;

    }
    #item:focus{
       
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
   <div class="container-breakpoint">
    
    <h1>TODO-APP</h1> 
    <div>
        <div>
            <div class="container">
                <form class="form-group" action="/update" method="get">
                    <input type="hidden" class="mb-2" id="slno" name="slno" value={{$items['slno']}} >
                    
                    <input type="text" class="mb-2" id="item" name="item" value="{{$items['item']}}" >              
                    <button type="submit" class="btn btn-primary mb-2 ">Update </button>
                  </form>
            </div> 
        </div>
    </div>
   
</body>
</html>