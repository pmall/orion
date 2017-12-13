<?php declare(strict_types=1);

namespace Orion;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class OrionProviderInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'orion-provider' === $packageType;
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $name = $package->getPrettyName();

        [$vendor, $directory] = explode('/', $name);

        return 'providers/' . $directory;
    }
}
