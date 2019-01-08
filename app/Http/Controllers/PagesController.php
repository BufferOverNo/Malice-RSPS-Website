<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to OutLawz-RS!',
            'features'  => [
                '5 Game Modes',
                'Vorkath',
                'Inferno',
                '40+100% working Bosses',
                'Weekly Tasks',
                '3 New Minigames',
                'Custom Raids',
                'Over 100 + Pets Ingame',
                'Blood Money Exchange System',
                'Equal Opportunity Donation\'s',
                'Hourly Pking - Minigame Events',
                'Group Ironman',
                'Custom quests',
                'Presets for quick pking',
                'Prestige System',
                'Amazing Mystery Boxes',
                'Skill Guides',
                '1b Exp Master Capes All With Unique Benefits',
                'Exp Tracking System',
                'Kill Tracking System',
                'Drop Tracking System',
                'Flawless GamePlay',
                'Daily Updates',
                'Active Owner-Dev',
                'Enough Content to Keep you Busy for Months',
                'Active Staff'
            ]
        ];

        return view('pages.index')->with('data', $data);
    }

    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function forum()
    {
        return redirect('https://outlawzrs.com/forums');
    }

    public function play()
    {
        $data = [
            'title'     => 'Download the OutLawz Launcher',
            'downloads' => [
                'eoc' => '',
                'pvp' => '',
                'launcher' => 'https://outlawzrs.com/game/OutLawzPk.jar'
            ]
        ];
        return view('pages.play')->with($data);
    }
}
