<?php 

    $c = $app->getContainer();
    $c['phpErrorHandler'] = function ($c) {
        return function ($request, $response, $error) use ($c) {
            return $c['response']
                ->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        };
    };
    $c['notAllowedHandler'] = function ($c) {
        return function ($request, $response, $methods) use ($c) {
            return $c['response']
                ->withStatus(405)
                ->withHeader('Allow', implode(', ', $methods))
                ->withHeader('Content-type', 'text/html')
                ->write('Method must be one of: ' . implode(', ', $methods));
        };
    };
    $c['notFoundHandler'] = function ($c) {
        return function ($request, $response) use ($c) {
            return $c['response']
                ->withStatus(404)
                ->withHeader('Content-Type', 'text/html')
                ->write('Page not found');
        };
    };
