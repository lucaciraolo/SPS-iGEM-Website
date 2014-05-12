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

      <!-- Start Circuits Section -->
      <div class='page-header'>
        <h1>Circuits</h1>
      </div>

      <h3>Operon 1</h3>
      <img class='img-responsive center-block' src='images/Operon1.png'/>

      <h3>Operon 2</h3>
      <img class='img-responsive center-block' src='images/Operon2.png'/>

      <h3>Operon 3</h3>
      <img class='img-responsive center-block' src='images/Operon3.png'/>
      <!-- End Circuits Section -->

      <!-- Start Parts Section -->
      <div class='page-header'>
        <h1>Parts</h1>
      </div>

      <p>In our notebook and on our procedures sheet, we refer to parts by letter. The main reason for applying arbitrary letter coded to all parts was to facilitate labelling of plates and tubes. We have included a table (below) with the full BioBrick equivalent of each letter-coded part, as well as its function. This may help other teams looking at our circuits and procedures better understand which parts perform which function.</p>

      <div class='table-responsive'>
        <table class='table table-centered table-bordered'>
          <thead>
            <th colspan='2'>Operon</th>
            <th>Letter Code</th>
            <th>BioBrick Reference</th>
            <th>Function</th>
            <th>Length (bp)</th>
          </thead>

          <tbody>
            <tr>
              <td colspan='2' rowspan='3'>2</td>
              <td>J</td>
              <td><a href='http://partsregistry.org/wiki/index.php?title=Part:BBa_K091104'>BBa_K091104</a></td>
              <td>Promoter</td>
              <td>87</td>
            </tr>

            <tr>
              <td>K</td>
              <td><a href='http://partsregistry.org/Part:BBa_B0034'>BBa_B0034</a></td>
              <td>RBS</td>
              <td>12</td>
            </tr>

            <tr>
              <td>L</td>
              <td><a href='http://partsregistry.org/Part:BBa_E0030'>BBa_E0030</a></td>
              <td>YFP gene</td>
              <td>723</td>
            </tr>

            <tr>
              <td>2</td>
              <td>3</td>
              <td>C</td>
              <td><a href='http://partsregistry.org/Part:BBa_C0040'>BBa_C0040</a></td>
              <td>TetR gene</td>
              <td>685</td>
            </tr>

            <tr>
              <td>2</td>
              <td>3</td>
              <td>F</td>
              <td><a href='http://partsregistry.org/Part:BBa_B0015'>BBa_B0015</a></td>
              <td>Terminator</td>
              <td>129</td>
            </tr>

            <tr>
              <td colspan='2' rowspan='4'>3</td>
              <td>A</td>
              <td><a href='http://partsregistry.org/wiki/index.php?title=Part:BBa_K418003'>BBa_K418003</a></td>
              <td>Promoter</td>
              <td>1416</td>
            </tr>

            <tr>
              <td>B</td>
              <td><a href='http://partsregistry.org/Part:BBa_B0033'>BBa_B0033</a></td>
              <td>RBS</td>
              <td>11</td>
            </tr>

            <tr>
              <td>D</td>
              <td><a href='http://partsregistry.org/Part:BBa_C0072'>BBa_C0072</a></td>
              <td>mnt gene</td>
              <td>313</td>
            </tr>

            <tr>
              <td>E</td>
              <td><a href='http://partsregistry.org/wiki/index.php?title=Part:BBa_E1010'>BBa_E1010</a></td>
              <td>RFP gene</td>
              <td>706</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- End Parts Section -->

      <!-- Start Backbones Section -->
      <div class='page-header'>
        <h1>Backbones</h1>
      </div>

      <div class='table-responsive'>
        <table class='table table-centered table-bordered'>
          <thead>
            <th>Backbone</th>
            <th>Length (bp)</th>
          </thead>

          <tbody>
            <tr>
              <td>Ampicillin-Resistant</td>
              <td>2155</td>
            </tr>
            <tr>
              <td>Kanamycin-Resistant</td>
              <td>2204</td>
            </tr>
            <tr>
              <td>Chloramphenicol-Resistant</td>
              <td>2070</td>
            </tr>
            <tr>
              <td>Tetracycline-Resistant</td>
              <td>2461</td>
            </tr>
            <tr>
              <td>Ampicillin &amp; Kanamycin-Resistant</td>
              <td>3189</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
    <!--End Main Content-->

    <!--Start Scripts-->
    <?php require_once 'php/script_includes.php'; ?>
    <!--End Scripts-->
  </body>
</html>
