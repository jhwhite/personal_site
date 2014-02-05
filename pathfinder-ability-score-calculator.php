<?php 
$pageTitle = "Pathfinder Ability Score Calculator";
$description = "An ability score calculator for the Pathfinder Role Playing Game (RPG).";
$section = "calc";
include('includes/header.php'); 
?>
    <div class="container">
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
                <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-3386970320908648";
                    /* d20_leaderboard */
                    google_ad_slot = "2145763611";
                    google_ad_width = 728;
                    google_ad_height = 90;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>

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
            </header>

            <script type="text/javascript">
                mixpanel.track("Visit to Pathfinder ability score calculator")
            </script>

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
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerSTR"><a href="#" title="Strength measures muscle and physical power. This ability is important for those who engage in hand-to-hand (or “melee”) combat, such as fighters, monks, paladins, and some rangers. Strength also sets the maximum amount of weight your character can carry. A character with a Strength score of 0 is too weak to move in any way and is unconscious. Some creatures do not possess a Strength score and have no modifier at all to Strength-based skills or checks.">Strength: </a></label></td>
                        <td><input class="thisSpinner" id="spinnerSTR" name="value"/></td>
                        <td><span class="toChange" id="strMod">0</span></td>
                        <td><span class="toChange points" id="strPts">0</span></td>
                        <td id="racials"><span class="toChange" id="racialStr">0</span></td>
                        <td><span class="change" id="actualStrPts">10</span></td>
                        <td><span class="toChange" id="actualStrMod">0</span></td>
                    </tr>
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerDEX"><a href="#" title="Dexterity measures agility, reflexes, and balance. This ability is the most important one for rogues, but it's also useful for characters who wear light or medium armor or no armor at all. This ability is vital for characters seeking to excel with ranged weapons, such as the bow or sling. A character with a Dexterity score of 0 is incapable of moving and is effectively immobile (but not unconscious).">Dexterity: </a></label></td>
                        <td><input class="thisSpinner" id="spinnerDEX" name="value"/></td>
                        <td><span class="toChange" id="dexMod">0</span></td>
                        <td><span class="toChange points" id="dexPts">0</span></td>
                        <td id="raciald"><span class="toChange" id="racialDex">0</span></td>
                        <td><span class="change" id="actualDexPts">10</span></td>
                        <td><span class="toChange" id="actualDexMod">0</span></td>
                    </tr>
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerCON"><a href="#" title="Constitution represents your character's health and stamina. A Constitution bonus increases a character's hit points, so the ability is important for all classes. Some creatures, such as undead and constructs, do not have a Constitution score. Their modifier is +0 for any Constitution-based checks. A character with a Constitution score of 0 is dead.">Constitution: </a></label></td>
                        <td><input class="thisSpinner" id="spinnerCON" name="value"/></td>
                        <td><span class="toChange" id="conMod">0</span></td>
                        <td><span class="toChange points" id="conPts">0</span></td>
                        <td id="racialc"><span class="toChange" id="racialCon">0</span></td>
                        <td><span class="change" id="actualConPts">10</span></td>
                        <td><span class="toChange" id="actualConMod">0</span></td>
                    </tr>
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerINT"><a href="#" title="Intelligence determines how well your character learns and reasons. This ability is important for wizards because it affects their spellcasting ability in many ways. Creatures of animal-level instinct have Intelligence scores of 1 or 2. Any creature capable of understanding speech has a score of at least 3. A character with an Intelligence score of 0 is comatose. Some creatures do not possess an Intelligence score. Their modifier is +0 for any Intelligence-based skills or checks.">Intelligence: </a></label></td>
                        <td><input class="thisSpinner" id="spinnerINT" name="value"/></td>
                        <td><span class="toChange" id="intMod">0</span></td>
                        <td><span class="toChange points" id="intPts">0</span></td>
                        <td id="raciali"><span class="toChange" id="racialInt">0</span></td>
                        <td><span class="change" id="actualIntPts">10</span></td>
                        <td><span class="toChange" id="actualIntMod">0</span></td>
                    </tr>
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerWIS"><a href="#" title="Wisdom describes a character's willpower, common sense, awareness, and intuition. Wisdom is the most important ability for clerics and druids, and it is also important for paladins and rangers. If you want your character to have acute senses, put a high score in Wisdom. Every creature has a Wisdom score. A character with a Wisdom score of 0 is incapable of rational thought and is unconscious.">Wisdom: </a></label></td>
                        <td><input class="thisSpinner" id="spinnerWIS" name="value"/></td>
                        <td><span class="toChange" id="wisMod">0</span></td>
                        <td><span class="toChange points" id="wisPts">0</span></td>
                        <td id="racialw"><span class="toChange" id="racialWis">0</span></td>
                        <td><span class="change" id="actualWisPts">10</span></td>
                        <td><span class="toChange" id="actualWisMod">0</span></td>
                    </tr>
                    <tr class="highlight">
            			<td class="abilityName"><label for="spinnerCHA"><a href="#" title="Charisma measures a character's personality, personal magnetism, ability to lead, and appearance. It is the most important ability for paladins, sorcerers, and bards. It is also important for clerics, since it affects their ability to channel energy. For undead creatures, Charisma is a measure of their unnatural “lifeforce.” Every creature has a Charisma score. A character with a Charisma score of 0 is not able to exert himself in any way and is unconscious.">Charisma: </a></label></td>
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