<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTsfVD8c\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTsfVD8c/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTsfVD8c.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTsfVD8c\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTsfVD8c\App_KernelDevDebugContainer([
    'container.build_hash' => 'TsfVD8c',
    'container.build_id' => '31973dbc',
    'container.build_time' => 1706595282,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTsfVD8c');
