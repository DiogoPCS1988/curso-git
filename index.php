<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">

        <div class="container"><a class="navbar-brand logo" href="#">Remove</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page lanidng-page">
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 item zoom-on-hover"
                        style="background-color: rgb(255,255,255);">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Nome do Arquivo</label>
                                <input class="form-control" type="text" name="file_name"></div>
                            <div class="form-group">
                                <textarea class="form-control" style="height: 250px;" name="code"></textarea>
                            </div>
                            <input name="enviar" class="btn btn-primary" type="submit">
                        </form>



                    <?php

                    $CSS = 'body {
                        background-color: blue;
                   }
                   
                   .row {
                       height: 10px;
                       width: 100%;
                   }
                   
                   .col {
                       height: 50px;
                   }
                   
                   .row {
                       display: flex;
                   }
                   
                   .col{
                       width: 50%;
                   }
                   
                   div .p {
                       background-color: red;
                   }
                   
                   #div1 {
                       color: blue;
                   }
                   
                   #div1 .row {
                       color: black;
                   }';


                   $HTML = '
                        <div class="container-fluid">
                            <div class="row">Remove</div>
                                <div class="col-12"> 
                                    Texto Exemplo
                                </div>
                            <div>
                        </div>
                                ';

                   $BOOSTRAP = '
                   container-fluid{
                        width:100%;
                        padding-right:15px;
                        padding-left:15px;
                        margin-right:auto;
                        margin-left:auto
                    }';


                        $HTML = str_split($HTML);
                        $BOOSTRAP = str_split($BOOSTRAP);
                        //$code = explode(".", $_POST['code']);

                        $wordHTML = null;

                        echo "<code>";
                        // foreach ($HTML as $key => $value) {
                        //     echo $value . PHP_EOL;
                        // }

                        $html = new ArrayIterator($HTML);
                        
                        while($html->valid()){
                                    if ($html->current() == "C" || $html->current()== "c" && $html->current() != "" && $html->current() != "\n")
                                        $wordHTML .= $html->current();

                                    if ($html->current() == "L" || $html->current() == "l" && $html->current() != "" && $html->current() != "\n")
                                        $wordHTML .= $html->current();

                                    if ($html->current() == "A" || $html->current() == "a" && $html->current() != "" && $html->current() != "\n")
                                        $wordHTML .= $html->current();

                                    if ($html->current() == "S" || $html->current() == "s" && $html->current() != "" && $html->current() != "\n")
                                        $wordHTML .= $html->current();

                                    if ($html->current() == "=")
                                        $wordHTML .= $html->current();

                                    if ($html->current() == '"'){
                                        if ($wordHTML == 'class=' || $wordHTML == 'Class=')
                                            $array = [];
                                            $letterClass = null;
                                            $className = new ArrayIterator($array);
                                            $html->next();
                                                while($html->current() != '"'){
                                                    if ($html->current() != " ")
                                                        $letterClass .= $html->current();

                                                    if ($html->current() != "\n")
                                                        $letterClass .= $html->current();

                                                    if ($html->current() == " "){
                                                        $className->append($letterClass);
                                                        $letterClass = null;
                                                    }
                                                    $html->next();
                                                }
                                                while($className->valid()){
                                                    echo "CLASSES (";
                                                    echo $className->current();
                                                    $className->next();
                                                    echo ")";
                                                }

                                            }
                                $html->next();

                            

                                
                                
                                    

                                


                                
                                
                            }

                        echo "</code>";



















                        
                    ?>






                    </div>
                </div>
            </div>
        </section>



      


















    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>