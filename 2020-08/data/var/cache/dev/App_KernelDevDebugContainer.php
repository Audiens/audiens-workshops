<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXbfAoXj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXbfAoXj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXbfAoXj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXbfAoXj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXbfAoXj\App_KernelDevDebugContainer([
    'container.build_hash' => 'XbfAoXj',
    'container.build_id' => 'abb0847f',
    'container.build_time' => 1596207232,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXbfAoXj');
