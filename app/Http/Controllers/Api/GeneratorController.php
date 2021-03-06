<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller as BaseController;
use App\Models\SavageGenerator;
use App\Models\Statistic;

class GeneratorController extends BaseController
{
    public function generate()
    {
        $generator = new SavageGenerator();
        $names = $generator->generate();
        $names = $generator->generate();
        Statistic::updateRarity($names['rarity']);
        return response()->json($names, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function generateTeam()
    {
        $generator = new SavageGenerator();
        $names = $generator->generateTeam();
        $rarityCount = Statistic::collectScavRarity($names);
        Statistic::updateMultipleRarity($rarityCount);
        return response()->json($names, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function statistics()
    {
        $stat = Statistic::all()->first();
        return response()->json([
            'legendary' => $stat->legendary,
            'epic' => $stat->epic,
            'rare' => $stat->rare,
            'uncommon' => $stat->uncommon,
            'common' => $stat->common,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
