<?php


$fullname = $_POST['fullname'];
$institution = $_POST['institution'];
$title = $_POST['title'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$fullname."<".$email.">\r\n";
$subject = "Online Form:".$fullname." - ".$institution;
$recipient = "info@edveu.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");



echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PPX2SHN125"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-PPX2SHN125');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdVeu</title>
    <link rel="icon" href="https://marketingsiteassets2.s3.us-east-2.amazonaws.com/assets/images/edveu-logo-favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand edveu-logo-pic" href="index.html"><img style="width: 50px;"
                    src="https://marketingsiteassets2.s3.us-east-2.amazonaws.com/assets/images/edveu-logo-transparent+bkgr.png"
                    alt="EdVeu Logo"></a>
            <a class="navbar-brand edveu-logo-text" class="" href="index.html">EdVeu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dsktp-mnu-1" href="#" id="navbarDropdown">Services</a>
                        <a class="nav-link dropdown-toggle dsktp-mnu-2" href="#" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/reporting-tool.html">Reporting Tool</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/reporting-tool.html">Reporting Tool</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about-us.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/help-center.html">Help Center</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact.html">Contact</a>
                    </li>
                </ul>
                <a class="header-signin-btn" href="https://app.edveu.com" target="_blank">Sign in</a>
            </div>
        </div>
    </nav>

    <div class="container edveu-intro">
        <div class="row intro-row">
            <div class="col-md contact-top-left-div">
                <h2><span style="font-weight: 600; font-size: 60px;">Have a question?</span></h2>
                <p>Please call, send an email or fill out the form</p>
                <h3>Contacts:</h3>
                <p><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0H19C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM10.06 8.683L3.648 3.238L2.353 4.762L10.073 11.317L17.654 4.757L16.346 3.244L10.061 8.683H10.06Z" fill="#3A3A3A"/>
                    </svg><a href="mailto:info@edveu.com" style="text-decoration: none; padding-left: 15px;">info@edveu.com</a>
                    </p>
                <!-- <p><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 13.42V16.956C18.0001 17.2092 17.9042 17.453 17.7316 17.6382C17.559 17.8234 17.3226 17.9363 17.07 17.954C16.633 17.984 16.276 18 16 18C7.163 18 0 10.837 0 2C0 1.724 0.015 1.367 0.046 0.93C0.0637224 0.677444 0.176581 0.441011 0.361804 0.268409C0.547026 0.0958068 0.790823 -0.000114433 1.044 2.56579e-07H4.58C4.70404 -0.000125334 4.8237 0.045859 4.91573 0.12902C5.00776 0.212182 5.0656 0.326583 5.078 0.45C5.101 0.68 5.122 0.863 5.142 1.002C5.34073 2.38892 5.748 3.73783 6.35 5.003C6.445 5.203 6.383 5.442 6.203 5.57L4.045 7.112C5.36445 10.1865 7.81455 12.6365 10.889 13.956L12.429 11.802C12.4919 11.714 12.5838 11.6509 12.6885 11.6237C12.7932 11.5964 12.9042 11.6068 13.002 11.653C14.267 12.2539 15.6156 12.6601 17.002 12.858C17.141 12.878 17.324 12.9 17.552 12.922C17.6752 12.9346 17.7894 12.9926 17.8724 13.0846C17.9553 13.1766 18.0012 13.2961 18.001 13.42H18Z" fill="#3A3A3A"/>
                    </svg><a href="tel:8001234567" style="text-decoration: none; padding-left: 10px;">+1 800 123 4567</a>
                    </p> -->
            </div>
            <div class="col-md contact-shape1">
                <div class="container">
                    <div class="row">
                        <div class="col-md"></div>
                        <div class="col-md contact-form">
                            <form action="contact-form.php" method="post">
                            <h3>Fill the form</h3>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="name" placeholder="First and Last name">
                              </div>
                            <div class="mb-3">
                                <label for="institution" class="form-label">Institution</label>
                                <input type="text" class="form-control" id="institution" name="institution" placeholder="School or University">
                              </div>  
                            <div class="mb-3">
                                <label for="title" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Job title at your institution">
                              </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                              </div>  
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                              </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- <img src="https://marketingsiteassets2.s3.us-east-2.amazonaws.com/assets/images/college-student-div-shape1.png" alt=""> -->
            </div>
        </div>
    </div>

    

    <!-- SECTION FOOTER -->
    <div class="container footer">
        <div class="row edveu-footer-row">
            <div class="col-md-8 footer-left">
                <div class="footer-logo">
                    <a href="index.html"><img style="width: 35px;"
                            src="https://marketingsiteassets2.s3.us-east-2.amazonaws.com/assets/images/edveu-logo-transparent+bkgr.png"
                            alt="EdVeu Logo"></a>
                    <a class="edveu-logo-footer" href="index.html">EdVeu</a>
                </div>
                <p class="footer-left-text">EdVeu is a data-centric software service that provides a wide range of solutions to serve
                    educational institutions with the growing data generated by students, educators, and administrators.</p>
                <ul class="footer-menu">
                    <li><a href="#">Solutions</a></li>
                    <li><a href="/about-us.html">About</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                    <li><a href="/help-center.html">Help</a></li>
                </ul>



            </div>
            <div class="col-md-4 footer-right">
                <div class="row edveu-social-media">
                    <h3>Follow us:</h3>
                    <p>
                        <a href="https://twitter.com/Ed_Veu" target="_blank">
                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.162 2.65593C20.3985 2.99362 19.589 3.2154 18.76 3.31393C19.6337 2.79136 20.2877 1.96894 20.6 0.999927C19.78 1.48793 18.881 1.82993 17.944 2.01493C17.3146 1.34151 16.4804 0.89489 15.5709 0.744511C14.6615 0.594133 13.7279 0.748418 12.9153 1.18338C12.1026 1.61834 11.4564 2.30961 11.0771 3.14972C10.6978 3.98983 10.6067 4.93171 10.818 5.82893C9.1551 5.74558 7.52832 5.31345 6.04328 4.56059C4.55823 3.80773 3.24812 2.75097 2.19799 1.45893C1.82628 2.09738 1.63095 2.82315 1.63199 3.56193C1.63199 5.01193 2.36999 6.29293 3.49199 7.04293C2.828 7.02202 2.17862 6.84271 1.59799 6.51993V6.57193C1.59819 7.53763 1.93236 8.47354 2.54384 9.22099C3.15532 9.96843 4.00647 10.4814 4.95299 10.6729C4.33661 10.84 3.6903 10.8646 3.06299 10.7449C3.32986 11.5762 3.85 12.3031 4.55058 12.824C5.25117 13.3449 6.09712 13.6337 6.96999 13.6499C6.10247 14.3313 5.10917 14.8349 4.04687 15.1321C2.98458 15.4293 1.87412 15.5142 0.778992 15.3819C2.69069 16.6114 4.91609 17.264 7.18899 17.2619C14.882 17.2619 19.089 10.8889 19.089 5.36193C19.089 5.18193 19.084 4.99993 19.076 4.82193C19.8949 4.23009 20.6016 3.49695 21.163 2.65693L21.162 2.65593Z"
                                fill="#3473E4" />
                        </svg></a>
                        <a href="https://www.linkedin.com/company/edveu/" target="_blank">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.94 2.00002C4.93974 2.53046 4.72877 3.03906 4.35351 3.41394C3.97825 3.78883 3.46944 3.99929 2.939 3.99902C2.40857 3.99876 1.89997 3.78779 1.52508 3.41253C1.1502 3.03727 0.939737 2.52846 0.940003 1.99802C0.940268 1.46759 1.15124 0.958988 1.5265 0.584103C1.90176 0.209218 2.41057 -0.00124153 2.941 -0.000976312C3.47144 -0.000711096 3.98004 0.210257 4.35492 0.585517C4.72981 0.960777 4.94027 1.46959 4.94 2.00002V2.00002ZM5 5.48002H1V18H5V5.48002ZM11.32 5.48002H7.34V18H11.28V11.43C11.28 7.77002 16.05 7.43002 16.05 11.43V18H20V10.07C20 3.90002 12.94 4.13002 11.28 7.16002L11.32 5.48002V5.48002Z"
                                fill="#3473E4" />
                        </svg></a>
                    </p>
                </div>
                <div class="row edveu-policies">
                    <div class="col-sm"><a href="/privacy.html" style="margin-right: 15px;">Privacy Policy</a><a href="/terms.html">Terms & Service</a></div>
                </div>
            </div>
            <p class="footer-copyright">All right reserved (c)</p>
        </div>

    </div>
    <!-- END FOOTER -->
</body>

</html>

';

?>