<?php

namespace ContainerZzRPI4h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_Extractor_ChainExtractorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.extractor.chain_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'AuthorizationHeaderTokenExtractor.php';

        return $container->privates['lexik_jwt_authentication.extractor.chain_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([0 => ($container->privates['lexik_jwt_authentication.extractor.authorization_header_extractor'] ?? ($container->privates['lexik_jwt_authentication.extractor.authorization_header_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization')))]);
    }
}
