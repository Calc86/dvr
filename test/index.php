<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php header('Content-type: text/html; charset=windows-1251')?>
<?php
/**
 * @version    $Id: index.php 20196 2011-01-09 02:40:25Z ian $
 * @package    Joomla.Site
 * @copyright  Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$document = & JFactory::getDocument();
$curlang = $document->language;
$option = JRequest::getVar('option', null);
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>


<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/templatev5.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/k2.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/webfontkit/stylesheetv1.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/handheld.css" media="handheld,only screen and (max-device-width:980px)"/>

<script src="<?php echo $this->baseurl ?>/templates/SHAMAN/js/swfobject_modified.js" type="text/javascript"></script>


<!--
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

-->


<style>
body
{
     background: url(<?php echo $this->baseurl ?>/templates/SHAMAN/images/textureBG.png);   

}


#leftimg
{
    width: 510px;
    float: left;
    text-align: left;
}

#righimg
{
    width: 470px;
    float: right;
    text-align: right;
}

#rekHead
 {
    width: 300px;
    float: left;
    font-family: open_sansregular,  sans-serif;
    font-size: 14px;
    padding: 30px 0px 0px 20px;
}



</style>

<!--[if IE]>

<style>
  

  img{border: none;}  
  #dBoxLeft
    {width: 70px;}
  #dBoxRight{width: 170px;}
  .jt-menu ul a
  {padding-top: 10px;
  padding-bottom: 10px;}
</style>
<![endif]-->
  
<!--[if IE 7]> 
<style>
  #chronoform_Zakaz .cfdiv_checkbox
    {text-align: right;}
  #chronoform_Zakaz .ccms_form_element label
    {font-weight: normal;}    
  select.chronoDrop
    {margin-top: 12px; margin-bottom: 8px;}
  .chronoDrop option 
    {margin-left: 50px;}



  a.btnHelpStyled
    {
      behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.htc);
      -pie-background: linear-gradient(top,#ffffff,#e3e3e3);
      
    }
    
  a.enterButton
    {    
      -pie-background: linear-gradient(top,#e3e3e3,#fdfdfd) !important;
    }

    .orange_table tr:first-child
    {
      
      background: #dc7408;      
    }



  #dBoxRight{padding-left: 0px;}
  #searchBox{padding-left: 0px;}
  
  .jt-menu li.parent
    {background: #2facde;}
  .jt-menu li.parent:hover
    {background: #37c0e9;}
  .jt-menu ul
    {background: #F5F5F5;}
  #descrBox
    {width: 240px;}
  #dBoxLeft
    {width: 70px;}
  .mItemArrow
    {visibility: visible;}
  #btnHelp{top: 1px;}
  #connectButton a
    {background: #dc7408; margin-left: 20px;}
  #connectButton a:hover
    {background: #e28901;}
  #iHolderHome {margin-right: 4px;}
  #iHolderMap {margin-right: 4px;}

  .cabButton, .setBox a {background: #dc7408;}
  .cabButton:hover, .setBox a:hover {background: #e28901;}

  .jt-menu li li {  
    padding-top: 0px;
    padding-bottom: 0px; padding-right: 0px; height: 25px;
  }
  .jt-menu li { }
  #topMenu {padding-left: 0px;}
  .jt-menu ul {padding-bottom: 10px; padding-top: 10px;}
  .jt-menu ul a {line-height: 18px; padding-top: 5px;
    padding-bottom: 5px; padding-left: 0px;}
  .subItemSeparator {background: none;}
  #formMoney {left: 115px; }
  #streetHintBox, #chkResultTrue, #chkResultFalse,#numHintBox {height: 0px; border: none;}
  #chkResultTrue p, #chkResultFalse p {background: #fff8e2;}
  .svElem {background: white;}
  #cabTitle {padding-bottom: 32px;}
  #frmCheckForm {bottom: 7px;}
  #rightInner {padding-left: 15px;}
  #leftInner {position: static; margin-top: 22px;}
  #limItems {position: static; margin-top: -60px;} 
  #leftInnerMenu{margin-bottom: 70px;}
  

</style>
<![endif]-->

<!--[if IE 8]> 
<style>

  #chronoform_Zakaz .ccms_form_element label
    {font-weight: normal;}    
  select.chronoDrop
    {height:46px; margin-top: 4px; margin-left: 2px; width:250px; margin-bottom: 0px;}
  
  .chronoText {line-height: 36px;}
  .chrono_captcha_input {line-height: 38px;}

  a.btnHelpStyled
    {
      behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.htc);
      -pie-background: linear-gradient(top,#ffffff,#e3e3e3);
    }
    
  a.enterButton
    {    
      -pie-background: linear-gradient(top,#e3e3e3,#fdfdfd) !important;
    }

    .orange_table a.cabButton {background: #dc7408; behavior: none;}
    .orange_table tr:first-child
    {
      
      background: #dc7408;
    }

  .jt-menu li.parent
    {filter: progid:DXImageTransform.Microsoft.gradient (startColorStr= '#33b6d8' , EndColorStr= '#1c75b4' );}
  .jt-menu li.parent:hover
    {filter: progid:DXImageTransform.Microsoft.gradient (startColorStr= '#37c0e9' , EndColorStr= '#2082c7' );}
  .jt-menu ul
    {background: #F5F5F5;}
  #connectButton a
    {filter: progid:DXImageTransform.Microsoft.gradient (startColorStr= '#e28901' , EndColorStr= '#d45a11' );}
  #connectButton a:hover
    {filter: progid:DXImageTransform.Microsoft.gradient (startColorStr= '#e59514' , EndColorStr= '#d96a20' );}
   
   .cabButton {position: relative; z-index: 120;}
 .cabButton, .setBtn a, #k2Container .setBox a 
    {
      behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.php);
      -pie-background: linear-gradient(top,#e28801,#d55b11);
    }
  #innerSlider {background: none; padding-left: 5px;} 
  
  
    
   .cabButton:hover, .setBtn a:hover
    {        
      -pie-background: linear-gradient(top,#e59514,#d96a20) !important;
    }
#k2Container .setBox a:hover
    {        
      -pie-background: linear-gradient(top,#e59514,#d96a20) !important;
    }

    

  .txtSet {height: 170px !important;}
  .jt-menu li li {  
    padding-top: 0px;
    padding-bottom: 0px; 
  }
</style>
<![endif]-->

<!--[if IE 9]> 
<style>
  #chronoform_Zakaz .ccms_form_element label
    {font-weight: normal;}  
  select.chronoDrop
    {height:46px; margin-top: 4px; margin-left: 2px; width:250px; margin-bottom: 0px;}

  .chronoButton
    {border: 0px solid #FFFFFF;}

  a.btnHelpStyled
    {
      behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.php);
      -pie-background: linear-gradient(top,#ffffff,#e3e3e3);
    }
    
  a.enterButton
    {        
      -pie-background: linear-gradient(top,#e3e3e3,#fdfdfd) !important;
    }
  .jt-menu li.parent
    {
    behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.php);
      -pie-background: linear-gradient(top,#33b6d8,#1c75b4);}
  .jt-menu li.parent:hover
    {
    -pie-background: linear-gradient(top,#37c0e9,#2082c7);
    }
  .jt-menu ul
    {background: #F5F5F5;}
  #connectButton a
    {
    behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.php);
      -pie-background: linear-gradient(top,#e28901,#d45a11);
    }
  #connectButton a:hover
    {
    -pie-background: linear-gradient(top,#e59514,#d96a20);
    }


  .cabButton, .setBox a
    {
    behavior: url(<?php echo $this->baseurl ?>/templates/SHAMAN/pie/PIE.php);
      -pie-background: linear-gradient(top,#e28801,#d55b11);  
    }
    
  .cabButton:hover, .setBox a:hover
    {        
      -pie-background: linear-gradient(top,#e59514,#d96a20) !important;
    }


  .orange_table tr:first-child
    {
      
      background: #dc7408;
    }
  
  
  .jt-menu li li {padding-top:4px; padding-bottom: 4px;}
  div.moduleItemIntrotext a.moduleItemImage img {border-width: 2px !important;}
  #bMenuBox .bMenuSeparator{top: -20px;}
  #bannerInternet
      {height: auto;}
  
</style>
<![endif]-->


<!-- Google -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40724922-1']);
  _gaq.push(['_setDomainName', 'degunino.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="topBar">
  <div id="tBarBox">
    <div id="tBarLeft">

      <a target=_blank href="http://10.112.10.3">Старый сайт</a>
 </div>
    <div id="tBarRight">
      <?php if ($this->countModules('pos_logout')): ?>  
        <div id="logIco">        
        </div>
          
        <div id="tBarRightIcons">
          <div id="iHolderHome">
            <div id="iHolderHomeBox">
              <a href="/"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/pixel.png" height="14px" width="13px" /></a>
            </div>
          </div>
          <div id="iHolderMap">
            <div id="iHolderMapBox">
              <a href="/главная/карта-сайта.html"><img  alt="Карта сайта" src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/pixel.png" height="14px" width="13px" /></a>
            </div>
          </div>
          <div id="iHolderMail">
            <div id="iHolderMailBox">
              <a href="mailto:ttadmin@degunino.net"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/pixel.png" height="14px" width="13px" /></a>
            </div>
          </div>

        </div>

        <div id="logoutBox" style="display: none;">        
              <form action="https://stat.degunino.net/stat.php" method=post target=_blank>
       
                <input type="text" name="login" size="12" class="cabInput" title='Введите свой ПИН'  onFocus="if (value == 'ПИН') {value =''}" onBlur="if (value == '') {value = 'ПИН'}" value='ПИН'>

                <input type="password" name="passwd" size="12" class="cabInput" title='Введите пароль' >

                <input type="submit" value="Войти в Личный кабинет" class="cabButton">
       
              </form>

  
        </div>


<!--          
        <div id="logoutBox" style="display: none;">        
          <jdoc:include type="modules" name="pos_logout"/>      
        </div>
-->
      <?php endif; ?>  
    </div>
    <div style="clear: both;">
    </div>    
  </div>
</div>
<div id="MegoDIV">
  <div id="header">
    <div id="logo">
      <a href="/"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/logonew.png" height="118px" width="150px"></a>
    </div>
  <div>
  <?php if ($this->countModules('pos_rekhead')): ?>  
  <jdoc:include type="modules" name="pos_rekhead"/> 
  <?php endif; ?>  
  </div>

<div id="rekSL">
  <?php if ($this->countModules('pos_jltext_slider')): ?>  
   <h4 style="font-size: 20px">Внимание Акция !!!</h4>

  <jdoc:include type="modules" name="pos_jltext_slider"/> 
  <?php endif; ?>  
 </div>


<!--
    <div id="rekHead">
<h4 style="font-size: 20px">Внимание Акция !!!</h4>
<p><strong style="color:#e35f13">Degunino.net</strong><span style="color:#393939"> 
 и <strong style="color:#556EB1">TVZavr.ru</strong> предлагают STB Dune HD TV-102 с поддержкой IPTV по специальной цене!
<a href="index.php?Itemid=695">Подробнее</a></p>
    </div>
-->


    <div id="rightHead">
      <p class="title">Круглосуточный Call-центр</p>
      <div id="descrBox">
        <div id="dBoxLeft">
          <p class="preDescr">8 (495)</p>
        </div>
        <div id="dBoxRight">
          <p class="descr"> 967-75-81</p>
        </div>
      </div>
      <div id="subHead">

        <?php if ($this->countModules('pos_search')): ?>  
          <div id="btnHelp">
            <div id="symbolHelp">
            </div>
            <a target=_blank href="https://stat.degunino.net" class="btnHelpStyled">Личный кабинет</a>
          </div>

          <div id="searchBox">        
            <form action="/component/search/" method="post">
	<div class="search">
		<input name="searchword" id="mod-search-searchword" maxlength="20" class="inputbox" type="text" size="20" value="Поиск по сайту..." onblur="if (this.value=='') this.value='Поиск по сайту...';" onfocus="if (this.value=='Поиск по сайту...') this.value='';"><div id="imgBut"><input type="image" value="Искать" class="button" src="/templates/SHAMAN/images/searchButton.png" onclick="this.form.searchword.focus();"></div>	<input type="hidden" name="task" value="search">
	<input type="hidden" name="option" value="com_search">
	<input type="hidden" name="Itemid" value="0">
</form>

	</div>

<!--
            <jdoc:include type="modules" name="pos_search"/>      
-->
          </div>
        <?php endif; ?>  

      </div>
    </div>
    <div style="clear: both;">
    </div>  
  </div>

  <div>
  <?php if ($this->countModules('pos_top_menu')): ?>  
    <div id="topMenuBkg">
        
          <div id="topMenu">        
            <jdoc:include type="modules" name="pos_top_menu"/>      
          </div>
          <div id="connectButton">             
            <a href="index.php?Itemid=479">Подключиться</a>
          </div>
    </div>
  <?php endif; ?>  
  </div>
  <a name="goTop"></a>

  <?php if ($this->countModules('pos_main_page')): ?>  
  <jdoc:include type="modules" name="pos_main_page"/>  
    <?php if ($option != 'com_search')  : ?>  
      <div id="mainPage">  
        <div id="bannerInternet">
<!--
<p style="font-family: open_sansregular, sans-serif;">
<b style="font-size: 14px; color: #e35f13">ПРОФИЛАКТИЧЕСКИЕ РАБОТЫ: </b> ул. Бескудниковский бульвар д. 24 к.1 - 02 июля 2013 с 12:30 до 19:00 <a style="font-size: 14px;" href="index.php?Itemid=708">Подробнее</a>
</p>
-->
 
<!--
<marquee scrollamount="2" scrolldelay="20" behavior="scroll" direction="left">

</marquee>
</p>
-->
<!--
<marquee onmouseover=this.stop(); onmouseout=this.start(); scrollamount="2" scrolldelay="20" behavior="scroll" direction="left">


<strong style="color:#e35f13">Degunino.net</strong><span style="color:#393939"> и <strong style="color:#556EB1">TVZavr.ru</strong> предлагают STB Dune HD TV-102 с поддержкой IPTV по специальной цене!
<a href="index.php?Itemid=695">Подробнее</a>
</marquee>
</p>


<p style="margin: 0px 5px 0px 0px; padding: 3px 25px 4px 4px; 
outline: none; color: #ffffff; background-color: #0066b3; 
text-transform: uppercase; float: left; background-position: 95% 50%; background-repeat: no-repeat no-repeat;>
Технические новости</p>
<p style="margin: 0px 5px 0px 0px; padding: 3px 25px 4px 4px; 
outline: none; color: #ffffff; background-color: #0066b3; 
text-transform: uppercase; float: left; background-position: 95% 50%; background-repeat: no-repeat no-repeat;"> Технические новости</p>
-->

  <!-- 
 
          <a href="index.php?Itemid=470"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/bannerInternet.png" height="350px" width="980px"></a>
                                                                                                    -->
                                                                                           
<div id="leftimg"> 
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="510" height="380" id="Degunino22" align="middle">
				<param name="movie" value="<?php echo $this->baseurl ?>/templates/SHAMAN/swf/Degunino22.swf" />
				<param name="quality" value="autohigh" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="<?php echo $this->baseurl ?>/templates/SHAMAN/swf/Degunino22.swf" width="510" height="380">
					<param name="movie" value="<?php echo $this->baseurl ?>/templates/SHAMAN/swf/Degunino22.swf" />
					<param name="quality" value="autohigh" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="false" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
  <a href="index.php?Itemid=470"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/bannerInternet_l.png" height="380px" width="510px"></a>
        
			<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
	

</div>
<div id="righimg">

  <?php if ($this->countModules('pos_righimg')): ?>  
  <jdoc:include type="modules" name="pos_righimg"/> 
  <?php endif; ?>  
 </div>

</div>
 

        </div>

        <div id="formsContainer">
          <div id="formCabinet">
          <div id="cabTitle"><p>Ваш личный кабинет</p></div>
            <div id="cabForm">    
              <form action="https://stat.degunino.net/stat.php" method=post target=_blank>
       
                <input type="text" name="login" size="12" class="cabInput" title='Введите свой ПИН'  onFocus="if (value == 'ПИН') {value =''}" onBlur="if (value == '') {value = 'ПИН'}" value='ПИН'>

                <input type="password" name="passwd" size="12" class="cabInput" title='Введите пароль' >

                <input type="submit" value="Войти в кабинет" class="cabButton">
       
              </form>

              
            </div>
          </div>
          <div id="frmCheck">
            <div id="frmCheckTitle">
              <p>Подключен ли
              ваш дом?</p>
            </div>
            <div id="frmCheckForm">
              <input name="username" class="cabInput" type="text" id="streetAC" onfocus="if (value == 'Название улицы') 
                  {value =''}" onblur="if (value == '') {value = 'Название улицы'}" value="Название улицы" />
              <div id="streetHintBox"></div>
              <input name="nNumberVal" class="cabInput" type="text" id="hNumber" onfocus="if (value == 'Номер дома') 
                  {value =''}" onblur="if (value == '') {value = 'Номер дома'}" value="Номер дома" />
              <div id="numHintBox"></div>
            
              <input name="baton" class="cabButton" type="button" id="id_baton" value="Проверить адрес" />
              <div id="chkResultTrue"></div>
            
            </div>
          
          </div>
          <div id="formMoney">
            <div id="icoMasterCard">
               <a href="index.php?Itemid=497">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/pay_main.png" height="39px" width="202px" />  
              </a>
            </div>

<!--
            <div id="icoMasterCard">
		 <a href="index.php?Itemid=497#Terminal">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoMasterCard.png" height="39px" width="62px" />  
              </a>
            </div>
            <div id="icoVisa">
              <a href="index.php?Itemid=497#Terminal">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoVisa.png" height="39px" width="62px" />  
              </a>
            </div>
            <div id="icoRBK">
              <a href="index.php?Itemid=497#Terminal">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoRBK.png" height="39px" width="75px" />  
              </a>
            </div>
-->
      <div id="icoSystem">
              <a href="index.php?Itemid=497#Terminal">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoSystem.png" height="43px" width="125px" />  
              </a>
            </div>
            <div id="icoQIWI">
              <a href="index.php?Itemid=497#Terminal">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/IcoQIWI.png" height="51px" width="34px" />  
              </a>
            </div>

            <div id="mFormLeftTile">
              <p>Пополнение счёта
                наличными</p>
            </div>
            <div id="mFormRightTile">
              <p>Быстрая оплата
                банковской картой</p>
            </div>
            <div id="mFormLinks">
              <p><a id="akkBank" href="index.php?Itemid=497">Оплата квитанции в банке</a></p>
              <p><a id="akkPunkt" href="index.php?Itemid=497">Пункты приёма платежей</a></p>
              <p><a id="akkTerminal" href="index.php?Itemid=497">Оплата через терминалы</a></p>
            </div>
            <div id="mFormInputs">
              

               <form id="payrbk" action="https://rbkmoney.ru/acceptpurchase.aspx" name="pay" method="POST" onsubmit="return valid_pin()">
                                <input type="hidden" name="eshopId" value="2006923">
                <div id="divMFormPIN">
                  <input name="serviceName" id="mFormPIN" type="text" class="cabInput" onfocus="if (value == 'ПИН') {value =''}" onblur="if (value == '') {value = 'ПИН'}" value="ПИН">
                </div>
                <div id="divMFormValue">
                  <input name="recipientAmount" id="mFormValue" type="text" class="cabInput" value="550.00"> 
                </div>
                                <div id="divMFormRUR">
                  <span>руб.</span>
                </div>
                                <input type="hidden" name="recipientCurrency" value="RUR">
                                <input type="hidden" name="preference" value="bankCard">
                                <input type="hidden" name="version" value="2">
                                <input type="hidden" name="successUrl" value="http://degunino.net">
                                <input type="hidden" name="failUrl" value="http://degunino.net"><br>
                <div id="divMFormButton">
                  <input name="button" type="submit" class="cabButton" value="Пополнить счёт">
                </div>
                            </form>
            </div>
          </div>
    
        </div>
      </div>


      <div id="subContainer">
        <?php if ($this->countModules('pos_k2_slider')): ?>  
          <div id="k2Slider">    
            <jdoc:include type="modules" name="pos_k2_slider"/>
          </div>    
        <?php endif; ?>

        <?php if ($this->countModules('pos_left_main_menu')): ?>  
          <div id="leftMenuMain">    
            <jdoc:include type="modules" name="pos_left_main_menu"/>
          </div>    
        <?php endif; ?>  
 
       <div style="clear: both;"></div>

      </div>

      <?php if ($this->countModules('pos_k2_news')): ?>  
        <div id="k2News">    
          <jdoc:include type="modules" name="pos_k2_news"/>
        </div>    
      <?php endif; ?>
    <?php endif; ?> 
  <?php endif; ?>  

  
  <?php if ($this->countModules('pos_content_980')): ?>
    <div id="content">
      <?php if ($this->countModules('pos_bread')): ?>
        <div id="bread">
          <jdoc:include type="modules" name="pos_bread"/>  
        </div>
      <?php endif; ?>
      <jdoc:include type="component" />
    </div>
  <?php endif; ?>
  <?php if ($this->countModules('pos_content')): ?>      
              <div id="content">
                <div id="leftInner">  
                
                  <?php if ($this->countModules('pos_left_inner_menu')): ?>
                    <div id="leftInnerMenu">
                      <div id="limHead">
                      
                      </div>
                      <div id="limItems">
                        <jdoc:include type="modules" name="pos_left_inner_menu" style="xhtml" />  
                      </div>
                    </div>
                  <?php endif; ?>

                  <?php if ($this->countModules('pos_form_chech_inner')): ?>
                  <div id="frmCheck" class="frmCheckInner">
                    <div id="frmCheckTitle">
                      <p>Подключен ли
                        ваш дом?</p>
                    </div>
                    <div id="chkfInnerBkg">
                      <div id="frmCheckForm">
                        <input name="username" class="cabInput" type="text" id="streetAC" onfocus="if (value == 'Название улицы') 
                            {value =''}" onblur="if (value == '') {value = 'Название улицы'}" value="Название улицы" />
                        <div id="streetHintBox"></div>
                        <input name="nNumberVal" class="cabInput" type="text" id="hNumber" onfocus="if (value == 'Номер дома') 
                            {value =''}" onblur="if (value == '') {value = 'Номер дома'}" value="Номер дома" />
                        <div id="numHintBox"></div>
            
                        <input name="baton" class="cabButton" type="button" id="id_baton" value="Проверить адрес" />
                        <div id="chkResultTrue" class="chkrTrueInner"></div>
            
                      </div>  
                    </div>        
                  </div>
                  <?php endif; ?>

                  <?php if ($this->countModules('pos_left_inner_cabinet')): ?>
                  <div id="formCabinetInner">
                    <div id="cabTitle"><p>Ваш личный кабинет</p></div>
                    <div id="cabForm">    
                      <form action="https://stat.degunino.net/stat.php" method=post target=_blank>
       
                        <input type="text" name="login" size="12" class="cabInput" title='Введите свой ПИН'  onFocus="if (value == 'ПИН') {value =''}" onBlur="if (value == '') {value = 'ПИН'}" value='ПИН'>

                        <input type="password" name="passwd" size="12" class="cabInput" title='Введите пароль' >

                        <input type="submit" value="Войти в кабинет" class="cabButton">
       
                      </form>
                    </div>
                  </div>
                  <?php endif; ?>

                  <?php if ($this->countModules('pos_left_inner_pay')): ?>
                  <div id="formPayInner">
                    <div id="payHead"><p>Способы оплаты</p></div>
                    <div id="payForm">
                      <div id="pFormInside">



                        <p><a id="akkPunkt" href="index.php?Itemid=497#Punkt">Пункты приёма платежей</a></p>
                        <p><a id="akkTerminal" href="index.php?Itemid=497#Terminal">Оплата через терминалы</a></p>
  <p><a id="akkBank" href="index.php?Itemid=497#Bank">Оплата квитанции в банке</a></p>
                                              
<div class="payFormIcons">
                          <a href="index.php?Itemid=497#Terminal">
                            <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/IcoQIWI.png" height="51px" width="34px" /></a>&nbsp;&nbsp;
                          <a href="index.php?Itemid=497#Terminal">
                            <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoSystem.png" height="43px" width="125px" />  
                          </a>                        
                        </div>
                        <div id="piFormTxt">
                          <p>Быстрая оплата любой банковской карточкой:</p>
                        </div>
                   
     <div class="payFormIcons">

               <a href="index.php?Itemid=497">
                <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/pay_main.png" height="39px" width="202px" />  
              </a>

<!--

                          <a href="index.php?Itemid=497#Terminal">
                            <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoMasterCard.png" height="37px" width="59px" />  
                          </a>
                          <a href="index.php?Itemid=497#Terminal">
                            <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoVisa.png" height="37px" width="59px" />  
                          </a>
                          <a href="index.php?Itemid=497#Terminal">
                            <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/icoRBK.png" height="37px" width="70px" />  
                          </a>

    -->

                        </div>
                        <div id="payFormForm">
                          
                          <form id="payrbk" action="https://rbkmoney.ru/acceptpurchase.aspx" name="pay" method="POST" onsubmit="return valid_pin2()">
                            <input type="hidden" name="eshopId" value="2006923">
                            <div id="payMFormPIN">
                              <input name="serviceName" id="payFormPIN" type="text" class="forms cabInput" onfocus="if (value == 'ПИН') {value =''}" onblur="if (value == '') {value = 'ПИН'}" value="ПИН">
                            </div>
                            <div id="payMFormValue">
                              <input name="recipientAmount" id="payFormValue" type="text" class="forms cabInput" value="550.00"> 
                            </div>
                            <div id="payMFormRUR">
                              <span>руб.</span>
                            </div>
                            <input type="hidden" name="recipientCurrency" value="RUR">
                            <input type="hidden" name="preference" value="bankCard">
                            <input type="hidden" name="version" value="2">
                            <input type="hidden" name="successUrl" value="http://degunino.net">
                            <input type="hidden" name="failUrl" value="http://degunino.net"><br>
                            <div id="payMFormButton">
                              <input name="button" type="submit" class="buttons cabButton" value="Пополнить счёт">
                            </div>
                          </form>
                        </div>
                      </div>
                      <div id="pFormBottomBkg">
                      </div>
                    </div>
                  </div>  
                  <?php endif; ?>
  
                <?php if ($this->countModules('pos_wdk_slider_inner')): ?>
                    <div id="innerSlider">
                      <jdoc:include type="modules" name="pos_wdk_slider_inner"/>  
                    </div>
                  <?php endif; ?>  

                <?php if ($this->countModules('pos_wdk_slider_inner2')): ?>
                    <div id="innerSlider2">
                      <jdoc:include type="modules" name="pos_wdk_slider_inner2"/>  
                    </div>
                  <?php endif; ?>  



<!--
<div class="itemFullText"> <br>
<p><strong>Новая технология доступа в Интернет- IPoE</strong><br>Все новые абоненты уже подключаются по данной технологии.
Если Вы решите самостоятельно перенастроить компьютер или роутер для работы на IPoE, 
пожалуйста свяжитесь со специалистами Технической поддержки по телефону <strong> 8 (495) 967-75-81.</strong><br>
<a href="#">Подробнее</a>
</p>
</div>
-->    
                </div>
                <div id="rightInner">
                  <?php if ($this->countModules('pos_bread')): ?>
                    <div id="bread">
                      <jdoc:include type="modules" name="pos_bread"/>  
                    </div>
                  <?php endif; ?>
                  <jdoc:include type="component" />  


                  <?php if ($this->countModules('pos_k2_archive')): ?>
                    <?php if ($option != 'com_search')  : ?>
                    <div id="newsArhive">
                      <jdoc:include type="modules" name="pos_k2_archive"/>
                    </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>      
              </div>
  <?php endif; ?>  


  <?php if ($option == 'com_search')  : ?>

      <?php if ($this->countModules('pos_content_main_search')): ?>      
          <div id="content">        
              <jdoc:include type="component" />      
          </div>
        
      <?php endif; ?>  
  <?php endif; ?> 
  






  <div style="clear: both;"></div>
</div>
<div id="bottomMenu">
  <div class="bShadow">
    <div id="archButton">
      <div id="archButtonBkg">
        <?php if ($this->countModules('pos_button_arch_main')): ?>
          <a href="index.php?Itemid=495">Архив новостей</a>
        <?php endif; ?>
        <?php if ($this->countModules('pos_button_go_top_inner')): ?>
          <div style="width: 185px; margin-left: auto; margin-right: auto;">
            <div style="float: left; width: 14px; margin-right: 3px;"><a href="#goTop"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/goToTop.png" height="24px" width="24px" /></a>
            </div>
            <a href="#goTop">К началу страницы</a>
          </div>
        <?php endif; ?>
      </div>      
    </div>
  </div>
  <div id="bMenuBox">
    <div class="bMenuItems">
      <p>О компании</p>
      <?php if ($this->countModules('pos_b_menu_item1')): ?>              
        <jdoc:include type="modules" name="pos_b_menu_item1"/>            
      <?php endif; ?>
      <div class="bMenuSeparator"></div>
    </div>
    <div class="bMenuItems">
      <p>Интернет для дома</p>
      <?php if ($this->countModules('pos_b_menu_item2')): ?>              
        <jdoc:include type="modules" name="pos_b_menu_item2"/>            
      <?php endif; ?>
      <div class="bMenuSeparator"></div>
    </div>
    <div class="bMenuItems">
      <p>Абонентам</p>
      <?php if ($this->countModules('pos_b_menu_item3')): ?>              
        <jdoc:include type="modules" name="pos_b_menu_item3"/>            
      <?php endif; ?>
      <div class="bMenuSeparator"></div>
    </div>
    <div class="bMenuItems lastBItem">
      <p>+ Возможности</p>
      <?php if ($this->countModules('pos_b_menu_item4')): ?>              
        <jdoc:include type="modules" name="pos_b_menu_item4"/>            
      <?php endif; ?>
    </div>
  </div>
</div>
<div id="footer">
  <div class="bShadow">    
  </div>
  <div id="footBox">
    <div id="fooLeft">
      <div class="fooImg">
        <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/mobi.png" height="21px" width="16px" />
      </div>
      <div class="fooTxt">
        <span>8 (495) 967-75-81</span>
      </div>
      <div style="clear: both;"></div>
      <div class="fooImg">
        <a href="mailto:ttadmin@degunino.net"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooMailIco.png" height="17px" width="16px" /></a>
      </div>
      <div class="fooTxt">
        <a href="mailto:ttadmin@degunino.net">ttadmin@degunino.net</a>
      </div>
      <div style="clear: both;"></div>
      <div class="fooImg">
        <img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooMapIco.png" height="21px" width="16px" />
      </div>
      <div class="fooTxt">
        <span>109052,г. Москва, ул. Нижегородская, д. 104, корп. 3, оф. 12 </span>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div id="fooRight">
<p>Поделиться</p>      
<script type="text/javascript" src="//yandex.st/share/share.js"
charset="utf-8"></script>
<div class="yashare-auto-init" data-yashareL10n="ru"
 data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir">
</div> 
<!--
      <div class="fooRImg"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooFBIco.png" height="43px" width="44px" /></a></div>
      <div class="fooRImg"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooVKIco.png" height="43px" width="44px" /></a></div>
      <div class="fooRImg"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooScypeIco.png" height="43px" width="44px" /></a></div>
      <div class="fooRImg"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/fooGPlusIco.png" height="43px" width="44px" /></a></div>
-->      
      
<!--      <div style="clear: both; height: 18px;"></div>         
      <div style="clear: both; height: 43px;"></div>
-->

      <p>© ЗАО"КОМЛАН" / Degunino.net®</p>
        
    </div>

    <div style="clear: both;"></div>
<!--
    <div id="yaDir"><img src="<?php echo $this->baseurl ?>/templates/SHAMAN/images/yaTmpBlock.jpg" height="120px" width="980px" /></div>
-->
  </div>
</div>



<script type='text/javascript' language="javascript">
  
  function showhideAkkByLink(id){
    var e = document.getElementById(id);
    if( e ) e.style.display = e.style.display ? "" : "none";
    }


</script>









<script type="text/javascript">

  function valid_pin()
  {
    pin=document.getElementById('mFormPIN').value.toString();

    if ( (pin.length!=9) || (!document.getElementById('mFormPIN').value.match(/[0-9]{9}/)))
      { 
      alert('Неправильно введён ПИН');
      return false;
      }
  }

  function valid_pin2()
  {
    pin=document.getElementById('payFormPIN').value.toString();
    if ( (pin.length!=9) || (!document.getElementById('payFormPIN').value.match(/[0-9]{9}/)))
      { 
      alert('Неправильно введён ПИН');
      return false;
      }
  }

jQuery(function($){
  
  var p=window.location.hash;
  if (p=="#Bank")
            {           
                 $("#akk3Opened").css({'visibility': 'visible'})
        $("#akk3Opened").css({'height': 'auto'}) 
        
        $("#akk1Opened").css({'visibility': 'hidden'})
        $("#akk1Opened").css({'height': '0px'}) 

        $("#akk2Opened").css({'visibility': 'hidden'})
        $("#akk2Opened").css({'height': '0px'}) 

        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'}) 
         
            } else
  if (p=="#Punkt")
            {           
                 $("#akk2Opened").css({'visibility': 'visible'})
        $("#akk2Opened").css({'height': 'auto'}) 
        
        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'})        
            } else
  if (p=="#Terminal")
            {           
                 $("#akk1Opened").css({'visibility': 'visible'})
        $("#akk1Opened").css({'height': 'auto'})   
        
        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'})      
            } else
      {           
                 $("#akkClosed").css({'visibility': 'visible'})
        $("#akkClosed").css({'height': 'auto'})        
            }


  
  $('#akkBank').click(function () {
    if($("#akk1Opened").length>0) {
        $("#akk3Opened").css({'visibility': 'visible'})
        $("#akk3Opened").css({'height': 'auto'}) 
        
        $("#akk1Opened").css({'visibility': 'hidden'})
        $("#akk1Opened").css({'height': '0px'}) 

        $("#akk2Opened").css({'visibility': 'hidden'})
        $("#akk2Opened").css({'height': '0px'}) 

        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'}) 
        
      }  
    
    });  
  $('#akkPunkt').click(function () {
    if($("#akk1Opened").length>0) {
                
        $("#akk1Opened").css({'visibility': 'hidden'})
        $("#akk1Opened").css({'height': '0px'}) 

        $("#akk2Opened").css({'visibility': 'visible'})
        $("#akk2Opened").css({'height': 'auto'}) 

        $("#akk3Opened").css({'visibility': 'hidden'})
        $("#akk3Opened").css({'height': '0px'}) 

        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'}) 
        
      }  
    
    });  
    
  $('#akkTerminal').click(function () {
    if($("#akk1Opened").length>0) {
                
        $("#akk1Opened").css({'visibility': 'visible'})
        $("#akk1Opened").css({'height': 'auto'}) 

        $("#akk2Opened").css({'visibility': 'hidden'})
        $("#akk2Opened").css({'height': '0px'}) 

        $("#akk3Opened").css({'visibility': 'hidden'})
        $("#akk3Opened").css({'height': '0px'}) 

        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'}) 
        
      }  
    
    });    

  $('.payFormIcons a').click(function () {
    if($("#akk1Opened").length>0) {
                
        $("#akk1Opened").css({'visibility': 'visible'})
        $("#akk1Opened").css({'height': 'auto'}) 

        $("#akk2Opened").css({'visibility': 'hidden'})
        $("#akk2Opened").css({'height': '0px'}) 

        $("#akk3Opened").css({'visibility': 'hidden'})
        $("#akk3Opened").css({'height': '0px'}) 

        $("#akkClosed").css({'visibility': 'hidden'})
        $("#akkClosed").css({'height': '0px'}) 
        
      }  
    
    });  
  
});


jQuery(function($){
  $("#streetAC").keyup(function () {
      
    $.post( '<?php echo $this->baseurl ?>/templates/SHAMAN/autocomplete.php', { streetValue: $('#streetAC').val() }, function(data)
      {  
            
        $('#streetHintBox').html(data);                
        $('#streetHintBox') .css({'visibility': 'visible'});      
      }    
    );
    return false;
    });

  $("#streetHintBox").mouseleave(function () {
    $("#streetHintBox").empty();
    $('#streetHintBox') .css({'visibility': 'hidden'});
  });

  $('.svElem').live('click', function() {     
     $('#streetAC').val($(this).html());
     $("#streetHintBox").empty();
     $('#streetHintBox') .css({'visibility': 'hidden'});
  })
  
  $("#hNumber").keyup(function () {    
    $.post( '<?php echo $this->baseurl ?>/templates/SHAMAN/autocomplete_num.php', { streetValue: $('#streetAC').val(), numValue: $('#hNumber').val() }, function(data)
      {        
        $('#numHintBox').html(data);        
        $('#numHintBox') .css({'visibility': 'visible'});      
      }    
    );
    return false;
    });  

  $("#numHintBox").mouseleave(function () {
    $("#numHintBox").empty();
    $('#numHintBox') .css({'visibility': 'hidden'});
  });

  $('.nhElem').live('click', function() {     
     $('#hNumber').val($(this).html());
     $("#numHintBox").empty();
     $('#numHintBox') .css({'visibility': 'hidden'});
  })

});



jQuery(function($){
  $('#id_baton').live('click', function() 
   {    
   
   
    $.post("<?php echo $this->baseurl ?>/templates/SHAMAN/check.php",{ user_name:$('#streetAC').val(), numValue: $('#hNumber').val() } ,function(data)
        {
    
     if(data == 1){
      
      $('#chkResultTrue').html('<div id="adTrue"><p>Для вашего адреса подключение бесплатное!</p><div class="validOkConnectBtnBkg"><div class="validOkConnectBtn"><a href="index.php?Itemid=479">Подключиться</a></div></div></div>');
      $.cookie('streetACValue', $('#streetAC').val());
      $.cookie('hNumberValue', $('#hNumber').val());
      
        }else{
    
            $('#chkResultTrue').html(data);
      $.cookie('hNumberValue', null); // удалить  cookie
        $.cookie('streetACValue', null); // удалить  cookie
      
        }      

        });
    return false;
  });
  $('#adTrue').live('click', function()
  {
    $("#chkResultTrue").empty();
  
  });

  
    
});


jQuery(function($){

  if($("#chronoform_Zakaz").length>0 && $.cookie('streetACValue')!=null) {
    var adressValList = document.getElementsByName('input_street_name');
    for (var i = 0; i < adressValList.length; i++)
    {
    
        adressValList.item(i).value=$.cookie('streetACValue');
        
        
    }
    $.cookie("streetACValue", null);
    $('#cdlVisibility') .css({'visibility': 'visible'});  
    
  }

  if($("#chronoform_Zakaz").length>0 && $.cookie('hNumberValue')!=null) {
    var commentList = document.getElementsByName('input_house_number');
    for (var i = 0; i < commentList.length; i++)
    {
    
        commentList.item(i).value=$.cookie('hNumberValue');
        
        
    }  
    $.cookie("hNumberValue", null);  
  }

  
  

});


jQuery(function($){
  $('#logIco').click(function() {
    $('#logoutBox').slideToggle('slow', function() {
        // Animation complete.
        });  

  });

  $('#payHead').click(function() {
    $('#payForm').slideToggle('slow', function() {
        // Animation complete.
        });  

  });
        
        <!-- оплата -->
  $('#visah').click(function() {
    $('#visa').slideToggle('slow', function() {
        // Animation complete.
        });  

  });
        
  $('#punktph').click(function() {
    $('#punktp').slideToggle('slow', function() {
        // Animation complete.
        });  

  });

        $('#ykh').click(function() {
    $('#yk').slideToggle('slow', function() {
        // Animation complete.
        });  

  });

   $('#qiwih').click(function() {
    $('#qiwi').slideToggle('slow', function() {
        // Animation complete.
        });  

  });


   $('#sberh').click(function() {
    $('#sber').slideToggle('slow', function() {
        // Animation complete.
        });  

  });

         
   $('#term0h').click(function() {
    $('#term0').slideToggle('slow', function() {
        // Animation complete.
        });  

  });
       

  $('#imaph').click(function() {
    $('#imap').slideToggle('slow', function() {
        // Animation complete.
        });  

  });











  // Page Rates
  $('.tableRates').mouseenter(function() {
             
       $(this).attr('id', 'parentActiveTable'); 
         });
    $('.tableRates').mouseleave(function() {
             
       $(this).removeAttr('id', 'parentActiveTable')
         });
  


  function firstColShow(){
    $('#parentActiveTable .trhFirst').find(':first-child').addClass('trhActive');
    $('#parentActiveTable .trsDescriptionFirst').slideToggle('fast', function() {
        // Animation complete.       
        });  
    $('#parentActiveTable .btnFirst').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
    if($('#parentActiveTable .trsDescriptionSecond').css('display')=='block'){
      secondColHide();        
    }
    if($('#parentActiveTable .trsDescriptionThird').css('display')=='block'){
      thirdColHide();        
    }
    if($('#parentActiveTable .trsDescriptionFourth').css('display')=='block'){
      fourthColHide();        
    }

  }
  function firstColHide(){
    $('#parentActiveTable .trsDescriptionFirst').slideToggle('fast', function() {
        // Animation complete.       
        });
      $('#parentActiveTable .btnFirst').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
      $('#parentActiveTable .trhFirst').find(':first-child').removeClass('trhActive');

  }
  function secondColShow(){
    $('#parentActiveTable .trhSecond').find(':first-child').addClass('trhActive');
    $('#parentActiveTable .trsDescriptionSecond').slideToggle('fast', function() {
        // Animation complete.       
        });  
    $('#parentActiveTable .btnSecond').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
    if($('#parentActiveTable .trsDescriptionFirst').css('display')=='block'){
      firstColHide();        
    }
    if($('#parentActiveTable .trsDescriptionThird').css('display')=='block'){
      thirdColHide();        
    }
    if($('#parentActiveTable .trsDescriptionFourth').css('display')=='block'){
      fourthColHide();        
    }

  }
  function secondColHide(){
    $('#parentActiveTable .trsDescriptionSecond').slideToggle('fast', function() {
        // Animation complete.       
        });
      $('#parentActiveTable .btnSecond').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
      $('#parentActiveTable .trhSecond').find(':first-child').removeClass('trhActive');

  }
  function thirdColShow(){
    $('#parentActiveTable .trhThird').find(':first-child').addClass('trhActive');
    $('#parentActiveTable .trsDescriptionThird').slideToggle('fast', function() {
        // Animation complete.       
        });  
    $('#parentActiveTable .btnThird').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
    if($('#parentActiveTable .trsDescriptionSecond').css('display')=='block'){
      secondColHide();        
    }
    if($('#parentActiveTable .trsDescriptionFirst').css('display')=='block'){
      firstColHide();        
    }
    if($('#parentActiveTable .trsDescriptionFourth').css('display')=='block'){
      fourthColHide();        
    }

  }
  function thirdColHide(){
    $('#parentActiveTable .trsDescriptionThird').slideToggle('fast', function() {
        // Animation complete.       
        });
      $('#parentActiveTable .btnThird').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
      $('#parentActiveTable .trhThird').find(':first-child').removeClass('trhActive');

  }
  function fourthColShow(){
    $('#parentActiveTable .trhFourth').find(':first-child').addClass('trhActive');
    $('#parentActiveTable .trsDescriptionFourth').slideToggle('fast', function() {
        // Animation complete.       
        });  
    $('#parentActiveTable .btnFourth').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
    if($('#parentActiveTable .trsDescriptionSecond').css('display')=='block'){
      secondColHide();        
    }
    if($('#parentActiveTable .trsDescriptionThird').css('display')=='block'){
      thirdColHide();        
    }
    if($('#parentActiveTable .trsDescriptionFirst').css('display')=='block'){
      firstColHide();        
    }

  }
  function fourthColHide(){
    $('#parentActiveTable .trsDescriptionFourth').slideToggle('fast', function() {
        // Animation complete.       
        });
      $('#parentActiveTable .btnFourth').children('.trlButtonBkg').slideToggle('fast', function() {
        // Animation complete.       
        });  
      $('#parentActiveTable .trhFourth').find(':first-child').removeClass('trhActive');

  }
  
  // First Column Click
  $('.btnFirst').children('.trlButtonBkg').children('.trlButton').click(function() {
    firstColShow();    
  });

  $('.trhFirst').click(function() {
    firstColShow();    
  });

  // Second Column Click
  $('.btnSecond').children('.trlButtonBkg').children('.trlButton').click(function() {
    secondColShow();    
  });

  $('.trhSecond').click(function() {
    secondColShow();    
  });

  // Third Column Click
  $('.btnThird').children('.trlButtonBkg').children('.trlButton').click(function() {
    thirdColShow();    
  });
  $('.trhThird').click(function() {
    thirdColShow();    
  });

  // Fourth Column Click
  $('.btnFourth').children('.trlButtonBkg').children('.trlButton').click(function() {
    fourthColShow();    
  });

  $('.trhFourth').click(function() {
    fourthColShow();    
  });
});


jQuery(function($){
  $(document).ready(function(){ 
  
  $(".deeper").filter(".parent").children(".mItemSeparator").css({'visibility': 'visible'})
  $(".deeper").filter(".parent").children(".subItemSeparator").css({'visibility': 'hidden'})
  $(".deepVis").children(".menuItemBkg").children("li").children(".subItemSeparator").css({'visibility': 'hidden'})
  
  $("#leftMenuMain .simpleMenuSeparator:first-child").css({'visibility': 'hidden'})
    
  if ( $.browser.msie )
  {  
    $(".btnHelpStyled").mouseenter(function () {
    $(".btnHelpStyled").addClass("enterButton");
    });    

    $(".btnHelpStyled").mouseleave(function () {
    $(".btnHelpStyled").removeClass("enterButton");
    });  
      
  }
  else if ( $.browser.mozilla )
  {
    $('#rightHead .title') .css({'font-weight': '300'});  
    $('#leftMenuMain a') .css({'font-family': 'open_sansregular'});
    $('.jt-menu ul a') .css({'font-family': 'open_sansregular'});
    $('h1, h2, h3, h4, a') .css({'font-family': 'open_sansregular, sans-serif'});
 	

  }
  else if ( $.browser.webkit || $.browser.safari )
  {
     $('#descrBox') .css({'width': '270px'});
     $('#rekHead h4') .css({'font-weight': '300'});

/*    $('#descrBox') .css({'width': '240px'});  */
     
        
    $('#dBoxRight') .css({'width': '180px'});  
    $('#dBoxRight') .css({'padding-left': '60px'});  
    $('#payFormPIN') .css({'position': 'relative'});
    
    $('#payFormValue') .css({'position': 'relative'});
    
    $('#chronoform_Zakaz .cfdiv_checkbox') .css({'text-align': 'right'});
    $('#chronoform_Zakaz .ccms_form_element label') .css({'font-weight': 'normal'});
    
    
      
  }
  else if ( $.browser.opera )
  {
    $('#rightHead .title') .css({'font-weight': '600'});   
    $('#dBoxLeft') .css({'width': '70px'});
    
    
    
    
  } 

  if ( $.browser.webkit )
  {
    $('.tRatesHead') .css({'background-position': 'left 2px'});
    $('.tRatesLine') .css({'border-right': '1px solid #c6c6c6'});
    $('.tRatesLine') .css({'width': '729px'});
    $('.tRatesLine') .css({'overfow': 'hidden'});
    $('.trlTable tr td:last-child') .css({'border-right': 'none'});
    
  }  

  if ( $.browser.safari )
  {
  $('select.chronoDrop') .css({'margin-top': '10px'});
  $('select.chronoDrop') .css({'margin-bottom': '8px'});
  
  }

})
});

</script>
  
  
<script src="<?php echo $this->baseurl ?>/templates/SHAMAN/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/SHAMAN/js/custom_select.js" type="text/javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/SHAMAN/js/cookie.js" type="text/javascript"></script>

<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter19796887 = new Ya.Metrika({id:19796887,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/19796887" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script type="text/javascript">
    var reformalOptions = {
        project_id: 97584,
        project_host: "degunino.reformal.ru",
        tab_orientation: "left",
        tab_indent: "50%",
        tab_bg_color: "#e35f13",
        tab_border_color: "#FFFFFF",
        tab_image_url: "http://tab.reformal.ru/T9GC0LfRi9Cy0Ysg0Lgg0L%252FRgNC10LTQu9C%252B0LbQtdC90LjRjw==/FFFFFF/4bfb34d91c8d7fb481972ca3c84aec38/left/0/tab.png",
        tab_border_width: 1
    };
    
    (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript'; script.async = true;
        script.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'media.reformal.ru/widgets/v3/reformal.js';
        document.getElementsByTagName('head')[0].appendChild(script);
    })();
</script><noscript><a href="http://reformal.ru"><img src="http://media.reformal.ru/reformal.png" /></a><a href="http://degunino.reformal.ru">Oтзывы и предложения для Degunino.net - Интернет провайдер</a></noscript>

</body>
</html>
