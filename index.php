<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<html>

<head>
  <title><?php echo $app->getCfg('sitename');?></title>
<script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/JavaScript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/lia_foto.js"></script>
  
<jdoc:include type="head" /><!-- deze positie moet in elke template, zorgt namelijk voor metadata enzo -->

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33838492-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>


<body bgcolor="#FFFFFF">
<div id="wrapper">
  
  <!-- header website -->
  <div id="header">
      <div id="logo">
        <jdoc:include type="modules" name="lia_logo" />
        <!--
        <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo_02.png"   
             alt="Lia Dameskleding" 
        />
        -->
      </div>
    
    <div id="nieuwsbrief">
    <jdoc:include type="modules" name="lia_nieuwsbrief" />
    </div>
  </div>
  
  <!-- navigation website -->
  <div id="nav_container">
    <jdoc:include type="modules" name="lia_navigatie" />
  </div>
  
  <!-- content website -->
  <div id="content">
    <div class="contentpics"><jdoc:include type="modules" name="lia_topfotos" /></div>
    
    <div id="contentforall">
      <jdoc:include type="component" />
    </div>
  <div class="contentpics_fotogallerij"><jdoc:include type="modules" name="lia_collectie_fotogallerij" /></div>
  </div>
  
  <!-- footer website -->
  <div id="footer">
    
      
    <div id="contactinfo">
      <jdoc:include type="modules" name="lia_contact" />
    </div>
  
<div id="lia"><jdoc:include type="modules" name="lia_verkoopster" /></div>
</div>
  


</div>
  
</body>
</html>