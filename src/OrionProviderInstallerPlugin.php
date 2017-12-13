<?php declare(strict_types=1);

namespace Orion;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class OrionProviderInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OrionProviderInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
    }
}
