<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XFran\GTrends\GTrends;


class TrendsController extends Controller
{
    public function index()
    {
        $options = [
            'hl' => 'id',
            'tz' => 0,
            'geo' => 'ID',
            'time' => 'all',
            'category' => 0,
        ];
        $gt = new GTrends($options);
        $dailySearchTrends = $gt->getDailySearchTrends();
        return response()->json($dailySearchTrends);
    }
}
