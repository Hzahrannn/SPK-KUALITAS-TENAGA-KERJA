<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Pendataan Minat dan Bakat Mahasiswa">
    <meta name="author" content="Ansonika">
    <title>Pendataan Minat Dan Bakat Mahasiswa</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/pmblogo20.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="60x60" href="img/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina-152x152.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="css/magnific-popup.min.css" rel="stylesheet">
    <link href="css/skins/square/yellow.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    
    <div id="loader_form">
		<div data-loader="circle-side-2"></div>
    </div><!-- /Loader_form -->
    
    <header>

    </header><!-- /header -->

    <div id="main_container" class="visible">
        <div id="header_in">
            <div id="logo_in"><img src="img/himsiunsri.png" data-retina="true" alt="Himsi Unsri"></div>
            <nav class="main_nav">
                <p>Pendataan Minat dan Bakat Mahasiswa</p>
            </nav>
        </div>

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_1">                                               
                        <div class="subheader" id="quote">  
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 forma">
                                <div id="wizard_container">
                                    
                                    <div id="top-wizard">
                                        <h4 id="aabbcc">Silahkan Isi Data-data Berikut</h4>
                                        <!-- <strong>Progress</strong>
                                        <div id="progressbar"></div>   -->
                                    </div><!-- /top-wizard -->
                                    <form id="wrapped" method="POST" enctype="multipart/form-data">
                                        <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/5</strong>Silahkan Isi Identitas Anda</h3>
                                                
                                                <div class="form-group">
                                                    <input type="text" name="nama" class="required form-control" placeholder="Nama">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="nim" class="required form-control" placeholder="NIM">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="email" class="required form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="angkatan" class="required form-control" placeholder="Angkatan">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="kontak" class="required form-control" placeholder="Kontak (Line/WA/Instagram)">
                                                </div>
                                                
                                            </div><!-- /step 1-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>2/5</strong>Bagaimana Minat Anda Dalam Seni?</h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Menyanyi POP" class="icheck">Menyanyi POP
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Menyanyi Seriosa" class="icheck">Menyanyi Seriosa
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Menulis Sastra" class="icheck">Menulis Sastra
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Dance" class="icheck">Dance
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Menyanyi Jazz" class="icheck">Menyanyi Jazz
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Menyanyi Dangdut" class="icheck">Menyanyi Dangdut
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Melukis" class="icheck">Melukis
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="seni[]" type="checkbox" value="Tari Tradisional" class="icheck">Tari Tradisional
                                                            </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- /row-->
                                                <div class="form-group">
                                                    <input type="text" name="alat_musik" class="form-control" placeholder="Bermain Alat Musik">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="seni[]" class="form-control" placeholder="Lainnya (ex. kaligrafi, beatbox)">
                                                </div>
                                                <!-- <div class="form-group textarea_info">
                                                    <label>Additional info</label>
                                                    <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="How many pages, other details, etc..."></textarea>
                                                </div> -->
                                            </div><!-- /step 2-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>3/5</strong>Bagaimana Minat Anda Dalam Olahraga?
                                                </h3>

                                                <div class="row">
                                                   
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Basket" class="icheck">Basket
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Voli" class="icheck">Voli
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Bulu Tangkis" class="icheck">Bulu Tangkis
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Futsal/Football" class="icheck">Futsal/Football
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Sepak Takraw" class="icheck">Sepak Takraw
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Catur" class="icheck">Catur
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Renang" class="icheck">Renang
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Karate" class="icheck">Karate
                                                            </label>
                                                        </div>
                                                        <div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Pencak Silat" class="icheck">Pencak Silat
                                                            </label>
                                                        </div><div class="form-group checkbox_questions">
                                                            <label>
                                                                <input name="olahraga[]" type="checkbox" value="Taekwondo" class="icheck">Taekwondo
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div><!-- /row-->
                                                <div class="form-group">
                                                    <input type="text" name="olahraga[]" class="form-control" placeholder="Lainnya (ex. judo, bola tangan)">
                                                </div>
                                            </div><!-- /step 3-->

                                            <div class="step">
                                                <h3 class="main_question"><strong>4/5</strong>Silahkan Isi Prestasi Anda
                                                </h3>
                                                <div class="form-group">
                                                    <div id="prestasiForm">
                                                        <input type="text" name="prestasi[]" class="form-control prestasiinput" placeholder="Prestasi (Peringkat, Nama lomba, Tingkat, Waktu)">
                                                    </div>
                                                    <div class="tambahprestasi">
                                                        <a class="prestasip">
                                                            Contoh: Juara 1 Futsal Porsi 2019 Tingkat Jurusan 21 Oktober 2019
                                                        </a>
                                                        <a class="btn prestasiButton" id="prestasiButton">Tambah (+)</a>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div>
                                                            Upload Foto Medali/Sertifikat/Piala (one or multiple):
                                                        </div>
                                                        <div>
                                                            <input type="file" name="files[]" multiple/></td>
                                                        </div>
                                                    </div>
                                                </div><!-- /row-->
                                                
                                                <div class="keteranganprestasi">
                                                    <p class="keteranganprestasip">
                                                    *supported image format: .jpeg, .jpg, .png, .ico (selain format ini file tidak akan masuk)<br>    
                                                    *jika anda belum memiliki prestasi atau memilih untuk tidak mengisi, silahkan dilewati saja dengan klik "Forward"</p>
                                                </div>
                                            </div><!-- /step 4-->

                                            <div class="submit step">

                                                <h3 class="main_question"><strong>5/5</strong>Terima kasih telah mengisi kuesioner ini.<br>
                                                    Silahkan klik submit untuk mengirim data.</h3>

                                            </div><!-- /step 5-->
                                        </div><!-- /middle-wizard -->

                                        <div id="top-wizard">
                                            <strong>Progress</strong>
                                            <div id="progressbar"></div>  
                                        </div><!-- /top-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Backward </button>
                                            <button type="button" name="forward" class="forward">Forward</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                        
                                    </form>
                                    
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
            <div id="footer">
                <a href="http://himsiunsri.org"  target="_blank">Dinas Ristek PTI - HIMSI UNSRI 2020</a>
                <a href="http://www.hostingan.id"  target="_blank">HOSTED BY HOSTINGAN ID</a>
            </footer>
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->
    

    <!-- SCRIPTS -->

    <!-- Jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Common script -->
    <script src="js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="js/functions_no_side_panel.js"></script>
    <!-- Google map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/mapmarker.jquery.js"></script>
    <script src="js/mapmarker_func.jquery.js"></script>
    <script>
            document.querySelector(".wrapper_in").addEventListener('scroll', function() {
                // console.log(this);
                // console.log(this.scrollTop);
                if (this.scrollTop > 20) {
                    document.getElementById("header_in").style.backgroundColor = "White";
                    document.querySelector(".main_nav p").style.display = "initial";
                    document.getElementById("header_in").style.borderBottom = "2px solid #e8ebed";   
                } else {
                    document.getElementById("header_in").style.backgroundColor = "";
                    document.querySelector(".main_nav p").style.display = "none";
                    document.getElementById("header_in").style.borderBottom = "initial";     
                }
            });
    </script>
    <script>
    var index = 2;
    document.getElementById('prestasiButton').addEventListener("click", tambahForm); 
    function tambahForm(){
        var node = document.createElement('input');
        node.setAttribute("type", "text");
        node.setAttribute("name", "prestasi[]");
        node.setAttribute("class", "form-control prestasiinput");
        node.setAttribute("placeholder", "Prestasi " + index + " (Peringkat, Nama lomba, Tingkat, Waktu)");
        document.getElementById("prestasiForm").appendChild(node);
        index++;
        if (index > 5) {
            document.getElementById("prestasiButton").removeEventListener("click", tambahForm);
        }
     }
     
    </script>
    
</body>

</html>