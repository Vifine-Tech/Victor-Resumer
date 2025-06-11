<?php

namespace VictorKipkoech\Portfolio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use VictorKipkoech\Portfolio\Services\PortfolioService;

class PortfolioController extends Controller
{
    protected $portfolioService;

    public function __construct(PortfolioService $portfolioService)
    {
        $this->portfolioService = $portfolioService;
    }

    public function index()
    {
        $data = [
            'profile' => $this->portfolioService->getProfile(),
            'skills' => $this->portfolioService->getSkills(),
            'experience' => $this->portfolioService->getExperience(),
            'projects' => $this->portfolioService->getProjects(),
            'services' => $this->portfolioService->getServices(),
            'certifications' => $this->portfolioService->getCertifications(),
        ];

        return view('portfolio::home', $data);
    }

    public function downloadCV()
    {
        $filePath = storage_path('app/public/victor-kipkoech-cv.pdf');
        
        if (!file_exists($filePath)) {
            abort(404, 'CV not found');
        }

        return response()->download($filePath, 'Victor-Kipkoech-DevOps-Engineer-CV.pdf');
    }
}