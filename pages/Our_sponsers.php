<div class="post">
	<h1 class="title" style="text-align:center"><font size="25">Our Sponsors</font></h1>
	<br>
    
    <script src="jquery/collageplus/jquery.collagePlus.js"></script>
    <script src="jquery/collageplus/extras/jquery.removeWhitespace.js"></script>
    <script src="jquery/collageplus/extras/jquery.collageCaption.js"></script>
    
    <script type="text/javascript">
        // All images need to be loaded for this plugin to work so
        // we end up waiting for the whole window to load in this example
        $(window).load(function () {
            $(document).ready(function(){
                collage();
                $('.Collage').collageCaption();
            });
        });
    
    
        // Here we apply the actual CollagePlus plugin
        function collage() {
            $('.Collage').removeWhitespace().collagePlus(
                {
                    'fadeSpeed'     : 2000,
                    'targetHeight'  : 100,
                    'allowPartialLastRow' : true
                }
            );
        };
    
        // This is just for the case that the browser window is resized
        var resizeTimer = null;
        $(window).bind('resize', function() {
            // hide all the images until we resize them
            $('.Collage .Image_Wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });
    </script>
    
    <section class="Collage effect-parent">
        <div class="Image_Wrapper" data-caption="Camas School District">
            <a target="_blank" href="http://www.camas.wednet.edu"><img src="images/sponsor_logos/CSD-logo.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="US Digital">
            <a target="_blank" href="http://www.usdigital.com"><img src="images/sponsor_logos/usdigital.jpg"></a>
        </div>
		<div class="Image_Wrapper" data-caption="OSPI">
			<a target="_blank" href="http://www.k12.wa.us/"><img src="images/sponsor_logos/ospi.jpg"></a>
		</div>
        <div class="Image_Wrapper" data-caption="Boeing">
            <a target="_blank" href="http://boeing.com/"><img src="images/sponsor_logos/boeing.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Camas HS">
            <a target="_blank" href="http://chs.camas.wednet.edu/"><img src="images/sponsor_logos/chs.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Columbia Okura">
            <a target="_blank" href="http://www.columbiaokura.com/"><img src="images/sponsor_logos/columbia.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Linear Technology">
            <a target="_blank" href="http://www.linear.com"><img src="images/sponsor_logos/linear.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="Hewlett-Packard">
            <a target="_blank" href="http://www.hp.com/"><img src="images/sponsor_logos/HP.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="iPly Designs">
            <a><img src="images/sponsor_logos/iply.jpg"></a>
        </div>
        <div class="Image_Wrapper" data-caption="The Le Family">
            <a><img src="images/sponsor_logos/lefam.jpg"></a>
        </div>
    </section>
    
	<br><br><br>
	<div class="entry">
		<a href="index.php?page=Sponsor%20Us"><img src="images/button.jpeg"></a>
		<br><br><br><br>
		<table cellspacing="0" id="sponsortable">
			<tr>
				<th>Titanium - $5,000+</th>
				<th>Aluminum - $2,000+</th>
				<th>Wood - $1,000+</th>
				<th>Plastic - $500+</th>
				<th class="last">Duct Tape - $100+</th>
			<tr>
			<tr>
				<td><a target="_blank" href="http://camas.wednet.edu/">Camas School District</a></td> <!--Titanium 5,000--><!--Titanium 5,000-->
				<td><a target="_blank" href="http://boeing.com/">Boeing</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.phxind.com/">Phoenix Industrial</a></td> <!--Wood 1,000-->
				<td><a target="_blank" href="http://tidland.maxcessintl.com/">Maxcess International / Tidland</a></td> <!--Plastic 500-->
				<td class="last"><a target="_blank" href="http://www.wacom.com/">Wacom</a></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"><a target="_blank" href="http://usdigital.com/">US Digital</a></td> <!--Titanium 5,000--><!--Titanium 5,000-->
				<td class="alt">iPly Designs</td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://dwfritz.com/">DW Fritz</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last">Barsotti Family</td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td><a target="_blank" href="http://www.k12.wa.us/">OSPI</a></td> <!--Titanium 5,000-->
				<td><a target="_blank" href="http://www.linear.com">Linear Technology</a></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.cwrotary.com/">Camas/Washougal Rotary</a></td> <!--Wood 1,000-->
				<td></td> <!--Plastic 500-->
				<td class="last">Macalonan Family</td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"></td> <!--Titanium 5,000-->
				<td class="alt">Le Family</td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://www.riverviewbank.com/">Riverview Bank</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last"><a target="_blank" href="http://www.industrialmachineservices.com/">Industrial Machine Services</a></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.columbiaokura.com/">Columbia Okura</a></td> <!--Wood 1,000-->
				<td></td> <!--Plastic 500-->
				<td class="last"><a target="_blank" href="http://www.exceldesigns.com/">Excel Designs</a></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"></td> <!--Titanium 5,000-->
				<td class="alt"></td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://todayfoundation.org/">T.O.D.A.Y. Foundation</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last"><a target="_blank" href="http://seasonsfinancialonline.com/">Seasons Financial</a></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td>Linda Calica</td> <!--Wood 1,000-->
				<td></td> <!--Plastic 500-->
				<td class="last">Murray Edelman</td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"></td> <!--Titanium 5,000-->
				<td class="alt"></td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://www.local1159.com/">Professional Firefighters Local 1159</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last"></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td></td> <!--Titanium 5,000-->
				<td></td> <!--Aluminum 2,500-->
				<td>Eirik Huset</td> <!--Wood 1,000-->
				<td></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"></td> <!--Titanium 5,000-->
				<td class="alt"></td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://www.daimler.com/">Daimler</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last"></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td></td> <!--Titanium 5,000-->	
				<td></td> <!--Aluminum 2,500-->
				<td><a target="_blank" href="http://www.hp.com/">Hewlett-Packard</a></td> <!--Wood 1,000-->
				<td></td> <!--Plastic 500-->
				<td class="last"></td> <!--Zip Tie 100-->
			</tr>
			<tr>
				<td class="alt"></td> <!--Titanium 5,000-->
				<td class="alt"></td> <!--Aluminum 2,500-->
				<td class="alt"><a target="_blank" href="http://www.tcmscorp.com/">TCMS</a></td> <!--Wood 1,000-->
				<td class="alt"></td> <!--Plastic 500-->
				<td class="alt last"></td> <!--Zip Tie 100-->
			</tr>
		</table>
	</div>
</div>	