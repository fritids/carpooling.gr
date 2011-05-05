

<? include("header_meta.php"); ?>


<? include("header_includes.php"); ?>


<script type="text/javascript">

	$(function()
	{
		$("#map").gMap({ markers: [{ latitude: 47.670553,
						  longitude: 9.588479,
						  html: "Tettnang, Germany",
						  popup: true }],
						  zoom: 6 });


		$("#tabs").tabs();

		$("#submitRegularSearcButton").button();
		$("#submitLoginButton").button();
		
		var today = new Date();
		$("#datepicker").datepicker({
			showOtherMonths: true, 
			selectOtherMonths: true,
			dateFormat: 'dd-mm-yy',
			minDate: today
		});


		
	});
	
</script>
<!-- PNG transparency fix for IE 6 -->
<!--[if IE 6]>
<script src="media/javascripts/js_istudio/pngfix.js"></script>
<script>DD_belatedPNG.fix('#logo img,img');</script>
<![endif]-->

</head>
<body>



	<? include("header_menu.php"); ?>
  
  
  
  
  
  
  <!-- Wrapper Start //-->  
   <div class="wrapper">
  <!-- 3 Columns Features Box Start //-->
  
    <ul id="featuresbox" >
      <li><img src="media/images/check-box.png" class="alignleft" alt="" />
      <h4>Quality</h4>
      <p>Etiam eros lacus, posuere in placerat ac, luctus pulvinar eros. Suspendisse tincidunt</p>
      </li>
      <li><img src="media/images/idea.png" class="alignleft" alt="" />
      <h4>Creativity</h4>
      <p>Etiam eros lacus, posuere in placerat ac, luctus pulvinar eros. Suspendisse tincidunt</p>
      </li>
      <li>
		<li><img src="media/images/check-box.png" class="alignleft" alt="" />
		<h4>Είσοδος Μελών</h4>	 
		<p></p>
        <div id="maincontactform">
          <!-- Login Form Start //-->
			  <fieldset>
			  <label>Όνομα χρήστη</label><input type="text" name="l_username" class="textfield" id="l_username" value="" style="width:100px" />
			  <div class="clear"></div>
			  <label>Κωδικός</label><input type="text" name="l_pwd" class="textfield" id="l_pwd" value="" style="width:100px" />
			  <div class="clear"></div>
			  <label>&nbsp;</label><a id="submitLoginButton" href="#"> Είσοδος </a>
			  <span class="loading" style="display: none;">Please wait..</span>
			  <div class="clear"></div>
			  </fieldset> 
		</div>
		<p><a href="#">Ξέχασα τον Κωδικό</a>&nbsp;&nbsp;&nbsp;<a href="#">Είμαι νέος χρήστης</a></p>
      </li>
    </ul>
    
  <!-- 3 Columns Features Box End //-->
  <div class="clear"></div>



<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Κλασσική Αναζήτηση</a></li>
		<li><a href="#tabs-2">Αναζήτηση με Χάρτη</a></li>
	</ul>
	<div id="tabs-1">


  <div id="maincontactform">
    <fieldset>
        
        
        <table>
          <tr>
            <td>
              <label>Αφετηρία:</label><input type="text" name="from_city" class="textfield" id="from_city" value="" style="width:150px" />
            </td>

            <td>
              <label>Απόκλιση</label><select name="radius_from" class="auto" id="radiusFrom"> 
                <option value="0">0</option> 
                <option value="10">10</option> 
                <option value="20">20</option> 
                <option value="30">30</option> 
                <option value="40">40</option> 
                <option value="50">50</option> 
              </select>
            </td>

            
          </tr>
        </table>

       <div class="clear"></div>        
        
        <table>
          <tr>
            <td>
              <label>Προορισμός:</label>
              <input type="text" name="to_city" class="textfield" id="to_city" value="" style="width:150px" />
            </td>
          </tr>
        </table>
                
        
        <label>Προορισμός:</label><input type="text" name="to_city" class="textfield" id="to_city" value="" style="width:150px" />
        <div class="clear"></div>
        
        <label><nobr>Τύπος Διαδρομής</nobr></label>
        <div class="clear"></div>
        
        <div id="radio">
          Ταξίδι<input type="radio" id="trip_type_1" name="radio" checked="checked" />
          
          Καθημερινή Διαδρομή<input type="radio" id="trip_type_2" name="radio" />
        </div>
        <div class="clear"></div>
        
        
        <label>Ημερομηνία:</label><input id="datepicker" class="textfield" style="width:150px" type="text" />
        <div class="clear"></div>
        
        
        <label>&nbsp;</label><a id="submitRegularSearcButton" href="#"> Αναζήτηση </a>
        <span class="loading" style="display: none;">Please wait..</span>
        <div class="clear"></div>
    </fieldset> 
    
    
  </div>
		

		

		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<div id="map" style="width: 920px; height: 400px; border: 1px solid #777; overflow: hidden;"></div>
	</div>
</div>


  <div class="clear"></div>
  <div id="tagbar" class="page">
    <!-- Tag Text start //-->  
    <h3>Welcome to iSTUDIO</h3>
    <!-- Tag Text End //-->
    <div class="clear"></div>
  </div>  
  <!-- Site tag bar end //-->
  <div class="clear"></div>
    <ul id="serviceslist" class="page">
      <!-- Services List Item 1 Start //-->  
      <li>
        <img src="media/images/Computer.png" alt="Icon" class="alignleft"/>
        <h4><a href="">Desktop</a></h4>
        <p>Vestibulum porta eros vitae sem eleifend vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer fringilla placerat mi at mattis... <a href="#" class="linkreadmore">Read more &raquo;</a></p>
      </li>
      <!-- Services List Item 1 End //-->
      <!-- Services List Item 2 Start //-->
      <li>
        <img src="media/images/Web.png" alt="Icon" class="alignleft"/>
        <h4><a href="">Web</a></h4>
        <p>Vestibulum porta eros vitae sem eleifend vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer fringilla placerat mi at mattis... <a href="#" class="linkreadmore">Read more &raquo;</a></p>
      </li>
      <!-- Services List Item 2 End //-->
      <!-- Services List Item 3 Start //-->
      <li>
        <img src="media/images/Stats.png" alt="Icon" class="alignleft"/>
        <h4><a href="">SEO</a></h4>
        <p>Vestibulum porta eros vitae sem eleifend vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer fringilla placerat mi at mattis... <a href="#" class="linkreadmore">Read more &raquo;</a></p>
      </li>
      <!-- Services List Item 3 End //-->
      <!-- Services List Item 4 Start //-->
      <li>
        <img src="media/images/Portfolio.png" alt="Icon" class="alignleft"/>
        <h4><a href="">Viral Business</a></h4>
        <p>Vestibulum porta eros vitae sem eleifend vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer fringilla placerat mi at mattis... <a href="#" class="linkreadmore">Read more &raquo;</a></p>
      </li>    
      <!-- Services List Item 4 End //-->
    </ul>
    <!-- Services List End //-->
    <div class="clear"></div>
    </div>
    <!-- Wrapper End //-->
    

	<? include("footer.php"); ?>
  
  
</body>
</html>