<?php

$logo = $argv[1];


if (!is_dir("logos"))
{
	mkdir("logos");
}

if (!is_dir("logos/ios"))
{
	mkdir("logos/ios");
}

if (!is_dir("logos/android"))
{
	mkdir("logos/android");
}

$ios = [
	20,
	40,
	60,
	29,
	58,
	87,
	80,
	120,
	57,
	114,
	180,
	50,
	100,
	72,
	144,
	76,
	152,
	167,
	1024
];

for ($i = 0; $i < count($ios); $i++)
{
	$j = ("sips --resampleWidth ".$ios[$i]." ".$logo." --out ./logos/ios/".$ios[$i].".png");
    exec($j);
}


$android_icons = [
	"app_launcher_mdpi" => 48,
	"app_launcher_hdpi" => 72,
	"app_launcher_xmdpi" => 96,
	"app_launcher_xxhdpi" => 144,
	"app_launcher_xxxhdpi" => 192,

	"action_bar_mdpi" => 32,
	"action_bar_hdpi" => 48,
	"action_bar_xmdpi" => 64,
	"action_bar_xxhdpi" => 96,
	"action_bar_xxxhdpi" => 128,

	"small_contextual_mdpi" => 16,
	"small_contextual_hdpi" => 24,
	"small_contextual_xmdpi" => 32,
	"small_contextual_xxhdpi" => 48,
	"small_contextual_xxxhdpi" => 64,

	"notification_mdpi" => 24,
	"notification_hdpi" => 36,
	"notification_xmdpi" => 48,
	"notification_xxhdpi" => 72,
	"notification_xxhdpi" => 96,
];

foreach ($android_icons as $key => $value)
{
	if (!is_dir("logos/android/" . $key))
	{
		mkdir("logos/android/" . $key);
	}
	exec("sips --resampleWidth ".$value." ".$logo." --out ./logos/android/".$key."/".$value.".png");
}
