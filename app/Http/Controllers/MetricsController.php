<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prometheus\CollectorRegistry;
use Prometheus\RenderTextFormat;
use Prometheus\Storage\InMemory;

class MetricsController extends Controller
{
    public function metrics(Request $request)
    {
        $registry = new CollectorRegistry(new InMemory());

        // Register and increment a test counter
        if (!$registry->getMetricFamilySamples()) {
            $counter = $registry->registerCounter('app', 'test_requests_total', 'Test request counter', ['endpoint']);
            $counter->inc(['metrics']);
        }

        $renderer = new RenderTextFormat();
        $metrics = $registry->getMetricFamilySamples();

        return response($renderer->render($metrics))
            ->header('Content-Type', RenderTextFormat::MIME_TYPE);
    }
}
