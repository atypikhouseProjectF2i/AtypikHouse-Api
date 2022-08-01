<?php

namespace ContainerLY9I7Kb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_LexikJwtAuthentication_CheckConfigCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lexik_jwt_authentication.check_config_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.lexik_jwt_authentication.check_config_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lexik:jwt:check-config', [], 'Checks that the bundle is properly configured.', false, function () use ($container): \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand {
            return ($container->privates['lexik_jwt_authentication.check_config_command'] ?? $container->load('getLexikJwtAuthentication_CheckConfigCommandService'));
        });
    }
}
