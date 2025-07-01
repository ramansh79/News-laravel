<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>samplepage</title>
    <link href="resources/css/layouthead.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
</head>
<body>
    <style>
        h1{
            margin-block-start: 0;
            margin-block-end:0;
            height:60px;
        }
    </style>
    <div class="topcontainer">
        <h1>Sample Page</h1>
        <table class="head_class">
            <tr>
                
                <td><a href="{{route('news.index')}}">News</a></td>  
       
            </tr>
        </table>
    </div>

    <div class="midcontainer">
        @yield('news')
        @yield('main')
        @yield('create')

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>