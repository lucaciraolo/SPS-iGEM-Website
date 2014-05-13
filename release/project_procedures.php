<!DOCTYPE html>

<html>
  <head>
    <meta charset='UTF-8'>
    <title>SPS iGEM Page</title>
    <?php require_once 'php/header_includes.php'; ?>
  </head>

  <body>
    <!--Start Navigation Bar-->
    <?php require_once 'php/navigation_bar.php'; ?>
    <!--End Navigation Bar-->

    <!--Start Main Content-->
    <div class='container'>

      <div class='page-header'>
        <h1>Procedures</h1>
      </div>

      <p>Our project involves various different digest, ligation, transformation, purification and extraction steps. The PDFs below illustrate which methods we used (and at which stage they were used) during the construction of our operons.</p>

      <h3>Operon 1</h3>
      <p>Fortunately, this entire operon came as one single BioBrick, allowing us to save a lot of time by simply using the agar stab sent to us by iGEM HQ (after we had incorrectly resuspended the lyophilised plasmid) as our operon-containing bacterium.</p>

      <h3>Operon 2</h3>
        <object data="images/Operon-2-Diagram.pdf" type="application/pdf" width="100%" height="500px">
          alt : <a href="images/Operon-2-Diagram.pdf">Operon-2-Diagram.pdf</a>
        </object>

      <h3>Operon 3</h3>
      <object data="images/Operon-3-Diagram.pdf" type="application/pdf" width="100%" height="500px">
        alt : <a href="images/Operon-3-Diagram.pdf">Operon-3-Diagram.pdf</a>
      </object>


    </div>
    <!--End Main Content-->

    <!--Start Scripts-->
    <?php require_once 'php/script_includes.php'; ?>
    <!--End Scripts-->
  </body>
</html>
