<?php
//header('Content-Type: text/html; charset=Windows-1252');
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html" ; charset="UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/form.css" rel="stylesheet">
        <link href="../css/media.css" rel="stylesheet">
    </head>

    <body>
        <div class="nav-box">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="../index.html"><span class="text">Naslovna</span></a></li>
                            <li class=""><a href="aboutUs.html"><span class="text">O nama</span></a></li>
                            <li class=""><a href="aboutProject.html"><span class="text">O projektu </a></li>
                            <li class="logo hidden-xs">
                                <a href="#intro" class="smoothScroll"><img src="../img/transparent.png"></a>
                            </li>
                            <li class=""><a href="media.html"><span class="text">Mediji </span></a></li>
                            <li class=""><a href="galery.html"><span class="text">Galerija</span></a></li>
                            <li class=""><a href="contact.html"><span class="text">Kontakt </span></a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <a target="_blank" href="https://www.youtube.com/channel/UCgAkaOGX6InKcrxfAQJGYDQ" title="YouTube"><i class="fa fa-youtube-play" title="YouTube"></i></a>
                        <a target="_blank" href="https://www.facebook.com/CUPOR-821597508006517"  title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/cupor_org" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/cupor_organizacija/" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="form-box">
                <h3>Molimo vas da popunite formu ako imate bilo kakvu zloupotrebu da prijavite </h3>

                <form class="form-horizontal form-parts" action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="submit">

                    <div class="form-part-one">
                        <h4>Odaberite kategriju sadržaja koji prijavljujete:</h4>
                        <div class="radio">
                            <label>
                            <input type="radio" value="Cyberbulling" name = "category" required>
                            Cyberbulling
                        </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio"  value="Sexting" name = "category" required>
                                Sexting
                        </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio"  value="Trafficking" name = "category" required>
                                Trafficking
                            </label>
                        </div>
                        <div class="radio ">
                            <label>
                            <input type="radio"  value="Krađa indetiteta" name = "category" required>
                            Krađa indetiteta
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio"  value="Prevare i ostale nezakonitosti" name = "category" required>
                                Prevare i ostale nezakonitosti
                        </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" value="Drugi oblici iskorišćavanja i ugrožavanja dece" name = "category" required>
                                Drugi oblici iskorišcavanja i ugrožavanja dece
                            </label>
                        </div>
                    </div>
                    <div class="form-part-two">
                        <div class="radio">
                            <h4>Opis sadržaja koji prijavljujete:</h4>
                            <label>
                        <input type="radio" name="content"  value="Neprimerena online komunikacija" required>
                            Neprimerena online komunikacija
                     </label>
                        </div>
                        <div class="radio">
                            <label>
                        <input type="radio" name="content"  value="Širenje neistina i govor mržnje" required>
                        Širenje neistina i govor mržnje
                     </label>
                        </div>
                        <div class="radio">
                            <label>
                        <input type="radio" name="content"  value="Narušavanje bezbednosti, ucena i pretnje" required>
                        Narušavanje bezbednosti, ucena i pretnje
                        </label>
                        </div>
                        <div class="radio ">
                            <label>
                        <input type="radio" name="content"  value=" Nezakonite aktivnosti(krađa, terorizam, prevare)" required>
                        Nezakonite aktivnosti(krađa, terorizam, prevare)
                        </label>
                        </div>
                        <div class="radio ">
                            <label>
                        <input type="radio" name="content"  value="Ostalo">
                        Ostalo
                        </label>
                        </div>
                    </div>
                    <div class="form-part-three">
                        <h4>Dodatne informacije:</h4>
                        <textarea name="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-part-fourth">
                        <div class="radio">
                            <h4>Gde ste pronašli sadržaj koji prijavljujete:</h4>
                            <label>
                            <input type="radio" name="contentLocation"  value="Veb sajt" required>
                              Veb sajt
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="contentLocation"  value="Imejl" required>
                             Imejl
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="contentLocation"   value="Društvena mreža" required>
                             Društvena mreža
                            </label>
                        </div>
                        <div class="radio ">
                            <label>
                            <input type="radio" name="contentLocation"  value="Ostalo" required>
                              Ostalo
                            </label>
                        </div>
                    </div>
                    <div class="form-part-six">
                        <h4>Unesite link na kojem se nalazi sadržaj koji prijavljujete:</h4>
                        <input name="website" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-part-six">
                        <h4>Unesite vaše ime i prezime:</h4>
                        <input name="name" type="text" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-part-six">
                        <h4>Unesite vašu imejl adresu:</h4>
                        <input name="email" class="form-control" placeholder="" required="required">
                    </div>
                    <div class="form-part-six">
                        <h4>Unesite vaš broj telefona:</h4>
                        <input name="phone" type="text" class="form-control" placeholder="" required="required">
                    </div>

                    <div class="form-part-seven">
                        <input type="submit" class="btn btn-default btn-submit" value="Pošalji" />
                    </div>

                </form>
            </div>
        </div>
    <footer>
        <div class="footDiv first">
            <img src="../img/transparent.png" width="80" class="" alt="">
            <h5 class="footer-logo">Udruženje građana „Centar za upravljanje promenama i održivi razvoj“ (CUPOR) Beograd</h5>

        </div>
        <div class="footDiv second">
            <h3>Menu</h3>

            <ul class="list-footer">
                <li> <a href="aboutUs.html"> O nama</a></li>
                <li><a href="aboutProject.html">O projektu</a></li>
                <li><a href="safeInternet.html">Bezbednost dece</a></li>
                <li><a href="media.html">Mediji</a></li>
                <li><a href="galery.html">Galerija</a></li>
                <li><a href="contact.html">Kontak</a></li>
            </ul>
        </div>
        <div class="footDiv third">
            <a href="form.php">Podnesi prijavu</a>
            <p>Za sve dodatne informacije posaljite email na: <span>office@cib.rs</span></p>
        </div>
        <div class="footDiv fourth">
            <h3>Socijalne mreze</h3>

            <div class="socialFooter">
                <ul>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgAkaOGX6InKcrxfAQJGYDQ"><i class="fa fa-youtube-play" title="YouTube"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/cupor_org"><i class="fa fa-twitter" title="Twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/cupor_organizacija/"><i class="fa fa-instagram" title="Instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/CUPOR-821597508006517"><i class="fa  fa-facebook" title="Facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

    </html>
    <?php
    } 
else                /* send the submitted data */
    {
    $category=$_REQUEST['content'];
    $content=$_REQUEST['category'];
    $message=$_REQUEST['message'];
    $contentLocation= $_REQUEST['contentLocation'];
    $websiteUrl=$_REQUEST['website'];    
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];

 

    $category_text = "Kategorija sadržaja koji prijavljujem:";
    $content_text = "Opis sadržaja koji prijavljujem:";
    $message_text = "Dodatne informacije:";
    $contentLocation_text = "Gde ste pronašli sadržaj koji prijavljujete:";
    $websiteUrl_text = "Website url na kojem se nalazi sadržaj koji prijavljujete:";
    $name_text = "Ime i prezime:";
    $email_text = "Imejl adresa:";
    $phone_text = "Telefon:";
    if (($category=="") || ($content=="") || ($contentLocation=="")||($name=="")||($email=="")|| ($phone=="") )
        {
         header("Location: form.php"); 
		//echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	
     	$emailTo = "digitalcupor@gmail.com";
        $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
        $body = " $category_text $category
         \n\n $content_text $content 
         \n\n $message_text $message 
         \n\n $contentLocation_text $contentLocation
         \n\n $websiteUrl_text $websiteUrl 
         \n\n $name_text $name 
         \n\n $email_text $email 
         \n\n $phone_text $phone ";
        $subject="Message sent using your contact form";
		 mail($emailTo, $subject, $body, $from, $headers);
         $emailSent = true;
		 header("Location: formSuccess.html"); 
	    }
    }  
?>