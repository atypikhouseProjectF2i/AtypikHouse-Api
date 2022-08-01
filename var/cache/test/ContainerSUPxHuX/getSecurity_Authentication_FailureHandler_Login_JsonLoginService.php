<?php

namespace ContainerSUPxHuX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_FailureHandler_Login_JsonLoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.failure_handler.login.json_login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'CustomAuthenticationFailureHandler.php';

        return $container->privates['security.authentication.failure_handler.login.json_login'] = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(($container->privates['lexik_jwt_authentication.handler.authentication_failure'] ?? $container->load('getLexikJwtAuthentication_Handler_AuthenticationFailureService')), []);
    }
}
