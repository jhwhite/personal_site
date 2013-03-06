<?php 
$pageTitle = "Pathfinder Ability Score Calculator";
$description = "An ability score calculator for the Pathfinder Role Playing Game (RPG).";
$section = "calc";
include('includes/header.php'); 
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="3sections" id="app">
            <header>
                <img src="img/pathfinder.png">
                
	            <!-- FACEBOOK SOCIAL LIKE -->
	            <div class="fb-like" data-href="http://www.jody-white.com/pathfinder-ability-score-calculator/" data-send="false" data-width="250" data-show-faces="false" data-font="verdana"></div>

	            <!-- TWITTER SOCIAL LIKE -->
	            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/XFqio3" data-text="Pathfinder Ability Score Calculator. Simplify your gaming!" data-via="jwjody">Tweet</a>
	            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	            <!-- GOOGLE +1 SOCIAL LIKE -->
	            <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	            <g:plusone></g:plusone>
                <h1>Pathfinder RPG Ability Score Calculator</h1>

                <!-- GOOGLE ADSENSE -->
                <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-3386970320908648";
                    /* mySite-ability */
                    google_ad_slot = "3881032018";
                    google_ad_width = 468;
                    google_ad_height = 15;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                <!-- END GOOGLE ADSENSE -->
                
            </header>

			<div id="radio">
			    <input type="radio" id="radio1" name="radio" value="10"/><label for="radio1">Low Fantasy: 10</label>
    			<input type="radio" id="radio2" name="radio" value="15"/><label for="radio2">Standard Fantasy: 15</label>
    			<input type="radio" id="radio3" name="radio" value="20"/><label for="radio3">High Fantasy: 20</label>
    			<input type="radio" id="radio4" name="radio" value="25"/><label for="radio4">Epic Fantasy: 25</label> 
                <input type="radio" id="radio5" name="radio" value="other"/><label for="radio5">Other</label>
    		</div> <!-- END #radio -->

    		<div id="scores">
               <form>
                    Select Race:
                    <select id = "race" onchange = "javascript: racialMod(this.value);">
                        <option value = "choose">Choose</option>
                        <option value = "dwarf">Dwarf</option>
                        <option value = "elf">Elf</option>
                        <option value = "gnome">Gnome</option>
                        <option value = "helf">Half-elf</option>
                        <option value = "horc">Half-orc</option>
                        <option value = "half">Halfing</option>
                        <option value = "human">Human</option>
                        <option value = "other">Other</option>
                    </select>
                </form>

                <table>
                    <tr id="table">
                        <th>Ability</th>
                        <th>Points</th>
                        <th>Mod</th>
                        <th>Cost</th>
                        <th>Racial Trait</th>
                        <th>Actual Points</th>
                        <th>Actual Mod</th>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerSTR">Strength: </label></td>
                        <td><input class="thisSpinner" id="spinnerSTR" name="value"/></td>
                        <td><span class="toChange" id="strMod">0</span></td>
                        <td><span class="toChange points" id="strPts">0</span></td>
                        <td id="racials"><span class="toChange" id="racialStr">0</span></td>
                        <td><span class="change" id="actualStrPts">10</span></td>
                        <td><span class="toChange" id="actualStrMod">0</span></td>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerDEX">Dexterity: </label></td>
                        <td><input class="thisSpinner" id="spinnerDEX" name="value"/></td>
                        <td><span class="toChange" id="dexMod">0</span></td>
                        <td><span class="toChange points" id="dexPts">0</span></td>
                        <td id="raciald"><span class="toChange" id="racialDex">0</span></td>
                        <td><span class="change" id="actualDexPts">10</span></td>
                        <td><span class="toChange" id="actualDexMod">0</span></td>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerCON">Constitution: </label></td>
                        <td><input class="thisSpinner" id="spinnerCON" name="value"/></td>
                        <td><span class="toChange" id="conMod">0</span></td>
                        <td><span class="toChange points" id="conPts">0</span></td>
                        <td id="racialc"><span class="toChange" id="racialCon">0</span></td>
                        <td><span class="change" id="actualConPts">10</span></td>
                        <td><span class="toChange" id="actualConMod">0</span></td>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerINT">Intelligence: </label></td>
                        <td><input class="thisSpinner" id="spinnerINT" name="value"/></td>
                        <td><span class="toChange" id="intMod">0</span></td>
                        <td><span class="toChange points" id="intPts">0</span></td>
                        <td id="raciali"><span class="toChange" id="racialInt">0</span></td>
                        <td><span class="change" id="actualIntPts">10</span></td>
                        <td><span class="toChange" id="actualIntMod">0</span></td>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerWIS">Wisdom: </label></td>
                        <td><input class="thisSpinner" id="spinnerWIS" name="value"/></td>
                        <td><span class="toChange" id="wisMod">0</span></td>
                        <td><span class="toChange points" id="wisPts">0</span></td>
                        <td id="racialw"><span class="toChange" id="racialWis">0</span></td>
                        <td><span class="change" id="actualWisPts">10</span></td>
                        <td><span class="toChange" id="actualWisMod">0</span></td>
                    </tr>
                    <tr>
            			<td class="abilityName"><label for="spinnerCHA">Charisma: </label></td>
                        <td><input class="thisSpinner" id="spinnerCHA" name="value"/></td>
                        <td><span class="toChange" id="chaMod">0</span></td>
                        <td><span class="toChange points" id="chaPts">0</span></td>
                        <td id="racialcha"><span class="toChange" id="racialCha">0</span></td>
                        <td><span class="change" id="actualChaPts">10</span></td>
                        <td><span class="toChange" id="actualChaMod">0</span></td>
                    </tr>
                    <tr>
                        <td class="abilityName"><button class="btn btn-danger" id="reset">Reset Scores</button></td>
                    </tr>      
                    <tr>
                        <td class="abilityName">Remaining</td>
                        <td></td>
                        <td></td>
                        <td id="remaining"></td>
                    </tr>
                </table>
    		</div> <!-- END #scores -->
    	</div>
<?php include('includes/footer.php'); ?>