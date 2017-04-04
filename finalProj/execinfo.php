<?php
	
sleep(1); 
	

$infoId = empty($_GET['infoId']) ? '1' : $_GET['infoId'];

switch($infoId) {
	case '1':
		$info = "<b>2016-2017</b><br>President - Chris Trunell<br>
            Vice President - Walta Abraham<br>
            Treasurer - Keisha Avery<br>
            Secretary - Briana Wilson<br>
            Parliamentarian - Zandria Johnson<br>
            Public Relations - Aubrey Graham<br>
            Mentorship - Sage Williams<br>
            Academic Excellence - Dekonti Daives<br>
            Programs Chair - Ryan Cobb<br>
            Membership - Nosa Eke<br>
            PCI - Holly Robinson<br>
            Torch - Jessika Williams<br>";
		break;
	case '2':
		$info =  "<b>2015-2016</b><br>President - Dekonti Daives<br>Vice President - Keisha Avery<br>Treasurer - Jeanette Green, Morgan Brown<br>
        Secretary - Trevor Woodland<br>
        Parliamentarian - Zandria Johnson<br>
        Public Relations - Anthony Greer, Briana Wilson<br>
        Fundraising - Rueben Terry<br>
        Mentorship - Marlon Taylor<br>
        Academic Excellence - Dekonti Daives<br>
        Programs Chair - Walta Abraham<br>
        Membership - Xavier Williams<br>
        PCI - Brittany Stemmons<br>
        Torch - Kevin Teague<br>";
		break;
	case '3':
		$info = "<b>2014-2015</b><br>President - Raphael Yohannes<br>
                Vice President - Angelique Taylor<br>
                Secretary - Michael<br>
                Fundraising - Lorenzo Boiyce<br>
                Programs - Aaron Duncon<br>
                Academic Excellence - Brooke Haile-Mariam<br>
                PCI - Dekonti Daives<br>
                Parliamentarian - Zandria Johnson<br>";
		break;
	default: 
		$info = 'It aint working fam'; 
		break; 
}

print $info;
?>