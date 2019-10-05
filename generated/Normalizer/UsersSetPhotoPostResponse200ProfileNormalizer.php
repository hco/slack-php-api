<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersSetPhotoPostResponse200ProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200Profile';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\UsersSetPhotoPostResponse200Profile';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersSetPhotoPostResponse200Profile();
        if (property_exists($data, 'avatar_hash') && $data->{'avatar_hash'} !== null) {
            $object->setAvatarHash($data->{'avatar_hash'});
        }
        if (property_exists($data, 'image_1024') && $data->{'image_1024'} !== null) {
            $object->setImage1024($data->{'image_1024'});
        }
        if (property_exists($data, 'image_192') && $data->{'image_192'} !== null) {
            $object->setImage192($data->{'image_192'});
        }
        if (property_exists($data, 'image_24') && $data->{'image_24'} !== null) {
            $object->setImage24($data->{'image_24'});
        }
        if (property_exists($data, 'image_32') && $data->{'image_32'} !== null) {
            $object->setImage32($data->{'image_32'});
        }
        if (property_exists($data, 'image_48') && $data->{'image_48'} !== null) {
            $object->setImage48($data->{'image_48'});
        }
        if (property_exists($data, 'image_512') && $data->{'image_512'} !== null) {
            $object->setImage512($data->{'image_512'});
        }
        if (property_exists($data, 'image_72') && $data->{'image_72'} !== null) {
            $object->setImage72($data->{'image_72'});
        }
        if (property_exists($data, 'image_original') && $data->{'image_original'} !== null) {
            $object->setImageOriginal($data->{'image_original'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAvatarHash()) {
            $data->{'avatar_hash'} = $object->getAvatarHash();
        }
        if (null !== $object->getImage1024()) {
            $data->{'image_1024'} = $object->getImage1024();
        }
        if (null !== $object->getImage192()) {
            $data->{'image_192'} = $object->getImage192();
        }
        if (null !== $object->getImage24()) {
            $data->{'image_24'} = $object->getImage24();
        }
        if (null !== $object->getImage32()) {
            $data->{'image_32'} = $object->getImage32();
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        }
        if (null !== $object->getImage512()) {
            $data->{'image_512'} = $object->getImage512();
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        }
        if (null !== $object->getImageOriginal()) {
            $data->{'image_original'} = $object->getImageOriginal();
        }

        return $data;
    }
}