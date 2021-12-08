<?php
include_once '../Model/Classes.php';
include_once '../Controller/ClassesC.php';

$error = "";

// create classe
$classes = null;

// create an instance of the controller
$classesC = new classesC();
if (
  isset($_POST["idclass"]) &&
  isset($_POST["idprof"]) &&
  isset($_POST["nomclass"]) &&
  isset($_POST["niveau"]) &&
  isset($_POST["matiere"]) &&
  isset($_POST["datedebut"]) &&
  isset($_POST["duree"])
) {
  if (
    !empty($_POST["idclass"]) &&
    !empty($_POST["idprof"]) &&
    !empty($_POST["nomclass"]) &&
    !empty($_POST["niveau"]) &&
    !empty($_POST["matiere"]) &&
    !empty($_POST["datedebut"]) &&
    !empty($_POST["duree"])
  ) {
    $classes = new classes(
      $_POST['idclass'],
      $_POST['idprof'],
      $_POST['nomclass'],
      $_POST['niveau'],
      $_POST['matiere'],
      $_POST['datedebut'],
      $_POST['duree']
    );
    $classesC->modifierclasses($classes, $_POST["idclass"]);
    // header('Location:afficherclasses.php');
  } else
    $error = "Missing information";
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Create a classe">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Editclass</title>
  <link rel="stylesheet" href="../nicepage.css" media="screen">
  <link rel="stylesheet" href="../Editclass.css" media="screen">
  <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Talos",
      "logo": "images/talos.png",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Editclass">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-border-1 u-border-grey-75 u-clearfix u-gradient u-header u-sticky u-sticky-9c0f u-header" id="sec-a36f">
    <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="792">
        <img src="../pics/talos.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS" data-position="">
        <div class="menu-collapse u-custom-font u-font-courier-new" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase;">
          <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="color: rgb(17, 17, 17) !important;">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 612 612">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-77e1"></use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 612 612" x="0px" y="0px" id="svg-77e1" style="enable-background:new 0 0 612 612;">
              <g>
                <g id="menu">
                  <g>
                    <path d="M0,95.625v38.25h612v-38.25H0z M0,325.125h612v-38.25H0V325.125z M0,516.375h612v-38.25H0V516.375z"></path>
                  </g>
                </g>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-font-courier-new u-nav u-spacing-10 u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="Home.html" style="padding: 5px 10px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="Classrooms.html" style="padding: 5px 10px;">Classrooms</a>
            </li>
            <li class="u-nav-item"><a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-hover-custom-color-2 u-nav-link u-radius-50 u-text-active-white u-text-grey-90 u-text-hover-white" href="My-account.html" style="padding: 5px 10px;">My account</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 5px 10px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Classrooms.html" style="padding: 5px 10px;">Classrooms</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="My-account.html" style="padding: 5px 10px;">My account</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="skrollable u-align-center u-clearfix u-gradient u-section-1" id="carousel_91ba">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-1">Edit a classe</h2>
      <div class="u-form u-form-1">
        <?php
        if (isset($_POST['idclass'])) {
          $classes = $classesC->recupererclasses($_POST['idclass']);

        ?>
          <form action="" method="post" class="u-clearfix u-form-spacing-0 u-form-vertical u-inner-form" style="padding: 0px;" source="custom" name="form">
            <div class="u-form-email u-form-group u-form-group-1">
              <label for="email-f2a8" class="u-custom-font u-font-courier-new u-label u-label-1">Class Name</label>
              <input value="<?php echo $classes['nomclass']; ?>"  placeholder="Classname" id="email-f2a8" name="nomclass" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle" autofocus="autofocus">
            </div>
            <div class="u-form-group u-form-name u-form-group-2">
              <label for="name-f2a8" class="u-custom-font u-font-courier-new u-label u-label-2">Level</label>
              <input type="text" value="<?php echo $classes['niveau'];?>" placeholder="Avancé" id="name-f2a8" name="niveau" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle">
            </div>

            <div class="u-form-group u-form-name u-form-group-2">
              <label for="name-f2a8" class="u-custom-font u-font-courier-new u-label u-label-2">idprof</label>
              <input type="hidden" value="<?php echo $classes['idprof'];?>" placeholder="Avancé" id="name-f2a8" name="idprof" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle">
            </div>

           

            <div class="u-form-group u-form-select u-form-group-3">
              <label for="select-8e9d" class="u-custom-font u-font-courier-new u-label u-label-3">Matiére</label>
              <div class="u-form-select-wrapper">
                <select id="select-8e9d" name="matiere" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle" >
                  <option value="NONE">NONE</option>
                  <option <?php if($classes['matiere'] == 'CSS'){?> selected=true<?php } ?> value="CSS">CSS</option>
                  <option <?php if($classes['matiere'] == 'HTML'){?> selected=true<?php } ?> value="HTML">HTML</option>
                  <option <?php if($classes['matiere'] == 'PHP'){?> selected=true<?php } ?> value="PHP">PHP</option>
                  <option <?php if($classes['matiere'] == 'MATH'){?> selected=true<?php } ?> value="MATH">MATH</option>
                  <option <?php if($classes['matiere'] == 'ENGLISH'){?> selected=true<?php } ?> value="ENGLISH">ENGLISH</option>
                  <option <?php if($classes['matiere'] == 'FRENSH'){?> selected=true<?php } ?> value="FRENSH">FRENSH</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                  <path fill="currentColor" d="M4 8L0 4h8z"></path>
                </svg>
              </div>
            </div>
            <div class="u-form-date u-form-group u-form-group-4">
              <label for="date-4441" class="u-custom-font u-font-courier-new u-label u-label-4">Date</label>
              <input type="date" id="date-4441"  value="<?php echo $classes['datedebut'];?>" name="datedebut" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle" >
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="message-f2a8" class="u-custom-font u-font-courier-new u-label u-label-5">Duree</label>
              <input value="<?php echo $classes['duree']; ?>" placeholder="5" rows="4" cols="50" id="message-f2a8" name="duree" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-custom-font u-font-courier-new u-input u-input-rectangle" type="text">
            </div>
            <div class="u-align-center u-form-group u-form-submit u-form-group-6">
              <input type="submit" value="Save Class" class="u-border-2 u-border-palette-1-light-1 u-btn u-btn-round u-btn-submit u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-radius-14 u-btn-1">
            </div>
          </form>
        <?php
        }
        ?>
      </div>
    </div>
  </section>



  <footer class="u-clearfix u-footer u-grey-80" id="sec-623b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="612" data-image-height="792">
        <img src="../pics/talos.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3e42"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3e42">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7c73"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7c73">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-28c3"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-28c3">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5557"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5557">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
            </svg></span>
        </a>
      </div>
      <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
      <p class="u-align-center u-text u-text-1">Best Web site for online free learning</p>
    </div>
  </footer>
</body>

</html>