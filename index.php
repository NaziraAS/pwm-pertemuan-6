<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
        <!-- navbar -->
        <div class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
            <div class="container-fluid">
                 <a class="navbar-brand" href="#home">Atang Sasmita</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="           #navbarNav" aria-controls="navbarTogglerDemo03" aria-expanded="false"             aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#about">About<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
        <!-- akhir navbar -->
    	<!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center">
            <img src="image/img.jpg" class="rounded-circle">
            <h2>Muh Atang Sasmita</h2>
            <p>Mahasiswa | Gamer</p>  
        </div>  
    	<!-- akhir jumbotron -->
        <!-- About -->
            <section class="about" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-center">About</h2>
                            <hr>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-5 offset-sm-1">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <div class="col-sm-5">
                           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </div>
                    </div>       
                </div>
            </section>
      
        <!-- Portfolio -->
            <section class="portfolio" id="portfolio">
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-12">
                            <h2 class="text-center">Portfolio</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                                <img src="image/portfolio/devil_may_cry_9-wallpaper-1366x768.jpg" class="img-thumbnail">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- akhir portfolio-->
        <!-- contact -->
            <section class="contact" id="contact">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h2>Contact</h2> 
                            <hr>                           
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <form>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="telpon">Telepon</label>
                                        <input type="text" class="form-control" id="telpon" placeholder="Masukkan No.Telepon">
                                </div>
                                <select class="form-control form-control-md">
                                    <option>Pilih Kategori</option>
                                    <option>Web Developer</option>
                                    <option>Web Desain</option>
                                    <option>Web Programming</option>
                                </select>
                                <div class="form-group">
                                    <label for="textarea">Pesan</label>
                                    <textarea class="form-control" rows="10" id="textarea" placeholder="Masukkan Pesan">
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                            </form>    
                        </div>  
                    </div>      
                </div>
                
            </section>
        <!-- akhir contact -->








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  </body>
</html>