<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container50Bmtiv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container50Bmtiv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container50Bmtiv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container50Bmtiv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container50Bmtiv\App_KernelDevDebugContainer([
    'container.build_hash' => '50Bmtiv',
    'container.build_id' => '9a9beb2b',
    'container.build_time' => 1659385318,
], __DIR__.\DIRECTORY_SEPARATOR.'Container50Bmtiv');
