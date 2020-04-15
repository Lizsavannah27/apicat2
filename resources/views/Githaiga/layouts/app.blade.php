<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <title>API CAT2</title>
</head>
<body>
   <div id= "main">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow.sm">
         <div class="container"></div>
            <a class="navbar-brand" href="/">Githaiga</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">View <span class="sr-only">(current)</span></a>
                    </li>
                 </li>
              </ul>
          </div>
      </nav>
 <main class='py-5'>
  @yield ('content')
 </main>


</body>
</html>