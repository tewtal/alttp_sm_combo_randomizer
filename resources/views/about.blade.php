@extends('layouts.default')

@section('content')
<div class="well" style="font-size:16px;margin-top:40px;">
	<p><h4>Welcome to the Super Metroid and A Link to the Past crossover item randomizer.</h4></p>
	<p>This randomizer mixes Super Metroid and A Link to the Past together into one experience and will randomize both games items to any location in either game creating a new kind of multi-game challenge. The goal is to kill both Ganon and Mother Brain and then finish either game.</p>
	<p>Travel between the two game can be done by using certain doors and entrances in either game, a list of those can be found in the document linked below.</p>
	<p>For some more information and resources about this randomizer, check out <a href="https://docs.google.com/document/d/1fP-DRbuROuQ-zifwKftuV-Paoh0_GGYErLGv3VVAg7Y/edit">this document</a>. There's also a discord server for this project at <a href="https://discord.gg/PMKcDPQ">https://discord.gg/PMKcDPQ</a></p>
	<p>
	<br />
	<p>
	<h2>Changelog</h3>
	<h3>2019-02-17 - Version 10.2</h3>
	<ul>
	<li>This version fixes an issue with item placement where progression items ended up being significantly more likely to show up in ALTTP dungeons than would be expected.</li>
	<li>The Super Metroid map should now correctly mark visited areas as visited.</li>
	<li>The Super Metroid map has some graphical changes that indicates portals to A Link to the Past</li>
	<li>The item graphics for ALTTP items in Super Metroid has been overhauled to correct palette errors, add SM-like flashing and also includes color-blind friendly versions of otherwise similar items.</li>
	<li>Max ammo indicators have been added to Super Metroid.</li>
	<li>The music is now properly started when entering Maridia through the portal.</li>
	<li>The Special Beam Attacks are now properly tracked in the credits.</li>
	<li>Power Bombs and Bombs used are now properly tracked in the credits.</li>
	<li>The following changes has been done to SM Normal logic:</li>
	<ul>
		<li>Jumping over the moat before Wrecked Ship with Spring Ball is no longer in logic.</li>
		<li>Using Gravity Suit and either IBJ or Hi-Jump to get past the moat before Wrecked Ship is now in logic.</li>
	</ul>
	<br/>
	<li><h4>Huge thanks to all contributors to Version 10.2</h4>
	<ul>
	<li>Lenophis - New map grahics and porting Personitis max ammo display patch</li>
	<li>qwertymodo - Fixing map corruption when teleporting between games</li>
	<li>Natalie - New ALTTP item graphics in SM</li>
	<li>NDIAZ - Fixing maridia portal music issue</li>
	</ul>
	</li>
	</ul>
	<br/>
	<h3>2018-11-25 - Version 10.1</h3>
	<ul>
	<li>Checkerboard cave now correctly has a requirement for gloves when accessed through the Lower Norfair to Misery Mire portal.</li>
	<li>Suitless mama turtle now always requires high-jump. (Hard mode)</li>
	<li>Right side upper norfair hellruns is now in logic with only speedbooster. (Hard mode)</li>
	<li>Golden Torizo has its logic fixed to require charge beam or super missiles to fight him.</li>
	<li>The logic no longer requires a short charge to escape Golden Torizo. (Normal mode)</li>
	<li>Ice beam is now an additional requirement to access suitless springball. (Hard mode)</li>
	<li>Some additional fixes has been done to the item pool allocations that could cause some item placements not to be possible.</li>
	<li>A seed identifier has been added to the file select screen before starting a new game.</li>
	<li>The bomb blocks in the "climb room" during the escape will now automatically be cleared preventing a potential softlock.</li>
	<br/>
	<li><h4>Huge thanks to all contributors for helping out with fixes and patches for V10.1</h4></li>
	</ul>
	<br/>
	<h3>2018-07-27 - Version 10</h3>
	<ul>
	<li>Dynamic text is now added back in, which means that checking pedestal and tables will now give a hint to what items is at those locations.</li>
	<li>Progressive items in the same room in SM now works properly, although the second item will show incorrect graphics.</li>
	<li>A bunch of general logic bugfixes that should fix a few weird possible edge cases.</li>
	<li>Super Metroid logic has been renamed and is now "Normal" and "Hard", where "Normal" is the old "Casual" and "Hard" is the old "Tournament"</li>
	<li>Normal logic has been reworked and should now be a bit more consistent in terms of required techniques.</li>
	<li>Hard logic has had a major rework and now includes a few new required tricks, details below:
	<ul>
		<li>The cross-game portal in maridia is now better implemented in logic, so there's now a chance for suitless maridia through the portal using only Morph and Hi-Jump or Spring Ball.</li>
		<li>This also means that access to Wrecked Ship without Power Bombs is possible through the maridia portal and the "Forgotten Highway".</li>
		<li>The green brinstar missiles furthest in behind the Reserve tank is now in logic with only Morph and Screw Attack.</li>
		<li>Spring ball jumps have been added into logic in many new places, for example Red Tower, X-Ray room and more.</li>
		<li>Hi-Jump missile back is now in logic with only Morph (Make sure to not enter the Hi-Jump room in this case or you will softlock)</li>
		<li>Getting to the green door leading to Norfair reserve now assumes only the damage boost on a waver to get to it.</li>
		<li>Lower Norfair item restrictions are now slightly reduced due to better use of the cross-game portal.</li>
		<li>Snail clipping to the Missile and Super packs in Aqueduct is now in logic.</li>
		<li>Spring Ball is now in logic suitless, assuming Hi-Jump, Space Jump, Spring Ball and Grapple.</li>
		<li>All sand pit items are now in logic suitless with Hi-Jump, with the left sandpit items also requiring Space Jump or Spring Ball and the right sandpit PB's requiring Spring Ball.</li>
	</ul>
	</li>
	<li>Back of desert in ALTTP can now be in logic without gloves using the Lower Norfair cross-game portal and Mirror.</li>
	<li>Checkerboard cave now correctly checks for access through the cross-game portal as well.</li>
	<br/>
	<li>A recommended guide to the new V10 logic has been created by WildAnaconda69 and can be found here: <a href="https://www.twitch.tv/videos/286489494">https://www.twitch.tv/videos/286489494</a>.</li>
	<br/>
	<li><h4>Huge thanks to all contributors for helping out with fixes and patches for V10.</h4></li>
	</ul>	
	</p>
	<br/>
	<br/>
	<br/>
	

	<p>This project is based on V29 of the <a href="http://alttpr.com/">ALttP Randomizer</a> and the <a href="https://itemrando.supermetroid.run">Tournament SM Randomizer</a>, so being familiar with both of those will be helpful to be able to complete this.</p>
	<br />
	<p>Huge credits to the <strong><a href="http://alttpr.com/">ALttP Randomizer</a></strong> team for much of the tools used for the randomization and for the ALttP randomization patches and logic.</p>
</div>
@overwrite
