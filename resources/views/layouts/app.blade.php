<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>start laravel</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            font-size: 14pt;
            background-color: #020802;
            color: #FFFDD0;
        }
        header, footer, h3 {
            text-align: center; 
            background-color: #020802;
        }
        ul {
            list-style-type: none;
            display: flex; 
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .menu a {
            text-decoration: none; 
            margin: 0 20px; 
            color: #FFFDD0;
            font-size: 16pt;
        }

        .menu a:hover {
            color: #89e382; 
        }
        footer { 
            text-align: center; 
  	    position: fixed;
 	    left: 0;
  	    bottom: 0;
  	    width: 98%;
  	    height: 50px;
        }
        form {
            display: flex; 
            flex-direction: column;
            align-items: center;
        }
        .elem{
            margin: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #FFFDD0;
        }
	th, footer, header {
            font-weight: bold;
	}
        th {
            background-color: #FFFDD0;
            
            border: 1px solid #FFFDD0;
            color: #020802;
            font-weight: bold;
            padding: 10px;
        }
        
        button {
            background-color: #FFFDD0;
            color: #020802;
            border: 0px;
            border-radius: 10px;
            font-size: 12pt;
            width: 90px;
            height: 30px;
        }
        select, button, input {
            font-size: 12pt;
        }
        select, input {
            width: 250px;
            height: 25px;
        }
        button:active {
            background-color: #89e382;
        }
</style>
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
