<?php
//realmstatus.php
//WoW Realm Status Php Script, for use in Geektool/Nerdtool
//created by kyletxag
//Download at http://pixelsoak.com

//Instructions:
//Remove the "//" in front of the servers you wish to monitor.  You can remove as many as you like or just one, it doesn't matter.

$show_battlegroup = true;
$show_realmtype = true;
$show_population = true;

$realmsarray = Array(
//	"aegwynn", 
//	"aerie-peak", 
//	"agamaggan", 
//	"aggramar", 
//	"akama", 
//	"alexstrasza", 
//	"alleria", 
//	"altar-of-storms", 
//	"alterac-mountains", 
//	"amanthul", 
//	"andorhal", 
//	"anetheron", 
//	"antonidas", 
//	"anubarak", 
//	"anvilmar", 
//	"arathor", 
//	"archimonde", 
//	"area-52", 
//	"argent-dawn", 
//	"arthas", 
//	"arygos", 
//	"auchindoun", 
//	"azgalor", 
//	"azjolnerub", 
//	"azshara", 
//	"azuremyst", 
//	"baelgun", 
//	"balnazzar", 
//	"barthilas", 
//	"black-dragonflight", 
//	"blackhand", 
//	"blackrock", 
//	"blackwater-raiders", 
//	"blackwing-lair", 
//	"blades-edge", 
//	"bladefist", 
//	"bleeding-hollow", 
//	"blood-furnace", 
//	"bloodhoof", 
//	"bloodscalp", 
//	"bonechewer", 
//	"borean-tundra", 
//	"boulderfist", 
//	"bronzebeard", 
//	"burning-blade", 
//	"burning-legion", 
//	"caelestrasz", 
//	"cairne", 
//	"cenarion-circle", 
//	"cenarius", 
//	"chogall", 
//	"chromaggus", 
//	"coilfang", 
//	"crushridge", 
//	"daggerspine", 
//	"dalaran", 
//	"dalvengyr", 
//	"dark-iron", 
//	"darkspear", 
//	"darrowmere", 
//	"dathremar", 
//	"dawnbringer", 
//	"deathwing", 
//	"demon-soul", 
//	"dentarg", 
//	"destromath", 
//	"dethecus", 
//	"detheroc", 
//	"doomhammer", 
//	"draenor", 
//	"dragonblight", 
//	"dragonmaw", 
	"draktharon", 
//	"drakthul", 
//	"draka", 
//	"drakkari", 
//	"dreadmaul", 
//	"drenden", 
//	"dunemaul", 
//	"durotan", 
//	"duskwood", 
//	"earthen-ring", 
//	"echo-isles", 
//	"eitrigg", 
//	"eldrethalas", 
//	"elune", 
//	"emerald-dream", 
//	"eonar", 
//	"eredar", 
//	"executus", 
//	"exodar", 
//	"farstriders", 
//	"feathermoon", 
//	"fenris", 
//	"firetree", 
//	"fizzcrank", 
//	"frostmane", 
//	"frostmourne", 
//	"frostwolf", 
//	"galakrond", 
//	"garithos", 
//	"garona", 
//	"garrosh", 
//	"ghostlands", 
//	"gilneas", 
//	"gnomeregan", 
//	"gorefiend", 
//	"gorgonnash", 
//	"greymane", 
//	"grizzly-hills", 
//	"guldan", 
//	"gundrak", 
//	"gurubashi", 
//	"hakkar", 
//	"haomarush", 
//	"hellscream//	"
//	"hydraxis", 
//	"hyjal", 
//	"icecrown", 
//	"illidan", 
//	"jaedenar", 
//	"jubeithos", 
//	"kaelthas", 
//	"kalecgos", 
//	"kargath", 
//	"kelthuzad", 
//	"khadgar", 
//	"khaz-modan", 
//	"khazgoroth", 
//	"kiljaeden", 
//	"kilrogg", 
//	"kirin-tor", 
//	"korgath", 
//	"korialstrasz", 
//	"kul-tiras", 
//	"laughing-skull", 
//	"lethon", 
//	"lightbringer", 
//	"lightnings-blade", 
//	"lightninghoof", 
//	"llane", 
//	"lothar", 
//	"madoran", 
//	"maelstrom", 
//	"magtheridon", 
//	"maiev", 
//	"malganis", 
//	"malfurion", 
//	"malorne", 
//	"malygos", 
//	"mannoroth", 
//	"medivh", 
//	"misha", 
//	"moknathal", 
//	"moon-guard", 
//	"moonrunner", 
//	"mugthol", 
//	"muradin", 
//	"nagrand", 
//	"nathrezim", 
//	"nazgrel", 
//	"nazjatar", 
//	"nerzhul", 
//	"nesingwary", 
//	"nordrassil", 
//	"norgannon", 
//	"onyxia", 
//	"perenolde", 
//	"proudmoore", 
//	"quelthalas", 
//	"queldorei", 
//	"ragnaros", 
//	"ravencrest", 
//	"ravenholdt", 
//	"rexxar", 
//	"rivendare", 
//	"runetotem", 
//	"sargeras", 
//	"saurfang", 
//	"scarlet-crusade", 
//	"scilla", 
//	"senjin", 
//	"sentinels", 
//	"shadow-council", 
//	"shadowmoon", 
//	"shadowsong", 
//	"shandris", 
//	"shattered-halls", 
//	"shattered-hand", 
//	"shuhalo", 
//	"silver-hand", 
//	"silvermoon", 
//	"sisters-of-elune", 
//	"skullcrusher", 
//	"skywall", 
//	"smolderthorn", 
//	"spinebreaker", 
//	"spirestone", 
//	"staghelm", 
//	"steamwheedle-cartel", 
//	"stonemaul", 
//	"stormrage", 
//	"stormreaver", 
//	"stormscale", 
//	"suramar", 
//	"tanaris", 
//	"terenas", 
//	"terokkar", 
//	"thaurissan", 
//	"the-forgotten-coast", 
//	"the-scryers", 
//	"the-underbog", 
//	"the-venture-co", 
//	"thorium-brotherhood", 
//	"thrall", 
//	"thunderhorn", 
//	"thunderlord", 
//	"tichondrius", 
//	"tortheldrin", 
//	"trollbane", 
//	"turalyon", 
//	"twisting-nether", 
//	"uldaman", 
//	"uldum", 
//	"undermine", 
//	"ursin", 
//	"uther", 
//	"vashj", 
//	"veknilash", 
//	"velen", 
//	"warsong", 
//	"whisperwind", 
//	"wildhammer", 
//	"windrunner", 
//	"winterhoof", 
//	"wyrmrest-accord", 
//	"ysera", 
//	"ysondre", 
//	"zangarmarsh", 
//	"zuljin", 
//	"zuluhed"
	);

$realmslist = implode(",", $realmsarray);
$url = "http://us.battle.net/api/wow/realm/status?realms=".$realmslist;

//create a new cURL resource
$ch = curl_init();

//set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the browser
$json = curl_exec($ch);

//close cURL resource, and free up system resources
curl_close($ch);





//decode
$array = json_decode($json, true);
//grab realms from the decoded array
$realms = $array['realms'];

//step through realms
foreach ($realms as $realm):

	//realm status, empty returns offline
	if ($realm['status'] == true):
		$status = "Online";
	else:
		$status = "Offline";
	endif;
	
	//if queue, tell us
	if ($realm['queue'] == true):
		$queue = "(Queued)";
	endif;
	
	if ($show_battlegroup == true):
		$battlegroup = $realm['battlegroup'];
	else:
		$battlegroup = "";
	endif;
	
	if ($show_realmtype == true):
		$type = " [".strtoupper($realm['type'])."]";
	else:
		$type = "";
	endif;

	print $realm['name']." - ".$battlegroup.$type." \n";
	print $status." ".$queued." \n";
	if ($show_population == true):
		print "Pop: ".ucfirst($realm['population'])." \n";
	endif;
	print " \n";


endforeach;

?>