<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /** @var Campaign campaign */
    private $campaign;

    /** @var Request request */
    private $request;

    public function __construct(Campaign $campaign, Request $request)
    {
        $this->campaign = $campaign;
        $this->request = $request;
    }

    public function index()
    {
        $perPageLimit = $this->request->input('per_page', 5);

        return response()->json($this->campaign->paginate($perPageLimit));
    }

    public function fetchPresets(int $campaignId)
    {
        $perPageLimit = $this->request->input('per_page', 5);

        return response()->json($this->campaign->find($campaignId)->presets()->paginate($perPageLimit));
    }
}
