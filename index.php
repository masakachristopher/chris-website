<!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete" lang="en">
<head>
    <link rel="shortcut icon" href="chrisweb.ico">
    <link rel="shortcut icon" href="chrisweb.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CM | Christopher Masaka, Developer</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
       

</head>
<header>
    <!-- navigation bar -->
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
            <div class="container">

                <ul class="navbar-nav ml-auto text-left ">
                    <li class="nav-item">
                        <a class="nav-link navbar-brand" href="index.php?option=about">home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link navbar-brand" href="index.php?option=blog">blog</a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link navbar-brand" href="index.php?option=project">projects</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link navbar-brand" href="index.php?option=other">More</a>
                    </li> -->
                </ul>
                <div class="collapse navbar-collapse" id="navbarResponsive">         
                <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item">
                        <a class="navbar-brand logo" href="index.php"><img class="img-fluid " height="95px" src="chrisweb.ico"  alt="logo"></a>
                    </li>
                   
                </ul>
                </div>  
            </div>
        </nav>
    </div>
    <!-- navigation bar ends -->
</header>

<body class="bg-black">
    <div class="masthead-content">
        <div class="responsive">
            <div  class="d-flex justify-content-center">
                <div   class="panel-body" >
                    
                        
                    <?php 
                        @$opt=$_GET['option'];
                        
                        if($opt!="")
                        {
                            
                            if($opt=="about")
                            {
                            include('about.php');
                    
                            }
                                                        
                            else if($opt=="blog")
                            {
                            include('blog.php');
                            }
                            
                            
                            else if($opt=="project")
                            {
                            include('project.php');
                            }
                        }
                        else
                            include('home.php');
                          
                    ?>
                        
                    
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <footer class="d-flex justify-content-center">
           <span> <span>&copy 2019-<?php echo date("Y");?></span> , this site developed by chris</span>
        </footer>
    </div>
      
</body>
   
</html>