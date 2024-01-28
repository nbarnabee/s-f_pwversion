<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
$home = $pages->get('/'); /** @var HomePage $home */

?>
<!DOCTYPE html>
<html lang="en">

<head id="html-head">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title><?php echo $page->title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
  <script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
</head>

<body id="html-body">

  <nav id="topnav"></nav>

  <header>
    <h1>Schwert & Feder</h1>
    <p>Spielclub Düdingen</p>
  </header>


  <div id="content">

  </div>

  <footer>
    Footer goes here.
  </footer>

</body>

</html>