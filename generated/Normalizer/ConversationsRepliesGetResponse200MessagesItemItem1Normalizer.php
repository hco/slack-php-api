<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsRepliesGetResponse200MessagesItemItem1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem1';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem1();
        $data = clone $data;
        if (property_exists($data, 'is_starred')) {
            $object->setIsStarred($data->{'is_starred'});
            unset($data->{'is_starred'});
        }
        if (property_exists($data, 'parent_user_id')) {
            $object->setParentUserId($data->{'parent_user_id'});
            unset($data->{'parent_user_id'});
        }
        if (property_exists($data, 'source_team')) {
            $object->setSourceTeam($data->{'source_team'});
            unset($data->{'source_team'});
        }
        if (property_exists($data, 'team')) {
            $object->setTeam($data->{'team'});
            unset($data->{'team'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
            unset($data->{'text'});
        }
        if (property_exists($data, 'thread_ts')) {
            $value = $data->{'thread_ts'};
            if (is_string($data->{'thread_ts'})) {
                $value = $data->{'thread_ts'};
            }
            $object->setThreadTs($value);
            unset($data->{'thread_ts'});
        }
        if (property_exists($data, 'ts')) {
            $value_1 = $data->{'ts'};
            if (is_string($data->{'ts'})) {
                $value_1 = $data->{'ts'};
            }
            $object->setTs($value_1);
            unset($data->{'ts'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        if (property_exists($data, 'user_profile')) {
            $object->setUserProfile($this->denormalizer->denormalize($data->{'user_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
            unset($data->{'user_profile'});
        }
        if (property_exists($data, 'user_team')) {
            $object->setUserTeam($data->{'user_team'});
            unset($data->{'user_team'});
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        }
        if (null !== $object->getParentUserId()) {
            $data->{'parent_user_id'} = $object->getParentUserId();
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getThreadTs()) {
            $value = $object->getThreadTs();
            if (is_string($object->getThreadTs())) {
                $value = $object->getThreadTs();
            }
            $data->{'thread_ts'} = $value;
        }
        if (null !== $object->getTs()) {
            $value_1 = $object->getTs();
            if (is_string($object->getTs())) {
                $value_1 = $object->getTs();
            }
            $data->{'ts'} = $value_1;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data->{'user_profile'} = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_2;
            }
        }

        return $data;
    }
}
