<?php


$countries = array(39 =>  "San Marino", 
33 =>  "Αλβανία", 
34 =>  "Ανδόρα", 
8 =>  "Αυστρία", 
2 =>  "Βέλγιο", 
35 =>  "Βοσνία-Ερζεγοβίνη", 
17 =>  "Βουλγαρία", 
4 =>  "Γαλλία", 
1 =>  "Γερμανία", 
25 =>  "Δανία", 
12 =>  "Ελβετία", 
27 =>  "Ελλάδα", 
36 =>  "Εσθονία", 
5 =>  "Ηνωμένο Βασίλειο", 
20 =>  "Ιρλανδία", 
48 =>  "Ισλανδία", 
13 =>  "Ισπανία", 
6 =>  "Ιταλία", 
47 =>  "Κοσσυφοπέδιο", 
23 =>  "Κροατία", 
28 =>  "Λετονία", 
43 =>  "Λευκορωσία", 
30 =>  "Λιθουανία", 
29 =>  "Λιχτενστάιν", 
21 =>  "Λουξεμβούργο", 
38 =>  "Μάλτα", 
46 =>  "Μαυροβούνιο", 
45 =>  "Μολδαβία", 
37 =>  "Μονακό", 
7 =>  "Νορβηγία", 
22 =>  "Ολλανδία", 
18 =>  "Ουγγαρία", 
41 =>  "Ουκρανία", 
16 =>  "Πολωνία", 
10 =>  "Πορτογαλία", 
31 =>  "Ρουμανία", 
32 =>  "Ρωσία", 
24 =>  "Σερβία", 
44 =>  "Σκόπια", 
19 =>  "Σλοβακία", 
26 =>  "Σλοβενία", 
11 =>  "Σουηδία", 
40 =>  "Τουρκία", 
15 =>  "Τσεχία", 
3 =>  "Φινλανδία");


$PM_URL = "http://www.pamemazi.gr/lifts/getCities/";


/* gets the data from a URL */
function get_data($url)
{
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}


foreach ($countries as $key => $cc) {

	echo "(".$key.",\"".$countries[$key]."\");<br>";

}



foreach ($countries as $key => $cc) {

    //echo $key."-".$countries[$key]."<br>";
	//if($key != 7) continue;

	$url = $PM_URL.$key;
	
	$data = get_data($url);
	
	$cities = json_decode($data, true);

	//var_dump($cities);


	//echo "<br><br>";
	//echo $countries[$key];
	//echo "<br>";
	foreach ($cities as $key2 => $cc2) {
		echo "(".$key.",\"".$key2."\");<br>";
	}


	//break;
	
}



?>