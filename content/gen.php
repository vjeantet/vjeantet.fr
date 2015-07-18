<?php

function slugify($text)
{ 
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

$map = array(
	"Security and Risk Management" => array(
		"Confidentiality, integrity, and availability concepts" => array(),
		"Security governance principles" => array(
			"Alignment of security function to strategy, goals, mission, and objectives (e.g., business case, budget and resources)",
			"Organizational processes (e.g., acquisitions, divestitures, governance committees)",
			"Security roles and responsibilities",
			"Control frameworks",
			"Due care",
			"Due diligence",
			),
		"Compliance"=> array(
			"Legislative and regulatory compliance",
			"Privacy requirements compliance",
			),
		"Legal and regulatory issues" => array(
			"Computer crimes",
			"Licensing and intellectual property (e.g., copyright, trademark, digital-rights management)",
			"Import/export controls",
			"Trans-border data flow",
			"Privacy",
			"Data breaches",
			),
		"Professional ethic" => array(
			"Exercise (ISC)2 Code of Professional Ethics",
			"Support organization’s code of ethics",
			),
		"Security policies, standards, procedures and guidelines" => array(),
		"business continuity requirements" => array(
			"Develop and document project scope and plan",
			"Conduct business impact analysis",
			),
		"Personnel security policies" => array(
			"Employment candidate screening (e.g., reference checks, education verification)",
			"Employment agreements and policies",
			"Employment termination processes",
			"Vendor, consultant, and contractor controls",
			"Compliance",
			"Privacy",
			),
		"Risk management concepts" => array(
			"Identify threats and vulnerabilities",
			"Risk assessment/analysis (qualitative, quantitative, hybrid)",
			"Risk assignment/acceptance (e.g., system authorization)",
			"Countermeasure selection",
			"Implementation",
			"Types of controls (preventive, detective, corrective, etc.)",
			"Control assessment",
			"Monitoring and measurement",
			"Asset valuation",
			"Reporting",
			"Continuous improvement",
			"Risk frameworks",
			),
		"Threat modeling" => array(
			"Identifying threats (e.g., adversaries, contractors, employees, trusted partners)",
			"Determining and diagramming potential attacks (e.g., social engineering, spoofing)",
			"Performing reduction analysis",
			"Technologies and processes to remediate threats (e.g., software architecture and operations)",
			),
		"Acquisition strategy and practice" => array(
			"Hardware, software, and services",
			"Third-party assessment and monitoring (e.g., on-site assessment, document exchange and review, process/policy review)",
			"Minimum security requirements",
			"Service-level requirements",
			),
		"Security education, training, and awareness" => array(
			"Appropriate levels of awareness, training, and education required within organization",
			"Periodic reviews for content relevancy",
			),
	),
	'Asset Security' => array(
		'Information and asset classification' => array(),
		'Ownership (e.g. data owners, system owners)' => array(),
		'Protect privacy' => array(),
		'Appropriate retention' => array(),
		'Data security controls' => array(),
		'Handling requirements (e.g. markings, labels, storage)' => array(),
		),
	'Security Engineering' => array(
		"Engineering processes using secure design principles"=> array(),
		"Security models fundamental concepts"=> array(),
		"Security evaluation models"=> array(),
		"Security capabilities of information systems"=> array(),
		"Security architectures, designs, and solution elements vulnerabilities"=> array(),
		"Web-based systems vulnerabilities"=> array(),
		"Mobile systems vulnerabilities"=> array(),
		"Embedded devices and cyber-physical systems vulnerabilities"=> array(),
		"Cryptography"=> array(),
		"Site and facility design secure principles"=> array(),
		"Physical security"=> array(),
		),
	'Communication and Network Security' => array(
		"Secure network architecture design (e.g. IP & non-IP protocols, segmentation)"=> array(),
		"Secure network components"=> array(),
		"Secure communication channels"=> array(),
		"Network attacks"=> array(),
		),
	'Identity and Access Management' => array(
		"Physical and logical assets control"=> array(),
		"Identification and authentication of people and devices"=> array(),
		"Identity as a service (e.g. cloud identity)"=> array(),
		"Third-party identity services (e.g. on-premise)"=> array(),
		"Access control attacks"=> array(),
		"Identity and access provisioning lifecycle (e.g. provisioning review)"=> array(),
		),
	'Security Assessment and Testing ' => array(
		'Assessment and test strategies' => array(),
		'Security process data (e.g. management and operational controls)' => array(),
		'Security control testing' => array(),
		'Test outputs (e.g. automated, manual)' => array(),
		'Security architectures vulnerabilities' => array(),
		),
	'Security Operations' => array(
		'Investigations support and requirements' => array(),
		'Logging and monitoring activities' => array(),
		'Provisioning of resources' => array(),
		'Foundational security operations concepts' => array(),
		'Resource protection techniques' => array(),
		'Incident management' => array(),
		'Preventative measures' => array(),
		'Patch and vulnerability management' => array(),
		'Change management processes' => array(),
		'Recovery strategies' => array(),
		'Disaster recovery processes and plans' => array(),
		'Business continuity planning and exercises' => array(),
		'Physical security' => array(),
		'Personnel safety concerns' => array(),
		),
	'Software Development Security' => array(
		'Security in the software development lifecycle' => array(),
		'Development environment security controls' => array(),
		'Software security effectiveness' => array(),
		'Acquired software security impact' => array(),
		),
	);

$lastsujet = '' ;
$i = 0;
foreach ($map as $sujet => $pages) {
	$i++;
	$sujet_slug = slugify($sujet) ;
	mkdir('security/'.$sujet_slug);
	$content = md($sujet_slug, $sujet, "securite",$i) ;
	$filename = 'security/'.$sujet_slug.'.md' ;
	file_put_contents($filename, $content) ;
	$j = 0;
	foreach ($pages as $name => $pages2) {
		$j++;
		$page_slug = slugify($name) ;		
		$content = md($page_slug, $name, "securite_".$sujet_slug,$j) ;
		$filename = 'security/'.$sujet_slug.'/'.$page_slug.'.md'; 
		file_put_contents($filename, $content) ;
		mkdir('security/'.$sujet_slug.'/'.$page_slug);
			$k = 0 ;
			foreach ($pages2 as $o => $name2) {
				$k++;
				$page2_slug = slugify($name2) ;		
				$content = md($page2_slug, $name2, "securite_".$sujet_slug."_".$page_slug,$k) ;
				$filename = 'security/'.$sujet_slug.'/'.$page_slug.'/'.$page2_slug.'.md'; 
				file_put_contents($filename, $content) ;
			}
	}
}


function md($slug,$title,$parent,$weight){
	$date = date("c") ;
	$identifier = $parent.'_'.$slug ;
	$weight = $weight * 100 ;
	$content = <<<EOT
+++
date = "$date"
draft = false
title = "$title"
type = "page"

[menu.main]
name="$title"
identifier="$identifier"
parent="$parent"
weight = $weight
+++
EOT;
    return $content ;

}
// var_dump($map) ;


