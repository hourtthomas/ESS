<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEhmM65g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEhmM65g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEhmM65g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEhmM65g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEhmM65g\App_KernelDevDebugContainer([
    'container.build_hash' => 'EhmM65g',
    'container.build_id' => '19c9e15f',
    'container.build_time' => 1600273414,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEhmM65g');
