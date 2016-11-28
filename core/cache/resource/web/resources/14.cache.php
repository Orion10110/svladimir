<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 14,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Новости',
    'longtitle' => 'Новости',
    'description' => '',
    'alias' => 'novosti',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 5,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1479723051,
    'editedby' => 1,
    'editedon' => 1480061037,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1478686200,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'novosti/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
       <base href="http://svladimir/">
  <title>Новости</title>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar-wrapper">
     <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
         <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>
       </div>
       <div class="navbar-collapse collapse">
        [[!Wayfinder? 
      &startId=`0` 
      &outerTpl=`menuOuter` 
      &rowTpl=`menuRow` 
      &innerTpl=`menuInner` 
      &innerRowTpl=`InnerRow` 
      &hereClass=`current_page_item` 
      &firstClass=`` 
      &lastClass =`` ]]
      </div>
       
    </div>
  </div><!-- /container -->
</nav><!-- /navbar wrapper -->



  <div class="container">

    <div  class="jumbotron jumbotron-fluid">
     <div class="jumb-up">
       <h1 class="jumb">Приход храма Святого равноапостольного князя Владимира</h1>

     </div>
   </div>

 </div>
 


    <main>
        <div class="container">
            <div class="container-fluid">
                <div class="row-fluid">
                     <div class="col-md-3">


                    <button type="button" id="toggle-display" class="hidd btn right">
                         <i class="fa fa-bars" aria-hidden="true"></i> 
                   </button>
                  
         
              <div id="toggle-sc" class="toggle-side">
            <div class="well sidebar-nav">
                  [[!SimpleSearchForm? 
                &tpl=`simpleSearchFormSide` 
                &landing=`268`]]
                   </br>
                <ul class="nav nav-list">
                 <li class="nav-header">Навигация</li>
            
                [[!getResources?
                    &showHidden=`1`
                    &tpl=`sidebar_tpl`
                    &limit=`20`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]]
                            </ul>
            </div><!--/.well -->  
            <div class="well sidebar-nav">
                <h4 class="nav-header ">Последние новости </h4>
            [[!getResources?
              &showHidden=`1`
              &tpl=`last_news_tpl`
              &limit=`3`
              &sortby=`{"publishedon":"DESC"}`
              &includeContent=`1`
              &includeTVs=`1`
              &processTVs=`1`
              &tvPrefix=``
              &parents=`14`
              &hideContainers=`1`]] 
            </div>
             <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li  class="nav-header"> Обзор интерьера Владимирской Церкви</li> 
                     <li ><a href="http://www.360cities.net/image/vladimirchurch-inside"> Обзор интерьера Владимирской Церкви</a></li> 
       </ul>
     
            </div>
      </div><!--/.well -->
      </div>
    </div><!--/span-->
                    <div class="col-md-9">
                        <div class="row-fluid">
                         <div><ol class="breadcrumb"><li><a href="http://svladimir/">Главная</a></li><li class="active">Новости</li> </ol></div>
<h2>Новости</h2>
                          
                          
                              [[!getPage@articlePaging?
                              &elementClass=`modSnippet`
                              &element=`getResources`
                              &showHidden=`1`
                              &sortby=`{"publishedon":"DESC"}`
                              &tpl=`news_preview_tpl`
                              &limit=`10`
                              &includeContent=`1`
                              &includeTVs=`1`
                              &processTVs=`1`
                              &tvPrefix=``
                              &depth=`0`
                              &parents=`14`
                              &hideContainers=`0`]]
                               
                               
                                 <ul class="pagination">
                            [[!+page.nav]]
                            
                            
                
                            </ul>
                           
              
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main>
  <hr>

  <footer>
    <div class="centre-margin">
[[!getResources?
                    &showHidden=`1`
                    &tpl=`@INLINE <a  href= class="">[[+pagetitle]]</a>`
                    &limit=`0`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]] 
                    </div>
</footer>





  <script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $("a>img").parent().attr("rel","gallery")
		$("a>img").parent().fancybox({
    	helpers : {
    		title : {
    			type : \'over\'
    		}
    	}
    });
     $(\'#toggle-display\').click(function() {
    $(\'#toggle-sc\').toggleClass(\'toggle-side\');
  });


	});
</script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Новости',
    '[[$meta]]' => '  <base href="http://svladimir/">
  <title>Новости</title>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">',
    '[[$navbar]]' => '  <nav class="navbar-wrapper">
     <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
         <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>
       </div>
       <div class="navbar-collapse collapse">
        [[!Wayfinder? 
      &startId=`0` 
      &outerTpl=`menuOuter` 
      &rowTpl=`menuRow` 
      &innerTpl=`menuInner` 
      &innerRowTpl=`InnerRow` 
      &hereClass=`current_page_item` 
      &firstClass=`` 
      &lastClass =`` ]]
      </div>
       
    </div>
  </div><!-- /container -->
</nav><!-- /navbar wrapper -->',
    '[[$jumbotron]]' => '<div class="container">

    <div  class="jumbotron jumbotron-fluid">
     <div class="jumb-up">
       <h1 class="jumb">Приход храма Святого равноапостольного князя Владимира</h1>

     </div>
   </div>

 </div>',
    '[[$sidebar]]' => ' <div class="col-md-3">


                    <button type="button" id="toggle-display" class="hidd btn right">
                         <i class="fa fa-bars" aria-hidden="true"></i> 
                   </button>
                  
         
              <div id="toggle-sc" class="toggle-side">
            <div class="well sidebar-nav">
                  [[!SimpleSearchForm? 
                &tpl=`simpleSearchFormSide` 
                &landing=`268`]]
                   </br>
                <ul class="nav nav-list">
                 <li class="nav-header">Навигация</li>
            
                [[!getResources?
                    &showHidden=`1`
                    &tpl=`sidebar_tpl`
                    &limit=`20`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]]
                            </ul>
            </div><!--/.well -->  
            <div class="well sidebar-nav">
                <h4 class="nav-header ">Последние новости </h4>
            [[!getResources?
              &showHidden=`1`
              &tpl=`last_news_tpl`
              &limit=`3`
              &sortby=`{"publishedon":"DESC"}`
              &includeContent=`1`
              &includeTVs=`1`
              &processTVs=`1`
              &tvPrefix=``
              &parents=`14`
              &hideContainers=`1`]] 
            </div>
             <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li  class="nav-header"> Обзор интерьера Владимирской Церкви</li> 
                     <li ><a href="http://www.360cities.net/image/vladimirchurch-inside"> Обзор интерьера Владимирской Церкви</a></li> 
       </ul>
     
            </div>
      </div><!--/.well -->
      </div>
    </div><!--/span-->',
    '[[BreadCrumb? 
    &containerTpl=`@INLINE <ol class="breadcrumb">[[+crumbs]] </ol>`
    &linkCrumbTpl=`@INLINE <li><a href=\'[[+link]]\' >[[+pagetitle]]</a></li>`
    &currentCrumbTpl=`@INLINE <li class="active">[[+pagetitle]]</li>`
    ]]' => '<ol class="breadcrumb"><li><a href="http://svladimir/">Главная</a></li><li class="active">Новости</li> </ol>',
    '[[$bread]]' => '<ol class="breadcrumb"><li><a href="http://svladimir/">Главная</a></li><li class="active">Новости</li> </ol>',
    '[[*longtitle]]' => 'Новости',
    '[[$page_title]]' => '<div><ol class="breadcrumb"><li><a href="http://svladimir/">Главная</a></li><li class="active">Новости</li> </ol></div>
<h2>Новости</h2>',
    '[[*id]]' => 14,
    '[[$footer]]' => '<footer>
    <div class="centre-margin">
[[!getResources?
                    &showHidden=`1`
                    &tpl=`@INLINE <a  href= class="">[[+pagetitle]]</a>`
                    &limit=`0`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]] 
                    </div>
</footer>',
    '[[$scripts]]' => '<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $("a>img").parent().attr("rel","gallery")
		$("a>img").parent().fancybox({
    	helpers : {
    		title : {
    			type : \'over\'
    		}
    	}
    });
     $(\'#toggle-display\').click(function() {
    $(\'#toggle-sc\').toggleClass(\'toggle-side\');
  });


	});
</script>',
    '[[~268]]' => 'poisk.html',
    '[[~1]]' => 'http://svladimir/',
    '[[~14]]' => 'novosti/',
    '[[~3]]' => 'raspisanie-bogosluzhenij.html',
    '[[~4]]' => 'klir.html',
    '[[~2]]' => 'istoriya-prixoda.html',
    '[[~5]]' => 'bratstvo/',
    '[[~6]]' => 'videogalereya/',
    '[[~7]]' => 'soczialnaya-deyatelnost-bratstva/',
    '[[~8]]' => 'fotogalereya-vladimirskoj-czerkvi/',
    '[[~9]]' => 'xor/',
    '[[~10]]' => 'voskresnaya-shkola-pri-svyato-vladimirskoj-czerkvi.html',
    '[[~11]]' => 'voenno-patrioticheskij-klub-«vityaz».html',
    '[[~12]]' => 'ssyilki.html',
    '[[~13]]' => 'kontaktyi.html',
    '[[~251]]' => 'raspolozhenie-xrama.html',
    '[[~205]]' => 'novosti/19-oktyabrya-v-chitalnom-zale.html',
    '[[~211]]' => 'novosti/v-prazdnik-useknoveniya-glavyi.html',
    '[[~210]]' => 'novosti/11-sentyabrya.html',
    '[[~209]]' => 'novosti/25-sentyabrya.html',
    '[[~204]]' => 'novosti/v-subbotu-1-oktyabrya-bratchiki-svyato-vladimirskogo.html',
    '[[~190]]' => 'novosti/bratstvo-prixoda-v-chest-kirilla-i-mefodiya.html',
    '[[~173]]' => 'novosti/vruchenie-svidetelstv-okonchaniya.html',
    '[[~161]]' => 'novosti/dorogie-bratya-i-sestryi!-serdechno-pozdravlyaem-s-dnem-pamyati-svyatogo-ravnoapostolnogo-velikogo-knyazya-vladimira-i-s-dnem-kreshheniya-rusi!.html',
    '[[~148]]' => 'novosti/liturgiya-dlya-lyudej-s-osobennostyami-psixofizicheskogo-razvitiya.html',
    '[[~137]]' => 'novosti/palomnichestvo-vospitannikov-voskresnoj-shkolyi-xrama-svyatogo-ravnoapostolnogo.html',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`437ec9886944a958cbfcfe0e84002912`&pageCount=`18`&href=`novosti/`&pageNo=`1`]]' => '<li class="active"><a href="novosti/">1</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`3e3cd89677fff40310ca853704633287`&pageCount=`18`&href=`novosti/?page=2`&pageNo=`2`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=2">2</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`07ae1b7f98110aa94ae6227ab743fe25`&pageCount=`18`&href=`novosti/?page=3`&pageNo=`3`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=3">3</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`d6170d95b8b6769c10c10011ffde60fe`&pageCount=`18`&href=`novosti/?page=4`&pageNo=`4`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=4">4</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`6dce7704cc267cc0f242f197f665d12b`&pageCount=`18`&href=`novosti/?page=5`&pageNo=`5`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=5">5</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`3c4aa93d3d734bcb67bbffa137e96f35`&pageCount=`18`&href=`novosti/?page=6`&pageNo=`6`]]' => '<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=6">6</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`626581f8d4adc7f7bb116ff95dc8843b`&pageCount=`18`&href=`novosti/?page=2`&pageNo=`2`]]' => '<li class="control"><a[[+classes]][[+title]] href="novosti/?page=2">&gt;&gt;</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`733f5892dcb13784746d1d95a7f78e07`&pageCount=`18`&href=`novosti/?page=18`&pageNo=`18`]]' => '<li class="control"><a[[+classes]][[+title]] href="novosti/?page=18">Последняя</a></li>',
    '[[$?namespace=``&limit=`10`&offset=`0`&page=`1`&pageVarKey=`page`&totalVar=`total`&pageLimit=`5`&elementClass=`modSnippet`&pageNavVar=`page.nav`&pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`&pageNavOuterTpl=`[[+prev]][[+pages]][[+next]]`&pageActiveTpl=`<li class="active"><a href="[[+href]]">[[+pageNo]]</a></li>`&pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Первая</a></li>`&pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Последняя</a></li>`&pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`&pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`&cache=``&cache_key=`resource`&cache_handler=`xPDOFileCache`&cache_expires=`0`&pageNavScheme=``&element=`getResources`&showHidden=`1`&sortby=`{"publishedon":"DESC"}`&tpl=`news_preview_tpl`&includeContent=`1`&includeTVs=`1`&processTVs=`1`&tvPrefix=``&depth=`0`&parents=`14`&hideContainers=`0`&total=`174`&pageOneLimit=`10`&actualLimit=`10`&toPlaceholder=``&qs=`de1a701ba13c9776282f7575158cc29b`&pageCount=`18`&pages=`<li class="active"><a href="novosti/">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=2">2</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=3">3</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=4">4</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=5">5</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=6">6</a></li>`&next=`<li class="control"><a[[+classes]][[+title]] href="novosti/?page=2">&gt;&gt;</a></li>`&last=`<li class="control"><a[[+classes]][[+title]] href="novosti/?page=18">Последняя</a></li>`]]' => '[[+prev]]<li class="active"><a href="novosti/">1</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=2">2</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=3">3</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=4">4</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=5">5</a></li>
<li[[+classes]]><a[[+classes]][[+title]] href="novosti/?page=6">6</a></li><li class="control"><a[[+classes]][[+title]] href="novosti/?page=2">&gt;&gt;</a></li>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'meta' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'meta',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '  <base href="[[++site_url]]">
  <title>[[*pagetitle]]</title>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <base href="[[++site_url]]">
  <title>[[*pagetitle]]</title>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'navbar' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'navbar',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '  <nav class="navbar-wrapper">
     <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
         <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>
       </div>
       <div class="navbar-collapse collapse">
        [[!Wayfinder? 
      &startId=`0` 
      &outerTpl=`menuOuter` 
      &rowTpl=`menuRow` 
      &innerTpl=`menuInner` 
      &innerRowTpl=`InnerRow` 
      &hereClass=`current_page_item` 
      &firstClass=`` 
      &lastClass =`` ]]
      </div>
       
    </div>
  </div><!-- /container -->
</nav><!-- /navbar wrapper -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '  <nav class="navbar-wrapper">
     <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">

        <div class="navbar-header">
         <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>
       </div>
       <div class="navbar-collapse collapse">
        [[!Wayfinder? 
      &startId=`0` 
      &outerTpl=`menuOuter` 
      &rowTpl=`menuRow` 
      &innerTpl=`menuInner` 
      &innerRowTpl=`InnerRow` 
      &hereClass=`current_page_item` 
      &firstClass=`` 
      &lastClass =`` ]]
      </div>
       
    </div>
  </div><!-- /container -->
</nav><!-- /navbar wrapper -->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'jumbotron' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'jumbotron',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<div class="container">

    <div  class="jumbotron jumbotron-fluid">
     <div class="jumb-up">
       <h1 class="jumb">Приход храма Святого равноапостольного князя Владимира</h1>

     </div>
   </div>

 </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">

    <div  class="jumbotron jumbotron-fluid">
     <div class="jumb-up">
       <h1 class="jumb">Приход храма Святого равноапостольного князя Владимира</h1>

     </div>
   </div>

 </div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'sidebar' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'sidebar',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => ' <div class="col-md-3">


                    <button type="button" id="toggle-display" class="hidd btn right">
                         <i class="fa fa-bars" aria-hidden="true"></i> 
                   </button>
                  
         
              <div id="toggle-sc" class="toggle-side">
            <div class="well sidebar-nav">
                  [[!SimpleSearchForm? 
                &tpl=`simpleSearchFormSide` 
                &landing=`268`]]
                   </br>
                <ul class="nav nav-list">
                 <li class="nav-header">Навигация</li>
            
                [[!getResources?
                    &showHidden=`1`
                    &tpl=`sidebar_tpl`
                    &limit=`20`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]]
                            </ul>
            </div><!--/.well -->  
            <div class="well sidebar-nav">
                <h4 class="nav-header ">Последние новости </h4>
            [[!getResources?
              &showHidden=`1`
              &tpl=`last_news_tpl`
              &limit=`3`
              &sortby=`{"publishedon":"DESC"}`
              &includeContent=`1`
              &includeTVs=`1`
              &processTVs=`1`
              &tvPrefix=``
              &parents=`14`
              &hideContainers=`1`]] 
            </div>
             <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li  class="nav-header"> Обзор интерьера Владимирской Церкви</li> 
                     <li ><a href="http://www.360cities.net/image/vladimirchurch-inside"> Обзор интерьера Владимирской Церкви</a></li> 
       </ul>
     
            </div>
      </div><!--/.well -->
      </div>
    </div><!--/span-->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <div class="col-md-3">


                    <button type="button" id="toggle-display" class="hidd btn right">
                         <i class="fa fa-bars" aria-hidden="true"></i> 
                   </button>
                  
         
              <div id="toggle-sc" class="toggle-side">
            <div class="well sidebar-nav">
                  [[!SimpleSearchForm? 
                &tpl=`simpleSearchFormSide` 
                &landing=`268`]]
                   </br>
                <ul class="nav nav-list">
                 <li class="nav-header">Навигация</li>
            
                [[!getResources?
                    &showHidden=`1`
                    &tpl=`sidebar_tpl`
                    &limit=`20`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]]
                            </ul>
            </div><!--/.well -->  
            <div class="well sidebar-nav">
                <h4 class="nav-header ">Последние новости </h4>
            [[!getResources?
              &showHidden=`1`
              &tpl=`last_news_tpl`
              &limit=`3`
              &sortby=`{"publishedon":"DESC"}`
              &includeContent=`1`
              &includeTVs=`1`
              &processTVs=`1`
              &tvPrefix=``
              &parents=`14`
              &hideContainers=`1`]] 
            </div>
             <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li  class="nav-header"> Обзор интерьера Владимирской Церкви</li> 
                     <li ><a href="http://www.360cities.net/image/vladimirchurch-inside"> Обзор интерьера Владимирской Церкви</a></li> 
       </ul>
     
            </div>
      </div><!--/.well -->
      </div>
    </div><!--/span-->',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'page_title' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'page_title',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div>[[$bread]]</div>
<h2>[[*longtitle]]</h2>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div>[[$bread]]</div>
<h2>[[*longtitle]]</h2>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'bread' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'bread',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[BreadCrumb? 
    &containerTpl=`@INLINE <ol class="breadcrumb">[[+crumbs]] </ol>`
    &linkCrumbTpl=`@INLINE <li><a href=\'[[+link]]\' >[[+pagetitle]]</a></li>`
    &currentCrumbTpl=`@INLINE <li class="active">[[+pagetitle]]</li>`
    ]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[BreadCrumb? 
    &containerTpl=`@INLINE <ol class="breadcrumb">[[+crumbs]] </ol>`
    &linkCrumbTpl=`@INLINE <li><a href=\'[[+link]]\' >[[+pagetitle]]</a></li>`
    &currentCrumbTpl=`@INLINE <li class="active">[[+pagetitle]]</li>`
    ]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<footer>
    <div class="centre-margin">
[[!getResources?
                    &showHidden=`1`
                    &tpl=`@INLINE <a  href=[[~[[+id]]]] class="">[[+pagetitle]]</a>`
                    &limit=`0`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]] 
                    </div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
    <div class="centre-margin">
[[!getResources?
                    &showHidden=`1`
                    &tpl=`@INLINE <a  href=[[~[[+id]]]] class="">[[+pagetitle]]</a>`
                    &limit=`0`
                    &sortby=`{"menuindex":"ASC"}`
                    &includeTVs=`1`
                    &processTVs=`1`
                    &parents=`0`
                    &hideContainers=`0`
                    &depth=`0`
                    ]] 
                    </div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $("a>img").parent().attr("rel","gallery")
		$("a>img").parent().fancybox({
    	helpers : {
    		title : {
    			type : \'over\'
    		}
    	}
    });
     $(\'#toggle-display\').click(function() {
    $(\'#toggle-sc\').toggleClass(\'toggle-side\');
  });


	});
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $("a>img").parent().attr("rel","gallery")
		$("a>img").parent().fancybox({
    	helpers : {
    		title : {
    			type : \'over\'
    		}
    	}
    });
     $(\'#toggle-display\').click(function() {
    $(\'#toggle-sc\').toggleClass(\'toggle-side\');
  });


	});
</script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'BreadCrumb' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'BreadCrumb',
          'description' => 'This snippet will create a breadcrumb navigation for the current resource or a specific resource.',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'breadcrumb_snippet_from_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the first crumb.',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'breadcrumb_snippet_to_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the last crumb.',
              'area_trans' => '',
            ),
            'maxCrumbs' => 
            array (
              'name' => 'maxCrumbs',
              'desc' => 'breadcrumb_snippet_maxcrumbs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max crumbs shown in breadcrumb',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'breadcrumb_snippet_showhidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show hidden resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showContainer' => 
            array (
              'name' => 'showContainer',
              'desc' => 'breadcrumb_snippet_showcontainer_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show container resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showUnPub' => 
            array (
              'name' => 'showUnPub',
              'desc' => 'breadcrumb_snippet_showunpub_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showCurrentCrumb' => 
            array (
              'name' => 'showCurrentCrumb',
              'desc' => 'breadcrumb_snippet_showcurrentcrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show current resource as a crumb.',
              'area_trans' => '',
            ),
            'showBreadCrumbAtHome' => 
            array (
              'name' => 'showBreadCrumbAtHome',
              'desc' => 'breadcrumb_snippet_showbreadcrumbatHome_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show BreadCrumb on the home page.',
              'area_trans' => '',
            ),
            'showHomeCrumb' => 
            array (
              'name' => 'showHomeCrumb',
              'desc' => 'breadcrumb_snippet_showhomecrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show the home page as a crumb.',
              'area_trans' => '',
            ),
            'useWebLinkUrl' => 
            array (
              'name' => 'useWebLinkUrl',
              'desc' => 'breadcrumb_snippet_useweblinkurl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Use the weblink url instead of the url to the weblink.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'breadcrumb_snippet_direction_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => ' Right To Left (rtl)',
                  'name' => ' Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'breadcrumb_snippet_scheme_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'URL Generation Scheme.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'breadcrumb_snippet_containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Container template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'homeCrumbTpl' => 
            array (
              'name' => 'homeCrumbTpl',
              'desc' => 'breadcrumb_snippet_homecrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Home crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'currentCrumbTpl' => 
            array (
              'name' => 'currentCrumbTpl',
              'desc' => 'breadcrumb_snippet_currentcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>[[+pagetitle]]</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Current crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'linkCrumbTpl' => 
            array (
              'name' => 'linkCrumbTpl',
              'desc' => 'breadcrumb_snippet_linkcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'categoryCrumbTpl' => 
            array (
              'name' => 'categoryCrumbTpl',
              'desc' => 'breadcrumb_snippet_categorycrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default category crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
            'maxCrumbTpl' => 
            array (
              'name' => 'maxCrumbTpl',
              'desc' => 'breadcrumb_snippet_maxcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@INLINE <li>...</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max delimiter crumb template for BreadCrumb. Can be file (@FILE ), code (@INLINE ) or chunk name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.4.3 pl
 * 07/03/15
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property exclude - (string) Comma separated list of resources IDs not shown in breadcrumb. [Default value : []]
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Add the home page crumb at the start of the breadcrumb; [Default value : true].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property categoryCrumbTpl - (string) Default category crumb template for BreadCrumb; [Default value : BreadCrumbCategoryCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = !empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true);
$exclude              = !empty($exclude) ? explode(\',\', $exclude) : array();
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, true, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@INLINE <ul id="breadcrumb" itemprop="breadcrumb">[[+crumbs]]</ul>\');
$homeCrumbTpl         = !empty($homeCrumbTpl) ? $homeCrumbTpl : $modx->getOption(\'homeCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@INLINE <li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'linkCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$categoryCrumbTpl     = !empty($categoryCrumbTpl) ? $categoryCrumbTpl : $modx->getOption(\'categoryCrumbTpl\', $scriptProperties, \'@INLINE <li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'maxCrumbTpl\', $scriptProperties, \'@INLINE <li>...</li>\');

// include parseTpl
include_once $modx->getOption(\'breadcrumb.core_path\',null,$modx->getOption(\'core_path\').\'components/breadcrumb/includes/\').\'include.parsetpl.php\';

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if (!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\')) {
    return \'\';
}

// We get all the other crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while ($resourceId != $from && $crumbsCount < $maxCrumbs)
{
    if (!$resource = $modx->getObject(\'modResource\', $resourceId)) {
        break;
    }

    // We check the conditions to show crumb
    if (
        $resourceId != $modx->getOption(\'site_start\')                                                                           // ShowHomeCrumb
        && (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))                                         // ShowHidden
        && (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))                                      // ShowContainer
        && ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\'))                                        // UnPub
        && (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)                      // ShowCurrent
        && !in_array($resourceId, $exclude)                                                                                     // Excluded resources
    ) {
        // If is LTR direction, we push resource at the beginning of the array
        if ($direction == \'ltr\') {
            array_unshift($crumbs, $resource);
        }
        // Else we push it at the end
        else {
            $crumbs[] = $resource;
        }

        $crumbsCount++;
    }
    $resourceId = $resource->get(\'parent\');
}

// Add home crumb
if ($showHomeCrumb && $resource = $modx->getObject(\'modResource\', $modx->getOption(\'site_start\'))) {
    if ($direction == \'ltr\') {
        array_unshift($crumbs, $resource);
    } else {
        $crumbs[] = $resource;
    }
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
    // Home crumb tpl ?
    if ($resource->get(\'id\') == $modx->getOption(\'site_start\'))
    {
        $tpl = $homeCrumbTpl;
    }
    // Current crumb tpl ?
    elseif ($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
    {
        $tpl = $currentCrumbTpl;
    }
    // resource is a container only, calculated in a similar manner to Wayfinder
    elseif ($resource->get(\'isfolder\')
        && ( $resource->get(\'template\') == 0
            || strpos($resource->get(\'link_attributes\'), \'rel="category"\') !== false
            )
    ) {
        $tpl = $categoryCrumbTpl;
    }
    // or default crumb tpl ?
    else {
        $tpl = $linkCrumbTpl;
    }

    // Placeholders
    $placeholders = $resource->toArray();
    if ($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl) {
        if (is_numeric($resource->get(\'content\'))) {
            $link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
        } else {
            $link = $resource->get(\'content\');
        }
    } else {
        $link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
    }
    $placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

    // Output
    $output .= parseTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if ($crumbsCount == $maxCrumbs) {
    // If is LTR direction, we push the max delimiter at the beginning of the crumbs
    if ($direction == \'ltr\') {
        $output = parseTpl($maxCrumbTpl).$output;
    }
    // Else we push it at the end
    else {
        $output .= parseTpl($maxCrumbTpl);
    }
}

// We build the breadcrumb output
$output = parseTpl($containerTpl, array(
    \'crumbs\' => $output,
));

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'getResources' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResources',
          'description' => '<strong>1.6.1-pl</strong> A general purpose Resource listing and summarization snippet for MODX Revolution',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'An optional type to indicate how to sort on the Template Variable value.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'string',
                  'value' => 'string',
                  'name' => 'string',
                ),
                1 => 
                array (
                  'text' => 'integer',
                  'value' => 'integer',
                  'name' => 'integer',
                ),
                2 => 
                array (
                  'text' => 'decimal',
                  'value' => 'decimal',
                  'name' => 'decimal',
                ),
                3 => 
                array (
                  'text' => 'datetime',
                  'value' => 'datetime',
                  'name' => 'datetime',
                ),
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional type to indicate how to sort on the Template Variable value.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'Query alias for sortby field. Defaults to an empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Order which to sort by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'Limits the number of resources returned. Defaults to 5.',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 5.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'An offset of resources returned by the criteria to skip.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'type' => 'textfield',
              'options' => '',
              'value' => '||',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'area_trans' => '',
            ),
            'prepareTVList' => 
            array (
              'name' => 'prepareTVList',
              'desc' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'area_trans' => '',
            ),
            'dbCacheFlag' => 
            array (
              'name' => 'dbCacheFlag',
              'desc' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2013, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplCondition - (Opt) Defines a field of the resource to evaluate against keys defined in the
 * conditionalTpls property. Must be a resource field; does not work with Template Variables.
 * conditionalTpls - (Opt) A JSON object defining a map of field values and the associated tpl to
 * use when the field defined by tplCondition matches the value. [NOTE: tplOdd, tplFirst, tplLast,
 * and tpl_{n} will take precedence over any defined conditionalTpls]
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) >= 2) {
                if (count($f) > 2) {
                    $k = array_shift($f);
                    $b = join($operator, $f);
                    $f = array($k, $b);
                }
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) || $idx === \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = false;
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if ($resourceTpl === false && !empty($debug)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array_merge($scriptProperties, array(\'output\' => $output)));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'getPage' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getPage',
          'description' => '<b>1.2.4-pl</b> A generic wrapper snippet for returning paged results and navigation from snippets that return limitable collections.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'The key of a property that indicates the current page.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'The maximum number of pages to display when rendering paging controls',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'The class of element that will be called by the getPage snippet instance.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'Content representing a single page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageNavOuterTpl' => 
            array (
              'name' => 'pageNavOuterTpl',
              'desc' => 'Content representing the layout of the page navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the layout of the page navigation controls.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'Content representing the current page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'Content representing the first page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'Content representing the last page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'Content representing the previous page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'Content representing the next page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'If true, unique page requests will be cached according to addition cache properties.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, unique page requests will be cached according to addition cache properties.',
              'area_trans' => '',
            ),
            'cache_key' => 
            array (
              'name' => 'cache_key',
              'desc' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'area_trans' => '',
            ),
            'cache_handler' => 
            array (
              'name' => 'cache_handler',
              'desc' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'area_trans' => '',
            ),
            'cache_expires' => 
            array (
              'name' => 'cache_expires',
              'desc' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'area_trans' => '',
            ),
            'pageNavScheme' => 
            array (
              'name' => 'pageNavScheme',
              'desc' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[$properties[\'totalVar\']] = !empty($properties[$properties[\'totalVar\']]) && $total = intval($properties[$properties[\'totalVar\']]) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()) . http_build_query($scriptProperties));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[$properties[\'totalVar\']] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[$properties[\'totalVar\']]);
    if (!empty($properties[$properties[\'totalVar\']]) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[$properties[\'totalVar\']] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[$properties[\'totalVar\']] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[$properties[\'totalVar\']]) || empty($properties[\'actualLimit\']) || $properties[$properties[\'totalVar\']] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[$properties[\'totalVar\']] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }

    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'phpthumbof' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'phpthumbof',
          'description' => 'A custom output filter that generates thumbnails securely with phpThumb.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * A custom output filter for phpThumb
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var phpThumbOf $phpThumbOf
 * @var string $input
 * @var string|array $options
 *
 * @package phpthumbof
 */
if (empty($modx)) return \'\';
if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class.\');
    return \'\';
}
if (empty($input)) {
    $modx->log(modX::LOG_LEVEL_DEBUG,\'[phpThumbOf] Empty image path passed, aborting.\');
    return \'\';
}
$modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
require_once $modelPath.\'phpthumbof/phpthumbof.class.php\';
$phpThumbOf = new phpThumbOf($modx,$scriptProperties);

$phpThumbOf->getCacheDirectory();
$phpThumbOf->ensureCacheDirectoryIsWritable();

$thumbnail = $phpThumbOf->createThumbnailObject();
$thumbnail->setInput($input);
$thumbnail->setOptions($options);
$thumbnail->initializeService();
return $thumbnail->render();',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * phpThumbOf
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * phpThumbOf is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * phpThumbOf is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package phpthumbof
 */
/**
 * A custom output filter for phpThumb
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var phpThumbOf $phpThumbOf
 * @var string $input
 * @var string|array $options
 *
 * @package phpthumbof
 */
if (empty($modx)) return \'\';
if (!$modx->loadClass(\'modPhpThumb\',$modx->getOption(\'core_path\').\'model/phpthumb/\',true,true)) {
    $modx->log(modX::LOG_LEVEL_ERROR,\'[phpThumbOf] Could not load modPhpThumb class.\');
    return \'\';
}
if (empty($input)) {
    $modx->log(modX::LOG_LEVEL_DEBUG,\'[phpThumbOf] Empty image path passed, aborting.\');
    return \'\';
}
$modelPath = $modx->getOption(\'phpthumbof.core_path\',null,$modx->getOption(\'core_path\').\'components/phpthumbof/\').\'model/\';
require_once $modelPath.\'phpthumbof/phpthumbof.class.php\';
$phpThumbOf = new phpThumbOf($modx,$scriptProperties);

$phpThumbOf->getCacheDirectory();
$phpThumbOf->ensureCacheDirectoryIsWritable();

$thumbnail = $phpThumbOf->createThumbnailObject();
$thumbnail->setInput($input);
$thumbnail->setOptions($options);
$thumbnail->initializeService();
return $thumbnail->render();',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'If' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'If',
          'description' => 'Simple if (conditional) snippet',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'subject' => 
            array (
              'name' => 'subject',
              'desc' => 'The data being affected.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The data being affected.',
              'area_trans' => '',
            ),
            'operator' => 
            array (
              'name' => 'operator',
              'desc' => 'The type of conditional.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'EQ',
                  'text' => 'EQ',
                  'name' => 'EQ',
                ),
                1 => 
                array (
                  'value' => 'NEQ',
                  'text' => 'NEQ',
                  'name' => 'NEQ',
                ),
                2 => 
                array (
                  'value' => 'LT',
                  'text' => 'LT',
                  'name' => 'LT',
                ),
                3 => 
                array (
                  'value' => 'GT',
                  'text' => 'GT',
                  'name' => 'GT',
                ),
                4 => 
                array (
                  'value' => 'LTE',
                  'text' => 'LTE',
                  'name' => 'LTE',
                ),
                5 => 
                array (
                  'value' => 'GT',
                  'text' => 'GTE',
                  'name' => 'GTE',
                ),
                6 => 
                array (
                  'value' => 'EMPTY',
                  'text' => 'EMPTY',
                  'name' => 'EMPTY',
                ),
                7 => 
                array (
                  'value' => 'NOTEMPTY',
                  'text' => 'NOTEMPTY',
                  'name' => 'NOTEMPTY',
                ),
                8 => 
                array (
                  'value' => 'ISNULL',
                  'text' => 'ISNULL',
                  'name' => 'ISNULL',
                ),
                9 => 
                array (
                  'value' => 'inarray',
                  'text' => 'INARRAY',
                  'name' => 'INARRAY',
                ),
              ),
              'value' => 'EQ',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The type of conditional.',
              'area_trans' => '',
            ),
            'operand' => 
            array (
              'name' => 'operand',
              'desc' => 'When comparing to the subject, this is the data to compare to.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'When comparing to the subject, this is the data to compare to.',
              'area_trans' => '',
            ),
            'then' => 
            array (
              'name' => 'then',
              'desc' => 'If conditional was successful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was successful, output this.',
              'area_trans' => '',
            ),
            'else' => 
            array (
              'name' => 'else',
              'desc' => 'If conditional was unsuccessful, output this.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If conditional was unsuccessful, output this.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Will output the parameters passed in, as well as the end output. Leave off when not testing.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * If
 *
 * Copyright 2009-2010 by Jason Coward <jason@modx.com> and Shaun McCormick
 * <shaun@modx.com>
 *
 * If is free software; you can redistribute it and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * If is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * If; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package if
 */
/**
 * Simple if (conditional) snippet
 *
 * @package if
 */
if (!empty($debug)) {
    print_r($scriptProperties);
    if (!empty($die)) die();
}
$modx->parser->processElementTags(\'\',$subject,true,true);

$output = \'\';
$operator = !empty($operator) ? $operator : \'\';
$operand = !isset($operand) ? \'\' : $operand;
if (isset($subject)) {
    if (!empty($operator)) {
        $operator = strtolower($operator);
        switch ($operator) {
            case \'!=\':
            case \'neq\':
            case \'not\':
            case \'isnot\':
            case \'isnt\':
            case \'unequal\':
            case \'notequal\':
                $output = (($subject != $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<\':
            case \'lt\':
            case \'less\':
            case \'lessthan\':
                $output = (($subject < $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>\':
            case \'gt\':
            case \'greater\':
            case \'greaterthan\':
                $output = (($subject > $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'<=\':
            case \'lte\':
            case \'lessthanequals\':
            case \'lessthanorequalto\':
                $output = (($subject <= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'>=\':
            case \'gte\':
            case \'greaterthanequals\':
            case \'greaterthanequalto\':
                $output = (($subject >= $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
            case \'isempty\':
            case \'empty\':
                $output = empty($subject) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'!empty\':
            case \'notempty\':
            case \'isnotempty\':
                $output = !empty($subject) && $subject != \'\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'isnull\':
            case \'null\':
                $output = $subject == null || strtolower($subject) == \'null\' ? $then : (isset($else) ? $else : \'\');
                break;
            case \'inarray\':
            case \'in_array\':
            case \'ia\':
                $operand = explode(\',\',$operand);
                $output = in_array($subject,$operand) ? $then : (isset($else) ? $else : \'\');
                break;
            case \'==\':
            case \'=\':
            case \'eq\':
            case \'is\':
            case \'equal\':
            case \'equals\':
            case \'equalto\':
            default:
                $output = (($subject == $operand) ? $then : (isset($else) ? $else : \'\'));
                break;
        }
    }
}
if (!empty($debug)) { var_dump($output); }
unset($subject);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);