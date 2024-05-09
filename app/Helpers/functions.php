<?php

function domain_route($name, $parameters = [], $absolute = false,): string
{
//    if (str_contains(request()->host(), 'panel')) {
//        return route('panel-domain.' . $name, $parameters, $absolute);
//    }
    if (str_contains(request()->host(), 'menuma')) {
        return route('main-domain.business.' . $name, $parameters, $absolute);
    }
    if (isset($parameters['slug'])) {
        unset($parameters['slug']);
    }
    return route('business-domain.' . $name, $parameters, $absolute);
}

function is_main_domain(): bool
{
    return request()->host() === config('app.domains.main');
}
